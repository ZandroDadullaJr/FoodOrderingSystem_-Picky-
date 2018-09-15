<!DOCTYPE html>
<html>
	<head>
		<title>Picky</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="css/main.css">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="css/fonts.css">
		<style type="text/css">
			.recommend{
		text-align: center;
		color: rgb(246,246,246);
		font-size: 20px;
		letter-spacing: 3px;
		}
		.nearby{
			text-decoration: underline;
		}
		.nearby:hover{
		color: blue;
		cursor: pointer;
		}
		</style>
	</head>
	<body>
		<div class="mainbg">
			<div class="menu">
				<div class="container">
					<div class="row">
						<div class="col-sm-3"><a class="link" href="#">RESTAURANTS</a></div>
						<div class="col-sm-3"><a class="link" href="reviews.html">REVIEWS</a></div>
						<div class="col-sm-3"><a class="link" href="contact.html">CONTACT</a></div>
						<div class="col-sm-3"><a class="link" href="about.html">ABOUT</a></div>
					</div>
				</div>
			</div>
			<h1 class="name">PICKY</h1>
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
									<input name="search" id="search" class="form-control form-control-lg form-control-borderless" type="search" placeholder="Search Restaurants">
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
		<script type="text/javascript">
		function BestResto(){
			var url = "https://www.google.com/maps/search/Best Restaurants";
			window.location.replace(url)
		}
		function Nearby(){
			var url = "https://www.google.com/maps/search/Nearby Restaurants";
			window.location.replace(url)
		}
		function MapLoad(){
			var query = document.getElementById('search').value;
			var url = "https://www.google.com/maps/search/" + query + " Restaurants";
			window.location.replace(url)
		}
		</script>
		<script type="text/javascript" src="map.js"></script>
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBQprLpeqiEJixeEZhrpG49y3XU2qVRdp4&libraries=places&callback=initAutocomplete" async defer></script>
	</body>
</html>