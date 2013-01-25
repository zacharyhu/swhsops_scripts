<?php
/* @var $this GpCpController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'cp 列表',
);

$this->menu=array(
	array('label'=>'创建 GpCp', 'url'=>array('create')),
	array('label'=>'管理 GpCp', 'url'=>array('admin')),
);
?>

<h1>Gp Cps</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
