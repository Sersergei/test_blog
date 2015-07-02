<?php
/* @var $this PostController */
/* @var $model Post */

$this->breadcrumbs=array(
	'Posts'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Просмотреть все Записи', 'url'=>array('index')),
	array('label'=>'Менеджер Записей', 'url'=>array('admin')),
);
?>

<h1>Создать Запись</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>