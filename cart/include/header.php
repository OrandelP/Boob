<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link href= "css/bootstrap.min.css" rel="stylesheet"/>
    <script src="js/bootstrap.bundle.js"></script>
    <link rel="stylesheet" href="color3.css">
    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
    <script src="../js/x.js"></script>
    <script src="https://kit.fontawesome.com/5f8e4dddee.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" type="text/css" href="/Fontawesome/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="/Fontawesome/css/all.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cantora+One&display=swap" rel="stylesheet">	<title>Merch</title>
<script>
  var sites = [
  '/rp3/code.html',
  '/rp3/saint.html',
      '/rp3/warrior.html'
  ];

  function randomSite() {
      var i = parseInt(Math.random() * sites.length);
      location.href = sites[i];
  }
</script>
<style>
.navbar-dark .navbar-nav .nav-link{
  color: rgb(255 255 255);
}

.navbar-dark .navbar-nav:hover{
  color: rgb(255, 234, 0);
}
</style>
</head>
<body>

	 <nav class="navbar navbar-expand-sm navbar-dark bg-dark class-py-5" navbar-dark>

	 <a class="nav-link" id="face" href="/RP3/index.html">
	  	<h1 class="text-white navbar-brand">BOOB<img src="../../images/Xtra.png" width="20px">TUBE</h1>
		  </a>
	 	<div class="mr-auto navbar-dark bg-dark text-white"></div>
	 	<ul class="navbar-nav">
	 		<li class="nav-item text-white">
	 			<a href="../../Preview.html" class="nav-link">PREVIEWS</a>
	 		</li>
			 <li class="nav-item text-white">
	 			<a href="../../Reviews.html" class="nav-link">REVIEWS</a>
	 		</li>
			 <li class="nav-item">
        <a class="nav-link" href="#" onclick="randomSite();">MUST-WATCH</a>
      </li>
			 <li class="nav-item text-white">
	 			<a href="../index.php" class="nav-link">MERCH</a>
	 		</li>
	 		<li class="nav-item text-white">
	 			<a href="../cart.php" class="nav-link">CART</a>
	 		</li>
	 	</ul>
	 </nav>

</body>
</html>