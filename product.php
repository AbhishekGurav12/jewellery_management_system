

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
		
	</script>

	<!--  -->

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

	<?php require 'partials/_navbar.php' ?>


<script type="text/javascript">
	
	const form = document.querySelector('#myForm');

form.addEventListener('submit', (event) => {
  event.preventDefault(); // Prevent default form submission behavior

  // Your code to upload the file and submit the form to the database
});
</script>


<style type="text/css">
	:root
	{
  		--bgcolor: #FBEAEB;
  		--maincolor:#4A154B;
  		--g1: linear-gradient(to right,#aa076b, #61045f);
	}
	.box1{
		
		text-align: center;

	}

	#insert-btn
	{
		background: #aa076b;
		padding:.7rem 5rem;
		border-radius:.8rem;
		color: white;
		font-weight:600;
		font-size:1.6rem;
	}

	.box2{
		margin:2rem;
		border:2px solid black;
		
	}
	#card1
{
	margin-left:6rem;
}
.container
{   
	margin:5rem 3rem;
	box-shadow:2px 2px 3px gray;
	width:18%;
	height:40rem;
	overflow: hidden;
	/* float: left; */
	display: inline-block;
	transition: all 0.3s;
	background-color:white ;
	padding:0;

}

.container:hover
{
	transform: translateY(-6px);
	box-shadow: 10px 0px 14px gray;
}
.img 
{
/*	border: .2rem solid black;*/
/*	margin-top: 10px;*/
	padding:0;
	box-shadow: 0px 11px 40px gray;

}
.img img
{
	width: 100%;
	height:20rem;
	object-fit:fill;


}
.title
{
	
	margin-top:1rem;
	height:4rem;
	text-align: center;
	padding: .6rem;
	
}
.des
{
	height:8rem;
	text-align: center;
	padding:1rem;
	font-size:1.2rem;
}
.price
{

	
	margin: 1rem 2rem;
	background: linear-gradient(125deg, #00ff35 0%, #0095a7 80%);	
	padding:.6rem 1rem;
	width:70%;
	border-radius:15px;
	cursor: pointer;
	transition: all 0.3s;
}
.price:hover
{
	padding-left: 2rem;
}

#ProductModal
{
	font-size:1.6rem;
}
	
</style>
</head>
<body>
  <div class="box1">
  		<button type="button" data-toggle="modal" data-target="#ProductModal" id="insert-btn">Add Product</button>
  </div>


  <div class="modal fade" id="ProductModal" role="dialog">
  	<div class="modal-dialog">
  		<div class="modal-content">

  			 <div class="modal-header">
  				
  				<h5 class="modal-title">Add Product Details</h5>
  				<button type="button" class="close" data-dismiss="modal">&times;</button>
  			 </div>

      <form  method="POST" enctype="multipart/form-data" id="#myForm">
  			 <div class="modal-body"> 	<!-- main body part -->
  				
								
                      <div  class="form-group">
                      		<Label>Select Product Image</Label>
                      		<input type="file" name="input_image" class="form-control" placeholder="choose file">
                      </div>

                      <div  class="form-group">
                      		<Label>Product Name</Label>
                      		<input type="text" name="input-pname" class="form-control" placeholder="Enter Product Name">
                      </div>

                      <div  class="form-group">
                      		<Label>Product Description</Label>
                      		<input type="text" name="input-pdescription" class="form-control" placeholder="Write Some Description about Product">
                      </div>

                      <div  class="form-group">
                      		<Label>Product Price</Label>
                      		<input type="number" name="input-price" class="form-control" placeholder="Enter Product Price">
                      </div>

                      
                 			 	
  			</div>

  			<div class="modal-footer">
  				<button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
  				<button type="submit" name="submit" class="btn btn-primary" >Add Product</button>
  			</div>
  		</form> 


  		</div>
  	</div>
  </div>

  <!-- php code to upload data on database -->
  <?php
  		//connect to database
  		$con = mysqli_connect("localhost","root","","phpmp");

  		if(isset($_POST['submit']))
  		{
  			 // Get form data
  			$p_name = $_POST["input-pname"];
        $p_des = $_POST["input-pdescription"];
        $p_price = $_POST["input-price"];
  			// Get image data
      $p_image = $_FILES["input_image"];
      
      $filename=$p_image['name'];
      $filetmp=$p_image['tmp_name'];

     $destinationfile= 'partials/uploaded/'. $filename;
     move_uploaded_file($filetmp, $destinationfile);


     $q = "INSERT INTO `product` (`product_image`, `product_name`, `product_des`, `price`)
      VALUES ('$destinationfile','$p_name','$p_des','$p_price')";


      $query = mysqli_query($con,$q);
     /* 
   

      // Prepare SQL statement to insert data into database
      $sql = "INSERT INTO product (product_image, product_name, product_des, price) VALUES (?,?,?,?)";

      
      $stmt = mysqli_prepare($con, $sql);
      mysqli_stmt_bind_param($stmt, "bsss", $p_image, $p_name, $p_des, $p_price);
   
      //Execute SQL statement
      mysqli_stmt_execute($stmt);
   
     // Close statement and database connection
      mysqli_stmt_close($stmt);
      mysqli_close($con);

      */


   }

	?>
  <!-- end of upload data to database -->

    <div class="box2">
  		<?php

  				//connect to database
  				$con = mysqli_connect("localhost","root","","phpmp");


  				$query="SELECT * from product";
  				$query_run=mysqli_query($con,$query);

  				if(mysqli_num_rows($query_run)>0)
  				{
  					foreach($query_run as $row)
  					{


  		?>
      <!--  for cards-->
      <div class="container" id="card1">
        <div class="img">

          <img src="<?php echo $row["product_image"] ;?>">
          
          <!-- <?php //echo '<img src="data:image/jpeg;base64,' . base64_encode($row['product_image']) . '"/>'; ?> -->

        </div>
        <div class="title">
          <h2><?= $row['product_name'] ?></h2>
        </div>
        <div class="des">
          <p><?= $row['product_des'] ?></p>
        </div>
        <div class="price">
          <h3><?= $row['price'] ?></h3>
        </div>
      </div>

    <?php
    			}
    		}
    		else
    		{

    			 ?>

    			 <div class="card-body">
    			 	 <h3>NO Prodcuts Foound...!!</h3>
    			 </div>

        <?php

        }

        ?>


    </div>

</body>
</html>