<?php
/* @var $this MoniterPortListController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Moniter Port Lists',
);

$this->menu=array(
	array('label'=>'Create MoniterPortList', 'url'=>array('create')),
	array('label'=>'Manage MoniterPortList', 'url'=>array('admin')),
);
?>

<h1>Moniter Port Lists</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
