<?php
	$message_sent = false;
	if(isset($_POST['email']) && $_POST['email'] != ''){
		
		if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
			// submite the form
			$userName = $_POST['name'];
			$userEmail = $_POST['email'];
			$messageSubject = $_POST['subject'];
			$message = $_POST['message'];
		
			$to = "nataliajonik@gmail.com";
			$body = "";
		
			$body .="From: ".$userName. "\r\n";
            $body .="Email: ".$userEmail. "\r\n";
			$body .="Message: ".$message. "\r\n";
		
			//mail($to,$messageSubject,$body);

			$message_sent = true;
		
		}

	}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="kontact-form">
    <meta name="keywords" content="guide, turism, turismo, poland, polonia, visit, Krakow, Cracovia, guia, kazimierz, auschwitz, mina de sal, old town, ciudad vieja, camino real, visita con guia, visita guiada, wawel">
    <title>Guia Natalia</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:300,300i,400,400i,700,700i,800,800i" rel="stylesheet">
    <!-- owl-carousel -->
   <link href="css/owl.carousel.css" rel="stylesheet">
    <link href="css/owl.theme.default.css" rel="stylesheet">
    <!-- jquery ui -->
   <link rel="stylesheet" type="text/css" href="css/jquery-ui.css">
    <!-- FontAwesome CSS -->
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Flags -->
   <link href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.1.0/css/flag-icon.min.css" rel="stylesheet">
        <!-- Custom styles for this template -->
    <!-- Style CSS -->
    <link href="css/style.css" rel="stylesheet" -->
    <link href="css/styleKontakt.css" rel="stylesheet">
    

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
    <div class="wrapper">
        <!-- header-section-->
        <div class="header-wrapper">
            <div class="top-header">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-9 col-lg-7 col-md-8 d-none d-xl-block d-sm-block">
                            <div class="top-header-content">
                                <ul class="list-none">
                                    <li><i class="fa fa-envelope top-header-icon"></i>hola@guianatalia.com</li>
                                    <li><i class="fa fa-phone top-header-icon"></i>+48 530689934</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-4 col-md-3 col-sm-6 col-8 d-none d-block d-sm-block">
                            <div class="top-header-content">
                                <div class="top-social"> <a href="https://www.facebook.com/NataliaJonikTourLeader" target="_blank" class="btn-social-icon"><i class="fa fa-facebook"></i></a> <a href="https://www.linkedin.com/in/natalia-jonik-7254b7b2/" target="_blank" class="btn-social-icon"><i class="fa fa-linkedin"></i></a> 
                                <a href="https://www.instagram.com/_natalia_guia_krk/" target="_blank" class="btn-social-icon"><i class="fa fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class=" col-xl-1 col-lg-1 col-md-1 col-sm-1 col-4">
                            <a href="#" class="search-icon" data-toggle="modal" data-target="#exampleModal">
                           <i class="fa fa-search"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- header-section-->
            <div class="header py-4">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-3 col-lg-2 col-md-3 col-sm-3 col-12">
                            <div class="logo"> <a href="index.html"><img src="#" alt=""> </a> </div>
                        </div>
                        <div class="col-xl-9 col-lg-10 col-md-9 col-sm-12 col-12">
                            <!-- navigations-->
                            <div class="navigation">
                                <div id="navigation">
                                    <ul>
                                        <li class="active"><a href="index.html">Inicio</a></li>
                                        <li class="active"><a href="sobreMi.html">Sobre Mi</a></li>
                                        <li class="nav-item active">
                                            <a class="nav-link dropdown-toggler"href="index.html" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" aria-haspopup="true">
                                                Excursiones
                                            </a>
                                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                <li><a class="dropdown-item" href="caminoReal.html">Camino Real</a></li>
                                                <li><a class="dropdown-item" href="Kazimierz.html">Cracovia judía</a></li>
                                                
                                                <li><a class="dropdown-item" href="Cercanias.html">Cercanías de Cracovia</a></li>
                                            </ul>
                                        </li>
                                        <li class="active"><a href="kontakt.php">Contacto</a></li>
                                        <li class="nav-item active">
                                        <li class="active"><a href="blog.html">Blog</a></li>

                     

                                        <li class="nav-item active">
                                            <a class="nav-link dropdown-toggler"href="index.html" id="navbarLg" role="button" data-bs-toggle="dropdown" aria-expanded="false" aria-haspopup="true">Idioma
                                            </a>
                                            <ul class="dropdown-menu" aria-labelledby="navbarLg">
                                                <li><a class="dropdown-item" href="kontakt.php"><span class="flag-icon flag-icon-es"> </span>Español</a></li>
                                                <li><a class="dropdown-item" href="kontakt.php"><span class="flag-icon flag-icon-pt"> </span>Portugues</a></li>
                                                <li><a class="dropdown-item" href="kontakt.php"><span class="flag-icon flag-icon-us"> </span>English</a></li>
                                            </ul>
                                        </li>
                                
                                    </ul>
                                </div>
                            </div>
                            <!-- /.navigations-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /. header-section-->
        <!-- slider -->

        <!-- /.slider -->
        <!-- enguiry-form -->

        <!-- /.enguiry-form -->
        <!-- contact form -->
        <div class="main-concept">
            <?php
            if($message_sent):
            ?>

                <h3>Thanks, we'll be in touch</h3>
            <?php
            else:
            ?>
            <div class="container-kontakt">
                <form action="kontakt.php" method="POST" class="form">
                    <div class="form-group">
                        <label for="name" class="form-label">Your Name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Jane Doe" tabindex="1" required>
                    </div>
                    <div class="form-group">
                        <label for="email" class="form-label">Your Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="jane@doe.com" tabindex="2" required>
                    </div>
                    <div class="form-group">
                        <label for="subject" class="form-label">Subject</label>
                        <input type="text" class="form-control" id="subject" name="subject" placeholder="Hello There!" tabindex="3" required>
                    </div>
                    <div class="form-group">
                        <label for="message" class="form-label">Message</label>
                        <textarea class="form-control" rows="5" cols="50" id="message" name="message" placeholder="Enter Message..." tabindex="4"></textarea>
                    </div>
                    <div>
                        <button type="submit" class="btn">Send Message!</button>
                    </div>
                </form>
            </div>
            <?php
            endif;
            ?>
        </div>

        

</body>

 
        <!--footer-->
        <div class="footer">
            <div class="container">
                <div class="row ">
                    <!-- footer-logo -->
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12 ">
                        <div class="ft-img"><img src="./images/logo_transparent .png" alt=""></div>
                    </div>
                    <!-- /.footer-logo -->
                    <!-- footer-links -->
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-12 ">
                        <div class="footer-widget ">
                            <h3 class="footer-title ">Enlaces rápidos</h3>
                            <ul class="angle list-none">
                                <li><a href="index.html ">Inicio</a></li>
                                <li><a href="sobreMi.html ">Sobre mi</a></li>
                                <li><a href="blog.html ">Blog</a></li>
                        
                                <li><a href="kontakt.php">Contacto</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- /.footer-links -->
                    <!-- footer-tours -->
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-12 ">
                        <div class="footer-widget ">
                            <h3 class="footer-title ">Excursiónes</h3>
                            <ul class="angle list-none">
                                <li><a href="caminoReal.html ">Camino Real</a>
                                    <li><a href="Kazinierz.html ">Kazimierz</a></li>
                                    <li><a href="Schindler.html ">Fabrica de Schindler</a></li>
                                    <li><a href="Cercanias.html">Cercanías de Cracovia</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- /.footer-Tours -->
                    <!-- footer-post -->
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12 ">
                        <div class="footer-widget">
                            <h3 class="footer-title">Contact Info</h3>
                            <div class="ft-contact-info"> <span class="ft-contact-icon"><i class="fa fa-map-marker"></i></span> <span class="ft-contact-text">ul.Wiślisko 10/4, 31-538 Kraków </span></div>
                            <div class="ft-contact-info"> <span class="ft-contact-icon"><i class="fa fa-phone "></i></span> <span class="ft-contact-text">+48 530689934</span></div>
                            <div class="ft-contact-info"> <span class="ft-contact-icon"><i class="fa fa-envelope "></i></span> <span class="ft-contact-text">hola@guianatalia.com</span></div>
                            <div class="social-icon "> <a href="https://www.facebook.com/NataliaJonikTourLeader" target="_blank" class="btn-social-icon "><i class="fa fa-facebook "></i></a> <a href="https://www.linkedin.com/in/natalia-jonik-7254b7b2/" target="_blank" class="btn-social-icon "><i class="fa fa-linkedin "></i></a> <a href="https://www.instagram.com/_natalia_guia_krk/" target="_blank" class="btn-social-icon"><i class="fa fa-instagram"></i></a> </div>
                        </div>
                    </div>
                    <!-- /.footer-post -->
                </div>
                <!-- tiny-footer -->
            </div>
            <div class="tiny-footer ">
                <div class="container ">
                    <div class="row ">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 text-center ">
                            <p>Copyright © All Rights Reserved 2020 and Template Design and <a href="#" target="_blank " class="copyrightlink ">guianatalia.com</a> & Development by <a href="https://easetemplate.com/ " target="_blank " class="copyrightlink ">EaseTemplate </a>and <a href="#" target="_blank " class="copyrightlink ">Natalia Jonik-Kluczewska</a></p>
                        </div>
                    </div>
                    <!-- /. tiny-footer -->
                </div>
            </div>
        </div>
        <!-- /.footer -->
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <form>
                            <div class="search-form">
                                <input type="text" class="form-control" placeholder="Find here">
                                <button type="button" class="btn btn-primary btn-sm" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">close</span>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.Modal -->
        <a href="javascript:" id="return-to-top"><i class="fa fa-angle-up"></i></a>
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="js/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>
        <script src="js/menumaker.js"></script>
        <script src="js/jquery.sticky.js"></script>
        <script src="js/sticky-header.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/multiple-carousel.js"></script>
        <script src="js/jquery-ui.js"></script>
        <script src="js/date.js"></script>
        <script src="js/return-to-top.js"></script>
        <script src="js/scriptKontact.js"></script>
    


    </div>

</body>

</html>