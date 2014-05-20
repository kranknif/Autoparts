<?php
/* @var $this AutopartController */
/* @var $model Autopart */

$this->breadcrumbs=array(
	'Autoparts'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Autopart', 'url'=>array('index')),
	array('label'=>'Create Autopart', 'url'=>array('create')),
	array('label'=>'Update Autopart', 'url'=>array('update', 'id'=>$model->autopart_id)),
	array('label'=>'Delete Autopart',
        'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->autopart_id),'confirm'=>'Are you sure you want to delete this item?'),
        'visible' => Yii::app()->user->name == 'admin'
    ),
	array('label'=>'Manage Autopart',
        'url'=>array('admin'),
        'visible' => Yii::app()->user->name == 'admin'
    ),
);
?>

<h1>View Autopart #<?php echo $model->autopart_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'autopart_id',
		'parttype_id',
		'car_id',
		'name',
		'quantity',
		'producer_id',
		'description',
		'price',
	),
)); ?>
