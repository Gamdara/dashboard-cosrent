<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\DataDiriModel;
use App\Models\PengirimanModel;
use CodeIgniter\HTTP\Response;

use CodeIgniter\Shield\Models\UserIdentityModel;

class Dashboard extends BaseController
{
    public function index()
    {
        helper('html');
        $model = new PengirimanModel();
        
        return view('dashboard/index',['pesanans' => $model->findAll()]);
    }

    public function img($id, $type)
    {
        $model = new DataDiriModel();
        $image_data = $model->find($id);
        
        if ($image_data) {
            
            $response = $this->response
                ->setHeader('Content-Type', 'image/jpeg')
                ->setBody(base64_decode($image_data[$type]));

            return $response;
        } else {
            // Return a 404 error or any other appropriate response
            $response = $this->response
                ->setStatusCode(404)
                ->setBody(view('errors/html/error_404'));

            return $response;
        }
        
    }
    
    public function detail($id){
        $model = new PengirimanModel();
        $pesanan = $model->find($id);
        $model = new DataDiriModel();
        $datadiri = $model->find($pesanan['datadiri_id']);
        return view('dashboard/pesanan',['pesanan' => $pesanan, 'datadiri' => $datadiri]);
    }

    public function delete($id){
        $model = new PengirimanModel();
        $model->delete($id);
        return redirect()->back()->with('alert', "Berhasil Menghapus Data");
    }
}
