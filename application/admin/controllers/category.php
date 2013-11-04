<?php
@session_start();
class Admin_Controllers_Category extends Libs_Controller
{
    public function index(){
        $model= new Admin_Models_tblCategories();

        $this->view->categories = $model->getParentCat();
        $this->view->render('category/index');
    }
    public function getCreate(){
        $this->view->create = true;
        $model= new Admin_Models_tblCategories();

        $this->view->parents = $model->getParentCat();
        $this->view->render('category/form');
    }
    public function getEdit($cat_id){
    	$cat_id = $_GET['id'];
    	$model= new Admin_Models_tblCategories();

    	$this->view->categories = $model->getCatByID($cat_id);
    	//$this->view->id = $this->view->categories->getCatId();
    	$this->view->parents = $model->getParentCat();
    	$this->view->render('category/form');
    }
    public function postCreate(){
        $cat = new Admin_Models_tblCategories();
        $cat->setName($_POST['name']);
        $cat->setParentId($_POST['parentId']);

        $cat->insertCat($cat);
        $this->view->categories = $cat->getParentCat();
        $this->view->render('category/index');
    }

    public function postEdit(){
        $catId = $_POST['catId'];
        $cat = new Admin_Models_tblCategories();
        $cat->setName($_POST['name']);
        $cat->setParentId($_POST['parentId']);  

        $cat->updateCat($cat,$catId);   
        $this->view->categories = $cat->getParentCat();
        $this->view->render('category/index');
    }
    public function postDelete(){
    	$cat_id = $_POST['id'];
		$model= new Admin_Models_tblCategories();
        $model->deleteCategory($cat_id);	

        $this->view->categories = $model->getParentCat();
        $this->view->render('category/index');
    }
}