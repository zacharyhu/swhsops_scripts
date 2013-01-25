<?php
/* @var $this MoniterPortListController */
/* @var $model MoniterPortList */

$this->breadcrumbs=array(
	'Moniter Port Lists'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List MoniterPortList', 'url'=>array('index')),
	array('label'=>'Manage MoniterPortList', 'url'=>array('admin')),
);
?>

<h1>Create MoniterPortList</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>