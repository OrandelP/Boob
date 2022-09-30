<?php 

session_start();

 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Cart</title>
	<link rel="stylesheet" type="text/css" href="../css/color3.css">
  <link rel="icon" href="../images/Xtra.png">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>

	<?php include("include/header.php"); ?>

<div class="fit">
	<div class="container">
		<div class="col-md-12">
			<table class="table table-bordered my-5">
				<tr>
					<th>ITEM ID</th>
					<th>ITEM NAME</th>
					<th>ITEM PRICE</th>
					<th>ITEM QUANTITY</th>
					<th>ACTION</th>
				</tr>

				<?php 

				$total_price = 0;

				if (!empty($_SESSION['cart'])) {
					
					foreach ($_SESSION['cart'] as $key => $value) { ?>
						<tr>
							<td><?php echo $value['id']; ?></td>
							<td><?php echo $value['name']; ?></td>
							<td><?php echo $value['price']; ?></td>
							<td><?php echo $value['quantity']; ?></td>
                             <td>
                             	<button class="btn btn-danger remove" id="<?php echo $value['id']; ?>" onClick="refreshPage()" >Remove</button>
                             </td>
						</tr>

						  <?php $total_price = $total_price + $value['quantity'] * $value['price']; ?>

						
						
					<?php }
				}else{ ?>
                       <tr>
                       	  <td class="text-center" colspan="5">NO ITEM SELECTED</td>
                       </tr>
				<?php }




				 ?>

				 <tr>
							<td colspan="2"></td>
							<td>Total Price</td>
							<td><?php echo number_format($total_price,2); ?></td>
							<td>
                             	<button class="btn btn-warning clearall" onClick="refreshPage()">Clear All</button>
                             </td>
						</tr>
			</table>
		</div>
    </div>
        </div>
	</div>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>



<script type="text/javascript">
	$(document).ready(function(){


		$(".remove").click(function(){
           var id = $(this).attr("id");
                
                var action = "remove";

             $.ajax({
               method:"POST",
               url:"action.php",
               data:{action:action,id:id},
               success:function(data){
                  alert("you have Remove item with ID "+id+"");
               }
            });
		});
        

        $(".clearall").click(function(){
              
              var action = "clear";

            $.ajax({
               method:"POST",
               url:"action.php",
               data:{action:action},
               success:function(data){
                  alert("you have cleared all item");
               }
            });
        });
	});
</script>
<script>
function refreshPage(){
    window.location.reload();
} 
</script>
<br>&nbsp;<br>
<br>&nbsp;<br>
<br>&nbsp;<br>
 
 
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
      height: 1200px;
       overflow: hidden;
      background-image: url(/rp3/images/statik.gif);  
      background-size: 100%;
  
    }
    .footer{
      margin-left: 0;
    margin-right: 0;
    padding: 40px 0;
    background-color: black;
    position: relative;
    width: 100%;
    height: auto;
    bottom: -330px;    }
}
</style>
</html>