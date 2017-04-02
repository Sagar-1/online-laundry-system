
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



</head>
<body>

<div class="login">
    <h1>SIGNUP</h1>
    <form method="post">
 <input type="text" name="customers_name" placeholder="customers_name"size="40"/>
   


<input type="text" name="email_id"  placeholder="Email" size="40"/>
<input type="text" name="contact_no." placeholder="Mobile_no."size="40" />
 <input type="text" name="password" placeholder="password" size="40" />
<input type="text" name="confirm_password" placeholder="confirm_password" size="40" />
 
  <input type="submit" name="submit" value="CONFIRM AND SUBMIT"/>
 </form>


</div>

</body>
</html
<?php
mysql_connect("localhost","root","");
mysql_select_db("cartracking");
if(isset($_POST['submit']))
{
$customer=$_POST['customers_name'];
$email=$_POST['email_id'];
$cab=$_POST['cab_no'];
$contact=$_POST['contact_no'];
$pass=$_POST['password'];
$confirmpass=$_POST['confirm_password'];
$insert="insert into customerlogin(customers_name,email_id,cab_no,contact_no,password)values('$customer','$email','$cab','$contact','$pass')";
echo $insert;
mysql_query($insert);
}
?>

