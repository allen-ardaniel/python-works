<?php

session_start();
include('db.php');
$status="";
if (isset($_POST['code']) && $_POST['code']!=""){
$code = $_POST['code'];
$result = mysqli_query($mysqli,"SELECT * FROM `product` WHERE `code`='$code'");
$row = mysqli_fetch_assoc($result);
$name = $row['name'];
$code = $row['code'];
$price = $row['price'];
#$image = $row['image'];

$cartArray = array(
	$code=>array(
	'name'=>$name,
	'code'=>$code,
	'price'=>$price,
	'quantity'=>1)
	#'image'=>$image)

);

if(empty($_SESSION["shopping_cart"])) {
	$_SESSION["shopping_cart"] = $cartArray;
	$status = "<div class='box'>Product is added to your cart!</div>";
}else{
	$array_keys = array_keys($_SESSION["shopping_cart"]);
	if(in_array($code,$array_keys)) {
		$status = "<div class='box' style='color:red;'>
		Product is already added to your cart!</div>";	
	} else {
	$_SESSION["shopping_cart"] = array_merge($_SESSION["shopping_cart"],$cartArray);
	$status = "<div class='box'>Product is added to your cart!</div>";
	}

	}
}
?>
<html>
<head>
	<style>
body {
	background: linear-gradient(110deg, gray 50%, #f5f5dc 50%);
	background-image: linear-gradient(-90deg, gray  0%, #f5f5dc 100%);
	overflow:hidden;
	position:relative;
	font-family: calibri;
}
.product_wrapper {
	float:left;
	padding: 10px;
	text-align: center;
	color: black;
	}
h2{
	color: black;
	font-family: calibri;
	font-weight:bold;
	text-align: center;
}
.product_wrapper:hover {
	box-shadow: 0 0 0 2px #e5e5e5;
	cursor:pointer;
	}
.product_wrapper .name {
	font-weight:bold;
	}
.product_wrapper .buy {
	text-transform: uppercase;
    background: #f5f5dc;
    cursor: pointer;
    color:  black;
    padding: 8px 40px;
    margin-top: 10px;
	border-radius: 20px;
	border: 1px solid #7ac400;
	border-style: solid;
	font-weight: bold;
}
.product_wrapper .buy:hover {
	background-color: #5a5b53;
	transition: all ease 0.5s;
	color: white;
}
.message_box .box{
	margin: 10px 0px;
    border: 1px solid #2b772e;
    text-align: center;
    font-weight: bold;
    color: #2b772e;
	}
.table td {
	border-bottom: #F0F0F0 1px solid;
	padding: 10px;
	}
.cart_div {
	float:right;
	font-weight:bold;
	position:relative;
	}
.cart_div a {
	color:#000;
	}	
.cart_div span {
	font-size: 12px;
    line-height: 14px;
    background: #F68B1E;
    padding: 2px;
    border: 2px solid #fff;
    border-radius: 50%;
    position: absolute;
    top: -1px;
    left: 13px;
    color: #fff;
    width: 14px;
    height: 13px;
    text-align: center;
	}
.cart .remove {
    background: none;
    border: none;
    color: #0067ab;
    cursor: pointer;
    padding: 0px;
	}
.cart .remove:hover {
	text-decoration:underline;
	}
.dice{
	float: left;
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
.nav:hover{
	background-color: #5a5b53;
	transition: all ease 0.5s;
	color: white;
}
	</style>
<title>Confido Art Collections</title>
</head>
<body>
<div style="width:700px; margin:50 auto;">

<h2>Confido Cart Collections</h2>   

<?php
if(!empty($_SESSION["shopping_cart"])) {
$cart_count = count(array_keys($_SESSION["shopping_cart"]));
?>

<?php
}
#<div class='image'><img src='".$row['image']."' /></div>
$result = mysqli_query($mysqli,"SELECT * FROM `product`");
while($row = mysqli_fetch_assoc($result)){
		echo "<div class='product_wrapper'>
			  <form method='post' action=''>
			  <input type='hidden' name='code' value=".$row['code']." />
			  <div class='name'>".$row['name']."</div>
		   	  <div class='price'>$".$row['price']."</div>
			  <button type='submit' class='buy'>Recruit</button>
			  </form>
		   	  </div>";
        }
mysqli_close($mysqli);
?>
<div class="cart_div">
<a href="cart.php"><img src="https://cdn-icons-png.flaticon.com/512/3081/3081840.png" height = "50px" /> Cart<span><?php echo $cart_count; ?></span></a>
</div>
<div style="clear:both;"></div>
<div class="message_box" style="margin:10px 0px;">
<?php echo $status; ?>
</div>
</div>
<div class = "dice">
<a href="store.php" class = "nav"> GALLERY</a>
</div>

</body>
</html>