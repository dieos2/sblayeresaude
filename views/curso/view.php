<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Curso */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Cursos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<style>
    .wesley_tm_header{
        background: #ffffff !important;
    }
    .wesley_tm_navigation_wrap .menu > ul > li a{
        color: #000;
    }
</style>
<div class="wesley_tm_section" id="home" style="margin-top: 100px; background: #ffffff;">
        <div class="wesley_tm_hero_header">
            <div class="wesley_tm_universal_box_wrap">
       <div class="container">

  <!-- Portfolio Item Heading -->
  <h1 class="my-4"><?= $model->titulo ?>
      <small><?= $model->subtitulo ?></small>
  </h1>

  <!-- Portfolio Item Row -->
  <div class="row">

    <div class="col-md-8">
      <img class="img-fluid" src="https://www.uva.br/sites/default/files/styles/news_detail_slider/public/blog-reconocimiento-voz.png?itok=fWiwR3a-" alt="">
    </div>

    <div class="col-md-4">
      <h3 class="my-3">Programa</h3>
      <?= $model->texto ?>
      <h3 class="my-3">Detalhes</h3>
      <ul>
        <li><?= $model->subtitulo?></li>
        <li>Publico Alvo: <?= $model->publicoAlvo?></li>
        <li>Carga Horária: <?= $model->cargahoraria?></li>
        
      </ul>
    </div>

  </div>
  <!-- /.row -->

  <!-- Related Projects Row -->
    <!-- /.row -->

</div>
<!-- /.container -->
            </div>
            </div>
      </div>
