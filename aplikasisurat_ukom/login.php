<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Form Login</title>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>pencarian surat masuk</title>
	<link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/sticky-footer-navbar.css" rel="stylesheet">
    <link href="assets/css/navbar-static-top.css" rel="stylesheet">
    <script src="assets/js/jquery.js"></script>  
    <script src="assets/js/bootstrap.min.js"></script>

</head>

<body class="body">
	<div class="container well">

      <form class="form-signin" method= "POST" action="login_proses.php">
        <center><h2 class="form-signin-heading">Please sign in</h2></center>
        <div class="form-group">
        <center><label>nama depan</label></center>
        <center><input type="text" class="input-lg" id="nama_depan" name="nama_depan" class="form-control" placeholder="nama depan" required autofocus></center>
        </div>
        <div class="form-group">
        <center><label>Password</label></center>
        <center><input type="password" class="input-lg" id="password" name="password" class="form-control input-lg" placeholder="Password" required></center>
        </div>
        </br>
        <center><button class="btn btn-md btn-primary" type="submit" name="login">Sign in</button></center>
      </form>

    </div> <!-- /container --> 
</body>
<style type="text/css">
	
</style>
</html>