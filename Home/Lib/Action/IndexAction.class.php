<?php
import("@.Util.ClientInfoUtil");
class IndexAction extends Action {
    public function index(){
    
	$this->display('./Admin/Tpl/login.php');
    }
	private function writeSystemBootInfo() {
		$id = ClientInfoUtil::getSessionID();
		$ip = ClientInfoUtil::getClientIP();
		$langSet = ClientInfoUtil::getLanguageSet();
		$str = "System Boot [SESSION_ID: " . $id . "; CLIENT_IP: " . $ip . "; LANGUAGE_SET: " . $langSet . "]";
		Log::Write($str, Log::INFO);
	}
}
?>