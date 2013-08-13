<?php
class HelloWorldController extends CController
{
				public function actionIndex()
				{
								$data = array();
								$data["myValue"] = "Content loaded";

								$this->render('index', $data);
				}

				public function actionUpdateAjax()
				{
								$data = array();
								$data["myValue"] = "Content updated in AJAX";

								$this->renderPartial('_ajaxContent', $data, false, true);
				}
}
?>
