<?php
/* @var $this GpCpController */
/* @var $data GpCp */
?>

<div class="view">

	<!--  <b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br /> -->

	<b><?php echo CHtml::encode($data->getAttributeLabel('l_name')); ?>:</b>
	<?php echo CHtml::encode($data->l_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('l_type')); ?>:</b>
	<?php echo CHtml::encode($data->l_type); ?>
	<br />


</div>