<?php
/* @var $this DailyVipController */
/* @var $model DailyVip */

$this->breadcrumbs=array(
	'查询会员数据',
);

$this->menu=array(
	array('label'=>'查看每日充值数据', 'url'=>array('/dailyCash/admin')),
	array('label'=>'查看每日游戏点消耗数据', 'url'=>array('/dailyGame/admin')),
	array('label'=>'查看每日会员数据', 'url'=>array('/dailyVip/admin')),
	array('label'=>'查看每日用户活跃数据', 'url'=>array('/dailyUser/admin')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('daily-vip-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>会员数据查询</h1>

<p>
可以使用下列比较符号进行筛选 (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>)  如 在日期框输入'<121110'敲回车搜索12年11月10 以前数据
</p>

<?php echo CHtml::link('高级搜索','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'daily-vip-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		//'id',
		'l_date',
		//'l_mon_points',
		'l_mon_num',
		'l_coin_points',
		'l_coin_num',		
		'l_ingame_num',
		'l_incash_num',
		'l_cash_sum',
		/*
		array(
			'class'=>'CButtonColumn',
		),
		*/
	),
)); ?>
