<?php
/* @var $this AutopartController */
/* @var $data Autopart */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('autopart_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->autopart_id), array('view', 'id'=>$data->autopart_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('parttype')); ?>:</b>
	<?php echo CHtml::encode($data->parttype->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('car')); ?>:</b>
	<?php echo CHtml::encode($data->car->model); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('quantity')); ?>:</b>
	<?php echo CHtml::encode($data->quantity); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('producer')); ?>:</b>
	<?php echo CHtml::encode($data->producer->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('description')); ?>:</b>
	<?php echo CHtml::encode($data->description); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('price')); ?>:</b>
	<?php echo CHtml::encode($data->price); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('price')); ?>:</b>
	<?php echo CHtml::encode($data->price); ?>
	<br />

	*/ ?>

</div>