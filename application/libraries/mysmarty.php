<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

	require "smarty/Smarty.class.php";

	class Mysmarty extends Smarty
	{
		public function __construct()
		{
			parent::__construct();
			
			$this->caching = TRUE;
			//$this->caching = Smarty::CACHING_LIFETIME_CURRENT;
			//$this->caching = Smarty::CACHING_LIFETIME_SAVED;
			$this->cache_lifetime = 1;
			$this->compile_check = TRUE;
			$this->setCompileDir(FCPATH . APPPATH . 'cache' . DS);
			$this->setCacheDir(FCPATH . APPPATH . 'cache' . DS);
			$this->setTemplateDir(FCPATH . APPPATH . 'views' . DS);
		}
	}

?>