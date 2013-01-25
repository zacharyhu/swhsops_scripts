<?php
/* @var $this GpGameSourceCfgController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Gp Game Source Cfgs',
);

$this->menu=array(
	array('label'=>'Create GpGameSourceCfg', 'url'=>array('create')),
	array('label'=>'Manage GpGameSourceCfg', 'url'=>array('admin')),
);
?>

<h1>Gp Game Source Cfgs</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
