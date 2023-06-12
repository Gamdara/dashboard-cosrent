<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\DataDiriModel;
use App\Models\PengirimanModel;
use mysqli;

class Pesanan extends BaseController
{

    public function success()
    {
        return view('success');
    }

    public function create()
    {
        //
        $req = $this->request->getPost();

        $img = $this->request->getFile('ktp')->getTempName();
        // $name = $img->getRandomName();
        $req['ktp'] = base64_encode(file_get_contents( $img));
        // $img->move('img/upload/',$name);

        $img =  $this->request->getFile('ktp_selfie')->getTempName();
        // $name = $img->getRandomName();
        $req['ktp_selfie'] = base64_encode(file_get_contents( $img));
        // $img->move('img/upload/',$name);

        $model = new DataDiriModel();
        $model->insert($req);
        $req['datadiri_id'] = $model->getInsertID();


        $model = new PengirimanModel();
        $model->insert($req);
        return redirect("success");
    }

}
