<?php

<<<<<<< HEAD

/* @var $this yii\web\View */

use frontend\widgets\AboutWidget;

$this->title = 'My Yii Application';

?>
<div>
    <?= AboutWidget::widget();?>
</div>

=======
/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>This is the About page. You may modify the following file to customize its content:</p>

    <code><?= __FILE__ ?></code>
</div>
>>>>>>> d8fd41d4d6fe830d5f958951e3fb4f871f4e8aa2
