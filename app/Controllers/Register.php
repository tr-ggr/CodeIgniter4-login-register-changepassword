<?php
 
namespace App\Controllers;
 
use App\Controllers\BaseController;
use App\Models\UserModel;
 
class Register extends BaseController
{
 
    public function __construct(){
        helper(['form']);
    }
 
    public function index()
    {
        $data = [];
        return view('register', $data);
    }
   
    public function register()
    {
        $rules = [
            'fName' => ['rules' => 'required|alpha'],
            'mName' => ['rules' => 'required|alpha'],
            'lName' => ['rules' => 'required|alpha'],
            'username' => ['rules' => 'required|min_length[6]|is_unique[users.username]|alpha_numeric_space'],
            'password' => ['rules' => 'required|min_length[8]'],
            'confirm_password'  => [ 'label' => 'confirm password', 'rules' => 'matches[password]'],
            'birthday'  => [ 'rules' => 'required'],
            'email' => ['rules' => 'required|min_length[4]|max_length[255]|valid_email'],
            'contactNumber' => ['rules' => 'required|integer'],
        ];
 
        if($this->validate($rules)){
            $model = new UserModel();
            $data = [
                'fName' => $this->request->getVar('fName'),
                'mName' => $this->request->getVar('mName'),
                'lName' => $this->request->getVar('lName'),
                'username' => $this->request->getVar('username'),
                'password' => $this->request->getVar('password'),
                'birthday'  => $this->request->getVar('birthday'),
                'email'    => $this->request->getVar('email'),
                'contactNumber' => $this->request->getVar('contactNumber')
            ];
            $model->save($data);
            return redirect()->to('/login');
        }else{
            $data['validation'] = $this->validator;
            return view('register', $data);
        }

    }
}