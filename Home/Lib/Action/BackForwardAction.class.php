<?php
import('ORG.Net.UploadFile');
class BackForwardAction extends BaseAction {

    public function index() {
        parent::index();
    }
    public function backforward() {
        $this->callFunction($this->getActionName(), "FORWARD");
        $url = $_GET['url'];
        if ( 'admin'==$url) {
            $url = './Admin/Tpl/admin.php';
        }
        else if( 'login'==$url) {
            $url = './Admin/Tpl/login.php';
        }
        else if( 'home'==$url) {
            $url = PHP_PATH.'/home.php';
        }
        else if( 'pipei'==$url) {
            $url = './Admin/Tpl/pipei.php';
        }else if( 'paraset'==$url) {
            $url = './Admin/Tpl/paraset.php';
        }else if( 'login'==$url) {
            $url = './Admin/Tpl/login.php';
        }else if( 'parasetdeal'==$url) {
            $url = './Admin/Tpl/Deal/paraSetDeal.php';
        }else if( 'initSetDeal'==$url) {
            $url = './Admin/Tpl/Deal/initSetDeal.php';
        }else if( 'acqAddDeal'==$url) {
            $url = './Admin/Tpl/Deal/acqAddDeal.php';
        }else if( 'userAddDeal'==$url) {
            $url = './Admin/Tpl/Deal/userAddDeal.php';
        }else if( 'initset'==$url) {
            $url = './Admin/Tpl/initset.php';
        }else if( 'acqadd'==$url) {
            $url = './Admin/Tpl/acqadd.php';
        }else if( 'acqlist'==$url) {
            $url = './Admin/Tpl/acqlist.php';
        }else if( 'useradd'==$url) {
            $url = './Admin/Tpl/useradd.php';
        }else if( 'userlist'==$url) {
            $url = './Admin/Tpl/userlist.php';
        }else if( 'useredit'==$url) {
            $url = './Admin/Tpl/useredit.php';
        }else if( 'acqedit'==$url) {
            $url = './Admin/Tpl/acqedit.php';
        }else if( 'acqEditDeal'==$url) {
            $url = './Admin/Tpl/Deal/acqEditDeal.php';
        }else if( 'acqdeleteDeal'==$url) {
            $url = './Admin/Tpl/Deal/acqdeleteDeal.php';
        }else if( 'userdeleteDeal'==$url) {
            $url = './Admin/Tpl/Deal/userdeleteDeal.php';
        }else if( 'userEditDeal'==$url) {
            $url = './Admin/Tpl/Deal/userEditDeal.php';
        }
        $this->writeForwardUrlInfo($url);
        $this->display($url);
    }

    private function writeForwardUrlInfo($url = '') {
        $str = "[FORWARD_URL: " . $url . "]";
        Log::Write($str, Log::INFO);
    }
}

?>