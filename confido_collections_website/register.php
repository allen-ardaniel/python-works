<html>
<style>
@import url(https://fonts.googleapis.com/css?family=Open+Sans:300);
* {
  font-family: 'Open Sans', sans-serif;
}

body {
  margin: 0;
  padding: 0;
  overflow: hidden;
  background: #111;
  background-repeat: no-repeat;
}

.signupSection {
  background: url(https://gamepress.gg/arknights/sites/arknights/files/2019-06/logo_rhodes.png);
  background-repeat: no-repeat;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  width: 800px;
  height: 480px;
  text-align: center;
  display: flex;
  color: white;
  box-shadow: 3px 10px 20px 5px rgba(0, 0, 0, .5);
}

.info {
  width: 60%;
  background-color: #f5f5dc;
  font-weight: bold;
  color: black;
  padding: 30px 0;
  border-right: 5px solid rgba(30, 30, 30, .8);
}
.icon {
    font-size: 8em;
    padding: 20px 0;
    color: rgba(10, 180, 180, 1);
  }
h2 {
    font-weight: bold;
	border: 2px solid;
    border-radius: 10px;
	padding: 2px 10px;
  }
h3 {
    padding-top: 30px;
    font-weight: 300;
  }
.signupForm {
  width: 70%;
  padding: 30px 0;
  background: rgba(20, 40, 40, .8);
  transition: .2s;
  h2 {
    font-weight: 300;
  }
}

.inputFields {
  margin: 15px 0;
  font-size: 16px;
  padding: 10px;
  width: 250px;
  border: 1px solid rgba(10, 180, 180, 1);
  border-top: none;
  border-left: none;
  border-right: none;
  background: rgba(20, 20, 20, .2);
  color: white;
  outline: none;
  
}

.noBullet {
  list-style-type: none;
  padding: 0;
}

#join-btn {
  border: 1px solid rgba(10, 180, 180, 1);
  background: rgba(20, 20, 20, .6);
  font-size: 18px;
  color: white;
  margin-top: 20px;
  padding: 10px 50px;
  cursor: pointer;
  transition: .4s;
}
.join-btn:hover {
    background: rgba(20, 20, 20, .8);
    padding: 10px 80px;
  }
</style>
<head>
    <meta charset = "UTF-8">
</head>
<body>
<div class="signupSection">
<div class="info">
    <h2>Confido Art Collections</h2>
    <i class="icon ion-ios-ionic-outline" aria-hidden="true"></i>
    <img src = "https://upload.wikimedia.org/wikipedia/commons/thumb/5/50/Arknights_English_Release_Logo.svg/1200px-Arknights_English_Release_Logo.svg.png" height = "50px" id = "img1">
    <div></div>
    <img src = "https://gamepress.gg/arknights/sites/arknights/files/2020-08/char_293_thorns_2.png" height = "275px" id = "img1" width = "250px">
  </div>
<form action = "process.php" method = "post" class = "signupForm" name = "signupform" id = "form">
<h3>Subscribe to Confido Newsletter</h3>
<ul class="noBullet">
    <li>
            <input type = "text" id = "email" name = "email" class = "inputFields" placeholder = "Email">
    </li>
    <li id="center-btn">
        <input type="submit" id="join-btn" name="join" alt="Join" value="Subscribe">
      </li>
    </ul>
</form>
</div>
</body>
</html>