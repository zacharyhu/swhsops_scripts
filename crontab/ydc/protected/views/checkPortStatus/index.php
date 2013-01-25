<?php
/* @var $this CheckPortStatusController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Check Port Statuses',
);

$this->menu=array(
	array('label'=>'Create CheckPortStatus', 'url'=>array('create')),
	array('label'=>'Manage CheckPortStatus', 'url'=>array('admin')),
);
?>

<h1>Check Port Statuses</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
