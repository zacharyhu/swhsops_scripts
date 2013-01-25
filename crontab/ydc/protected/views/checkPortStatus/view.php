<?php
/* @var $this CheckPortStatusController */
/* @var $model CheckPortStatus */

$this->breadcrumbs=array(
	'Check Port Statuses'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List CheckPortStatus', 'url'=>array('index')),
	array('label'=>'Create CheckPortStatus', 'url'=>array('create')),
	array('label'=>'Update CheckPortStatus', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete CheckPortStatus', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage CheckPortStatus', 'url'=>array('admin')),
);
?>

<h1>View CheckPortStatus #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'item_id',
		'item_name',
		'check_status',
		'check_last_time',
		'failed_times',
	),
)); ?>
