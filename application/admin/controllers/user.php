<?php
@session_start();
class Admin_Controllers_User extends Libs_Controller
{
    public function index(){
        $model= new Admin_Models_tblUsers();
        $this->view->listAllUser = $model->getAllUsers();
        $this->view->render('user/index');
    }

    public function getCreate(){
        $this->view->create = true;
        $roleModel = new Admin_Models_tblRoles();
        $this->view->roles = $roleModel->getAllRole();
        $this->view->render('user/form');
    }
    public function getEdit($user_id){
    	$user_id = $_GET['id'];
        //print_r($user_id);die;
        $roleModel = new Admin_Models_tblRoles();
        $this->view->roles = $roleModel->getAllRole();

    	$model= new Admin_Models_tblUsers();
    	$this->view->users = $model->getUserByID($user_id);
    	$this->view->render('user/form');
    }
    public function postCreate(){
        $user = new Admin_Models_tblUsers();

        $user->setFullName($_POST['fullname']);
        $user->setEmail($_POST['email']);
        $user->setPhone($_POST['phone']);
        $user->setPassword($_POST['pwd']);        

        $roleUserModel = new Admin_Models_tblRoleUser();
        $roleUserModel->setRoleId($_POST['roleUser']);
        $roleUserModel->setUserId($_SESSION['user_id_admin']);
        $roleUserModel->insertRoleUser($roleUserModel);

        $user->insertUser($user);
        $this->view->listAllUser = $user->getAllUsers();
        $this->view->render('user/index');
    }

    public function postEdit(){
        $userId = $_POST['userId'];
        $user = new Admin_Models_tblUsers();

        $user->setEmail($_POST['email']);
        $user->setFullName($_POST['fullname']);
        $user->setPhone($_POST['phone']); 
        $user->setPassword($_POST['pwd']);   

        //$roleUserModel = new Admin_Models_tblRoleUser();
        //$roleUserModel->setRoleId($_POST['roleUser']);
        //$roleUserModel->setUserId($userId);
        //$roleUserModel->updateRoleUser($roleUserModel);

        $user->updateUser($user,$userId);   
        $this->view->listAllUser = $user->getAllUsers();
        $this->view->render('user/index'); 
    }
    public function postDelete(){
    	$user_id = $_POST['id'];

        $roleUserModel = new Admin_Models_tblRoleUser();
        $roleUserModel->deleteRoleUser($user_id);

		$model= new Admin_Models_tblUsers();
        $model->deleteUser($user_id);	

        $this->view->listAllUser = $model->getAllUsers();
        $this->view->render('user/index');
    }


}