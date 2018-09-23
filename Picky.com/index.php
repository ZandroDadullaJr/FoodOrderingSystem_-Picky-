<!DOCTYPE html>
<html>
	<head>
		<title>Picky</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="css/fonts.css">
		<link rel="stylesheet" type="text/css" href="css/main.css">
		<link rel="stylesheet" type="text/css" href="css/main2.css">
		<link rel="stylesheet" type="text/css" href="css/devs.css">
		<link rel="stylesheet" type="text/css" href="css/animate.css">
		<script type="text/javascript" src="js/jquery.min.js"></script>
		<script type="text/javascript" src="js/jquery.aniview.js"></script>
		<script>
		$(document).ready(function(){
		$('.aniview').AniView();
		});
		</script>
		<style type="text/css">
		.searchbar,.card, .btn, .textSearch{
		border-radius: 45px;
		}
		.btn{
		padding: 15px;
		}
		</style>
	</head>
	<body>
		<div class="mainbg">
			<div class="menu aniview" data-av-animation="fadeInDownBig">
				<div class="container">
					<div class="row">
						<div class="col-sm-3"><a class="link" href="#">RESTAURANTS</a></div>
						<div class="col-sm-3"><a class="link" href="reviews.html">REVIEWS</a></div>
						<div class="col-sm-3"><a class="link" href="#about">ABOUT</a></div>
						<div class="col-sm-3"><a class="link" href="#contacts">CONTACT</a></div>
						
					</div>
				</div>
			</div>
			<h1 class="name aniview" data-av-animation="lightSpeedIn">PICKY</h1>
			<div class="container">
				<br/>
				<div class="row justify-content-center">
					<div class="col-12 col-md-10 col-lg-8">
						<div class="card card-sm" >
							<div class="card-body row no-gutters align-items-center searchbar">
								<div class="col-auto">
									<i class="fas fa-search h4 text-body"></i>
								</div>
								<!--end of col-->
								<div class="col">
									<input name="search" id="search" class="form-control form-control-lg form-control-borderless textSearch" type="search" placeholder="Search Restaurants">
								</div>
								<!--end of col-->
								<div class="col-auto">
									<button class="btn btn-lg btn-success" onclick="MapLoad()">Search</button>
								</div>
							</div>
						</div>
						<div class="recommend"><span class="nearby" onclick="Nearby()">Nearby Restaurants</span><span>|</span><span class="nearby" onclick="BestResto()">Best Restaurants</span></div>
					</div>
				</div>
			</div>
		</div>
		
		<div class="about" id="about">
			<div class="box">
				<h1 id="aboutsign">ABOUT</h1>
				<div class="aboutwebsite aniview" data-av-animation="bounceInLeft">
					<h2>Website</h2>
					<p>
						Picky, a website for your own browsing needs to find that specific restaurant and order from them. No need to go inline, just search a nearby local restaurant, choose from their menu, order and then VIOLA! now you just pick it up and you're good to go.
					</p>
				</div>
				<div class="meetdevs aniview" data-av-animation="bounceInRight">
					<h2>Meet the Devs</h2>
					<p>
						Zandro Dadulla, John Del Mundo, John Roman, Keanu DeLeon, and Rabi Jasareno are students at Technologial University of the Philippines (TUP), Bachelor of Technology in Information Technology.
					</p>
					<br>
				</div>
			</div>
		</div>
		<div class="wrappercontacts">
			<div class="contacts" id="contacts">
				<div class="mycolumn aniview" data-av-animation="fadeInLeft">
					<div class="mycard">
						<img src="images/zandro.jpg" alt="Jane" style="width:100%">
						<div class="container">
							<h2>Zandro Dadulla Jr.</h2>
							<p class="title">Developer</p>
							<p>Some text that describes me lorem ipsum ipsum lorem.</p>
							<p>zandro.dadulla@gmail.com</p>
							<!-- <p><button class="button" onclick="mail()">Contact</button></p> -->
						</div>
					</div>
				</div>
				
				<div class="mycolumn aniview" data-av-animation="fadeInDown">
					<div class="mycard">
						<img src="https://scontent.fmnl6-1.fna.fbcdn.net/v/t1.0-9/30725989_1644623052252536_5240698567246848409_n.jpg?_nc_cat=0&_nc_eui2=AeHxzTzRH6XNN9Unup3Cxqo0p1ZB3ckuO2z1LLToMnx5nJMSfKDhKBIJ6v2NEm0Uy1lZ_6EqqKwjQY7LCKrLBiZdBmzBfmHDjdLeLVO7xALnaWCZMMzhYJPSt7AKztF4lLY&oh=280c5a45d2b1695acb0e2ccef9ec5f9f&oe=5C30E86D" alt="Jane" style="width:100%">
						<div class="container">
							<h2>Keanu Dave De Leon</h2>
							<p class="title">Developer</p>
							<p>Some text that describes me lorem ipsum ipsum lorem.</p>
							<p>keanuzdhavez@gmail.com</p>
							<!-- <p><button class="button" onclick="mail()">Contact</button></p> -->
						</div>
					</div>
				</div>
				<div class="mycolumn aniview" data-av-animation="fadeInRight">
					<div class="mycard">
						<img src="https://scontent.fmnl6-1.fna.fbcdn.net/v/t1.0-9/39139183_934351756764818_2545218643474513920_n.jpg?_nc_cat=0&_nc_eui2=AeEcqh2EUag6QPXpvH2e07jDTgQ3lg8lEMYNuG6xR0uPh5I1UqzcGOs6TvF-F3EH83d-YEi4o_4UpzXxoHDk7rZWH6wJwrSJQiEI7V5u4dYfCjgip2kqeuirByVnGMMr6SI&oh=abc3fe7fa6bba133ca5d37d71027ed0a&oe=5C16A8C5" alt="Jane" style="width:100%">
						<div class="container">
							<h2>John Kevin Roman</h2>
							<p class="title">Developer</p>
							<p>Some text that describes me lorem ipsum ipsum lorem.</p>
							<p>example@example.com</p>
							<!-- <p><button class="button" onclick="mail()">Contact</button></p> -->
						</div>
					</div>
				</div>
			</div>
			<div class="contacts2">
				<div class="mycolumn aniview" data-av-animation="fadeInLeft">
					<div class="mycard">
						<img src="images/rannie.jpg" alt="Jane" style="width:100%">
						<div class="container">
							<h2>Rannie Jasareno</h2>
							<p class="title">Developer</p>
							<p>Some text that describes me lorem ipsum ipsum lorem.</p>
							<p>ranniehjasareno@gmail.com</p>
							<!-- <p><button class="button" onclick="mail()">Contact</button></p> -->
						</div>
					</div>
				</div>
				
				<div class="mycolumn aniview" data-av-animation="fadeInRight">
					<div class="mycard">
						<img src="https://scontent.fmnl6-1.fna.fbcdn.net/v/t1.0-9/12647287_477400382384502_4855796454801717751_n.jpg?_nc_cat=0&_nc_eui2=AeHSDJi3bcifyg4ep_nBa2Nu5G_Ugz2jJe5ALXCMxf2YdlM0qXk1rFIPfGm6poKa6fX-pDQQJJ04mGDlr-UYYx2hbHHMrzL_Ruw1g_7TZWCFy4kyZpH3B5jJsIr09rYap1g&oh=5948747292dd94a642ff7a00335bb1f1&oe=5C27C067" alt="Jane" style="width:100%">
						<div class="container">
							<h2>John Airish Del Mundo</h2>
							<p class="title">Developer</p>
							<p>Some text that describes me lorem ipsum ipsum lorem.</p>
							<p>example@example.com</p>
							<!-- <p><button class="button" onclick="mail()">Contact</button></p> -->
						</div>
					</div>
				</div>
			</div>
		</div>
		<script type="text/javascript">
			var options = {
		animateThreshold: 200,
		scrollPollInterval: 100
		}
		$('.aniview').AniView(options);
		</script>
		<script type="text/javascript" src="js/smoothScroll.js"></script>
		<script type="text/javascript" src="redirect.js"></script>
		<script type="text/javascript" src="map.js"></script>
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBQprLpeqiEJixeEZhrpG49y3XU2qVRdp4&libraries=places&callback=initAutocomplete" async defer></script>
	</body>
</html>