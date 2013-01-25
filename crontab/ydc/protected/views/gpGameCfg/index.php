<?php
/* @var $this GpGameCfgController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Gp Game Cfgs',
);

$this->menu=array(
	array('label'=>'Create gpGameCfg', 'url'=>array('create')),
	array('label'=>'Manage gpGameCfg', 'url'=>array('admin')),
);
?>

<h1>Gp Game Cfgs</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
