<?php
/* @var $this GpSourceCfgController */
/* @var $model gpSourceCfg */

$this->breadcrumbs=array(
	'Gp Source Cfgs'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List gpSourceCfg', 'url'=>array('index')),
	array('label'=>'Create gpSourceCfg', 'url'=>array('create')),
	array('label'=>'View gpSourceCfg', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage gpSourceCfg', 'url'=>array('admin')),
);
?>

<h1>Update gpSourceCfg <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>