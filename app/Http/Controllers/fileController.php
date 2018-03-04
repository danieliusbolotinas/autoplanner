<?php
namespace App\Http\Controllers\fileController;
use Illuminate\Http\Request;
use AutoPlanner\Http\Controllers\Controller;
use App\Brief;

class FileController extends Controller {
    public function importExportExcelORCSV(){
        return view('briefSelection');
    }
    public function importFileIntoDB(Request $request){
        if($request->hasFile('sample_file')){
            $path = $request->file('sample_file')->getRealPath();
            $data = \Excel::load($path)->get();
            if($data->count()){
                foreach ($data as $key => $value) {
                    $arr[] = ['name' => $value->name, 'details' => $value->details];
                }
                if(!empty($arr)){
                    \DB::table('brief')->insert($arr);
                    dd('Insert Record successfully.');
                    return redirect()->route('brief');
                }
            }
        }
        dd('Request data does not have any files to import.');
    }

    public function downloadExcelFile($type){
        $brief = Brief::get()->toArray();
        return \Excel::create('expertphp_demo', function($excel) use ($brief) {
            $excel->sheet('sheet name', function($sheet) use ($products)
            {
                $sheet->fromArray($brief);
            });
        })->download($type);
    }
}
