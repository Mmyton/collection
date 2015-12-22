<?php
/**  
 *	$obj->getClientBrowser();     //获取访客浏览器：MSIE、Firefox、Chrome、Safari、Opera、Other。  
 *	$obj->getClientOS();          //获取访客操作系统：Windows、MAC、Linux、Unix、BSD、Other。  
 *	$obj->getClientIP();          //获取访客IP地址，如果没有取到IP则返回"None"。
 *	$obj->GetAdd();         //获取访客地理位置，使用 Baidu 隐藏接口。  
 *	$obj->GetIsp();         //获取访客ISP，使用 Baidu 隐藏接口。  
 */ 
class ClientInfoUtil {

	public static function getClientBrowser() {
		$browser = $_SERVER['HTTP_USER_AGENT'];
		if (preg_match('/MSIE/i', $browser)) {
			$browser = 'MSIE';
		} elseif (preg_match('/Firefox/i', $browser)) {
			$browser = 'Firefox';
		} elseif (preg_match('/Chrome/i', $browser)) {
			$browser = 'Chrome';
		} elseif (preg_match('/Safari/i', $browser)) {
			$browser = 'Safari';
		} elseif (preg_match('/Opera/i', $browser)) {
			$browser = 'Opera';
		} else {
			$browser = 'Other';
		}
		return $browser;
	}

	public static function getClientOS() {
		$os = $_SERVER['HTTP_USER_AGENT'];
		if (preg_match('/win/i', $os)) {
			$os = 'Windows';
		} elseif (preg_match('/mac/i', $os)) {
			$os = 'MAC';
		} elseif (preg_match('/linux/i', $os)) {
			$os = 'Linux';
		} elseif (preg_match('/unix/i', $os)) {
			$os = 'Unix';
		} elseif (preg_match('/bsd/i', $os)) {
			$os = 'BSD';
		} else {
			$os = 'Other';
		}
		return $os;
	}

	public static function getClientIP() {
		if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
			$ip = explode(',', $_SERVER['HTTP_CLIENT_IP']);
		} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
			$ip = explode(',', $_SERVER['HTTP_X_FORWARDED_FOR']);
		} elseif (!empty($_SERVER['REMOTE_ADDR'])) {
			$ip = explode(',', $_SERVER['REMOTE_ADDR']);
		} else {
			$ip[0] = 'None';
		}
		return $ip[0];
	}

	private function GetAddIsp() {
		$IP = $this->GetIP();
		$AddIsp = mb_convert_encoding(file_get_contents('http://open.baidu.com/ipsearch/s?tn=ipjson&wd=' . $IP),
				'UTF-8', 'GBK');
		//mb_convert_encoding() 转换字符编码。   
		if (preg_match('/noresult/i', $AddIsp)) {
			$AddIsp = 'None';
		} else {
			$Sta = stripos($AddIsp, $IP) + strlen($IP) + strlen('来自');
			$Len = stripos($AddIsp, '"}') - $Sta;
			$AddIsp = substr($AddIsp, $Sta, $Len);
		}
		$AddIsp = explode(' ', $AddIsp);
		return $AddIsp;
	}

	function GetAdd() {
		$Add = $this->GetAddIsp();
		return $Add[0];
	}

	function GetIsp() {
		$Isp = $this->GetAddIsp();
		if ($Isp[0] != 'None' && isset($Isp[1])) {
			$Isp = $Isp[1];
		} else {
			$Isp = 'None';
		}
		return $Isp;
	}

	public static function getSessionID() {
		if (!isset($_SESSION)) {
			session_start();
		}
		return session_id();
	}

	public static function getLanguageSet() {
		$langSet = "UNDEFINED";
		// 自动侦测浏览器语言
		$language = $_SERVER['HTTP_ACCEPT_LANGUAGE'];
		if (isset($language)) {
			preg_match('/^([a-z\-]+)/i', $language, $matches);
			$langSet = strtolower($matches[1]);
		}
		return $langSet;
	}
}
?>  