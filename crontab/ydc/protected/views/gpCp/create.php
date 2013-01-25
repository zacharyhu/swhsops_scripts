<?php
/* @var $this GpCpController */
/* @var $model GpCp */

$this->breadcrumbs=array(
	'新建cp',
);

$this->menu=array(
	array('label'=>'配置cp列表', 'url'=>array('admin')),
	array('label'=>'每日充值', 'url'=>array('/dailyCash/admin')),
);
?>

<h1>新建cp</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>