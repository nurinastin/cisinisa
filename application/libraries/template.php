<?php
class Template{
	protected $_ci;
	function __construct(){
		$this->_ci = &get_instance();
	}
function views($template = NULL, $data = NULL){
    if($template != NULL){
		echo $data['Template']= $this->_ci->load->view('penyuluhan_view', $data, TRUE);
    }
}
}
?>