<?php

	include("sys.php");
	session_start();
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		$myusername = mysqli_real_escape_string($db,$_POST['username']);
		$mypassword = mysqli_real_escape_string($db,$_POST['password']);
		$sql="select * from loginform where Username='$myusername' and password='$mypassword'";
		$result=mysqli_query($db,$sql);
		 $count = mysqli_num_rows($result);
		 for($i=1 ; $i<10 ; $i++)
		 {
			 if ($count == $i)
			{
			 echo "you have entered right password";
			 exit();
			}
			else{
				echo "you have entered wrong password";
				exit();
			}
		 }
		 
		
	}

?>
<html>
<head><title>NOLOAD</title>
<style>
body{
background: linear-gradient(to bottom left,#006699 0%, #ccffff 100%);<!--gradient background-->

}
#t1{
	 margin-left:40%;
	 margin-right:45%;
	 
	 margin-top:15%;
	 width:80%
	 background-color:white;
	 border: 1px solid black;
	 text-align:center;
	 width:200;
	 height:100;
	 
}
.btn{
  background-color:#002080;
  color: white;
  padding: 10px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.6;
  transition: 0.3s;
  }
.btn:hover{opacity: 1}
</style>
</head>
<body>
<form action ="" method = "post">
<table id="t1">
<caption>LOGIN</caption>
  <tr>
    <td style="text-align:left";> <label>UserName  :</label><input type = "text" name = "username"   placeholder="Enter Username" /><br /><br /></td>
    
  </tr>
  <tr>
  <td style="text-align:left"><label for="psw">Password:&nbsp &nbsp</label>
    <input  type="password" placeholder="Enter Password" name="password" required></td>
  </tr>
  <tr><td></td></tr>
  <tr><td></td></tr>
  <tr><td></td></tr>
  <tr><td></td></tr>
  <tr><td></td></tr>
  <tr>
  
  <td> <button  class="btn" type="submit" value="login">Login</button></td>
  </tr>
  <tr><td></td></tr>
  <tr><td></td></tr>
  <tr><td></td></tr>
  <tr><td>New User? <a href="signup.php">sign up</a></td></tr>
  
</table>
</form>
</body>

</html>