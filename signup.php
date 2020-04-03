<?php
    include("sys.php");
	session_start();
	
	if($_SERVER["REQUEST_METHOD"] == "POST")
	{
		$myusername = mysqli_real_escape_string($db,$_POST['username']);
		$mypassword = mysqli_real_escape_string($db,$_POST['password']);
	
		 $sql = "INSERT INTO loginform(Username,password) values ('$myusername','$mypassword')";
			if(mysqli_query($db,$sql)=== true){
				echo "you are signeed in";
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
<caption>SIGN UP</caption>
  <tr>
    <td style="text-align:left";> <label>UserName  :</label><input type = "text" name = "username"   placeholder="Enter Username"  required/><br /><br /></td>
    
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
  
  <td> <button  class="btn" type="submit" value="login">Signup</button></td>
  </tr>
  <tr><td></td></tr>
  <tr><td></td></tr>
  <tr><td></td></tr>
 
  
</table>
</form>
</body>

</html>