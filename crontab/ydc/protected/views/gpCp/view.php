<?php
/* @var $this GpCpController */
/* @var $model GpCp */

$this->breadcrumbs=array(
	'Gp Cps'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List GpCp', 'url'=>array('index')),
	array('label'=>'Create GpCp', 'url'=>array('create')),
	array('label'=>'Update GpCp', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete GpCp', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage GpCp', 'url'=>array('admin')),
);
?>

<h1>View GpCp #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'l_name',
		'l_type',
	),
)); ?>
