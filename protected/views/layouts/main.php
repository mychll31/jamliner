<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<!-- blueprint CSS framework -->
	
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
	<?php Yii::app()->bootstrap->register(); ?>
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/style.css" />
</head>

<body>
<?php
$this->widget('bootstrap.widgets.TbNavbar', array(
			'brand' => 'JAM',
			'type'=>'inverse',
			'items' => array(
				array(
					'class' => 'bootstrap.widgets.TbMenu',
					'items' => array(
						array('label'=>'Home', 'url'=>'#', 'active'=>true),
						array('label'=>'Route', 'url'=>array('routes/admin'), 'active'=>true),
						)
				     )
				)
			));




?>
<div class="container" id="page">

        <?php echo $content; ?>

</div><!-- page -->

</body>
</html>
