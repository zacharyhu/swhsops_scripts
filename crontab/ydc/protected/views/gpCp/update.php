<?php
/* @var $this GpCpController */
/* @var $model GpCp */

$this->breadcrumbs=array(
	//'Gp Cps'=>array('index'),
	//$model->id=>array('view','id'=>$model->id),
	'更新',
);

$this->menu=array(
	array('label'=>'List GpCp', 'url'=>array('index')),
	array('label'=>'Create GpCp', 'url'=>array('create')),
	array('label'=>'View GpCp', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage GpCp', 'url'=>array('admin')),
);
?>

<h1>Update GpCp <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>