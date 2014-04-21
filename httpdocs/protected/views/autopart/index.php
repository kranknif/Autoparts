<?php
/* @var $this AutopartController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Autoparts',
);

$this->menu=array(
	array('label'=>'Create Autopart', 'url'=>array('create')),
	array('label'=>'Manage Autopart', 'url'=>array('admin')),
);
?>

<h1>Autoparts</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
