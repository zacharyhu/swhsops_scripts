<?php
/* @var $this DailyGameController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Daily Games',
);

$this->menu=array(
	array('label'=>'Create DailyGame', 'url'=>array('create')),
	array('label'=>'Manage DailyGame', 'url'=>array('admin')),
);
?>

<h1>Daily Games</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
