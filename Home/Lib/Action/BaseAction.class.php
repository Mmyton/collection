<?php
import("@.Util.ClientInfoUtil");

class BaseAction extends Action {

	public function index() {
		// TODO
	}

	protected function callFunction($actionName, $functionName) {
		$id = ClientInfoUtil::getSessionID();
		$ip = ClientInfoUtil::getClientIP();
		$langSet = ClientInfoUtil::getLanguageSet();
		$str = "Call Function [SESSION_ID: " . $id . "; CLIENT_IP: " . $ip . "; LANGUAGE_SET: " . $langSet
				. "; ACTION_NAME: " . $actionName . "; FUNCTION_NAME: " . $functionName . "]";
		Log::Write($str, Log::INFO);
	}
}
?>
