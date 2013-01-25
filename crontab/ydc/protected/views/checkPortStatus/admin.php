<?php
/* @var $this CheckPortStatusController */
/* @var $model CheckPortStatus */

$this->breadcrumbs=array(
	'Check Port Statuses'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List CheckPortStatus', 'url'=>array('index')),
	array('label'=>'Create CheckPortStatus', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('check-port-status-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>端口存活状态监控</h1>


<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'check-port-status-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'item_id',
		'item_name',
		'check_status',
		'check_last_time',
		'failed_times',
// 		array(
// 			'class'=>'CButtonColumn',
// 		),
	),
)); ?>
