<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Curso */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Cursos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="wesley_tm_section" id="home" style="margin-top: 100px; background: #ffffff;">
        <div class="wesley_tm_hero_header">
            <div class="wesley_tm_universal_box_wrap">
       <div class="container">

  <!-- Portfolio Item Heading -->
  <h1 class="my-4"><?= $model->titulo ?>
     
  </h1>
  
  <!-- Portfolio Item Row -->
  <div class="row">

    <div class="col-md-8">
        <img class="img-fluid" src="/images/cursopadrao.fw.png" alt="">
        
       
    </div>

    <div class="col-md-4">
      <h3 class="my-3">Programa</h3>
      <?= $model->texto ?>
      <h3 class="my-3">Detalhes</h3>
      <ul>
          <li><span><strong>Objetivo:</strong>  <?= $model->objetivo ?></span></li>
          <li><strong><?= $model->subtitulo?></strong></li>
        <li><strong>Publico Alvo:</strong> <?= $model->publicoAlvo?></li>
        <li><strong>Carga Horária:</strong> <?= $model->cargahoraria?></li>
        
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
