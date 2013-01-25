<?php
/* @var $this CheckPortStatusController */
/* @var $model CheckPortStatus */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'check-port-status-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'item_id'); ?>
		<?php echo $form->textField($model,'item_id'); ?>
		<?php echo $form->error($model,'item_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'item_name'); ?>
		<?php echo $form->textField($model,'item_name',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'item_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'check_status'); ?>
		<?php echo $form->textField($model,'check_status'); ?>
		<?php echo $form->error($model,'check_status'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'check_last_time'); ?>
		<?php echo $form->textField($model,'check_last_time'); ?>
		<?php echo $form->error($model,'check_last_time'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'failed_times'); ?>
		<?php echo $form->textField($model,'failed_times'); ?>
		<?php echo $form->error($model,'failed_times'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->