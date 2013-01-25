<?php
/* @var $this GpSourceCfgController */
/* @var $model gpSourceCfg */

$this->breadcrumbs=array(
	'Gp Source Cfgs'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List gpSourceCfg', 'url'=>array('index')),
	array('label'=>'Manage gpSourceCfg', 'url'=>array('admin')),
);
?>

<h1>Create gpSourceCfg</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>