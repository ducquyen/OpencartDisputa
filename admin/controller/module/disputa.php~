<?php
class ControllerModuleDisputa extends Controller {
	private $error = array(); 
	
	protected function validate() {
		if (!$this->user->hasPermission('modify', 'module/disputa')) {
			$this->error['warning'] = $this->language->get('error_permission');
		}

		return !$this->error;
	}

	public function install() {
		$this->load->model('module/disputa');
		$this->model_module_disputa->createTable();
	}

	public function index() {

		$this->load->language('module/disputa');
		$this->document->setTitle($this->language->get('heading_title'));

		$this->session->data['heading_title'] = $this->language->get('heading_title');

		$this->session->data['text_enabled'] = $this->language->get('text_enabled');
		$this->session->data['text_disabled'] = $this->language->get('text_disabled');
		$this->session->data['text_content_top'] = $this->language->get('text_content_top');
		$this->session->data['text_content_bottom'] = $this->language->get('text_content_bottom');		
		$this->session->data['text_column_left'] = $this->language->get('text_column_left');
		$this->session->data['text_column_right'] = $this->language->get('text_column_right');
		
		$this->session->data['entry_layout'] = $this->language->get('entry_layout');
		$this->session->data['entry_position'] = $this->language->get('entry_position');
		$this->session->data['entry_status'] = $this->language->get('entry_status');
		$this->session->data['entry_sort_order'] = $this->language->get('entry_sort_order');
		$this->session->data['entry_url'] = $this->language->get('entry_url');
		$this->session->data['entry_valor'] = $this->language->get('entry_valor');
		$this->session->data['entry_usuario'] = $this->language->get('entry_usuario');
		$this->session->data['entry_email'] = $this->language->get('entry_email');
		$this->session->data['entry_datahora'] = $this->language->get('entry_datahora');
		
		
		$this->session->data['button_save'] = $this->language->get('button_save');
		$this->session->data['button_cancel'] = $this->language->get('button_cancel');
		$this->session->data['button_data'] = $this->language->get('button_data');
		$this->session->data['button_add_module'] = $this->language->get('button_add_module');
		$this->session->data['button_remove'] = $this->language->get('button_remove');
		$this->session->data['button_export'] = $this->language->get('button_export');
		

 		if (isset($this->error['warning'])) {
			$this->session->data['error_warning'] = $this->error['warning'];
		} else {
			$this->session->data['error_warning'] = '';
		}

  		$this->session->data['breadcrumbs'] = array();

   		$this->session->data['breadcrumbs'][] = array(
       		'text'      => $this->language->get('text_home'),
			'href'      => $this->url->link('common/home', 'token=' . $this->session->data['token'], 'SSL'),
      		'separator' => false
   		);

   		$this->session->data['breadcrumbs'][] = array(
       		'text'      => $this->language->get('text_module'),
			'href'      => $this->url->link('extension/module', 'token=' . $this->session->data['token'], 'SSL'),
      		'separator' => ' :: '
   		);
		
   		$this->session->data['breadcrumbs'][] = array(
       		'text'      => $this->language->get('heading_title'),
			'href'      => $this->url->link('module/disputa', 'token=' . $this->session->data['token'], 'SSL'),
      		'separator' => ' :: '
   		);

   		$this->session->data['breadcrumbs'][] = array(
       		'text'      => $this->language->get('button_data'),
			'href'      => $this->url->link('module/disputa/data', 'token=' . $this->session->data['token'], 'SSL'),
      		'separator' => ' :: '
   		);
		$this->session->data['export'] = $this->url->link('module/disputa/export', 'token=' . $this->session->data['token'], 'SSL');

		$this->load->model('module/disputa');
		$this->session->data['data'] = $this->model_module_disputa->getData();


		$this->session->data['header'] = $this->load->controller('common/header');
		$this->session->data['column_left'] = $this->load->controller('common/column_left');
		$this->session->data['footer'] = $this->load->controller('common/footer');
				
		$this->response->setOutput($this->load->view('module/disputa.tpl', $this->session->data));
	}
}
?>
