<?php
/* @var $this GpSourceCfgController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Gp Source Cfgs',
);

$this->menu=array(
	array('label'=>'Create gpSourceCfg', 'url'=>array('create')),
	array('label'=>'Manage gpSourceCfg', 'url'=>array('admin')),
);
?>

<h1>Gp Source Cfgs</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
