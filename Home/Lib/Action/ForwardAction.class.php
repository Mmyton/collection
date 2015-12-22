<?php
import('ORG.Net.UploadFile');
class ForwardAction extends BaseAction {

	public function index() {
		parent::index();
	}
	public function forward() {
		$this->callFunction($this->getActionName(), "FORWARD");
		$url = $_GET['url'];
	if( 'warning'==$url) {
			$url = PHP_PATH.'/warning.php';
		}else if( 'home'==$url) {
            $url = PHP_PATH.'/home.php';
        }else if( 'wavtview'==$url) {
            $url = PHP_PATH.'/wavtview.php';
        }else if( 'wavtview'==$url) {
            $url = PHP_PATH.'/meatview.php';
        }else if( 'adminhome'==$url) {
            $url = PHP_PATH.'/adminhome.php';
        }else if( 'mea'==$url) {
            $url = PHP_PATH.'/mea.php';
        }else if( 'warn'==$url) {
            $url = PHP_PATH.'/warn.php';
        }else if( 'adminhomep'==$url) {
            $url = PHP_PATH.'/adminhomep.php';
        }else if( 'meahistoryp'==$url) {
            $url = PHP_PATH.'/meahistoryp.php';
        }else if( 'warningp'==$url) {
            $url = PHP_PATH.'/warningp.php';
        }else if( 'spetview'==$url) {
            $url = PHP_PATH.'/spetview.php';
        }else if( 'wavhistory'==$url) {
            $url = PHP_PATH.'/wavhistory.php';
        }else if( 'spehistory'==$url) {
            $url = PHP_PATH.'/spehistory.php';
        }else if( 'meahistory'==$url) {
            $url = PHP_PATH.'/meahistory.php';
        }else if( 'warning'==$url) {
            $url = PHP_PATH.'/warning.php';
        }else if( 'test'==$url) {
            $url = PHP_PATH.'/test.php';
        }else if( 'homemuban'==$url) {
            $url = PHP_PATH.'/header.php';
        }else if( 'temp'==$url) {
            $url = PHP_PATH.'/temp.php';
        }else if( 'adminHomeDeal'==$url) {
            $url = PHP_PATH.'/Deal/adminHomeDeal.php';
        }else if( 'wavtviewDeal'==$url) {
            $url = PHP_PATH.'/Deal/wavtviewDeal.php';
        }else if( 'spetviewDeal'==$url) {
            $url = PHP_PATH.'/Deal/spetviewDeal.php';
        }else if( 'meahistoryDeal'==$url) {
            $url = PHP_PATH.'/Deal/meahistoryDeal.php';
        }else if( 'spehistoryDeal'==$url) {
            $url = PHP_PATH.'/Deal/spehistoryDeal.php';
        }else if( 'speDeal'==$url) {
            $url = PHP_PATH.'/Deal/speDeal.php';
        }else if( 'wavhistoryDeal'==$url) {
            $url = PHP_PATH.'/Deal/wavhistoryDeal.php';
        }else if( 'warningDeal'==$url) {
            $url = PHP_PATH.'/Deal/warningDeal.php';
        }else if( 'q'==$url) {
			$url = './Home/Tpl/common/canvas/csql.php';
		}
        //android
        else if( 'history'==$url) {
            $url = PHP_PATH.'/android/history.php';
        }
        else if( 'androidlist'==$url) {
            $url = PHP_PATH.'/android/list.php';
        }
		else if( 'androidnow'==$url) {
            $url = PHP_PATH.'/android/androidnow.php';
        }
        else if ( 'now'==$url) {
            $url = PHP_PATH.'/android/now.php';
        }
        else if ( 'wavenow'==$url) {
            $url = PHP_PATH.'/android/wavenow.php';
        }
        //android
		$this->writeForwardUrlInfo($url);
		$this->display($url);
	}
	
	private function writeForwardUrlInfo($url = '') {
		$str = "[FORWARD_URL: " . $url . "]";
		Log::Write($str, Log::INFO);
	}
}

?>
