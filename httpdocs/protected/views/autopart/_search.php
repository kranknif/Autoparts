<?php
/* @var $this AutopartController */
/* @var $model Autopart */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'autopart_id'); ?>
		<?php echo $form->textField($model,'autopart_id'); ?>
	</div>

    <div class="row">
        <?php echo $form->label($model,'name'); ?>
        <?php echo $form->textField($model,'name'); ?>
    </div>

	<div class="row">
		<?php echo $form->label($model,'parttype_id'); ?>
		<?php echo $form->textField($model,'parttype_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'car_id'); ?>
		<?php echo $form->textField($model,'car_id'); ?>
	</div>


	<div class="row">
		<?php echo $form->label($model,'producer_id'); ?>
		<?php echo $form->textField($model,'producer_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'price_min'); ?>
		<?php echo $form->textField($model,'price_min', array('size'=>3,'maxlength'=>5)); ?>
	</div>

    <div class="row">
        <?php echo $form->label($model,'price_max'); ?>
        <?php echo $form->textField($model,'price_max', array('size'=>3,'maxlength'=>5)); ?>
    </div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->