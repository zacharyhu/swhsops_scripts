<?php
/* @var $this DailyCashController */
/* @var $data DailyCash */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('l_date')); ?>:</b>
	<?php echo CHtml::encode($data->l_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('l_cash_sum')); ?>:</b>
	<?php echo CHtml::encode($data->l_cash_sum); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('l_total_num')); ?>:</b>
	<?php echo CHtml::encode($data->l_total_num); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('l_avg')); ?>:</b>
	<?php echo CHtml::encode($data->l_avg); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('l_type')); ?>:</b>
	<?php echo CHtml::encode($data->l_type); ?>
	<br />


</div>