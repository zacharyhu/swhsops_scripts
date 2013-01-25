<?php
/* @var $this DailyGameController */
/* @var $model DailyGame */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'daily-game-form',
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
		<?php echo $form->labelEx($model,'l_game_id'); ?>
		<?php echo $form->textField($model,'l_game_id'); ?>
		<?php echo $form->error($model,'l_game_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'l_game_name'); ?>
		<?php echo $form->textField($model,'l_game_name',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'l_game_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'l_total_num'); ?>
		<?php echo $form->textField($model,'l_total_num',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'l_total_num'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'l_user_num'); ?>
		<?php echo $form->textField($model,'l_user_num'); ?>
		<?php echo $form->error($model,'l_user_num'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'l_avg_num'); ?>
		<?php echo $form->textField($model,'l_avg_num',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'l_avg_num'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'l_game_points'); ?>
		<?php echo $form->textField($model,'l_game_points'); ?>
		<?php echo $form->error($model,'l_game_points'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'l_cash_sum'); ?>
		<?php echo $form->textField($model,'l_cash_sum'); ?>
		<?php echo $form->error($model,'l_cash_sum'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->