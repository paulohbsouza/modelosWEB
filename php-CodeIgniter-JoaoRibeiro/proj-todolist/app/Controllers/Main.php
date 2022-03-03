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

    public function newJob()
    {
        return view('new_job');
    }

    public function newJobSubmition()
    {
        if (!$_SERVER['REQUEST_METHOD'] == 'POST') {
            return redirect()->to(site_url('main'));
        }

        // guardar na base de dados
        $params = [
            'job' => $this->request->getPost('job_name')
        ];
        $db = db_connect();
        $db->query(" INSERT INTO jobs(job, datetime_created) VALUES (:job:, NOW())", $params);
        $db->close();

        // redirecionar para a página inicial
        return redirect()->to(site_url('main'));
    }

    //==============================================
    private function getAllJobs()
    {

        $db = db_connect();
        $dados = $db->query("SELECT * FROM jobs")->getResultObject();
        $db->close();

        return $dados;
    }
}

