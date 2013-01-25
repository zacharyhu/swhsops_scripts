<?php
/* @var $this GpGameSourceCfgController */
/* @var $model GpGameSourceCfg */

$this->breadcrumbs=array(
	'Gp Game Source Cfgs'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List GpGameSourceCfg', 'url'=>array('index')),
	array('label'=>'Create GpGameSourceCfg', 'url'=>array('create')),
	array('label'=>'Update GpGameSourceCfg', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete GpGameSourceCfg', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage GpGameSourceCfg', 'url'=>array('admin')),
);
?>

<h1>View GpGameSourceCfg #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'l_source',
		'l_source_name',
	),
)); ?>
