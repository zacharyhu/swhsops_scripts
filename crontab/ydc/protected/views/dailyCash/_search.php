<?php
/* @var $this DailyCashController */
/* @var $model DailyCash */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<!--<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>-->

	<div class="row">
		<?php echo $form->label($model,'l_date'); ?>
		<?php echo $form->textField($model,'l_date',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'l_cash_sum'); ?>
		<?php echo $form->textField($model,'l_cash_sum'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'l_total_num'); ?>
		<?php echo $form->textField($model,'l_total_num',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'l_avg'); ?>
		<?php echo $form->textField($model,'l_avg',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'l_type'); ?>
		<?php echo $form->textField($model,'l_type'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->