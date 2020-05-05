<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Contatos';
$this->params['breadcrumbs'][] = $this->title;

?>
<?= $model->nome?>
<script>
    $(function(){
        
        alert("Mensagem enviada")
    })
    </script>
