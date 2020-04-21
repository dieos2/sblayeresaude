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
  <h1 style="color: orange" class="my-4"><?= $model->titulo ?>
      
  </h1>
  <h3 style="    margin-top: 10px;font-style: italic"> <strong><?= $model->subtitulo?></strong></h3>
  <!-- Portfolio Item Row -->
  <div class="row">
      <div class="col-md-8" style="text-align: justify;">
          <p></p>
          <p></p>
      <?= $model->texto ?>
       
           </div>
    <div class="col-md-4">
        <img class="img-fluid" src="http://admin.sblaseresaude.com.br/images/uploads/<?= $model->foto?>" alt="">
        
       
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
