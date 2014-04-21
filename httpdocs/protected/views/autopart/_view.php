<?php
/* @var $this AutopartController */
/* @var $data Autopart */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('autopart_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->autopart_id), array('view', 'id'=>$data->autopart_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('parttype_id')); ?>:</b>
	<?php echo CHtml::encode($data->parttype_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('car_id')); ?>:</b>
	<?php echo CHtml::encode($data->car_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('quantity')); ?>:</b>
	<?php echo CHtml::encode($data->quantity); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('producer_id')); ?>:</b>
	<?php echo CHtml::encode($data->producer_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('description')); ?>:</b>
	<?php echo CHtml::encode($data->description); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('price')); ?>:</b>
	<?php echo CHtml::encode($data->price); ?>
	<br />

	*/ ?>

</div>