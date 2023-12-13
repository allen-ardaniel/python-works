<html>
<style>
body {
	margin: 0px;
	padding: 0px;
}
ul{
	list-style:none;
}
a{
	text-decoration:none;
}
.slide-left{
	width:50%;
	height:100vh;
	background-color: #000000;
	background-attachment: fixed;
	background-size: 100vh auto;
	background-repeat: no-repeat;
	overflow:hidden;
	position:relative;
}
.slide-right{
	width:50%;
	height:100vh;
	background-color: #f5f5dc;
	background-attachment: fixed;
	background-size: 100vh auto;
	background-repeat: no-repeat;
	overflow:hidden;
	position:relative;
}
.wrapper{
	display:flex;
	}
.menu, .img-menu{
	display: flex;
	justify-content: space-between;
	align-items: center;
	margin: 30px 50px;
	font-family: calibri;
}
.menu ul{
	display: flex;
}
.menu ul li{
	margin: 0px 20px;
	font-weight: 700;
	letter-spacing: 2px;
	font-size: 13px;
}
.menu a{
	color: white;
}
.logo{
	font-weight: bold;
	letter-spacing: 3px;
	border: 2px solid #686868;
	padding: 5px 20px;
}
.login{
	width: 110px;
	height: 40px;
	display: flex;
	justify-content: center;
	align-items: center;
	background-color: #313237;
	color: white;
	border-radius: 10px;
}
.login:hover{
	background-color: #5a5b53;
	transition: all ease 0.5s;
}
.product-name{
	position: absolute;
	left: 50%;
	top: 30%;
	transform: translate(-50%, -30%);
	color: white;
}
.product-name h1{
	letter-spacing: 0px;
	margin: 0px;
	padding: 0px;
	font-family: calibri;
	font-size: 40px;
	color: white;
	align-items: center;
}
.footer-heading{
	font-family: calibri;
	color: white;
	display: flex;
	align-items: center;
	height: 40px;
}
.footer{
	position:absolute;
	width: 100%;
	padding: 50px;
	box-sizing: border-box;
	left: 0px;
	bottom: 0px;
	color: white;
}
.footer-heading h2{
	margin-right: 20px;
}
.footer-heading span{
	display: flex;
	align-items: center;
	justify-content: center;
	margin: 0px 5px;
	box-sizing: border-box;
	width: 60px;
	border: 2px solid #555555;
	height: 30px;
}
.footer p{
	color: #b7b5b5;
	font-family: calibri;
	line-height: 15px;
	font-weight: 400;
	width: 300px;
	font-size: 16px;
}
.product-img{
	display: flex;
	align-items: center;
	justify-content: center;
	box-sizing: border-box;
	height: 70%;
}
.cart-opt{
		display: flex;
		flex-direction: column;
		position: absolute;
		bottom: 50px;
		right: 60px;
}
.cart-op a,p{
	font-family: calibri;
	font-weight: bold;
	letter-spacing: 1px;
	line-height: 10px;
}
.price{
	font-size:25px;
	color: #161616;
}
.add-btn{
	background-color: #313237;
	font-size: 18px;
	border-radius: 5px;
	width 150px;
	height: 45px;
	color: #FFFFFF;
	display: flex;
	align-items: center;
	justify-content: center;
	box-shadow: 2px 2px 5px rgba(0,0,0,0.5);
}
.add-btn:hover{
	background-color: #5a5b63;
	transition: all ease 0.5s;
}
.button{
	position: absolute;
	bottom: 50px;
	left: 40px;
	display: flex;
}
.button a{
	color: black;
	backgound-color: #848484;
	width: 40px;
	height: 40px;
	font-size: 15px;
	border-radius: 50%;
	display: flex;
	justify-content: center;
	align-items: center;
	font-family: calibri;
	font-weight: bold;
	margin: 0px 5px;
}
.active-btn{
	width: 80px !important;
	height: 80px !important;
	backgound-color: #313237 !important;
	font-size: 25px !important;
}
.img-container1,.img-container2{
    position: absolute;
    width: 100%;
    height: 87%;
    right: -1000000px;
}
.active-img-slide{
    right: auto;
}
</style>

<body>
<head>
<meta charset = "utf-8">
<title> Confido Collections </title>
</head>
<div class = "wrapper">
<div class = "slide-left">
<div class = "menu">
<a href = "#" class = "logo"> Confido Art Collections</a>
<ul>
<li> <a href = "ark.php"> Amiya </a></li>
<li> <a href = "dusk.php"> Dusk </a></li>
<li> <a href = "exu.php"> Exusiai </a></li>
</ul>
</div>
<div class = "text-container">
<div class = "product-name">
<h1> Operator Details </h1>
<img src = "https://gamepress.gg/arknights/sites/arknights/files/2019-06/logo_rhodes.png" height = "50px" id = "img1">
<img src = "https://gamepress.gg/arknights/sites/arknights/files/2019-10/class_medic.png" height = "50px" id = "img1">
<img src = "https://gamepress.gg/arknights/sites/arknights/files/2021-09/sub_physician_icon.png" height = "50px" id = "img1">
</div>
<div class = "footer">
<div class = "footer-heading">
<h2> Medic </h2>
<span>Summon</span>
<span>Healing</span>
<span>Burst</span>
</div>
<p>Kal'tist</P>
<p>Kal'tsit, one of Rhodes Island's high-level administrative crew, and leader to Rhodes Island's medical projects. Profoundly learned in metallurgy, sociology, Originium Arts, archaeology, history and genealogy, economics, botany, geology, and other fields. In a portion of Rhodes Island operations, provides medical theory assistance and emergency aid apparatus as medical personnel.</p>
</div>
</div>
</div>

<div class = "slide-right">
<div class = "img-menu">
<a href = "register.php" class = "login"> Subscribe</a>
</div>

<!---Image 1-->
<div class = "img-container1 active-img-slide">
<div class = "product-img">
<img src = "https://gamepress.gg/arknights/sites/arknights/files/2021-05/char_003_kalts_1.png" height = "500px" id = "img1">
<div class = "cart-opt">
<p class = "price"> $ 200.00 </p>
<a href = "store.php"  class = "add-btn"> Gallery</a>
</div>
</div>
</div>

<!---Image 2-->
<div class = "img-container2">
<div class = "product-img">
<img src = "https://gamepress.gg/arknights/sites/arknights/files/2021-05/char_003_kalts_2.png" height = "500px" id = "img1">
<div class = "cart-opt">
<p class = "price"> $ 300.00 </p>
<a href = "store.php" class = "add-btn"> Gallery</a>
</div>
</div>
</div>

<div class = "button">
<a href = "#" class = "first-btn active-btn"> E1 </a>
<a href = "#" class = "second-btn"> E2 </a>
</div>
</div>
</div>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
<script>
$(document).on('click','.first-btn,.second-btn',function(){
 $(this).addClass('active-btn').siblings().removeClass('active-btn')
});
$(document).on('click','.first-btn',function(){
 $('.img-container1').addClass('active-img-slide').siblings('.img-container2').removeClass('active-img-slide')
});
$(document).on('click','.second-btn',function(){
 $('.img-container2').addClass('active-img-slide').siblings('.img-container1').removeClass('active-img-slide')
});
</script>
</body>
</html>