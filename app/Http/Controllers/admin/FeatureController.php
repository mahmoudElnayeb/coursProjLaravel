<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\feature;
use Illuminate\Support\Facades\Mail;

class FeatureController extends Controller
{
    
    public $objectName;
    public $folderView;
    public $flash;

     public function __construct(feature $model)
     {
        $this->middleware('auth');
        $this->objectName=$model;
        $this->folderView='admin.feature.';
        $this->flash=" Feature Data Has Been Updated Success ";
         
     }

      
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
            //$data = feature::select('id','title' , 'desc' , 'icon')->get();
           // dd($data);

           $data=$this->objectName::all();
         // $data = $this->objectName::paginate(3);
                  return view($this->folderView.'index' , compact('data'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        return view( 'admin.feature.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
          $data= $request->validate([
              'title'=>'string|required',
              'desc'=>'required|string',
              'icon'=>'required|string'
          ]);

         
          $this->objectName::create($data);
          return redirect('admin/feature')->with('success', $this->flash);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //

        $data=$this->objectName::findOrFail($id);
        return view($this->folderView.'show' ,compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
             $data = $this->objectName::find($id);
        return view($this->folderView.'edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //

       // dd($request->all(), $id);

       $request->validate([
           'title'=>'required|string',
           'desc'=>'required|string',
           'icon'=>'required|string'
       ]);
       $this->objectName::find($id)->update($request->all());
          Mail::to('mado.text@mado.com')->send(new \App\Mail\welcomeMail('memo'));
       return redirect('admin/feature')->with('success',$this->flash);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //

       $ele=$this->objectName::findOrFail($id);
       if($ele){
           $ele->delete();
           return redirect()->back()->with('success' , " Your Recored Delete Suuccess");
       }
       else{
           return redirect()->back()->with('faild' , "sorry Your Id Not Correct");
       }
    }
}
