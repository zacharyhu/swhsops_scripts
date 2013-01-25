<?php
/* @var $this MoniterPortListController */
/* @var $model MoniterPortList */

$this->breadcrumbs=array(
	'Moniter Port Lists'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List MoniterPortList', 'url'=>array('index')),
	array('label'=>'Create MoniterPortList', 'url'=>array('create')),
	array('label'=>'Update MoniterPortList', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete MoniterPortList', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage MoniterPortList', 'url'=>array('admin')),
);
?>

<h1>View MoniterPortList #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'item_id',
		'item_name',
		'item_host',
		'item_port',
	),
)); ?>
