<?php

namespace App\Commands;

use CodeIgniter\CLI\BaseCommand;
use App\Models\DataDiriModel;

use CodeIgniter\CLI\CLI;

class Compress extends BaseCommand
{
    protected $group       = 'demo';
    protected $name = 'compress';
    protected $description = 'Compress existing image in database.';

    public function run(array $params)
    {
        CLI::write('Begin compressing.......');
        $model = new DataDiriModel();
        $datadiri = $model->findAll();
        
        foreach($datadiri as $d){
            CLI::write('ID:'.$d['id'], 'yellow');
            CLI::write('......compressing', 'white');
            
            try{
                $temp_source_image = tempnam(sys_get_temp_dir(), 'image');
                
                $blob = $d['ktp'];
                file_put_contents($temp_source_image, base64_decode($blob));
    
                $handler = service('image')->withFile($temp_source_image);
                $handler->resize($handler->getWidth()/4,$handler->getHeight()/4, true);
                $handler->save();
                
                $d['ktp'] = base64_encode(file_get_contents($temp_source_image));
    
                $blob = $d['ktp_selfie'];
                file_put_contents($temp_source_image, base64_decode($blob));
    
                $handler = service('image')->withFile($temp_source_image);
                $handler->resize($handler->getWidth()/4,$handler->getHeight()/4, true);
                $handler->save();
                
                $d['ktp_selfie'] = base64_encode(file_get_contents($temp_source_image));
                
                unlink($temp_source_image);

                CLI::write('......updating', 'white');
                
                $model->update($d['id'],$d);

                CLI::write('......OK', 'green');   
            
            }
            catch(\Error $e){
                CLI::write('......FAILED', 'red');               
            }
        }

        CLI::write('COMPLETE','green');
    }
}
