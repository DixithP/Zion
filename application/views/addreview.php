<html>
<head>
	<title>Book Details</title>
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
  	 	 	opacity:.7;
  	 	 	z-index: -1; 
  	 	 	position: absolute;	 
  	 	 	 display: block; 
		}

		#main{
		border :5px solid brown;
		border-radius: 15px;
		margin :20px;
		height:70%;
		width:50%;
		text-align: left;
		font-family: haveltica;
		margin:3%;
		vertical-align: top;
		display: inline-block;
		padding: 10px;
		overflow: scroll

	}


		#main ,h3{
		font-weight: bold;
		font-style: italic;
		font-size: 1.3em;
		padding-right: 2em
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
		padding: 10px;


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
		font-size: .9em;
		font-family: haveltica;
		font-style: italic;
		padding-left: 20px
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
			<h3>Book : <?= $result[0]['title'] ?></h3>
			<h3>Author : <?= $result[0]['author'] ?></h3>
			<h3>Rating : 
			<?php
			    for($x=1;$x<= 5;$x++) {       
			   		if($x<= $result[0]['rating']){
			       	 echo '<img src="/assets/images/stars/starsharp.png" />';
			  		}
			  		else{
			  			echo '<img src="/assets/images/stars/emptystar.png" />';
			  		}
			        
			    }
				    // var_dump($result);
				    // die();
			?>
			`</h3>
			
			<hr>

			<h3>Reviews :</h3>
			<?php  foreach ($result as $row) {  	
				if	($row['review'] == NULL) { ?>
					<p> No reviews available</p>
				<?php } else { ?>
				<p> <a href="/mains/user/<?= $row['user_id']?>"><?= $row['name'] ?></a> says : <?= $row['review'] ?> on <? $datedislay= strtotime($row['created_at']) ?> <?= date("j F Y",$datedislay ); ?></p>
				<?php if($row['user_id'] == $this->session->userdata('currentuserid')){ ?>
					<a href="/mains/deletereview/<?= $row['id']?>/<?= $row['user_id']?>/<?= $result[0]['book_id']?>"> Delete this review</a><br><br>
					<?php } ?>
				<?php } ?>
			<?php } ?>
		</div>
			<div id="main-right">
				<form action="/mains/add_review_only/<?= $result[0]['book_id']?>/<?=$this->session->userdata('currentuserid')?>" method="post">
					<h2>Add a Review</h2>
					<div class="form-group">
	   					<label for="review">Review:</label>
	    				<textarea class="form-control" name='review' required></textarea>	
  					</div>				
				<button class="btn btn-lg btn-success center-block" type="submit">Add Review</button>
				</form>

		</div>	
	</div>
</body>
</html>