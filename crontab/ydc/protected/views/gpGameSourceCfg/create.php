<?php
/* @var $this GpGameSourceCfgController */
/* @var $model GpGameSourceCfg */

$this->breadcrumbs=array(
	'Gp Game Source Cfgs'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List GpGameSourceCfg', 'url'=>array('index')),
	array('label'=>'Manage GpGameSourceCfg', 'url'=>array('admin')),
);
?>

<h1>Create GpGameSourceCfg</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>