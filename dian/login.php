<?php
session_start();
if(isset($_SESSION['email'])) {
    echo '<script>window.location.replace("index1.php");</script>';
} else {
?>

<head>
<title>UNIWARA</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<style>
    body {
        background-image: url(gmb/tb.jpg);
        background-size: cover;
		background-position: center;
background-repeat: no-repeat;
    }
	 .container {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        height: 100vh;
    }
    h1 {
        margin-top: 0.5rem;
        color: #fff;
		align-items : center;
		margin-bottom : 1rem;
		font-size: 40;
    }
    h2 {
        color: #ffb3b3;
		font-size: 30;
    }
    img {
        width: 150px;
        height: 180px;
        margin-bottom: 20px;
    }
    form {
        display: flex;
        flex-direction: column;
        align-items: center;
    }
    input[type="email"],
    input[type="password"] {
        padding: 10px;
        margin-bottom: 10px;
        width: 250px;
        border-radius: 5px;
        border: none;
    }
    input[type="submit"] {
        padding: 10px 20px;
        background-color: #146c94;
        color: #fff;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }
    h4 {
        color: #7990E0;
    }
</style>

<center>
<h1 style="margin-top:50px;"> UNIVERSITAS PGRI WIRANEGARA PASURUAN <font color="red"></font></h1>
<h2>Silahkan Masukkan Email dan Password Anda</h2>

<form action="./ceklogin.php" method="post">
<input type="email" name="email" placeholder="Username" alt="email" required="required"/><br/>
<input type="password" name="password" placeholder="Password" alt="password" required="required"/><br/><br/>
<input type="submit" name="submit" value="Login" alt="submit"/>
</form><br/>

</center>
<?php } ?>