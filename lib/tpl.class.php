<?php
class tpl {
	private $tpl_file;
	private $vars = array();
	public function __construct($tpl_file, $tpl_array = null) {
		$this->tpl_file = "tpl/$tpl_file.tpl.php";
                if(!is_null($tpl_array)){
                   $this->vars = $tpl_array; 
                }                
	}
	public function __toString() {
		if (file_exists($this->tpl_file)) {
			ob_clean();
			extract($this->vars);
			require($this->tpl_file);
			$output = ob_get_contents();
			ob_clean();
		}
                
                header('Content-type: text/html; charset=UTF-8', true);
		return $output;	
                
	}
}
?>