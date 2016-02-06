<!DOCTYPE html>
<html>
<head>
	<title>e Library SVNIT</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
	<link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>

	<style type="text/css">
	body{
		font-family:roboto;
  
	}

	  
	/*.btn:hover{
		background-color: #7343b0;
	}*/

	header{
		background-color:#7343b0;
	
	}

	#abc{
		text-decoration:none;
	}

	a:hover{
		color:white;
	}

	nav{
		background-color: #7343b0;
		margin:0px;
		padding: 0px;
	}
	.container-fluid{
		margin:0px;
		padding: 0px;
	}

	.menu{
		color:white;
	}

	.course{
		 background-color:#7343b0;
		 color:white; 
		 font-size:1.75em;
	}
	.div{
		margin:5px;
		padding: 5px;
	}
     .navbar{
     	background-color:#7343b0;

     }

     @media (max-width: @screen-xs) {
    	h1{font-size: 10px;}
	}

	@media (max-width: @screen-sm) {
    	h1{font-size: 14px;}
	}

     h1{
     	font-size:3.75em;
     }
h5{
    font-size: 1.4em;
}       
    
    .about {
       background-color:#7343b0 ;
       color:white;

    }
    .contact{
    	background-color: white;
    	color:#7343b0;
    }
	</style>


</head>
<body>

<div >
	<header>
		<div class="container">
		<nav class="navbar">
		  <div class="container-fluid">
		    <div class="navbar-header">
		      <a href="http://svnit.ac.in/"><img src="logo.png" style="height:10%;width:10%;"></img></a>
		    </div>

		    <div >  
		        <a href="#" class="course navbar-right"id="abc"> Home</a>
		  </div>
        </nav>

         <div class="row" style="margin-top:8%;">
			<div class="col-sm-3"></div>
			<div class=" col-sm-6" >
				<h1 class="menu" style="text-align:center;text-size:45;">SVNIT <strong>E-LIBRARY</strong></h1>
			</div>

			<div class="col-sm-3">
				<img src="first.jpg" style="width:130px;height:130px;float:centre;"></img>
			</div>
		</div>
		
      </div>
	</header>

	<br/>

	 <div class="container">
	<div class="row">
		<div  >
			<h1 align="center">WELCOME TO <span style="color:#7343b0;">NIT SURAT</span></h1>
		</div>
	</div>

	<br />
   
	<div class="row">
		<div class="col-lg-4  col-sm-12 div">
			<center><a href="btech.html" class="btn btn-lg course ">B.TECH</a></center>
		</div>

		<div class="col-lg-4  col-sm-12 div" >
			<center><a href="mtech.html" class="btn btn-lg course">M.Tech</a></center>
		</div>

		<div class="col-lg-3   col-sm-12 div">
			<center><a href="msc.html" class="btn btn-lg course"> M. Sc.</a></center>
		</div>
	</div>
    </div>
    
    <div class="row about" id="about">
    	
    </div>
    <div class="row contact" id="contact">
    	
    </div>
</div>


<footer style="color:#7343b0;margin:0px;padding-top:30px;">     	    
     		<hr>
     		
     		<div style="height:17px;display:inline;background-color:white">
     		    
     		    <label style="font-weight:1"><small>&copy;2015,Webdevlabs.in</small></label>
     		    <a href="https://www.facebook.com/webdevlabs"><img src="facebook.jpg" style="width:30px;height:30px;float:right;padding:0px 5px 11px 5px"></a>
     		   
     	    
     </footer>

</body>
</html>