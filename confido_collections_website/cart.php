<?php

session_start();
$status="";
if (isset($_POST['action']) && $_POST['action']=="remove"){
if(!empty($_SESSION["shopping_cart"])) {
	foreach($_SESSION["shopping_cart"] as $key => $value) {
		if($_POST["code"] == $key){
		unset($_SESSION["shopping_cart"][$key]);
		$status = "<div class='box' style='color:red;'>
		Product Removed</div>";
		}
		if(empty($_SESSION["shopping_cart"]))
		unset($_SESSION["shopping_cart"]);
			}		
		}
}

if (isset($_POST['action']) && $_POST['action']=="change"){
  foreach($_SESSION["shopping_cart"] as &$value){
    if($value['code'] === $_POST["code"]){
        $value['quantity'] = $_POST["quantity"];
        break; // Stop the loop after we've found the product
    }
}
  	
}
?>
<html>
<style>
body {
	background: linear-gradient(110deg, gray 50%, #f5f5dc 50%);
	background-image: linear-gradient(-90deg, gray  0%, #f5f5dc 100%);
	overflow:hidden;
	position:relative;
	font-family: "Open Sans", sans-serif;
	overflow: scroll;
}
	.product_wrapper {
	float:left;
	padding: 10px;
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
    background: black;
    cursor: pointer;
    color:  #f5f5dc;
    padding: 8px 40px;
    margin-top: 10px;
	border-radius: 20px;
	border-color: black;
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
    color: red;
    cursor: pointer;
    padding: 0px;
	}
.cart .remove:hover {
	text-decoration:underline;
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
.navout:hover, .nav:hover{
	background-color: #5a5b53;
	transition: all ease 0.5s;
	color: white;
}
.side{
	
	float: right;
}
.dice{
	float: left;
}
.component {
  position: relative;
  width: 30%;
  margin: 5rem auto;
  padding: 1rem;

  box-shadow: 2px 2px 10px #454545;
  border: 1px solid #7ac400;
  padding: 6px 14px;
  background-color: #f5f5dc;
  
  text-align: center;
}

.credit-card h2 {
  color: rgba(4,99,128,1);
}

.component .credit-card form {
  display:flex;
  flex-direction: column;
}

.component .credit-card .line {
  display: flex;
}

.component .credit-card .line input {
  width: 20%; 
  flex: 1;
  margin: 0.4rem 0.3rem;
}

input {
	border: none;
	border-bottom: 1px solid rgba(0,0,0,.12);
	margin: 1rem 0;
	padding: 4px;
	font-size: 1rem;
	outline: none;
}

input::-webkit-input-placeholder {
	color: #AAAAAA;
}

.valid-button {
	border: 0;
	padding: 1rem 2rem;
	background-color: black;
	color: #f5f5dc;
	font-weight:bold;
	margin-top:2rem;
  box-shadow: 1px 1px 1px black;
}

.valid-button:hover {
  background-color: rgba(4,99,128,1);
  box-shadow: none;
}

.total {
  position: absolute;
  top: 3em;
  left: -8em;
  z-index: -1;
  
  background: black;
  border: 1px solid #7ac400;
  color: #f5f5dc;
  
  width: 100px;
  transform: rotate(-35deg);
  display:flex;
  flex-wrap: wrap;
  justify-content:center;
  align-items:center;
  padding-right: 2rem;
  
  box-shadow: 1px 1px 5px black;
}
.total p {
  font-size: 1.5rem;
}
.wrapper{
	color: #f5f5dc;
	border: 5px solid black;
	padding: 6px 14px;
	box-shadow: 2px 2px 10px #454545;
	align-items: center;
	font-family: calibri;
}
h2{
	font-family: calibri;
	color: black;
}

</style>
<head>
</head>
<body>
<div style="width:700px; margin:50 auto;">
<div class = "wrapper">
<h2>Confido Cart Collections</h2>   
<?php
if(!empty($_SESSION["shopping_cart"])) {
$cart_count = count(array_keys($_SESSION["shopping_cart"]));
?>
<div class="cart_div">
<a href="db_cart.php">
<img src="https://cdn-icons-png.flaticon.com/512/3081/3081840.png" height = "50px"/> Cart
<span><?php echo $cart_count; ?></span></a>
</div>
<?php
}
?>

<div class="cart">
<?php
if(isset($_SESSION["shopping_cart"])){
    $total_price = 0;
?>	
<table class="table">
<tbody>
<tr>
<td>Item</td>
<td>Quantity</td>
<td>Price</td>
<td>Total</td>
</tr>	
<?php		
foreach ($_SESSION["shopping_cart"] as $product){
?>

<tr>
<td><?php echo $product["name"]; ?><br />
<form method='post' action=''>
<input type='hidden' name='code' value="<?php echo $product["code"]; ?>" />
<input type='hidden' name='action' value="remove" />
<button type='submit' class='remove'>Remove Item</button>
</form>
</td>
<td>
<form method='post' action=''>
<input type='hidden' name='code' value="<?php echo $product["code"]; ?>" />
<input type='hidden' name='action' value="change" />
<select name='quantity' class='quantity' onchange="this.form.submit()">
<option <?php if($product["quantity"]==1) echo "selected";?> value="1">1</option>
<option <?php if($product["quantity"]==2) echo "selected";?> value="2">2</option>
<option <?php if($product["quantity"]==3) echo "selected";?> value="3">3</option>
<option <?php if($product["quantity"]==4) echo "selected";?> value="4">4</option>
<option <?php if($product["quantity"]==5) echo "selected";?> value="5">5</option>
</select>
</form>
</td>
<td><?php echo "$".$product["price"]; ?></td>
<td><?php echo "$".$product["price"]*$product["quantity"]; ?></td>
</tr>
<?php
$total_price += ($product["price"]*$product["quantity"]);
}
?>
<tr>
</tr>
</tbody>
</table>		
  <?php
}else{
	echo "<h3>Your cart is empty!</h3>";
	}
?>
</div>
</div>

<div style="clear:both;"></div>
<div class="message_box" style="margin:10px 0px;">
<?php echo $status; ?>
</div>
</div>

<section class="component">
  <div class="total">
    <h3>TOTAL</h3>
    <p><?php echo "$".$total_price; ?></p>
  </div>
  <div class="credit-card">
    <h2>Credit Card</h2>
    <form action = "check.php" method = "post">
      <input type="text" placeholder="NAME" required id = "name" name = "name"/>
      <div class="line"><input type="text" placeholder="CARD NUMBER" id = "number" name = "number" required/></div>
      <div class="line">
        <input class="litle" type="text" placeholder="YYYY-MM-DD" id = "expiry" name = "expiry" required/>
        <input class="tall" type="text" placeholder="CCV"id = "ccv" name = "ccv" required/>
      </div>
      <button type="submit" class="valid-button">PAY</button>
    </form>
  </div>

</section>

</body>
</html>