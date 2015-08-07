<html>
<head>
	<title>Welcome</title>
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

		#logo{
			height:233px;
			width:550px;
			vertical-align: center;
			margin:auto;

		}

		
		p {
			text-align: center;
			text-decoration: none;
			
			font-weight: bold
		}

		a{
			color:black;
		}

		/*body {
 		height:100%; 
 		width:100%;
		background-image: url(../assets/images/C.jpg);	
		background-size:   100%;                    
    	background-repeat: no-repeat;
  	  	background-position: center  center  fixed;
		}
*/
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
   			 z-index: 1; 
   			 vertical-align: center  		

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
  			z-index: 2;
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

	</style>
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
	img{
			margin-left:420px;
			margin-top:30px;		
			margin: 20px auto;
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
	 	
	 	<div id='logbox'>

    	  <form class="form-signin" action="register" method="post">
     	   <h2 class="form-signin-heading">Please sign in</h2>
     	   		<div class="errors" ><?= $this->session->flashdata('login_errors') ;?></div>
	        <label for="inputName" class="sr-only">Name</label>
	        <input type="text" name='name' class="form-control" placeholder="Name" required autofocus>

	        <label for="inputAlias" class="sr-only">Alias</label>
	        <input type="text" name='alias' class="form-control" placeholder="Alias" required autofocus>


	        <label for="inputEmail" class="sr-only">Email address</label>
	        <input type="email" name='email' class="form-control" placeholder="Email address" required autofocus>

	        <label for="inputPassword" class="sr-only">Password</label>
	        <input type="password"  name='pwd' class="form-control" placeholder="Password" required autofocus>

	        <label for="inputCnfPassword" class="sr-only">Confirm Password</label>
	        <input type="password" name='cnfpwd' class="form-control" placeholder="Confirm Password" required autofocus>

	          <button class="btn btn-lg btn-primary center-block" type="submit">Sign in</button>

	           </form>
	    </div>  
	      </div>
     <div class="col-md-2"></div>
        </div>  
       
        </div>
      
     
       

    </div> <!-- /container -->
	<!-- <h2>Register</h2>
	<div class="errors" ><?= $this->session->flashdata('registration_errors') ;?></div>
	<form action="register" method="post">
		Name:<input type="text" name='name'><br><br>
		Alias:<input type="text" name='alias'><br><br>
		Email:<input type="text" name='email'><br><br>
		Password:<input type="password" name='pwd'><br><br>
		<p>*Password should be atleast 8 characters</p>
		Confirm Password:<input type="password" name='cnfpwd'><br><br>
		<input type="submit" value="Register">
	</form> -->
	

</body>
</html>