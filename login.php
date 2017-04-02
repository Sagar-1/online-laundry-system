
<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>laundry</title>
    <style>
       
         
        .btn:hover, .btn:active, .btn.active, .btn.disabled, .btn[disabled] { background-color: #e6e6e6; }
        .btn-large { padding: 9px 14px; font-size: 15px; line-height: normal; -webkit-border-radius: 5px; -moz-border-radius: 5px; border-radius: 5px; }
        
        .btn-primary, .btn-primary:hover { text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25); color: #ffffff; }
        .btn-primary.active { color: rgba(255, 255, 255, 0.75); }
        .btn-primary { background-color: black; background-image: -moz-linear-gradient(top, black,black); background-image: -ms-linear-gradient(top, #6eb6de, #4a77d4); background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#6eb6de), to(#4a77d4)); background-image: -webkit-linear-gradient(top, #6eb6de, #4a77d4); background-image: -o-linear-gradient(top, #6eb6de, #4a77d4); background-image: linear-gradient(top, #6eb6de, #4a77d4); 
        background-repeat: repeat-x; filter: progid:dximagetransform.microsoft.gradient(startColorstr=#6eb6de, endColorstr=#4a77d4, GradientType=0);  border: 1px solid #3762bc; text-shadow: 1px 1px 1px rgba(0,0,0,0.4); box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.5); }
        
        .btn-block { width: 100%; display:block; }
        * { -webkit-box-sizing:border-box; -moz-box-sizing:border-box; -ms-box-sizing:border-box; -o-box-sizing:border-box; box-sizing:border-box; }
        html { width: 100%; height:100%; overflow:hidden; }
        body {
            width: 100%;
            height:100%;
            font-family: 'Open Sans', sans-serif;
            background: black;
background: #14181E url(5.jpg) no-repeat center;
            
         
            
            filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#3E1D6D', endColorstr='#092756',GradientType=1 );
        }
        .login {
            position: absolute;
            top: 50%;
            left: 50%;
            margin: -150px 0 0 -150px;
            width:300px;
            height:300px;
        }
        .login h1 { color: #fff; text-shadow: 0 0 10px rgba(0,0,0,0.3); letter-spacing:1px; text-align:center; }
        input {
            width: 100%;
            margin-bottom: 10px;
            background: rgba(0,0,0,0.3);
            border: none;
            outline: none;
            padding: 10px;
            font-size: 13px;
            color: #fff;
            text-shadow: 1px 1px 1px rgba(0,0,0,0.3);
            border: 1px solid rgba(0,0,0,0.3);
            border-radius: 4px;
            box-shadow: inset 0 -5px 45px rgba(100,100,100,0.2), 0 1px 1px rgba(255,255,255,0.2);
            -webkit-transition: box-shadow .5s ease;
            -moz-transition: box-shadow .5s ease;
            -o-transition: box-shadow .5s ease;
            -ms-transition: box-shadow .5s ease;
            transition: box-shadow .5s ease;
        }
        input:focus { box-shadow: inset 0 -5px 45px rgba(100,100,100,0.4), 0 1px 1px rgba(255,255,255,0.2); }
    </style>
<style>
.change_link{
	position: absolute;
	color: rgb(127, 124, 124);
	left: 0px;
	height: 10px;
	width: 440px;
	padding: 17px 30px 20px 30px;
	font-size: 16px	;
	text-align: left;
	
	
}
.change_link a {
	display: inline-block;
	font-weight: bold;
	background: rgb(247, 248, 241);
	padding: 2px 6px;
	color: rgb(29, 162, 193);
	margin-left: 10px;
	text-decoration: none;
	-webkit-border-radius: 4px;
	-moz-border-radius: 4px;
	border-radius: 4px;
	border: 1px solid rgb(203, 213, 214);
	-webkit-transition: all 0.4s linear;
	-moz-transition: all 0.4s  linear;
	-o-transition: all 0.4s linear;
	-ms-transition: all 0.4s  linear;
	transition: all 0.4s  linear;
}
.change_link a:hover {
	color: rgb(57, 191, 215);
	background: rgb(247, 247, 247);
	border: 1px solid rgb(74, 179, 198);
</style>

</head>
<body>

<div class="login">
    <h1>Login</h1>
    <form form action="./sample in bootstrap v2/index.php" method="post">
        <input type="text" name="username" placeholder="Username" required="required" />
        <!--<input type="text" name="email" placeholder="Email" required="required" />-->
        <input type="password" name="password" placeholder="Password" required="required" />
        <button type="submit" name="submit" class="btn btn-primary btn-block btn-large">Let me in.</button>
    </form>


 <p class="change_link">
									
Not yet Register ?
<a href="signup.php" class="to_register"> Go and Sign up</a>
</p>
</div>

</body>
</html>
<?php
mysql_connect("localhost","root","");
mysql_select_db("cartracking");
if(isset($_POST['submit']))
{
$email=$_POST['email_id'];
$pass=$_POST['password'];
$check="select * from customerlogin where email_id='$email' AND password='$pass'";
$run=mysql_query($check);
if(mysql_num_rows($run)>0)
{
$_SESSION['email_id']=$email;
echo "<script>window.open('./sample in bootstrap v2/index.php','_self')</script>";
}
else
{
echo "<script> alert('password or email_id is incorrect')</script>";
}
}
?>
