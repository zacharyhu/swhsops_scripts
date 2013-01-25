<?php
/* @var $this GpGameCfgController */
/* @var $model gpGameCfg */

$this->breadcrumbs=array(
	'Gp Game Cfgs'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List gpGameCfg', 'url'=>array('index')),
	array('label'=>'Create gpGameCfg', 'url'=>array('create')),
	array('label'=>'View gpGameCfg', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage gpGameCfg', 'url'=>array('admin')),
);
?>

<h1>Update gpGameCfg <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>