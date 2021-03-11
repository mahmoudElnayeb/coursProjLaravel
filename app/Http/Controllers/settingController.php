<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\setting;
class settingController extends Controller
{
    //


    public $folderName;
     public $flash;
     public $objectName;

     public function __construct(setting $cat)
     {
        $this->middleware('auth');
        $this->objectName= $cat;
        $this->folderName ='admin.settings.';
        $this->flash = " Settings Has Been ";
       
     }
    public function show(){
         $data = $this->objectName::first();

         //select('id', 'apointment_intro', 'about','working_time',
        //  'address' ,'facebook','twitter','google','logo','service_image','intro_image')->where('id','=', 8)->get();
        //  dd($data);
         if(empty($data)){

            
               $data->id = 1;
               dd($data->id);
               $data->apointment_intro=null;
               $data->logo=null;
               $data->intro_image=null;
               $data->service_image=null;
               $data->about=null;
               $data->working_time=null;
               $data->address=null;
               $data->facebook=null;
               $data->twitter=null;
               $data->google=null;
         }

         return  view($this->folderName.'view' , compact('data'));
            }




            ////////////////////////////////////////////////v UPDATE FUNCTION //////////////////////////
    public function update(Request $request){
                $data= $request->validate([
                     "apointment_intro"=>'required|string',
                     "about"=>'required|string',
                     "working_time"=>'required|string',
                     "address"=>'required|string',
                     "facebook"=>'required|string',
                     "twitter"=>'required|string',
                     "google"=>'required|string'
                    
                 ]);

                 if($request['logo'] != null && $request['service_image'] != null && $request['intro_image']!=null){
                    //  $logo = $request->file('logo');
                    //  $service_image =$request->file('service_image');
                    //  $intro_image =$request->file('intro_image');

                    //  $logoExt = $logo->getClientOriginalExtension();
                    //  $serviceExt = $service_image->getClientOriginalExtension();
                    //  $introExt = $intro_image->getClientOriginalExtension();

                    //  $logoName = 'img_'.time().'.'.$logoExt;
                    //  $serviceName = 'img_'.time().'.'.$serviceExt;
                    //  $introName = 'img_'.time().'.'.$introExt;


                    //  $logo->move(public_path('images/setting_Logo_img'), $logoName);
                    //  $service_image->move(public_path('images/setting_service_img'), $serviceName);
                    //  $intro_image->move(public_path('images/setting_intro_img'), $introName);

                    //  $data['logo'] =$logoName;
                    //  $data['service_image'] =$serviceName;
                    //  $data['intro_image'] =$introName;

                    $data['logo'] =self::getInputFileName($request['logo']);
                    $data['service_image'] =self::getInputFileName($request['service_image']);
                    $data['intro_image'] =self::getInputFileName($request['intro_image']);
                     
                 }

                 $check =$this->objectName::select('id')->get();
                 if(count($check)==0){
                    $this->objectName::create($data);
                    return redirect()->route('setting')->with('success',$this->flash.'Inserted');
                 }
                 else{
                     $id = $check[0]->id;
                     $this->objectName::find($id)->update($data);
                     return redirect()->route('setting')->with('success',$this->flash.'Updated');
                 }
    }

    static function getInputFileName($file_input){
        $newFile = $file_input;
        $FileName = $newFile->getClientOriginalExtension();
        $FileNewName = 'img_'.time().'.'.$FileName;
        $newFile->move(public_path('images/setting_Logo_img'), $FileNewName);
        return  $FileNewName;
    }
}
