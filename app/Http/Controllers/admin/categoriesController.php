<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\category;
class categoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public $folderName;
     public $flash;
     public $objectName;

     public function __construct(category $cat)
     {
        $this->middleware('auth');
        $this->objectName= $cat;
        $this->folderName ='admin.categories.';
        $this->flash = " Category Has Been ";
       
     }
     public function index()
     {
         //
             //$data = feature::select('id','title' , 'desc' , 'icon')->get();
            // dd($data);
 
            $data=$this->objectName::all();
          // $data = $this->objectName::paginate(3);
                   return view($this->folderName.'index' , compact('data'));
 
     }
 
     /**
      * Show the form for creating a new resource.
      *
      * @return \Illuminate\Http\Response
      */
     public function create()
     {
         //
 
         return view( $this->folderName.'create');
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
               'name'=>'string|required',
           ]);
 
          
           $this->objectName::create($data);
           return redirect()->route('category.index')->with('success', $this->flash.'sucess');
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
         return view($this->folderName.'show' ,compact('data'));
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
         return view($this->folderName.'edit',compact('data'));
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
            'name'=>'required|string',
          
        ]);
        $this->objectName::find($id)->update($request->all());
          
        return redirect()->route('category.index')->with('success',$this->flash);
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
 
     try {
         //code...
         $ele=$this->objectName::findOrFail($id);
         if($ele){
             $ele->delete();
             return redirect()->route('category.index')->with('success' , $this->flash.'Deleted');
         }
         else{
             return redirect()->route('category.index')->with('faild' , "sorry Your Id Not Correct");
         }
     } catch (\Throwable $th) {
        return redirect()->route('category.index')->with('faild' , $th);

     }
     }
 }
 