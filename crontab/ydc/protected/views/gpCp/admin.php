<?php
/* @var $this GpCpController */
/* @var $model GpCp */

$this->breadcrumbs=array(
	//'Gp Cps'=>array('index'),
	'cp管理',
);

$this->menu=array(
	//array('label'=>'List GpCp', 'url'=>array('index')),
	array('label'=>'新建 Cp', 'url'=>array('create')),
	array('label'=>'每日充值', 'url'=>array('/dailyCash/admin')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('gp-cp-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Cp id管理</h1>

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
	'id'=>'gp-cp-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		//'id',
		'l_name',
		'l_type',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
