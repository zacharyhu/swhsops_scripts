<?php
/* @var $this GpGameSourceCfgController */
/* @var $model GpGameSourceCfg */

$this->breadcrumbs=array(
	'Gp Game Source Cfgs'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List GpGameSourceCfg', 'url'=>array('index')),
	array('label'=>'Create GpGameSourceCfg', 'url'=>array('create')),
	array('label'=>'View GpGameSourceCfg', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage GpGameSourceCfg', 'url'=>array('admin')),
);
?>

<h1>Update GpGameSourceCfg <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>