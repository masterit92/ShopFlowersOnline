<?php
@session_start();
class Admin_Controllers_Ads extends Libs_Controller
{
    public function index(){
        $model= new Admin_Models_tblAds();

        $this->view->listAds = $model->getAllAds();
        $this->view->render('ads/index');
    }
    public function getCreate(){
        $this->view->create = true;
        $this->view->render('ads/form');
    }
}