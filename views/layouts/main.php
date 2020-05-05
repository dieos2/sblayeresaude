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

$isMobile = false;

$useragent=$_SERVER['HTTP_USER_AGENT'];

if(preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i',$useragent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($useragent,0,4)))
{
$isMobile = true;
}



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

<link href="/SBlaser_files/css" rel="stylesheet">
<link href="/SBlaser_files/css(1)" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="/SBlaser_files/plugins.css">
<link rel="stylesheet" type="text/css" href="/SBlaser_files/style.css">
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
                                                                 <li class=""><a itemMenu href="#atuacao">Atuação</a></li>
                                                                 <li class=""><a class="itemMenu" href="#about">Perfil</a></li>
                                                               
								<li class=""><a itemMenu href="#cursos">Cursos</a></li>
								<li class=""><a itemMenu href="#services">Serviços</a></li>
                                                                <li class=""><a itemMenu href="#testimonials">Depoimentos</a></li>
                                                                <li class=""><a itemMenu href="#contact">Contato</a></li>
                                                                <li class="" style="margin-right: 2px;"><a href="https://www.facebook.com/sb.laseresaude/" target="_blank" class=""><img width="25" src="/images/facebook.png"/></a></li>
                                                                
                                                                <li class="" style="margin-right: 2px;"><a href="https://www.instagram.com/saviobastos.sb" target="_blank" class=""><img width="25" src="/images/instagram.png"/></a></li>
                                                                 <li class=""><a href="https://api.whatsapp.com/send?phone=5591987027815" target="_blank" class=""><img width="25" src="/images/whatzapp.png"/></a></li>
								<!--<li class=""><a href="#portfolio">Agenda</a></li>-->
								
<!--								<li class=""><a href="#news">Notícias</a></li>
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
								
                                                              <li class="current"><a href="/">Home</a></li>
								<!--<li class=""><a href="#sore">Sobre</a></li>-->
                                                                <li class=""><a href="#atuacao">Atuação</a></li>
                                                                <li class=""><a href="#about">Perfil</a></li>
                                                                <li class=""><a href="#cursos">Cursos</a></li>
								<li class=""><a href="#services">Serviços</a></li>
                                                                <li class=""><a href="#testimonials">Depoimentos</a></li>
                                                                <li class=""><a href="#contact">Contato</a></li>
                                                                <li class="" style="margin-right: 2px;"><a href="https://www.facebook.com/sb.laseresaude/" target="_blanck" class=""><img width="25" src="images/facebook.png"/></a></li>
                                                                
                                                                <li class=""><a href="https://www.instagram.com/saviobastos.sb" target="_blank" class=""><img width="25" src="images/instagram.png"/></a></li>
                                                                  <li class=""><a href="https://api.whatsapp.com/send?phone=5591987027815" target="_blank" class=""><img width="25" src="images/whatzapp.png"/></a></li>
								<!--<li class=""><a href="#portfolio">Agenda</a></li>-->
								
<!--								<li class=""><a href="#news">Notícias</a></li>
								<li class=""><a href="#contact">Contatos</a></li>-->
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
      <div class="wesley_tm_address_holder_wrap" style="">
            <div class="container">
                <div class="inner_wrap">
                    <ul>
                        <li class="wow fadeIn" data-wow-duration="1.2s" data-wow-delay="0.2s" style="visibility: visible; animation-duration: 1.2s; animation-delay: 0.2s; animation-name: fadeIn;">
                            <div class="image_holder logo">
                                <img width="120" src="/images/logobranca.png" alt="">
                            </div>
                           
                        </li>
                        <li class="wow fadeIn" data-wow-duration="1.2s" data-wow-delay="0.4s" style="visibility: visible; animation-duration: 1.2s; animation-delay: 0.4s; animation-name: fadeIn;">
                           
                            <p style="">+55 91 987027815</p>
                        </li>
                        <li class="wow fadeIn" data-wow-duration="1.2s" data-wow-delay="0.6s" style="visibility: visible; animation-duration: 1.2s; animation-delay: 0.6s; animation-name: fadeIn;">
                         
                            <p style="">Trav. Enéas Pinheiro 2738 - Sala 2, Belém-PA. 66095-015.</p>
                        </li>
                        <li class="wow fadeIn" data-wow-duration="1.2s" data-wow-delay="0.8s" style="visibility: visible; animation-duration: 1.2s; animation-delay: 0.8s; animation-name: fadeIn;">
                           
                            <p style="">sb.laseresaude@gmail.com</p>
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
<script src="/SBlaser_files/jquery.js.download"></script>
<!--[if lt IE 10]> <script type="text/javascript" src="js/ie8.js"></script> <![endif]-->	
<script src="/SBlaser_files/plugins.js.download"></script>
<script src="/SBlaser_files/init.js.download"></script>



<div id="ascrail2000" class="nicescroll-rails" style="width: 0px; z-index: 99999999; cursor: default; position: absolute; top: 50px; left: 1259.5px; height: 526px; display: none;">
    <div style="position: relative; top: 0px; float: right; width: 0px; height: 0px; background-color: rgb(66, 66, 66); border: 0px solid rgb(255, 255, 255); background-clip: padding-box; border-radius: 5px;"></div></div><div id="ascrail2000-hr" class="nicescroll-rails" style="height: 0px; z-index: 99999999; top: 576px; left: 89.5px; position: absolute; cursor: default; display: none;"><div style="position: relative; top: 0px; height: 0px; width: 0px; background-color: rgb(66, 66, 66); border: 0px solid rgb(255, 255, 255); background-clip: padding-box; border-radius: 5px;"></div></div>
</body>
</html>
<?php $this->endPage() ?>
