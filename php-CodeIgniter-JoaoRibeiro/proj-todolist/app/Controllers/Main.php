<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Main extends Controller
{
    //==============================================
    public function index()
    {
        //$dados = $this->getAllJobs();
        $data['jobs'] = $this->getAllJobs();

        return view('home', $data);
    }

    //==============================================
    public function newJob(){
        echo "nova tareeeefa";
    }


    //==============================================
    private function getAllJobs(){

        $db = db_connect();
        $dados = $db->query("SELECT * FROM jobs")->getResultObject();
        $db->close();

        return $dados;
    }
}

