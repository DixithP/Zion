<html>
<head>
	<title>Books Home</title>
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

		#main ,h3{
		font-weight: bold;
		font-style: italic;
		font-size: 1.3em;
		padding-right: 2em
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

	hr{
		color: black
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
		overflow: scroll;

	}

	#main-right{
		border :5px solid brown;
		border-radius: 15px;
		margin :20px;
		width:30%;
		text-align: center;
		font-family: haveltica;
		margin:3%;
		vertical-align: top;
		display: inline-block;

	}

	#head-right{
		display:inline-block;
		width:58%;
		vertical-align: top;
		text-align: right;
		padding-right: 40px;
		padding-top: 2px;
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

	p {
		font-size: .7em;
		font-family: haveltica;
		font-style: italic;
		padding-left: 20px
	}

	#reviews{
		border-bottom: 1px dashed black;
		padding:; 5px;
	}

	


	</style>
</head>
<body>
		<div class='container-fluid'>
			<div id="head-left">
				<img src="../../assets/images/logosmall.jpg">
			</div>
			<div id="head-right">
					<h3>Welcome <?= $this->session->userdata('username') ?> !</h3>
				<ul>
					<li><a href="/mains/add_new_book">Add Book and  Review</a></li>
					<li><a href="/mains/logout"> Logout</a></li>
				<ul>
			</div>
	
		<div id="main">
					<h3>Recent Book Reviews:</h3>
					<hr>
				    <?php 
				 foreach ($books as $book) { ?> 	
				
				Book   : <a href="/mains/book_review/<?= $book['book_Id']?>"<h2> <?= $book['title'] ?></h2></a><br>
				Author :<?= $book['author']?><br>
				Rating :
				<?php
			    for($x=1;$x<= 5;$x++) {       
			   		if($x<= $book['rating']){
			       	 echo '<img src="/assets/images/stars/starsharp.png" />';
			  		}
			  		else{
			  			echo '<img src="/assets/images/stars/emptystar.png" />';
			  		}
			        
			    }
				?><br>
				<div id="reviews">
					Reviews :
				   <?php 
					 foreach ($reviews as $review) { 
					 	if($book['book_Id'] == $review['book_Id']) {?> 
						<p> <a href="/mains/user/<?= $review['id']?>"><?= $review['name'] ?></a> says : <?= $review['review'] ?> on <? $datedislay= strtotime($review['created_at']) ?> <?= date("j F Y",$datedislay ); ?></p>
								
					<?php }  ?>
				
			<?php }  ?>
			</div>

			
		<?php }  ?>
			
				
		</div>
		<div id="main-right">
			<h3>Other Books with Reviews</h3>
				<?php 
				 foreach ($result2 as $row) { ?> 	
				
				<h4><a href="/mains/book_review/<?= $row['Id'] ?>"?>	<?= $row['title'] ?> </a></h4>
				
				<?php }  ?>
		</div>

</div>

</body>
</html>