<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Log_Messages extends CI_Controller {

	function __construct() {
        parent::__construct();
		$this->load->library('session');
		$this->load->helper('url');
    }
	
	public function index() {
		$log_contents = $this->readLog();
		$this->mysmarty->assign('status', $this->session->userdata('status'));
		$this->mysmarty->assign('base_url', $this->config->item('base_url'));
		//$this->mysmarty->assign('profile', $profile->getProfile($user_id));
		$this->mysmarty->assign('contents', $log_contents);
		$this->mysmarty->display('header.tpl');
		$this->mysmarty->display('audit_trail/log_messages.tpl');
		$this->mysmarty->display('footer.tpl');
	}
	
	public function checkLog() {
		$filename = 'files/messages.log';
		//echo $filename;
		if (file_exists($filename)) {
			//echo "EXIST!";
			return true;
		} else {
			//echo "nope";
			return false;
		}
	}
	
	public function createLog() {
		$filename = 'files/messages.log';
		$handle = fopen($filename, 'w');
		fclose($handle);
	}
	
	public function writeLog() {
		$filename = 'files/messages.log';
		$data = $_GET['data'];
		$handle = fopen($filename, 'w') or die($this->config->item('base_url')."audit_trail/log_messages/createLog");
		fwrite($handle, $data);
		fclose($handle);
	}

	public function writeToLog() {
		$filename = 'files/messages.log';
		$data = $_GET['data'];
		if (!$this->checkLog()) {
			$this->createLog();
			$handle = fopen($filename, 'a');
			fwrite($handle, $data);
			fclose($handle);
		} else {
			$file = fopen($filename, 'r');
			if (fgets($file) == '') {
				$data = $_GET['data'];
				$handle = fopen($filename, 'a');
				fwrite($handle, $data);
				fclose($handle);
			} else {
				$data = "\r\n".$_GET['data'];
				$handle = fopen($filename, 'a');
				fwrite($handle, $data);
				fclose($handle);
			}
		}
	}
	
	public function readLog() {
		$filename = 'files/messages.log';
		if (!$this->checkLog()) {
			$this->createLog();
			$contents = '';
		} else {
			$file = fopen($filename, 'r');
			$contents = array();
			while(!feof($file)) {
				$contents[] = fgets($file);
				//echo fgets($file)."<br>";
			}
			fclose($file);
		}
		return $contents;
	}
	
	public function saveLog() {
		$filename = 'files/messages.log';
		header ('Content-type: octet/stream');
		header ('Content-disposition: attachment; filename=messages.log');
		header('Content-Length: ' . filesize($filename));
		readfile($filename);
	}
	
	public function clearLog() {
		$this->createLog();
		header("location: ".$this->config->item('base_url')."audit_trail/log_messages");
	}
}