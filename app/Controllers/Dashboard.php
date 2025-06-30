<?php

namespace App\Controllers;

class Dashboard extends BaseController
{
    public function dash()
    {
        $usersModel = new \App\Models\UserModel();
        $loggedUserID = session()->get('loggedUser');
        $userInfo = $usersModel->find($loggedUserID);
        $data = [
            'tittle'=>'Dashboard',
            'userInfo'=>$userInfo
        ];
        return view('dashboard/dash', $data);
    }
}
