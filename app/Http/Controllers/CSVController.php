<?php
namespace App\Http\Controllers;

use App\Jobs\CsvProcess;
use Illuminate\Http\Request;
use Illuminate\Bus\Batchable;
use App\Models\CSVUploadedData;
use Illuminate\Support\Facades\Bus;

class CSVController extends Controller
{
    public function index(){

        return view('upload-file');
    }

    public function upload(){

        if(request()->has('mycsv')){
           
            $data = file(request()->mycsv);

            // chunking file
            $chunks = array_chunk($data, 50);
            
            $header = [];

            $batch = Bus::batch([])->dispatch();

            foreach($chunks as $key => $chunk){
                
                $data = array_map('str_getcsv', $chunk);
                
                if($key === 0){
                    $header = $data[0];
                    unset($data[0]);
                }
                $batch->add(new CsvProcess($data,$header));
                
                
            }
            return $batch;
            
            
        }
        return 'please upload file';
    }

    public function batch(){
        $batchId = request('id');

        return Bus::findBatch($batchId);
    }
 
}
