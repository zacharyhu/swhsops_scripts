<?php
/* @var $this GpSourceCfgController */
/* @var $model gpSourceCfg */

$this->breadcrumbs=array(
	'Gp Source Cfgs'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List gpSourceCfg', 'url'=>array('index')),
	array('label'=>'Create gpSourceCfg', 'url'=>array('create')),
	array('label'=>'Update gpSourceCfg', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete gpSourceCfg', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage gpSourceCfg', 'url'=>array('admin')),
);
?>

<h1>View gpSourceCfg #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'l_source_id',
		'l_source_name',
	),
)); ?>
