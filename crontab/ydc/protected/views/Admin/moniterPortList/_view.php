<?php
/* @var $this MoniterPortListController */
/* @var $data MoniterPortList */
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

	<b><?php echo CHtml::encode($data->getAttributeLabel('item_host')); ?>:</b>
	<?php echo CHtml::encode($data->item_host); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('item_port')); ?>:</b>
	<?php echo CHtml::encode($data->item_port); ?>
	<br />


</div>