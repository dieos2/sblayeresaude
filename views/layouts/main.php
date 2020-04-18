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
<link href="/SBlaser_files/css" rel="stylesheet">
<link href="/SBlaser_files/css(1)" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="/SBlaser_files/plugins.css">
<link rel="stylesheet" type="text/css" href="/SBlaser_files/style.css">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
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
<style>
    .wesley_tm_header{
        background: #ffffff !important;
    }
    .wesley_tm_navigation_wrap .menu > ul > li a{
        color: #000;
    }
</style>
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
						<a class="light_logo" href="/"><img width="118" src="/SBlaser_files/logo.png" alt=""></a>
					</div>
					<div class="nav_list_wrap">
						<div class="menu">
							<ul class="anchor_nav">
								<li class="current"><a href="/">Home</a></li>
								<!--<li class=""><a href="#sore">Sobre</a></li>-->
                                                                <li class=""><a href="#about">Perfil</a></li>
                                                                <li class=""><a href="#sobre">Atuação</a></li>
								<li class=""><a href="#cursos">Cursos</a></li>
								<li class=""><a href="#services">Serviços</a></li>
                                                                <li class="" style="margin-right: 2px;"><a href="#" class=""><img width="25" src="images/facebook.png"/></a></li>
                                                                <li class="" style="margin-right: 2px;"><a href="#" class=""><img width="25" src="images/twitter.png"/></a></li>
                                                                <li class=""><a href="#" class=""><img width="25" src="images/instagram.png"/></a></li>
								<!--<li class=""><a href="#portfolio">Agenda</a></li>-->
<!--								<li class=""><a href="#testimonials">Depoimentos</a></li>
								<li class=""><a href="#news">Notícias</a></li>
								<li class=""><a href="#contact">Contatos</a></li>-->
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
								
                                                                <!--<li class=""><a href="#sobre">Sobre</a></li>-->
								<li class=""><a href="#about">Perfil</a></li>
                                                                <li class=""><a href="#sobre">Atuação</a></li>
									<li class=""><a href="#cursos">Cursos</a></li>
								<li class=""><a href="#services">Serviços</a></li>
							
<!--								<li class=""><a href="#portfolio">Agenda</a></li>-->
								<!--<li class=""><a href="#testimonials">Depoimentos</a></li>-->
								<!--<li class=""><a href="#news">Notícias</a></li>-->
								<!--<li class=""><a href="#contact">Contatos</a></li>-->
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
  <div class="wesley_tm_footer_total_wrap" >
      <div class="wesley_tm_address_holder_wrap" style="background-color: #fff !important;">
            <div class="container">
                <div class="inner_wrap">
                    <ul>
                        <li class="wow fadeIn" data-wow-duration="1.2s" data-wow-delay="0.2s" style="visibility: visible; animation-duration: 1.2s; animation-delay: 0.2s; animation-name: fadeIn;">
                            <div class="image_holder logo">
                                <img src="/SBlaser_files/logo.png" alt="">
                            </div>
                           
                        </li>
                        <li class="wow fadeIn" data-wow-duration="1.2s" data-wow-delay="0.4s" style="visibility: visible; animation-duration: 1.2s; animation-delay: 0.4s; animation-name: fadeIn;">
                           
                            <p style="color: #000;">+55 91 987027815</p>
                        </li>
                        <li class="wow fadeIn" data-wow-duration="1.2s" data-wow-delay="0.6s" style="visibility: visible; animation-duration: 1.2s; animation-delay: 0.6s; animation-name: fadeIn;">
                         
                            <p style="color: #000;">Trav. Enéas Pinhiero 2738 - Sala 2, Belém-PA. 66095-015.</p>
                        </li>
                        <li class="wow fadeIn" data-wow-duration="1.2s" data-wow-delay="0.8s" style="visibility: visible; animation-duration: 1.2s; animation-delay: 0.8s; animation-name: fadeIn;">
                           
                            <p style="color: #000;">sb.laseresaude@gmail.com</p>
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
<!--<script src="/SBlaser_files/jquery.js.download"></script>
[if lt IE 10]> <script type="text/javascript" src="js/ie8.js"></script> <![endif]	
<script src="/SBlaser_files/plugins.js.download"></script>
<script src="/SBlaser_files/init.js.download"></script>-->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<!-- /SCRIPTS -->


<div id="ascrail2000" class="nicescroll-rails" style="width: 0px; z-index: 99999999; cursor: default; position: absolute; top: 50px; left: 1259.5px; height: 526px; display: none;">
    <div style="position: relative; top: 0px; float: right; width: 0px; height: 0px; background-color: rgb(66, 66, 66); border: 0px solid rgb(255, 255, 255); background-clip: padding-box; border-radius: 5px;"></div></div><div id="ascrail2000-hr" class="nicescroll-rails" style="height: 0px; z-index: 99999999; top: 576px; left: 89.5px; position: absolute; cursor: default; display: none;"><div style="position: relative; top: 0px; height: 0px; width: 0px; background-color: rgb(66, 66, 66); border: 0px solid rgb(255, 255, 255); background-clip: padding-box; border-radius: 5px;"></div></div>
</body>
</html>
<?php $this->endPage() ?>
