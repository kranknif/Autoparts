<?php
/* @var $this AutopartController */
/* @var $model Autopart */

$this->breadcrumbs=array(
	'Autoparts'=>array('index'),
	$model->name=>array('view','id'=>$model->autopart_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Autopart', 'url'=>array('index')),
	array('label'=>'Create Autopart', 'url'=>array('create')),
	array('label'=>'View Autopart', 'url'=>array('view', 'id'=>$model->autopart_id)),
	array('label'=>'Manage Autopart', 'url'=>array('admin')),
);
?>

<h1>Update Autopart <?php echo $model->autopart_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>