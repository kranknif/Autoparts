<?php
/* @var $this AutopartController */
/* @var $model Autopart */
/* @var $form CActiveForm */
?>

<div class="form">

    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'autopart-form',
        // Please note: When you enable ajax validation, make sure the corresponding
        // controller action is handling ajax validation correctly.
        // There is a call to performAjaxValidation() commented in generated controller code.
        // See class documentation of CActiveForm for details on this.
        'enableAjaxValidation' => false,
    )); ?>

    <p class="note">Fields with <span class="required">*</span> are required.</p>

    <?php echo $form->errorSummary($model); ?>

    <div class="row">
        <?php
        echo $form->labelEx($model, 'parttype_id'); ?>

        <?php
        echo $form->dropDownList($model, 'parttype_id', CHtml::listData(Parttype::model()->findAll(),'parttype_id','name'));
        ?>
        <?php echo $form->error($model, 'parttype_id'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'car_id'); ?>
        <?php
        $car = new Car();
        $cars = $car->findAll();
        echo $form->dropDownList($model, 'car_id', CHtml::listData(Car::model()->findAll(), 'car_id', 'model')); ?>
        <?php echo $form->error($model, 'car_id'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'name'); ?>
        <?php echo $form->textField($model, 'name', array('size' => 50, 'maxlength' => 50)); ?>
        <?php echo $form->error($model, 'name'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'quantity'); ?>
        <?php //TODO узнать, что такое numberField и как им пользоваться
        echo $form->numberField($model, 'quantity', array('min' => 0, 'max' => 1024)); ?>
        <?php echo $form->error($model, 'quantity'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'producer_id'); ?>
        <?php //TODO сделать с этим полем тоже самое, что и с car_id
        echo $form->dropDownList($model, 'producer_id', CHtml::listData(Producer::model()->findAll(),'producer_id','name')); ?>
        <?php echo $form->error($model, 'producer_id'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'description'); ?>
        <?php //TODO узнать, что такое numberField и как им пользоваться: зачем здесь numberField????
        echo $form->textArea($model, 'description', array('cols' => 50, 'maxlength' => 50)); ?>
        <?php echo $form->error($model, 'description'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'price'); ?>
        <?php // TODO сделать это поле decimal(10,2) в БД (всего десять знаков, два знака после запятой, например 11223344,55) - не поняла
        echo $form->numberField($model, 'price'); ?>
        <?php echo $form->error($model, 'price'); ?>
    </div>

    <div class="row buttons">
        <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- form -->