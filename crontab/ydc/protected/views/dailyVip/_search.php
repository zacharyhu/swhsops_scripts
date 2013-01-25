<?php
/* @var $this DailyVipController */
/* @var $model DailyVip */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'l_date'); ?>
		<?php echo $form->textField($model,'l_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'l_mon_points'); ?>
		<?php echo $form->textField($model,'l_mon_points'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'l_mon_num'); ?>
		<?php echo $form->textField($model,'l_mon_num'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'l_coin_points'); ?>
		<?php echo $form->textField($model,'l_coin_points'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'l_coin_num'); ?>
		<?php echo $form->textField($model,'l_coin_num'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'l_ingame_num'); ?>
		<?php echo $form->textField($model,'l_ingame_num'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'l_incash_num'); ?>
		<?php echo $form->textField($model,'l_incash_num'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'l_cash_sum'); ?>
		<?php echo $form->textField($model,'l_cash_sum'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->