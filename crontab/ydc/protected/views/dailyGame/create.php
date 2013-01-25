<?php
/* @var $this DailyGameController */
/* @var $model DailyGame */

$this->breadcrumbs=array(
	'Daily Games'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List DailyGame', 'url'=>array('index')),
	array('label'=>'Manage DailyGame', 'url'=>array('admin')),
);
?>

<h1>Create DailyGame</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>