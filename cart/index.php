<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Merch</title>
  <link rel="stylesheet" type="text/css" href="color2.css">
  <link rel="icon" href="/rp3/images/Xtra.png">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <link href= "css/bootstrap.min.css" rel="stylesheet"/>
    <script src="js/bootstrap.bundle.js"></script>
    <link rel="stylesheet" href="color3.css">
    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
    <script src="js/x.js"></script>
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
</head>
<body>

	 <nav class="navbar navbar-expand-sm navbar-dark bg-dark class-py-5" navbar-dark>

	 <a class="nav-link" id="face" href="/RP3/index.html">
	  	<h1 class="text-white navbar-brand">BOOB<img src="/RP3/images/Xtra.png" width="20px">TUBE</h1>
		  </a>
	 	<div class="mr-auto    text-white"></div>
	 	<ul class="navbar-nav">
	 		<li class="nav-item text-white">
	 			<a href="/RP3/Preview.html" class="nav-link">PREVIEWS</a>
	 		</li>
			 <li class="nav-item text-white">
	 			<a href="/RP3/Reviews.html" class="nav-link">REVIEWS</a>
	 		</li>
			 <li class="nav-item">
        <a class="nav-link" href="#" onclick="randomSite();">MUST-WATCH</a>
      </li>
			 <li class="nav-item text-white">
	 			<a href="index.php" class="nav-link">MERCH</a>
	 		</li>
	 		<li class="nav-item text-white">
	 			<a href="cart.php" class="nav-link">CART</a>
	 		</li>
	 	</ul>
	 </nav>

</body>
</html>   
	<div class="container">
		<div class="col-md-12">
			<div class="row show_cart my-5">
				
			</div>
		</div>
	</div>

<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

<script type="text/javascript">
	
	$(document).ready(function(){
      
    show_cart();

	function show_cart(){
		$.ajax({
           method: "POST",
           url:"show_cart.php",
           success:function(data){
             $(".show_cart").html(data);
           }
		});	
	}

    $(document).on("click",".add",function(){
         var id = $(this).attr("id");
         var name = $("#name"+id+"").val();
         var price = $("#price"+id+"").val();
         var quantity = $("#quantity"+id+"").val();

         $.ajax({
            method:"POST",
            url: "add_to_cart.php",
            data:{id:id,name:name,price:price,quantity:quantity},
            success:function(data){
            	alert("you have add new item");
            }
         });
    });
	
	});

</script>

</body>
<br> &nbsp; &nbsp; <br>
 <br> &nbsp; &nbsp; <br>
 <br> &nbsp; &nbsp; <br>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Merch</title>
  <link rel="stylesheet" type="text/css" href="color2.css">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>




<footer>
<br> &nbsp; &nbsp; <br>
 <br> &nbsp; &nbsp; <br> 
<div class="end">
  <div class="end2">
<section class="footer">
<div class="social">
  <a href="#"><i class="fab fa-instagram"></i></a>
  <a href="#"><i class="fab fa-snapchat"></i></a>
  <a href="#"><i class="fab fa-twitter"></i></a>
  <a href="#"><i class="fab fa-facebook"></i></a>
</div>

<ul class="list">
  <li>
    <a href="#">About Us</a>
  </li>
  <li>
    <a href="#">Service</a>
  </li>
  <li>
    <a href="#">About</a>
  </li>
  <li>
    <a href="#">Terms</a>
  </li>
  <li>
    <a href="#">Privacy Policy</a>
  </li>
  </ul>
  <p class="copyright">
    Copyright<i class="fa-regular fa-copyright"></i> BoobTube. All Rights Reserved<i class="fa-regular fa-registered"></i>. 2022
  </p>
</section>
</div>
</div>
</footer>
</body>
<style>
    @media screen and (max-width: 700px) {
    body{
      height: 2400px;
      overflow: hidden;
      background-image: url(/rp3/images/rain.gif);
      background-size:100%;
  
    }
    .footer{
      bottom: 0px;
    }
}
</style>
</html> 