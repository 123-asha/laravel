<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

use App\PG_post;
use App\User;
use App\Notifications;
use Auth;

class PostController extends Controller
{
  public function  viewPg()
  {

        $data['posts'] = PG_post::get(); //get all posts in posts table
    // additional constraints can be implemented using query builder

        return view('viewPGlist',$data);

      }
      public function  viewPg_details($pg_id)
      {

        $data['post'] = PG_post::where('id',$pg_id)->with('User')->first(); //get all posts in posts table
    // additional constraints can be implemented using query builder

        return view('viewDetails',$data);

      }


      public function showPGform()
      {

       return view('pgForm');
     }

     public function postPGform(Request $request){

       $title=$request->input('title');
       $details = $request->input('details');
       //dd($request->all());
//dd(base_path());
       if ($request->hasFile('image')) {
            // store file in image field in form  in storage/app/public/pgimages folder returns image path
        $file_name=$request->image->getClientOriginalName();
        
        $file= $request->image->storeAs('public/pgimages', $file_name);

     }
      else
      {
        $file_name = null;
      }


      $user_id = Auth::id();

      $credentials = [
        'user_id'=>$user_id,
        'title' => $title,
        'details' =>$details,
        'images'=>$file_name,

      ];

      if(PG_post::create($credentials))
      {
       $data['message'] = 'Your Pg added successfully';
     }
     else
     {
       $data['message'] = 'Insert Failed';
     }
     
     return view('pgForm', $data);
   }

   public function my_submissions()
   {
    $user_id = Auth::id();

    $data['my_pg']=PG_post::where('user_id',$user_id)->get();


    return view('mysubmissions', $data);

  }
  public function edit_pg($pg_id)
  {
      $data['post'] = PG_post::find($pg_id); //get post details
      
      return view('edit_pgform',$data);
    }

    public function post_edit_pg(Request $request, $pg_id)
    {

      $title = $request->input('title');
      $details = $request->input('details');
      
      if ($request->hasFile('image')) {
           
        $file_name=$request->image->getClientOriginalName();
        
        $file= $request->image->storeAs('public/pgimages', $file_name);

     }
      else
      {
        $file_name = null;
      }


      $post = PG_post::where('id', $pg_id)->update([
        'title' => $title,
         'details' => $details,
         'images'=>$file_name
       ]);

      $user_id = Auth::id();

    $data['my_pg']=PG_post::where('user_id',$user_id)->get();
 

    return view('mysubmissions', $data);
    }
    public function delete_pg($pg_id){

      if (PG_post::where('id',$pg_id)->delete()) 
      {
        $data['message'] = 'delete Succesfull';
      }
      else
      {
        $data['message'] = 'delete Failed';
      }
      return view('mysubmissions', $data);
    }
    public function search(Request $request){
    
       $search=$request->input('search');
       
       $data['search'] = PG_post::where('details', 'LIKE', "%{$search}%") ->get();

       return view('search', $data);
    }

    public function change_password(){

       return view('passwordForm');
    }
 public function changePassword(Request $request){
    
        $user_id = Auth::id();

       $password = Hash::make($request->input('password'));

      if(User::where('id', $user_id)->update(['password'=>$password]))
      {
        $data['message']="your password has been updated";
      } 
      else
      {
         $data['message']="your password has been updated";
      }
      

       return view('passwordForm',$data);
    }
    public function view_contact($pg_id){


      if(Auth::check()){

      //get contact info
        $details= PG_post::where('id', $pg_id)->with('User')->first();
        $contact_info =$details->User->phone_number;

      //notifications
        $credentials = [
          'user_id'=>Auth::id(),
          'seller_id' => $details->user_id,
          'notifications' =>"someone has viewed your pg"
        ];

        if(Notifications::create($credentials))
        {
          $data['message'] = 'success';
          $data['phone'] = $contact_info;
        }
        else
        {
          $data['message'] = 'Insert Failed';
        }
        return response()->json($data);
      }
      else {
        $data['message'] = 'Unauthorized user';
        return response()->json($data);
      }
    }
    public function notifications(){
      
      $data['notifications']=Notifications:: get();

       return view('notifications',$data);
    }
    public function clear_notifications(){

        if (Notifications::truncate()) 
      {
        $data['message'] = 'delete Succesfull';
      }
      else
      {
        $data['message'] = 'delete Failed';
      }
      return view('notifications', $data);
    }
    
  }
