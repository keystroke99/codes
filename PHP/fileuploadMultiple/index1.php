<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bhagwadhwaj</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/custom.css">
   
    
</head>
<body data-target=".navbar-fixed-top" ondragstart="return false;" onselectstart="return false;"  oncontextmenu="return false;" onload="clearData();" onblur="clearData();">
<!--Preloader-->
<div class="se-pre-con"></div>
    <section id="home-section" class="main-banner">
        <div class="bg-gradient">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="banner-text">
                            <h1 class="big-text">bhagwadhwaj</h1>
                        </div>
                    </div>
                    
                    <div class="col-md-6 ">
                    	<!--Login Div-->
                    	<?php 
                    	    if(isset($_GET['msg'])){
                    	        
                    	    }
                    	?>
                    	<form method="POST" action="mail.php" enctype="multipartmultipart/form-data">
                        <div class="loginDiv clearfix">
                            <h2 class="login-title">Upload </h2>
                                <div class="form-group">
                                    <input class="form-control myInput" type="text" placeholder="Enter Name" required name="name">
                                    <span class="input-icon"><i class="fa fa-user"></i></span>
                                </div>
                                <div class="form-group">
                                    <input class="form-control myInput" type="text" placeholder="Enter Your Email " required name="email">
                                    <span class="input-icon"><i class="fa fa-envelope"></i></span>
                                </div>
                                 <div class="form-group">
                                    <input class="form-control myInput" type="number" placeholder="Enter Your Number " required name="phone">
                                    <span class="input-icon"><i class="fa fa-phone-square"></i></span>
                                </div>
                                <div class="form-group ">						 
								 <input id="attachment" class="form-control myInput sai" name="attachment" type="file" placeholder="upload Doc" value="" required>
								  <span class="input-icon"><i class="fa fa-upload"></i></span>
								</div>
                                <div class="form-group">
                                    <input class="form-control myInput kri" type="button" value="Add More">
                                </div>
                                
                                <div class="text-center">
                                    <button type="submit">Send</button>
                                </div>
                            
                        </div>
                        </form>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </section>

<footer class="navbar-fixed-bottom ftp"><h2>Design By <a href="http://webdesignershub.co.in/" target="new">Web Designers Hub</a></h2></footer>


<script type="text/javascript" src="assets/js/jquery-2.1.1.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="assets/js/anime.min.js"></script>
<script type="text/javascript" src="assets/js/main.js"></script>
</body>
</html>