<?php
/* @var $this GpGameCfgController */
/* @var $model gpGameCfg */

$this->breadcrumbs=array(
	'Gp Game Cfgs'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List gpGameCfg', 'url'=>array('index')),
	array('label'=>'Create gpGameCfg', 'url'=>array('create')),
	array('label'=>'Update gpGameCfg', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete gpGameCfg', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage gpGameCfg', 'url'=>array('admin')),
);
?>

<h1>View gpGameCfg #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'l_game_id',
		'l_game_name',
		'l_game_desc',
		'l_game_spcode',
	),
)); ?>
