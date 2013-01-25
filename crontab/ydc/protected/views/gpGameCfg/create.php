<?php
/* @var $this GpGameCfgController */
/* @var $model gpGameCfg */

$this->breadcrumbs=array(
	'Gp Game Cfgs'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List gpGameCfg', 'url'=>array('index')),
	array('label'=>'Manage gpGameCfg', 'url'=>array('admin')),
);
?>

<h1>Create gpGameCfg</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>