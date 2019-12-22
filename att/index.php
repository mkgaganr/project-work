<?php
		session_start();
	if(isset($_POST['submit'])){
		$user = $_POST['username'];
		$pass = $_POST['password'];
		if($user=="admin" && $pass=="1234"){
			echo("Username and password matched");
			$_SESSION['name']=$user;
			header("Location:http://localhost/att/admin1.php");
		}
		if(($user=="gagan" && $pass=="mkgr") || ($user=="nitish" && $pass=="2904")){
			echo("Username and password matched");
			$_SESSION['name']=$user;
			header("Location:http://localhost/att/stud1.php");
		}
		else{
			echo "Wrong Username or password";
		}
	}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
	<style>
	@import "https://use.fontawesome.com/releases/v5.5.0/css/all.css";
body{
  margin: 0;
  padding: 0;
  font-family: cursive;
  background : url("data:image/jpeg;base64,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") no-repeat;
  background-size: cover;
}
.login-box{
  width: 280px;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%,-50%);
  color: white;
}
.login-box h1{
  float: left;
  font-size: 40px;
  border-bottom: 6px solid #4caf50;
  margin-bottom: 50px;
  padding: 13px 0;
}
.textbox{
  width: 100%;
  overflow: hidden;
  font-size: 20px;
  padding: 8px 0;
  margin: 8px 0;
  border-bottom: 1px solid #4caf50;
}
.textbox i{
  width: 26px;
  float: left;
  text-align: center;
}
.textbox input{
  border: none;
  outline: none;
  background: none;
  color: white;
  font-size: 18px;
  width: 80%;
  float: left;
  margin: 0 10px;
}
.btn{
  width: 100%;
  background: none;
  border: 2px solid #4caf50;
  color: white;
  padding: 5px;
  font-size: 18px;
  cursor: pointer;
  margin: 12px 0;
}
h1
{
    font-size: 3em;
    color : #D4AF37;
    text-align : center;
    margin-bottom:70px;
    border-bottom: 1px dotted darkgreen;
}
	</style>
  </head>
  <body>
  <h1>ATTENDANCE REGISTER</h1>
<div class="login-box">
  <h1>Login</h1>
  <div>
  <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>" >
  <div class="textbox">
    <i class="fas fa-user"></i>
    <input type="text" name="username" placeholder="Username">
  </div>

  <div class="textbox">
    <i class="fas fa-lock"></i>
    <input type="password" name="password" placeholder="Password">
  </div>
  <input type="submit" class="btn" value="Log In" name="submit">
    <a href="signup.php"><input type="botton" class="btn" value="&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Sign Up"></a>
</div>
	</form>
	</div>
  </body>
</html>
