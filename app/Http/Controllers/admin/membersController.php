<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\member;
use App\category;
class membersController extends Controller
{
    public $folderName;
     public $flash;
     public $objectName;

     public function __construct(member $cat)
     {
        $this->middleware('auth');
        $this->objectName= $cat;
        $this->folderName ='admin.member.';
        $this->flash = " member Has Been ";
       
     }
     public function index()
     {
         //
             //$data = feature::select('id','title' , 'desc' , 'icon')->get();
            // dd($data);
 
            $data=$this->objectName::with('gteCategory')->get();

            
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
                                                             $categories = category::pluck('name' , 'id');
         return view( $this->folderName.'create' , compact('categories'));
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
               'categ_id'=>'integer|required',
               'name'=>'required|string',
               'bio'=>'required|string',
           ]);
                
           if($request['avatar'] != null){
               $file = $request->file('avatar');
               $name = $file->getClientOriginalName();
               $ext = $file->getClientOriginalExtension();
               $size =$file->getSize();
               $fileNewName= 'img_'.time().'.'.$ext;
               $file->move(public_path('images/avatar'),$fileNewName);
               $input= $request->all();
               $input['avatar']=$fileNewName;
           }
           else{
               $input =$request->all();
               $input['avatar']='avatar.png';
           }
          
           $this->objectName::create($input);
           return redirect()->route('member.index')->with('success', $this->flash.'success');
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
 
        //  $data=$this->objectName::findOrFail($id);
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
          
        return redirect()->route('member.index')->with('success',$this->flash);
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
             return redirect()->route('member.index')->with('success' , $this->flash.'Show');
         }
         else{
             return redirect()->route('member.index')->with('faild' , "sorry Your Id Not Correct");
         }
     } catch (\Throwable $th) {
        return redirect()->route('member.index')->with('faild' , $th);

     }
     }
 }
 