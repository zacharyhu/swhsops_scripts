<?php
/* @var $this DailyUserController */
/* @var $model dailyUser */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'daily-user-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'l_date'); ?>
		<?php echo $form->textField($model,'l_date'); ?>
		<?php echo $form->error($model,'l_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'l_active'); ?>
		<?php echo $form->textField($model,'l_active'); ?>
		<?php echo $form->error($model,'l_active'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'l_new_num'); ?>
		<?php echo $form->textField($model,'l_new_num'); ?>
		<?php echo $form->error($model,'l_new_num'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'l_new_gamer'); ?>
		<?php echo $form->textField($model,'l_new_gamer'); ?>
		<?php echo $form->error($model,'l_new_gamer'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'l_source'); ?>
		<?php echo $form->textField($model,'l_source'); ?>
		<?php echo $form->error($model,'l_source'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->