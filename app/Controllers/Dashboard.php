<?php
 
namespace App\Controllers;
 
use App\Controllers\BaseController;
use App\Models\UserModel;
 
class Dashboard extends BaseController
{
    public function __construct(){
        helper(['form']);
    }
 

    public function index()
    {
        $data['name'] = $_SESSION['name'];
        $data['birthday'] = $_SESSION['birthday'];
        $data['email'] = $_SESSION['email'];
        $data['contactNumber'] = $_SESSION['contactNumber'];

        // $data['name'] = "try";
        // $data['birthday'] ="try";
        // $data['email'] = "try";
        // $data['contact'] = "try";
        return view('dashboard', $data);
    }

    public function update(){
        $userModel = new UserModel();
        $id = $_SESSION['id'];
        $newpass = $this->request->getVar('newpass');
        $currpass = $this->request->getVar('currpass');


        $rules = [
            'newpass' => ['label' => 'new password','rules' => 'required|min_length[8]'],
            'currpass' => ['label' => 'current passowrd', 'rules' => 'required|min_length[8]'],
            'confirm' => [ 'label' => 'confirm password', 'rules' => 'matches[currpass]'],
        ];
 
        if($this->validate($rules)){
            if(strcmp($currpass, $_SESSION['password'])) {
                return redirect()->back()->withInput()->with('error', 'Invalid current password!.');
            }
    
            if(strcmp($newpass, $_SESSION['password'])) {
                $data = $_SESSION;
    
                $data['password'] = $newpass;
    
                $userModel->update($id, $data);
    
                session_destroy();
                return redirect()->to('/login');
            }
        }else{
            $data = $_SESSION;
            $data['validation'] = $this->validator;
            return view('dashboard', $data);
        }


    }


}

?>