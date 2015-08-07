<html>
<head>
	<title>Users Review</title>
			<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<style>

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

		#main,h3{
		font-weight: bold;
		font-style: italic;
		font-size: 1.3em;
		padding-right: 2em
	}

	#head-right ul{
		padding :5px;
		margin :0;
		list-style-type: none
	}

	#head-right ul li{
		display:inline;
		padding :5px;
		margin :5px;	
		list-style-type: none
	}

	#head-right ul li a{
		text-decoration: none;
		padding-right :  1em;
		font-size: 1em;
		color: #333333;
		border-right: 1px solid #333333;
		font-weight: bold;
		list-style-type: none;
		font-family: haveltica;
		font-style: italic;
	}
	
	#head-left{
		display:inline-block;
		width:40%;
		vertical-align: top;
		/*text-align: right;*/
		padding-left: 40px;
		padding-top: 2px;
	}


	
	
	#head-right{
		display:inline-block;
		width:50%;
		vertical-align: top;
		text-align: right;
		padding-right: 40px;
		padding: 2px;
	}

		#main{
		border :5px solid brown;
		border-radius: 15px;
		margin :20px;
		width:50%;
		text-align: left;
		font-family: haveltica;
		margin:3%;
		vertical-align: top;
		display: inline-block;
		padding:10px;

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
	#main-right{
		border :5px solid brown;
		border-radius: 15px;
		margin :20px;
		width:30%;
		text-align: left;
		font-family: haveltica;
		margin:3%;
		vertical-align: top;
		display: inline-block;
		padding:10px;

	}

	</style>

</head>
<body>
	<div class="container-fluid">
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
	<div id="main">
		
		<?php foreach ($result1 as $row) { ?>	
		 <h3>Book Lover <?=$row['alias'] ?>' Profile</h3>
		
			<p>User Alias :<?=$row['alias'] ?> </p>
			<p>Name : <?=$row['name'] ?></p>
			<p>Email : <?=$row['email'] ?></p>
			<p>Total Reviews : <?=$row['reviews'] ?></p>
		<?php } ?>
	</div>	

	<div id="main-right">
		<h3>Posted reviews on following books</h3>
		<?php foreach ($result2 as $row) { ?>

			<p><a href="/mains/book_review/<?=$row['id'] ?>"> <?=$row['title'] ?></a><p>
	
		<?php } ?>
	</div>		
	</div>
</body>
</html>