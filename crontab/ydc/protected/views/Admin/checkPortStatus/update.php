<?php
/* @var $this CheckPortStatusController */
/* @var $model CheckPortStatus */

$this->breadcrumbs=array(
	'Check Port Statuses'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List CheckPortStatus', 'url'=>array('index')),
	array('label'=>'Create CheckPortStatus', 'url'=>array('create')),
	array('label'=>'View CheckPortStatus', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage CheckPortStatus', 'url'=>array('admin')),
);
?>

<h1>Update CheckPortStatus <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>