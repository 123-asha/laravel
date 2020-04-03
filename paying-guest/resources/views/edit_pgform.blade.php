<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>Real Estate Finder</title>
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8" />
	<meta name="keywords" content="District Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design"
	/>
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!--// Meta tag Keywords -->

	<!-- Custom-Files -->
	<link rel="stylesheet" href="/css/bootstrap.css">
	<!-- Bootstrap-Core-CSS -->
	<link rel="stylesheet" href="/css/style.css" type="text/css" media="all" />
	<!-- Style-CSS -->
	<link rel="stylesheet" href="/css/fontawesome-all.css">
	<!-- Font-Awesome-Icons-CSS -->
	<!-- //Custom-Files -->

	<!-- Web-Fonts -->
	<link href="//fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
	    rel="stylesheet">
	<!-- //Web-Fonts -->
</head>

<body>
	<!-- banner -->
	<div class="bannerbg-w3l">
		<!-- header -->
		<header>
			<div class="header_topw3layouts_bar">
				<div class="container">
					<!-- header-top -->
					<div class="row border-bottom py-lg-4 py-3">
						<div class="col-xl-7 col-lg-6 header_agileits_left">
							<ul>
								<li class="mr-3">
									<i class="fas fa-phone mr-2"></i> +(010) 221 918 811</li>
								<li>
									<i class="fas fa-envelope mr-2"></i>
									<a href="mailto:info@example.com">info@example.com</a>
								</li>
							</ul>
						</div>
						<div class="col-xl-5 col-lg-6 header_right text-center mt-lg-0 mt-2">
							<div class="row">
								<!-- social icons -->
								<div class="col-4 w3social-icons">
									<ul>
										<li>
											<a href="#" class="rounded-circle">
												<i class="fab fa-facebook-f"></i>
											</a>
										</li>
										<li class="px-2">
											<a href="#" class="rounded-circle">
												<i class="fab fa-google-plus-g"></i>
											</a>
										</li>
										<li>
											<a href="#" class="rounded-circle">
												<i class="fab fa-twitter"></i>
											</a>
										</li>
										<li class="pl-2">
											<a href="#" class="rounded-circle">
												<i class="fab fa-dribbble"></i>
											</a>
										</li>
									</ul>
								</div>
								<!-- //social icons -->
								<div class="col-4 header-loginw3ls text-lg-right text-center">
									<!--<a href="#" class="log" data-toggle="modal" data-target="#exampleModalCenter1">-->
									<a href="{{ route('login') }}"	<i class="fas fa-user mr-2"></i> Login</a>
								</div>
								<div class="col-4 header-loginw3ls">
									<!--<a href="#" class="log" data-toggle="modal" data-target="#exampleModalCenter2">-->
										<a href="{{ route('register') }}"
										<i class="fas fa-key mr-2"></i> Register</a>
								</div>
							</div>
						</div>
					</div>
					<!--// header-top -->

					<!-- navigation -->
					<nav class="navbar navbar-expand-lg navbar-light bg-light">
						<a class="navbar-brand" href="#">District
							<span>Real Property</span>
						</a>
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
						    aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon"></span>
						</button>

						<div class="collapse navbar-collapse" id="navbarSupportedContent">
							<ul class="navbar-nav ml-auto">
								<li class="nav-item active">
									<a class="nav-link" href="{{ route('home') }}">Home
										<span class="sr-only">(current)</span>
									</a>
								</li>
								<li class="nav-item mx-xl-4 mx-lg-3 my-lg-0 my-3">
									<a class="nav-link" href="about.html">About Us</a>
								</li>
								<li class="nav-item dropdown">
									<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
									    aria-expanded="false">
										Dropdown
									</a>
									<div class="dropdown-menu" aria-labelledby="navbarDropdown">
										<a class="dropdown-item scroll" href="#services">Services</a>
										<a class="dropdown-item scroll" href="#pricings">Pricings</a>
										<div class="dropdown-divider"></div>
										<a class="dropdown-item scroll" href="#clients">Clients</a>
										<a class="dropdown-item" href="about.html">Our Agents</a>
									</div>
								</li>
								<li class="nav-item mx-xl-4 mx-lg-3 my-lg-0 my-3">
									<a class="nav-link" href="/my_submissions">My Submissions </a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="contact.html">Contact Us</a>
								</li>
							</ul>
						</div>
					</nav>
					<!-- //navigation -->
				</div>
			</div>
		</header>
		<!-- //header -->
		<div class="container"><br><br>
  <h3 class=" text-white">Edit PG</h3><br><br>
  @if(!empty($post))
  <form method="POST" action="/edit-pg/{{$post->id}}" enctype="multipart/form-data">
@csrf
      <label for="title" class=" text-white">Title</label>
      <input type="text"  class="form-control" id="title" required  name="title" value="{{$post->title}}">

      <label for="details" class=" text-white">Details</label>
      <input type="text"  class="form-control" id="details" required  name="details" value="{{$post->details}}">

      <label for="question" class=" text-white">Choose Image</label><br>
       <input type="file" id="image" name="image" value=""><br><br>
   
    <button type="submit" class="btn btn-success">Submit</button>
    <button type="submit" class="btn btn-success" >close</button>
  </form> 
  @endif
</div>