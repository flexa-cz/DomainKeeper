<?php
class MY_Controller extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->database();

		// debuger tool
		include(_ROOT.'application/libraries/debuger.class.php');
		debuger::set_localhost(false);
//		debuger::set_localhost(_LOCALHOST);
		debuger::set_ui('popup');

		// ladenka
		include(_ROOT.'application/libraries/NDebugger/minified/Debugger.php');
		debug();
	}
}
?>
