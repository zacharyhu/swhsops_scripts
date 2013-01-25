<?php
/* @var $this DailyVipController */
/* @var $model DailyVip */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'daily-vip-form',
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
		<?php echo $form->labelEx($model,'l_mon_points'); ?>
		<?php echo $form->textField($model,'l_mon_points'); ?>
		<?php echo $form->error($model,'l_mon_points'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'l_mon_num'); ?>
		<?php echo $form->textField($model,'l_mon_num'); ?>
		<?php echo $form->error($model,'l_mon_num'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'l_coin_points'); ?>
		<?php echo $form->textField($model,'l_coin_points'); ?>
		<?php echo $form->error($model,'l_coin_points'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'l_coin_num'); ?>
		<?php echo $form->textField($model,'l_coin_num'); ?>
		<?php echo $form->error($model,'l_coin_num'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'l_ingame_num'); ?>
		<?php echo $form->textField($model,'l_ingame_num'); ?>
		<?php echo $form->error($model,'l_ingame_num'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'l_incash_num'); ?>
		<?php echo $form->textField($model,'l_incash_num'); ?>
		<?php echo $form->error($model,'l_incash_num'); ?>
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