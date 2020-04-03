
<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>District Real Estates Category Bootstrap Responsive website Template | Home :: W3layouts</title>
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
										<li class="nav-item ">
											<a class="nav-link" href="{{ route('home') }}">Home
												<span class="sr-only">(current)</span>
											</a>
										</li>
										<li class="nav-item mx-xl-4 mx-lg-3 my-lg-0 my-3">
											<a class="nav-link" href="/view">view</a>
										</li>
										<li class="nav-item mx-xl-4 mx-lg-3 my-lg-0 my-3">
											<a class="nav-link" href="/change_password">Change Password</a>
										</li>
									<li class="nav-item mx-xl-4 mx-lg-3 my-lg-0 my-3">
										<a class="nav-link" href="/addPG">Add </a>
									</li>
									<li class="nav-item">
										<a class="nav-link active" href="/my_submissions">My Submissions</a>
									</li>
								</ul>
							</div>
						</nav>
						<!-- //navigation -->
					</div>
				</div>
			</header>
			<!-- //header -->

			<!--<section class="pricing py-5" id="pricings">-->

				<div class="container py-xl-5 py-lg-3">

					<div class="text-center mb-lg-5 mb-4">
						<h3 class="tittle mb-2 text-white">Your Ads</h3>
						<p class="test-title-paara"></p>
					</div>
					<!--loop -->
				
				<div class="inner-sec">
					<div class="card-deck text-center row mt-5">
				@if(!empty($my_pg))
				@foreach($my_pg as $posts)
						<div class="price-info-grid col-lg-4" style="padding-bottom: 20px">
							<div class="price-inner">
								<div class="price-header"style="padding: 20px">
								
									<img src="{{asset('storage/pgimages/'.$posts->images)}}" class="img-fluid" alt="img" style="height:150px; width: 150px; padding-top:">
								</div>
								<div class="price-body"style="padding-top: 10px">
									<h6 class="pricing-title">
										{{$posts->title}}</h6>

										<a href="/edit-pg/{{$posts->id}}" class="btn btn-info" >
										Edit</a>
										<a href="/delete-pg/{{$posts->id}}" class="btn btn-info" >
										Delete</a>
								</div>
							</div>
						</div>
							
						<!--lop-->
				@endforeach
				@endif
					</div>
				</div>




						<!--</section>-->

					</div>
				</body>












