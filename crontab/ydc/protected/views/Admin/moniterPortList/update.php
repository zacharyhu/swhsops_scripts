<?php
/* @var $this MoniterPortListController */
/* @var $model MoniterPortList */

$this->breadcrumbs=array(
	'Moniter Port Lists'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List MoniterPortList', 'url'=>array('index')),
	array('label'=>'Create MoniterPortList', 'url'=>array('create')),
	array('label'=>'View MoniterPortList', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage MoniterPortList', 'url'=>array('admin')),
);
?>

<h1>Update MoniterPortList <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>