<html>
<head>
	<title>Add Book and Review</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<style>
	
		span.stars, span.stars span {
	    display: block;
	    background: url(stars.png) 0 -16px repeat-x;
	    width: 80px;
	    height: 16px;
	}

		span.stars span {
   		 background-position: 0 0;
	}


	.container-fluid:before {
			/*padding-top:200px;*/
			margin-left:-15px;
			margin-top:-20px;
 			height:100%; 
 			width:100%;			
			background-size:   100%;                    
    		background-repeat: no-repeat;
  	  		background-position: center  center  fixed;	 
			background-image: url(../../assets/images/A.jpg);		
  	 	 	opacity:.6;
  	 	 	z-index: -1; 
  	 	 	position: absolute;	 
  	 	 	 display: block; 
		}

		
	}

	#head{
		height:100px;
		width:100%;
	/*	background-color: blue;*/
	}
		#head-right{
		display:inline-block;
		width:50%;
		vertical-align: top;
		text-align: right;
		padding-right: 40px;
		padding-top: 2px;
	}

	#head-left{
		display:inline-block;
		width:40%;
		vertical-align: top;
		/*text-align: right;*/
		padding-left: 40px;
		padding-top: 2px;
	}
/*
	/*#main{
		/*background-image: url(../assets/images/main.png);*/
		height:70%;
		width:50%;
		border-radius: 5px;
		border:1px solid black ;
		margin-left: 10px;
		padding :15px;
		
*/}*/

	#head-right ul{
		padding :5px;
		margin :0;
		list-style-type: none
	}

	#head-right ul li{
		display:inline;
		padding :5px;
		margin :5px;	
	}

	#head-right ul li a{
		text-decoration: none;
		padding-right :  1em;
		font-size: 1em;
		color: #333333;
		border-right: 1px solid #333333;
		font-weight: bold;
		font-family: haveltica;
		font-style: italic;
	}

	#main{
		border :5px solid brown;
		border-radius: 15px;
		margin :20px;
		width:50%;
		text-align: left;
		padding:10px;
		font-family: haveltica;
		margin:3%;
		vertical-align: top;
		display: inline-block;
		 background-color: black;
		z-index: 1;
		opacity :.5;
	}

	
label,p{
	color: white;
	font-family: haveltica;
	font-style: italic;
	font-size: normal;

}

h3{
	color: white;
	padding-bottom:5px;
	text-decoration: underline;
}

	
	</style>
</head>
<body>
	<div class='container-fluid'>
	<div id="head">
			<div id="head-left">
				<img src="../../assets/images/logosmall.jpg">
			</div>
			<div id="head-right">
					<h3>Welcome <?= $this->session->userdata('username') ?> !</h3>
				<ul>
						<li><a href="/mains/home">Home</a></li>
					<li><a href="/mains/add_new_book">Add Book and  Review</a></li>
					<li><a href="/mains/logout"> Logout</a></li>
				<ul>
			</div>
		</div>
	<div id="main">
	<h3>Add a New Book Title and a Review</h3>

	<form action="addbook" method="post">
			<div class="errors" ><?= $this->session->flashdata('errors') ;?></div>
		<div class="form-group">
   			<label for="booktitle">Book Title</label>
    		<input type="text" class="form-control" name="newbook" placeholder="Book Title" required>
  		</div>

  		<div class="form-group">
   			<label for="category">Category</label>
   			<select name="category" class="form-control">
   				<option value=""> Select Category </option>
   				<?php foreach ($result1 as $row) { ?>
    				<option  value="<?=$row['Id']?>" required><?=$row['category']?></option>
    			<?php } ?>
    			</select>
  		</div>

  			<div class="form-group">
   			<label for="author">Author</label>
   			<select name="author" class="form-control">
   				<option value=""> Select Author </option>
   				<?php foreach ($result as $row) { ?>
					
					<option value="<?=$row['author']?>" required><?=$row['author']?></option>
					
				<?php } ?>
    		</select>
  		</div>
  		<p> Dint find the author looking for..? Add new author</p>
  		<div class="form-group">
   			<label for="Author"> New Author</label>
    		<input type="text" class="form-control" name="newauthor" placeholder=" New Author" >
  		</div>

  		<div class="form-group">
   			<label for="review">Review:</label>
    		<textarea class="form-control" name='review' required></textarea>	
  		</div>

  		<div class="form-group">
   			<label for="rating">Rating:</label>
    		<select name='rating'  class="form-control">
    				<option value=""> Select Rating </option>
					<option value=1 required> 1 </option>
					<option value=2> 2 </option>
					<option value=3> 3 </option>
					<option value=1> 4 </option>
					<option value=2> 5 </option>					
			</select>
  		</div>

  		<button class="btn btn-lg btn-success center-block" type="submit">Add Book </button>

	</form>
	</div>
	</div>


</body>
</html>