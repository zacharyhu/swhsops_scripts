<?php
/* @var $this DailyGameController */
/* @var $model DailyGame */

$this->breadcrumbs=array(
	'Daily Games'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List DailyGame', 'url'=>array('index')),
	array('label'=>'Create DailyGame', 'url'=>array('create')),
	array('label'=>'Update DailyGame', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete DailyGame', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage DailyGame', 'url'=>array('admin')),
);
?>

<h1>View DailyGame #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'l_date',
		'l_game_id',
		'l_game_name',
		'l_total_num',
		'l_user_num',
		'l_avg_num',
		'l_game_points',
		'l_cash_sum',
	),
)); ?>
