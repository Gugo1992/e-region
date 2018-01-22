<?php


/* @var $this yii\web\View */
use frontend\widgets\MapWidget;
use frontend\widgets\CategoriesWidget;

$this->title = 'My Yii Application';

?>
<div>
    <?= MapWidget::widget();?>
</div>
<div>
<?= CategoriesWidget::widget();?>
</div>