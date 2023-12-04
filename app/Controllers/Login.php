<?php
 
namespace App\Controllers;
 
use App\Controllers\BaseController;
use App\Models\UserModel;
 
class Login extends BaseController
{
    public function index()
    {
        return view('login');
    } 
   
    public function authenticate()
    {
        $session = session();
        $userModel = new UserModel();
 
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');
         
        $user = $userModel->where('username', $username)->first();
 
        if(is_null($user)) {
            return redirect()->back()->withInput()->with('error', 'Invalid username or password.');
        }
 
        if(strcmp($password, $user['password'])) {
            return redirect()->back()->withInput()->with('error', 'Invalid username or password.');
        }
 
        $ses_data = [
            'id' => $user['id'],
            'username' => $user['username'],
            'birthday' => $user['birthday'],
            'fName' => $user['fName'],
            'mName' => $user['mName'],
            'lName' => $user['lName'],
            'name' => $user['fName']." ".$user['mName']." ".$user['lName'],
            'contactNumber' => $user['contactNumber'],
            'email' => $user['email'],
            'password' => $user['password'],
            'isLoggedIn' => TRUE
        ];
 
        $session->set($ses_data);
        return redirect()->to('/dashboard');     
    }
 
    public function logout() {
        session_destroy();
        return redirect()->to('/login');
    }
}