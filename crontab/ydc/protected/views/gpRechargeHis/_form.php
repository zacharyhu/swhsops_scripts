<?php
/* @var $this GpRechargeHisController */
/* @var $model GpRechargeHis */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'gp-recharge-his-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'vc_stb_id'); ?>
		<?php echo $form->textField($model,'vc_stb_id',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'vc_stb_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'member_id'); ?>
		<?php echo $form->textField($model,'member_id',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'member_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'l_money'); ?>
		<?php echo $form->textField($model,'l_money'); ?>
		<?php echo $form->error($model,'l_money'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'l_date'); ?>
		<?php echo $form->textField($model,'l_date',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'l_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'l_time'); ?>
		<?php echo $form->textField($model,'l_time',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'l_time'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'l_type'); ?>
		<?php echo $form->textField($model,'l_type',array('size'=>5,'maxlength'=>5)); ?>
		<?php echo $form->error($model,'l_type'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->