<div id="data">
<?php $this->renderPartial('_ajaxContent', array('myValue'=>$myValue)); ?>
</div>

<?php echo CHtml::ajaxButton ("Update data",
		CController::createUrl('helloWorld/UpdateAjax'), 
		array('update' => '#data'));

$this->beginWidget('zii.widgets.jui.CJuiDialog',array(
			'id'=>'mydialog',
			// additional javascript options for the dialog plugin
			'options'=>array(
				'title'=>'Dialog box 1',
				'autoOpen'=>false,
				),
			));

echo 'dialog content here';

$this->endWidget('zii.widgets.jui.CJuiDialog');

// the link that may open the dialog
echo CHtml::link('open dialog', '#', array(
			'onclick'=>'$("#mydialog").dialog("open"); return false;',
			));

?>

