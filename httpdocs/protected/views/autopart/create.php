<?php
/* @var $this AutopartController */
/* @var $model Autopart */

$this->breadcrumbs=array(
	'Autoparts'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Autopart', 'url'=>array('index')),
	array('label'=>'Manage Autopart', 'url'=>array('admin')),
);
?>

<h1>Create Autopart</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>