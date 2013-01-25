<?php
/* @var $this CheckPortStatusController */
/* @var $data CheckPortStatus */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('item_id')); ?>:</b>
	<?php echo CHtml::encode($data->item_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('item_name')); ?>:</b>
	<?php echo CHtml::encode($data->item_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('check_status')); ?>:</b>
	<?php echo CHtml::encode($data->check_status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('check_last_time')); ?>:</b>
	<?php echo CHtml::encode($data->check_last_time); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('failed_times')); ?>:</b>
	<?php echo CHtml::encode($data->failed_times); ?>
	<br />


</div>