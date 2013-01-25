<?php
/* @var $this GpRechargeHisController */
/* @var $model GpRechargeHis */

$this->breadcrumbs=array(
	//'Gp Recharge Hises'=>array('index'),
	'查询用户历史充值',
);

$this->menu=array(
	//array('label'=>'List GpRechargeHis', 'url'=>array('index')),
	//array('label'=>'Create GpRechargeHis', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('gp-recharge-his-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>查询用户历史充值</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'gp-recharge-his-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		//'id',
		'vc_stb_id',
		'member_id',
		'l_money',
		'l_date',
		'l_time',
        array('name'=>'l_type','value'=>'GpCp::model()->getCpName($data->l_type)','filter'=>GpCp::model()->getCpList()),
		//'l_type',
		/*array(
			'class'=>'CButtonColumn',
		),*/
	),
)); ?>
