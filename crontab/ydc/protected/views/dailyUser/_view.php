<?php
/* @var $this DailyUserController */
/* @var $data dailyUser */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('l_date')); ?>:</b>
	<?php echo CHtml::encode($data->l_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('l_active')); ?>:</b>
	<?php echo CHtml::encode($data->l_active); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('l_new_num')); ?>:</b>
	<?php echo CHtml::encode($data->l_new_num); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('l_new_gamer')); ?>:</b>
	<?php echo CHtml::encode($data->l_new_gamer); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('l_source')); ?>:</b>
	<?php echo CHtml::encode($data->l_source); ?>
	<br />


</div>