<?php
/* @var $this GpRechargeHisController */
/* @var $data GpRechargeHis */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('vc_stb_id')); ?>:</b>
	<?php echo CHtml::encode($data->vc_stb_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('member_id')); ?>:</b>
	<?php echo CHtml::encode($data->member_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('l_money')); ?>:</b>
	<?php echo CHtml::encode($data->l_money); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('l_date')); ?>:</b>
	<?php echo CHtml::encode($data->l_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('l_time')); ?>:</b>
	<?php echo CHtml::encode($data->l_time); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('l_type')); ?>:</b>
	<?php echo CHtml::encode($data->l_type); ?>
	<br />


</div>