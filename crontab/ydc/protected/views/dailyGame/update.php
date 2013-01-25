<?php
/* @var $this DailyGameController */
/* @var $model DailyGame */

$this->breadcrumbs=array(
	'Daily Games'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List DailyGame', 'url'=>array('index')),
	array('label'=>'Create DailyGame', 'url'=>array('create')),
	array('label'=>'View DailyGame', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage DailyGame', 'url'=>array('admin')),
);
?>

<h1>Update DailyGame <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>