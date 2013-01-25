<?php
/* @var $this DailyCashController */
/* @var $model DailyCash */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'daily-cash-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'l_date'); ?>
		<?php echo $form->textField($model,'l_date',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'l_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'l_cash_sum'); ?>
		<?php echo $form->textField($model,'l_cash_sum'); ?>
		<?php echo $form->error($model,'l_cash_sum'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'l_total_num'); ?>
		<?php echo $form->textField($model,'l_total_num',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'l_total_num'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'l_avg'); ?>
		<?php echo $form->textField($model,'l_avg',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'l_avg'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'l_type'); ?>
		<?php echo $form->textField($model,'l_type'); ?>
		<?php echo $form->error($model,'l_type'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->