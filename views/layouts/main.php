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
								<li class=""><a href="#sobre">Atuação</a></li>
								<li class=""><a href="#about">Perfil</a></li>
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
									<li class=""><a href="#cursos">Cursos</a></li>
								<li class=""><a href="#services">Serviços</a></li>
							
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
       
    
                       

                <?= $content ?>



  






          
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