<html>
<head>
	<title>Welcome</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<style>
		.errors{
			color: red;
		}


		h3{
			margin-top: 50px;
			padding :100px 250px -100px 150px;
			color :black;
			font-style: italic;
			font-family: haveltica;
			font-size: 2em
		}
		h4{
			/*margin-top: 50px;
			padding :200px 150px 0px 150px;*/
			color :black;
			font-style: italic;
			font-family: haveltica;
			font-size: 1.8em;
			padding-left:750px;
		}
		#logbox {
			width:500px;
    		margin-top: 20px;
    		margin: auto;
    		border:1px solid gray;
    		border-radius: 15px;
    		padding :20px;   
  			 background-color: black;
    		border: 1px solid white;
   			 opacity: .7;
   			 /*z-index: 1; */
   			/* vertical-align: center;*/
    		

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
			background-image: url(../assets/images/D.jpg);		
  	 	 	opacity:.7;
  	 	 	z-index: -1; 
  	 	 	position: absolute;	 
  	 	 	 display: block; 
		}

		
		p {
			text-align: center;
			text-decoration: none;			
			font-weight: bold;
				font-family: haveltica;
			font-size:1.5em;
		}

		a{
			color:white;
		}
		

		.form-signin {
		  max-width: 530px;
		  padding: 15px;		  
		  margin:auto;
		}

		.form-signin .form-signin-heading,.form-signin .checkbox .btn {
  			margin-bottom: 10px;
  			color:white;
		}
		.form-signin .checkbox {
		  font-weight: normal;
		}
		.form-signin .form-control {
  			position: relative;
  			height: auto;  
  			padding: 10px;
  			font-size: 16px;
		}

		.form-signin .form-control:focus {
  			/*z-index: 2;*/
		}
		.form-signin input[type="email"] {
 			 margin-bottom: -1px;
 			 border-bottom-right-radius: 0;
  			border-bottom-left-radius: 0;
		}

		.form-signin input[type="password"] {
 			 margin-bottom: 10px;
 			 border-top-left-radius: 0;
 			 border-top-right-radius: 0;
		}

		img{
			margin-left:420px;
			margin-top:30px;		
			margin: 20px auto;
		}
		#logo{
			height:233px;
			width:550px;
			vertical-align: center;
			margin:auto;

		}


	</style>
</head>
<body>
	 <div class="container-fluid">	
	 	<div class="row">
	 		  <div class="col-md-2"></div>
	 	
	 <div class="col-md-8">
	 	<div id="logo">
	 		<img src="../assets/images/logo.jpg">
	 	</div>
	 <div id="quote">
      		<h3>You know you’ve read a good book when you turn the last page and feel a little as if you have lost a friend.</h3>
			<h4> –Paul Sweeney</h4>
      	</div> 	
      <form class="form-signin" action="login" method="post">
      	
      	<div id="logbox">
        	<h2 class="form-signin-heading">Log In</h2>
        	<div class="errors" ><?= $this->session->flashdata('login_errors') ;?></div>
        	<label for="inputEmail" class="sr-only">Email address</label>
      	  	<input type="email" name='email' class="form-control" placeholder="Email address" required autofocus>
       		<label for="inputPassword" class="sr-only">Password</label>
       		<input type="password"  name='pwd' class="form-control width:70%" placeholder="Password" required>      
       		<button class="btn btn-lg btn-success center-block" type="submit">Log in</button>
       	 </div>

        </form>
        <p> <a href="mains/reg">Register</a></p>
    </div>
     <div class="col-md-2"></div>
        </div>

    </div> <!-- /container -->


</body>
</html>