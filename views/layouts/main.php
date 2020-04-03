<?php

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\HeadAsset;
use app\assets\BottomAsset;
use yii\widgets\Alert;
use app\models\Setup;
use app\models\User;
use app\models\Perfil;
/* @var $this \yii\web\View */
/* @var $content string */
/* @var $model app\models\Sala */


HeadAsset::register($this);
//$modelUsers =  User::findByUsername(Yii::$app->user->identity->username) 
?>
<?php BottomAsset::register($this);    ?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<!-- saved from url=(0060)http://frenify.com/envato/marketify/html/wesley/1/index.html -->
<html lang="en"><!--<![endif]--><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">



<meta name="description" content="Name of your web site">
<meta name="author" content="Marketify">

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<title>SB Laser e Saúde</title>

<!-- STYLES -->
<link href="./SBlaser_files/css" rel="stylesheet">
<link href="./SBlaser_files/css(1)" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="./SBlaser_files/plugins.css">
<link rel="stylesheet" type="text/css" href="./SBlaser_files/style.css">
<!--[if lt IE 9]> <script type="text/javascript" src="js/modernizr.custom.js"></script> <![endif]-->
<!-- /STYLES -->

<style type="text/css" id="#jarallax-clip-0">#jarallax-container-0 {
   clip: rect(0 1349px 577px 0);
   clip: rect(0, 1349px, 577px, 0);
}</style><style type="text/css" id="#jarallax-clip-2">#jarallax-container-2 {
   clip: rect(0 1349px 452px 0);
   clip: rect(0, 1349px, 452px, 0);
}</style><style type="text/css" id="#jarallax-clip-1">#jarallax-container-1 {
   clip: rect(0 1349px 272px 0);
   clip: rect(0, 1349px, 272px, 0);
}</style></head>

<body>
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v6.0&appId=619256671445990&autoLogAppEvents=1"></script>
<!-- WRAPPER ALL -->
<div class="wesley_tm_wrapper_all">
	
	<!-- PRELOADER -->
	<div class="wesley_tm_preloader loaded">
		<div class="spinner_wrap">
			<div class="spinner"></div>
		</div>
	</div>
	<!-- /PRELOADER -->

	<div id="wesley_tm_popup_blog">
		<div class="container">
			<div class="inner_popup scrollable" tabindex="5000" style="height: 477px; overflow: hidden; outline: none;"></div>
		</div>
		<span class="close"><a href="#"></a></span>
	</div>
	
    <!-- HEADER -->
    <header class="wesley_tm_header">
		<div class="wesley_tm_navigation_wrap">
			<div class="container">
				<div class="navigation_inner">
					<div class="logo">
						<a class="light_logo" href="#"><img width="118" src="./SBlaser_files/logo.png" alt=""></a>
					</div>
					<div class="nav_list_wrap">
						<div class="menu">
							<ul class="anchor_nav">
								<li class="current"><a href="#home">Home</a></li>
								<li class=""><a href="#about">Perfil</a></li>
                                                                <li class=""><a href="#sobre">Atuação</a></li>
									<li class=""><a href="#cursos">Cursos</a></li>
								<li class=""><a href="#services">Serviços</a></li>
							
								<li class=""><a href="#portfolio">Agenda</a></li>
								<li class=""><a href="#testimonials">Depoimentos</a></li>
								<li class=""><a href="#news">Notícias</a></li>
								<li class=""><a href="#contact">Contatos</a></li>
							</ul>
						</div>
					</div>
					<div class="wesley_tm_trigger">
						<div class="hamburger hamburger--collapse-r">
							<div class="hamburger-box">
								<div class="hamburger-inner"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
   		<div class="wesley_tm_mobile_menu_wrap">
   			<div class="mob_menu">
				<ul class="anchor_nav">
					<li class="current"><a href="#home">Home</a></li>
								<li class=""><a href="#sobre">Atuação</a></li>
								<li class=""><a href="#about">Perfil</a></li>
									<li class=""><a href="#services">Cursos</a></li>
							<!--	<li class=""><a href="#services">Serviços</a></li> -->
							
								<li class=""><a href="#portfolio">Agenda</a></li>
								<li class=""><a href="#testimonials">Depoimentos</a></li>
								<li class=""><a href="#news">Notícias</a></li>
								<li class=""><a href="#contact">Contatos</a></li>
				</ul>
			</div>
		</div>
    </header>
    <!-- /HEADER -->
        <?php $this->head() ?>
        

        <?php $this->beginBody() ?>
        <?= Html::csrfMetaTags() ?>
       
    
               <!-- CONTENT -->
<div class="wesley_tm_content">
        

                <?= $content ?>



  





  <!-- FOOTER -->
    <div class="wesley_tm_footer_total_wrap">
        <div class="wesley_tm_address_holder_wrap">
            <div class="container">
                <div class="inner_wrap">
                    <ul>
                        <li class="wow fadeIn" data-wow-duration="1.2s" data-wow-delay="0.2s" style="visibility: visible; animation-duration: 1.2s; animation-delay: 0.2s; animation-name: fadeIn;">
                            <div class="image_holder logo">
                                <img src="./SBlaser_files/logo.png" alt="">
                            </div>
                            <p>Creative portfolio studio</p>
                        </li>
                        <li class="wow fadeIn" data-wow-duration="1.2s" data-wow-delay="0.4s" style="visibility: visible; animation-duration: 1.2s; animation-delay: 0.4s; animation-name: fadeIn;">
                            <div class="image_holder">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 480.56 480.56" style="enable-background:new 0 0 480.56 480.56;" xml:space="preserve" class="svg replaced-svg">
                                <g>
                                <g>
                                <path d="M365.354,317.9c-15.7-15.5-35.3-15.5-50.9,0c-11.9,11.8-23.8,23.6-35.5,35.6c-3.2,3.3-5.9,4-9.8,1.8    c-7.7-4.2-15.9-7.6-23.3-12.2c-34.5-21.7-63.4-49.6-89-81c-12.7-15.6-24-32.3-31.9-51.1c-1.6-3.8-1.3-6.3,1.8-9.4    c11.9-11.5,23.5-23.3,35.2-35.1c16.3-16.4,16.3-35.6-0.1-52.1c-9.3-9.4-18.6-18.6-27.9-28c-9.6-9.6-19.1-19.3-28.8-28.8    c-15.7-15.3-35.3-15.3-50.9,0.1c-12,11.8-23.5,23.9-35.7,35.5c-11.3,10.7-17,23.8-18.2,39.1c-1.9,24.9,4.2,48.4,12.8,71.3    c17.6,47.4,44.4,89.5,76.9,128.1c43.9,52.2,96.3,93.5,157.6,123.3c27.6,13.4,56.2,23.7,87.3,25.4c21.4,1.2,40-4.2,54.9-20.9    c10.2-11.4,21.7-21.8,32.5-32.7c16-16.2,16.1-35.8,0.2-51.8C403.554,355.9,384.454,336.9,365.354,317.9z"></path>
                                <path d="M346.254,238.2l36.9-6.3c-5.8-33.9-21.8-64.6-46.1-89c-25.7-25.7-58.2-41.9-94-46.9l-5.2,37.1    c27.7,3.9,52.9,16.4,72.8,36.3C329.454,188.2,341.754,212,346.254,238.2z"></path>
                                <path d="M403.954,77.8c-42.6-42.6-96.5-69.5-156-77.8l-5.2,37.1c51.4,7.2,98,30.5,134.8,67.2c34.9,34.9,57.8,79,66.1,127.5    l36.9-6.3C470.854,169.3,444.354,118.3,403.954,77.8z"></path>
                                </g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                </svg>
                            </div>
                            <p>+77 (022) 177 05 05</p>
                        </li>
                        <li class="wow fadeIn" data-wow-duration="1.2s" data-wow-delay="0.6s" style="visibility: visible; animation-duration: 1.2s; animation-delay: 0.6s; animation-name: fadeIn;">
                            <div class="image_holder">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" width="511.626px" height="511.626px" viewBox="0 0 511.626 511.626" style="enable-background:new 0 0 511.626 511.626;" xml:space="preserve" class="svg replaced-svg">
                                <g>
                                <g>
                                <path d="M49.106,178.729c6.472,4.567,25.981,18.131,58.528,40.685c32.548,22.554,57.482,39.92,74.803,52.099    c1.903,1.335,5.946,4.237,12.131,8.71c6.186,4.476,11.326,8.093,15.416,10.852c4.093,2.758,9.041,5.852,14.849,9.277    c5.806,3.422,11.279,5.996,16.418,7.7c5.14,1.718,9.898,2.569,14.275,2.569h0.287h0.288c4.377,0,9.137-0.852,14.277-2.569    c5.137-1.704,10.615-4.281,16.416-7.7c5.804-3.429,10.752-6.52,14.845-9.277c4.093-2.759,9.229-6.376,15.417-10.852    c6.184-4.477,10.232-7.375,12.135-8.71c17.508-12.179,62.051-43.11,133.615-92.79c13.894-9.703,25.502-21.411,34.827-35.116    c9.332-13.699,13.993-28.07,13.993-43.105c0-12.564-4.523-23.319-13.565-32.264c-9.041-8.947-19.749-13.418-32.117-13.418H45.679    c-14.655,0-25.933,4.948-33.832,14.844C3.949,79.562,0,91.934,0,106.779c0,11.991,5.236,24.985,15.703,38.974    C26.169,159.743,37.307,170.736,49.106,178.729z"></path>
                                <path d="M483.072,209.275c-62.424,42.251-109.824,75.087-142.177,98.501c-10.849,7.991-19.65,14.229-26.409,18.699    c-6.759,4.473-15.748,9.041-26.98,13.702c-11.228,4.668-21.692,6.995-31.401,6.995h-0.291h-0.287    c-9.707,0-20.177-2.327-31.405-6.995c-11.228-4.661-20.223-9.229-26.98-13.702c-6.755-4.47-15.559-10.708-26.407-18.699    c-25.697-18.842-72.995-51.68-141.896-98.501C17.987,202.047,8.375,193.762,0,184.437v226.685c0,12.57,4.471,23.319,13.418,32.265    c8.945,8.949,19.701,13.422,32.264,13.422h420.266c12.56,0,23.315-4.473,32.261-13.422c8.949-8.949,13.418-19.694,13.418-32.265    V184.437C503.441,193.569,493.927,201.854,483.072,209.275z"></path>
                                </g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                </svg>
                            </div>
                            <p><a href="http://frenify.com/envato/marketify/html/wesley/1/index.html#">example@gmail.com</a></p>
                        </li>
                        <li class="wow fadeIn" data-wow-duration="1.2s" data-wow-delay="0.8s" style="visibility: visible; animation-duration: 1.2s; animation-delay: 0.8s; animation-name: fadeIn;">
                            <div class="image_holder">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 54.757 54.757" style="enable-background:new 0 0 54.757 54.757;" xml:space="preserve" class="svg replaced-svg">
                                <path d="M40.94,5.617C37.318,1.995,32.502,0,27.38,0c-5.123,0-9.938,1.995-13.56,5.617c-6.703,6.702-7.536,19.312-1.804,26.952  L27.38,54.757L42.721,32.6C48.476,24.929,47.643,12.319,40.94,5.617z M27.557,26c-3.859,0-7-3.141-7-7s3.141-7,7-7s7,3.141,7,7  S31.416,26,27.557,26z"></path>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                </svg>
                            </div>
                            <p>123 Qwerty Avenue NYC, USA</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="wesley_tm_footer_wrap">
            <p class="wow fadeIn" data-wow-duration="1.2s" style="visibility: visible; animation-duration: 1.2s; animation-name: fadeIn;">© Copyright 2018. Theme designed by <a href="https://themeforest.net/user/marketify">Marketify</a></p>
        </div>
    </div>
    <!-- /FOOTER -->

</div>
<!-- /CONTENT -->

<a class="wesley_tm_totop" href="http://frenify.com/envato/marketify/html/wesley/1/index.html#"><i class="xcon-angle-up"></i></a> 


          
        <?php if (isset($this->blocks['modals'])): ?>
            <?= $this->blocks['modals'] ?>
        <?php else: ?>
            <!-- no modals -->
        <?php endif; ?>
            
        <?php $this->endBody() ?>
     </div>
<!-- / WRAPPER ALL -->
	
<!-- SCRIPTS -->
<script src="./SBlaser_files/jquery.js.download"></script>
<!--[if lt IE 10]> <script type="text/javascript" src="js/ie8.js"></script> <![endif]-->	
<script src="./SBlaser_files/plugins.js.download"></script>
<script src="./SBlaser_files/init.js.download"></script>
<!-- /SCRIPTS -->


<div id="ascrail2000" class="nicescroll-rails" style="width: 0px; z-index: 99999999; cursor: default; position: absolute; top: 50px; left: 1259.5px; height: 526px; display: none;">
    <div style="position: relative; top: 0px; float: right; width: 0px; height: 0px; background-color: rgb(66, 66, 66); border: 0px solid rgb(255, 255, 255); background-clip: padding-box; border-radius: 5px;"></div></div><div id="ascrail2000-hr" class="nicescroll-rails" style="height: 0px; z-index: 99999999; top: 576px; left: 89.5px; position: absolute; cursor: default; display: none;"><div style="position: relative; top: 0px; height: 0px; width: 0px; background-color: rgb(66, 66, 66); border: 0px solid rgb(255, 255, 255); background-clip: padding-box; border-radius: 5px;"></div></div>
</body>
</html>
<?php $this->endPage() ?>
