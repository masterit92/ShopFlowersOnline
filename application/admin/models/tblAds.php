<?php
class Admin_Models_tblAds extends  Models_tblAds{

    public function __construct()
    {
        parent::__construct();
        $this->queryUnit = new Libs_QueryUnit();
    }	
    	
    public function insertAds(Admin_Models_tblAds $ads){

    }
    public function updateAds(Admin_Models_tblAds $ads){

    }
    public function deleteAds($ads_id){

    }
}