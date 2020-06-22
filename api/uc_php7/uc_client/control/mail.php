<?php



!defined('IN_UC') && exit('Access Denied');

class mailcontrol extends base {

	function __construct() {
		$this->mailcontrol();
	}

	function mailcontrol() {
		parent::__construct();
		$this->init_input();
	}

	function onadd() {
		$this->load('mail');
		$mail = array();
		$mail['appid']		= UC_APPID;
		$mail['uids']		= explode(',', $this->input('uids'));
		$mail['emails']		= explode(',', $this->input('emails'));
		$mail['subject']	= $this->input('subject');
		$mail['message']	= $this->input('message');
		$mail['charset']	= $this->input('charset');
		$mail['htmlon']		= intval($this->input('htmlon'));
		$mail['level']		= abs(intval($this->input('level')));
		$mail['frommail']	= $this->input('frommail');
		$mail['dateline']	= $this->time;
		return $_ENV['mail']->add($mail);
	}

}

?>