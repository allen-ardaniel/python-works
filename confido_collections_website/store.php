<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Open+Sans">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

<style>
body {
	background: linear-gradient(110deg, gray 50%, #f5f5dc 50%);
	background-image: linear-gradient(-90deg, gray  0%, #f5f5dc 100%);
	overflow:hidden;
	position:relative;
	font-family: calibri;
}
h2 {
	color: gray;
	font-family: calibri;
	font-size: 26px;
	font-weight: 300;
	text-align: center;
	text-transform: uppercase;
	position: relative;
	margin: 30px 0 60px;
}
h2::after {
	content: "";
	font-size: 14px;
	width: 100px;
	position: absolute;
	margin: 0 auto;
	height: 2px;
	border-radius: 1px;
	background: #f5f5dc;
	left: 0;
	right: 0;
	bottom: -20px;
}
.carousel {
	margin: 50px auto;
	padding: 0 70px;
}
.carousel .item {
	color: #747d89;
	min-height: 325px;
	text-align: center;
	overflow: hidden;
}
.carousel .thumb-wrapper{
	padding: 25px 15px;
	background: #000000;
	border-color: linear-gradient(110deg, #000000 50%, #f5f5dc 50%);
	border-style: solid;
	border-radius: 6px;
	text-align: center;
	position: relative;
	box-shadow: 0 2px 3px rgba(0,0,0,0.2);
}

.carousel .item .img-box {
	height: 120px;
	margin-bottom: 20px;
	width: 100%;
	position: relative;
}
.carousel .item img {	
	max-width: 100%;
	max-height: 100%;
	display: inline-block;
	position: absolute;
	bottom: 0;
	margin: 0 auto;
	left: 0;
	right: 0;
}
.carousel .item h4 {
	font-size: 18px;
}
.carousel .item h4, .carousel .item p, .carousel .item ul {
	margin-bottom: 5px;
}
.carousel .thumb-content .btn {
	color: #f5f5dc;
	font-size: 11px;
	text-transform: uppercase;
	font-weight: bold;
	background: black;
	border: 1px solid #7ac400;
	padding: 6px 14px;
	margin-top: 5px;
	line-height: 16px;
	border-radius: 20px;
}
.carousel .thumb-content .btn:hover, .carousel .thumb-content .btn:focus {
	color: #fff;
	background: black;
	box-shadow: none;
}
.carousel .thumb-content .btn i {
	font-size: 14px;
	font-weight: bold;
	margin-left: 5px;
}
.carousel .item-price {
	font-size: 13px;
	padding: 2px 0;
}
.carousel .item-price strike {
	opacity: 0.7;
	margin-right: 5px;
}
.carousel-control-prev, .carousel-control-next {
	height: 44px;
	width: 40px;
	background: black;	
	margin: auto 0;
	border-radius: 4px;
	opacity: 0.8;
}
.carousel-control-prev:hover, .carousel-control-next:hover {
	background: black;
	opacity: 1;
}
.carousel-control-prev i, .carousel-control-next i {
	font-size: 36px;
	position: absolute;
	top: 50%;
	display: inline-block;
	margin: -19px 0 0 0;
	z-index: 5;
	left: 0;
	right: 0;
	color: #fff;
	text-shadow: none;
	font-weight: bold;
}
.carousel-control-prev i {
	margin-left: -2px;
}
.carousel-control-next i {
	margin-right: -4px;
}		
.carousel-indicators {
	bottom: -50px;
}
.carousel-indicators li, .carousel-indicators li.active {
	width: 10px;
	height: 10px;
	margin: 4px;
	border-radius: 50%;
	border: none;
}
.carousel-indicators li {	
	background: rgba(0, 0, 0, 0.2);
}
.carousel-indicators li.active {	
	background: rgba(0, 0, 0, 0.6);
}
.carousel .wish-icon {
	position: absolute;
	right: 10px;
	top: 10px;
	z-index: 99;
	cursor: pointer;
	font-size: 16px;
	color: #abb0b8;
}
.carousel .wish-icon .fa-heart {
	color: #ff6161;
}
.star-rating li {
	padding: 0;
}
.star-rating i {
	font-size: 14px;
	color: #ffc000;
}
.nav{
	margin: 40px;
	width: 110px;
	height: 40px;
	display: flex;
	justify-content: center;
	align-items: center;
	background-color:#f5f5dc;
	color: black;
	border-radius: 10px;
	border-color: black;
	border-style: solid;
	font-weight: bold;
}
.navout{
	margin: 40px;
	width: 110px;
	height: 40px;
	display: flex;
	justify-content: center;
	align-items: center;
	background-color: #000000;
	color: #f5f5dc;
	border-radius: 10px;
	border-color: black;
	border-style: solid;
	font-weight: bold;
}
.side{
	
	float: right;
}
.dice{
	float: left;
}
.navout:hover, .nav:hover{
	background-color: #5a5b53;
	transition: all ease 0.5s;
	color: white;
}
</style>
<script>
$(document).ready(function(){
	$(".wish-icon i").click(function(){
		$(this).toggleClass("fa-heart fa-heart-o");
	});
});
</script>
</head>

<!--Cart Details--->

<div class="container-xl">
	<div class="row">
		<div class="col-md-12">
			<h2><b>Confido Art Collections</b></h2>
			<div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="0">
			<!-- Carousel indicators -->
			<ol class="carousel-indicators">
				<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				<li data-target="#myCarousel" data-slide-to="1"></li>
				<li data-target="#myCarousel" data-slide-to="2"></li>
			</ol>   
			<!-- Wrapper for carousel items -->
			<div class="carousel-inner">
				<div class="item carousel-item active">
					<div class="row">
						<div class="col-sm-3">
							<div class="thumb-wrapper">
								<span class="wish-icon"><i class="fa fa-heart-o"></i></span>
								<div class="img-box">
									<img src="https://gamepress.gg/arknights/sites/arknights/files/2020-02/ArtExuSkinWild.png" class="img-fluid" alt="">									
								</div>
								<div class="thumb-content" id = "item1" value = "Exusiai Messenger">
									<h4>Exusiai Messenger</h4>									
									<div class="star-rating">
										<ul class="list-inline">
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
										</ul>
									</div>
									<p class="item-price" id = "item1_price"><b>$200.00</b></p>
									<input type="button" class = "btn btn-primary" value="Standard" onclick="cart('item1')">
									<!------Break-->
									<input type="hidden" id="item1_name" value="Exusiai Messenger">
									<input type="hidden" id="item1_price" value="$200.00">
								</div>						
							</div>
						</div>
						<div class="col-sm-3">
							<div class="thumb-wrapper">
								<span class="wish-icon"><i class="fa fa-heart-o"></i></span>
								<div class="img-box">
									<img src="https://gamepress.gg/arknights/sites/arknights/files/2019-11/char_103_angel_2.png" class="img-fluid" alt="Headphone">
								</div>
								<div class="thumb-content" id = "item2" value = "Exusiai Angel">
									<h4>Exusiai Angel</h4>									
									<div class="star-rating">
										<ul class="list-inline">
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
										</ul>
									</div>
									<p class="item-price" id = "item2_price"><b>$300.00</b></p>
									<input type="button" class = "btn btn-primary" value="Standard" onclick="cart('item2')">
									<!------Break-->
									<input type="hidden" id="item2_name" value="Exusiai Angel">
									<input type="hidden" id="item2_price" value="$300.00">

								</div>						
							</div>
						</div>		
						<div class="col-sm-3">
							<div class="thumb-wrapper">
								<span class="wish-icon"><i class="fa fa-heart-o"></i></span>
								<div class="img-box">
									<img src="https://gamepress.gg/arknights/sites/arknights/files/2022-01/char_2015_dusk_nian%237-2.png" class="img-fluid" alt="Macbook">
								</div>
								<div class="thumb-content" id = "item3" value = "Dusk Painter">
									<h4>Dusk Painter</h4>									
									<div class="star-rating">
										<ul class="list-inline">
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
										</ul>
									</div>
									<p class="item-price" id = "item3_price"><b>$150.00</b></p>
									<input type="button" class = "btn btn-primary" value="Standard" onclick="cart('item3')">
									<!------Break-->
									<input type="hidden" id="item3_name" value="Dusk Painter">
									<input type="hidden" id="item3_price" value="$150.00">

								</div>						
							</div>
						</div>								
						<div class="col-sm-3">
							<div class="thumb-wrapper">
								<span class="wish-icon"><i class="fa fa-heart-o"></i></span>
								<div class="img-box">
									<img src="https://gamepress.gg/arknights/sites/arknights/files/2021-02/char_2015_dusk_2.png" class="img-fluid" alt="Nikon">
								</div>
								<div class="thumb-content" id = "item4" value = "Dusk Fragment">
									<h4>Dusk Fragment</h4>									
									<div class="star-rating">
										<ul class="list-inline">
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
										</ul>
									</div>
									<p class="item-price" id = "item4_price"><b>$275.00</b></p>
									<input type="button" class = "btn btn-primary" value="Standard" onclick="cart('item4')">
									<!------Break-->
									<input type="hidden" id="item4_name" value="Dusk Fragment">
									<input type="hidden" id="item4_price" value="$275.00">
								</div>						
							</div>
						</div>
					</div>
				</div>
				<div class="item carousel-item">
					<div class="row">
						<div class="col-sm-3">
							<div class="thumb-wrapper">
								<span class="wish-icon"><i class="fa fa-heart-o"></i></span>
								<div class="img-box">
									<img src="https://gamepress.gg/arknights/sites/arknights/files/2020-01/char_002_amiya_winter%231_1.png" class="img-fluid" alt="Play Station">
								</div>
								<div class="thumb-content" id = "item5" value = "Amiya Newsgirl">
									<h4>Amiya Newsgirl</h4>
									<p class="item-price" id = "item5_price"><span>$60.00</span></p>
									<div class="star-rating">
										<ul class="list-inline">
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
										</ul>
									</div>
									<input type="button" class = "btn btn-primary" value="Standard" onclick="cart('item5')">
									<!------Break-->
									<input type="hidden" id="item5_name" value="Amiya Newsgirlr">
									<input type="hidden" id="item5_price" value="$60.00">
								</div>						
							</div>
						</div>
						<div class="col-sm-3">
							<div class="thumb-wrapper">
								<span class="wish-icon"><i class="fa fa-heart-o"></i></span>
								<div class="img-box">
									<img src="https://gamepress.gg/arknights/sites/arknights/files/2020-04/char_002_amiya_epoque%234boverlay.png" class="img-fluid" alt="Macbook">
								</div>
								<div class="thumb-content" id = "item6" value = "Amiya Fresh Fastener">
									<h4>Amiya Fresh Fastener</h4>
									<p class="item-price" id = "item6_price"><span>$100.00</span></p>
									<div class="star-rating">
										<ul class="list-inline">
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
										</ul>
									</div>
									<input type="button" class = "btn btn-primary" value="Standard" onclick="cart('item6')">
									<!------Break-->
									<input type="hidden" id="item6_name" value="Amiya Fresh Fastener">
									<input type="hidden" id="item6_price" value="$100.00">
								</div>						
							</div>
						</div>
						<div class="col-sm-3">
							<div class="thumb-wrapper">
								<span class="wish-icon"><i class="fa fa-heart-o"></i></span>
								<div class="img-box">
									<img src="https://gamepress.gg/arknights/sites/arknights/files/2019-10/char_002_amiya_1.png" class="img-fluid" alt="Speaker">
								</div>
								<div class="thumb-content" id = "item7" value = "Amiya Leader">
									<h4>Amiya Leader</h4>
									<p class="item-price" id = "item7_price"><span>$120.00</span></p>
									<div class="star-rating">
										<ul class="list-inline">
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
										</ul>
									</div>
									<input type="button" class = "btn btn-primary" value="Standard" onclick="cart('item7')">
									<!------Break-->
									<input type="hidden" id="item7_name" value="Amiya Leader">
									<input type="hidden" id="item7_price" value="$120.00">
								</div>						
							</div>
						</div>
						<div class="col-sm-3">
							<div class="thumb-wrapper">
								<span class="wish-icon"><i class="fa fa-heart-o"></i></span>
								<div class="img-box">
									<img src="https://gamepress.gg/arknights/sites/arknights/files/2019-10/char_002_amiya_2.png" class="img-fluid" alt="Galaxy">
								</div>
								<div class="thumb-content" id = "item8" value = "Amiya Awakened">
									<h4>Amiya Awakened</h4>
									<p class="item-price" id = "item8_price"><span>$180.00</span></p>
									<div class="star-rating">
										<ul class="list-inline">
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
										</ul>
									</div>
									<input type="button" class = "btn btn-primary" value="Limited" onclick="cart('item8')">
									<!------Break-->
									<input type="hidden" id="item8_name" value="Amiya Awakened">
									<input type="hidden" id="item8_price" value="$180.00">
								</div>						
							</div>
						</div>						
					</div>
				</div>
				<div class="item carousel-item">
					<div class="row">
						<div class="col-sm-3">
							<div class="thumb-wrapper">
								<span class="wish-icon"><i class="fa fa-heart-o"></i></span>
								<div class="img-box">
									<img src="https://gamepress.gg/arknights/sites/arknights/files/2021-05/char_003_kalts_1.png" class="img-fluid" alt="iPhone">
								</div>
								<div class="thumb-content" id = "item9" value = "Kal'tsit Doctor">
									<h4>Kal'tsit Doctor</h4>
									<p class="item-price" id = "item9_price"><span>$200.00</span></p>
									<div class="star-rating">
										<ul class="list-inline">
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
										</ul>
									</div>
									<input type="button" class = "btn btn-primary" value="Standard" onclick="cart('item9')">
									<!------Break-->
									<input type="hidden" id="item9_name" value="Kal'tsit Doctor">
									<input type="hidden" id="item9_price" value="$200.00">
								</div>						
							</div>
						</div>
						<div class="col-sm-3">
							<div class="thumb-wrapper">
								<span class="wish-icon"><i class="fa fa-heart-o"></i></span>
								<div class="img-box">
									<img src="https://gamepress.gg/arknights/sites/arknights/files/2021-05/char_003_kalts_2.png" class="img-fluid" alt="Canon">
								</div>
								<div class="thumb-content" id = "item10" value = "Kal'tsit and Mon3tr">
									<h4>Kal'tsit and Mon3tr</h4>
									<p class="item-price" id = "item10_price"><span>$300.00</span></p>
									<div class="star-rating">
										<ul class="list-inline">
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
										</ul>
									</div>
									<input type="button" class = "btn btn-primary" value="Standard" onclick="cart('item10')">
									<!------Break-->
									<input type="hidden" id="item10_name" value="Kal'tsit and Mon3tr">
									<input type="hidden" id="item10_price" value="$300.00">
								</div>						
							</div>
						</div>
						<div class="col-sm-3">
							<div class="thumb-wrapper">
								<span class="wish-icon"><i class="fa fa-heart-o"></i></span>
								<div class="img-box">
									<img src="https://gamepress.gg/arknights/sites/arknights/files/2022-08/char_1026_gvial2_1.png" class="img-fluid" alt="Pixel">
								</div>
								<div class="thumb-content" id = "item11" value = "Gavial the Invincible">
									<h4>Gavial the Invincible</h4>
									<p class="item-price" id = "item11_price"><span>$500.00</span></p>
									<div class="star-rating">
										<ul class="list-inline">
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
										</ul>
									</div>
									<input type="button" class = "btn btn-primary" value="Limited" onclick="cart('item11')">
									<!------Break-->
									<input type="hidden" id="item11_name" value="Gavial the Invincible">
									<input type="hidden" id="item11_price" value="$500.00">
								</div>						
							</div>
						</div>	
						<div class="col-sm-3">
							<div class="thumb-wrapper">
								<span class="wish-icon"><i class="fa fa-heart-o"></i></span>
								<div class="img-box">
									<img src="https://gamepress.gg/arknights/sites/arknights/files/2020-12/char_264_f12yin_2.png" class="img-fluid" alt="Watch">
								</div>
								<div class="thumb-content" id = "item12" value = "Mountain">
									<h4>Mountain</h4>
									<p class="item-price" id = "item12_price"><span>$450.00</span></p>
									<div class="star-rating">
										<ul class="list-inline">
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
										</ul>
									</div>
									<input type="button" class = "btn btn-primary" value="Limited" onclick="cart('item12')">
									<!------Break-->
									<input type="hidden" id="item12_name" value="Mountain">
									<input type="hidden" id="item12_price" value="$450.00">
								</div>						
							</div>
						</div>
					</div>
				</div>
			</div>
<div class = "dice">
<a href="ark.php" class = "nav"> Go Back</a>
</div>

<div class = "side">
<a href = "db_cart.php" button style="font-size:16px" class = "navout"> <i class=" fa fa-shopping-cart"></i></button></a>
</div>
			<!-- Carousel controls -->
			<a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
				<i class="fa fa-angle-left"></i>
			</a>
			<a class="carousel-control-next" href="#myCarousel" data-slide="next">
				<i class="fa fa-angle-right"></i>
			</a>
		</div>
		</div>
	</div>
</div>
</body>

</html>  