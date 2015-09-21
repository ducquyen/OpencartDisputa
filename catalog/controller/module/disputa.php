<?php  
class ControllerModuleDisputa extends Controller {

	public function save() {
		//load model
		$this->load->model('module/disputa');
		//save data
		$this->model_module_disputa->save($_REQUEST['url'],$_REQUEST['email'],$_REQUEST['productId'],$_REQUEST['productName']);

		//show sucess message
		$this->language->load('module/disputa');
		echo $this->language->get('success');
		
	}
}
?>
