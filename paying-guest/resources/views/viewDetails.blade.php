<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>District Real Estates Category Bootstrap Responsive website Template | About Us :: W3layouts</title>
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
	<!-- team deoslide -->
	<link rel="stylesheet" href="/css/jquery.desoslide.css">
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
	<div class="bannerbg-w3l bannerbg-w3l-inner">
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
									<a href="#" class="log" data-toggle="modal" data-target="#exampleModalCenter1">
										<i class="fas fa-user mr-2"></i> Login</a>
								</div>
								<div class="col-4 header-loginw3ls">
									<a href="#" class="log" data-toggle="modal" data-target="#exampleModalCenter2">
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
								<li class="nav-item">
									<a class="nav-link" href="/">Home
										<span class="sr-only">(current)</span>
									</a>
								</li>
								<li class="nav-item  active mx-xl-4 mx-lg-3 my-lg-0 my-3">
									<a class="nav-link" href="">Details</a>
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
										<a class="dropdown-item scroll" href="#agents">Our Agents</a>
									</div>
								</li>
								<li class="nav-item mx-xl-4 mx-lg-3 my-lg-0 my-3">
									<a class="nav-link" href="/my_submissions">My Submissions</a>
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
		<!-- banner-text -->
		<div class="banner-w3ltext about-w3bnr">
			<div class="container">
				<h1 class="text-white text-center">
					<!--<a href="">Home</a> / About Us</h1>-->
			</div>
		</div>
		<!-- //banner-text -->
	</div>
	<!-- login -->
	
	<!-- about -->
	<div class="features py-5">
		<div class="container py-xl-5 py-lg-3">
			<div class="text-center mb-lg-5 mb-4">
				<h3 class="tittle mb-2">Details</h3>
				<p>Some words about our property</p>
			</div>
			@if(!empty($post))
			<div class="row features-row">
				<div class="col-lg-5 features-right mt-3">
					<img src="{{asset('storage/pgimages/'.$post->images)}}" class="img-fluid" alt="img" style="height:400px; width: 500px">
				</div>
				<div class="col-lg-7 features-left mt-lg-0 mt-5">
					<div class="row features-grid">
						<div class="col-3 features-grid-left text-right">
							<i class="fab fa-blackberry"></i>
						</div>
					
						<div class="col-9 features-grid-right">
							<h4 class="mb-2">Title </h4>
							<p>{{$post->title}}</p>
						</div>
					</div>
					<div class="row features-grid features-grid-mdl my-4">
						<div class="col-3 features-grid-left text-right">
							<i class="fab fa-d-and-d"></i>
						</div>
						<div class="col-9 features-grid-right">
							<h4 class="mb-2">Description</h4>
							<p>{{$post->details}} </p>
						</div>
					</div>
					<div class="row features-grid">
						<div class="col-3 features-grid-left text-right">
							<i class="fab fa-mixcloud"></i>
						</div>
						<div class="col-9 features-grid-right">
							<h4 class="mb-2">Contact  </h4>
							<p>{{$post->user->phone_number}} </p>
							
						</div>@endif
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- //about -->

	<!-- middle section -->
	
</body>

</html>