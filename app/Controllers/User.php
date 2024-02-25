<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\DompetModel;
use App\Models\LogaktivitasModel;
use App\Models\PiutangModel;
use App\Models\UserModel;

class User extends BaseController
{
    protected $piutangModel;
    protected $dompetModel;
    protected $userModel;
    protected $logModel;
    public function __construct()
    {
        $this->piutangModel = new PiutangModel();
        $this->dompetModel = new DompetModel();
        $this->userModel = new UserModel();
        $this->logModel = new LogaktivitasModel();
    }
    public function index()
    {
        //

        $data = [
            'title' => 'User',
            'datapiutang' => $this->piutangModel->getPiutang(),
            'datadompet' => $this->dompetModel->getAllDompet(),
            ''
        ];
        return view('user/index', $data);
    }
}
