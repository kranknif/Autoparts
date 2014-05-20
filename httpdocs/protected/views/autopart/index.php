<?php
/* @var $this AutopartController */
/* @var $model Autopart */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs = array(
    'Autoparts',
);

$this->menu = array(
    array(
        'label' => 'Create Autopart',
        'url' => array('create'),
        'visible' => in_array(Yii::app()->user->name, array('admin', 'demo'))
        ),
    array(
        'label' => 'Manage Autopart',
        'url' => array('admin'),
        'visible' => Yii::app()->user->name == 'admin'
    ),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
");
?>

<h1>Autoparts</h1>

<?php echo CHtml::link('Advanced Search', '#', array('class' => 'search-button')); ?>
<div class="search-form" style="display:none">
    <?php
    $this->renderPartial('_search', array(
        'model' => $model,
    ));
    ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.CListView', array(
    'dataProvider' => $dataProvider,
    'itemView' => '_view',
)); ?>
