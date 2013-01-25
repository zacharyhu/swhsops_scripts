<?php
/* @var $this CheckPortStatusController */
/* @var $model CheckPortStatus */

$this->breadcrumbs=array(
	'Check Port Statuses'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List CheckPortStatus', 'url'=>array('index')),
	array('label'=>'Manage CheckPortStatus', 'url'=>array('admin')),
);
?>

<h1>Create CheckPortStatus</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>