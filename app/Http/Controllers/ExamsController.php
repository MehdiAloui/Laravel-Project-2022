<?php

namespace App\Http\Controllers;

use App\Models\exams;
use Auth;
use Composer\Command\FundCommand;
use File;
use Illuminate\Http\Request;
use Storage;

use function Psy\bin;

class ExamsController extends Controller
{

  public function edit($id)
  {
    $exam=exams::find($id);
    return view('frontend.user.file.edit',compact('exam'));
  }
  public Function destroy($id)
  {
    $exam=exams::find($id);
    $destination='file/'.$exam->file;
    if(File::exists($destination))
    {
      File::delete($destination);
    }
    $exam->delete();
    return redirect()->back();
  }
  public function update(Request $request,$id)
  {
    $exam=exams::find($id);
    $destination='file/'.$exam->file;
    if(File::exists($destination))
    {
      File::delete($destination);
    }
    $exam->date=$request->input('date');
      $exam->niveau=$request->input('niveau');
      $exam->description=$request->input('description');
      if($request->hasFile('file'))
      {
        $file=$request->file('file');
        $extention=$file->getClientOriginalExtension();
        $filename=time().'.'.$extention;
        $file->move('file/',$filename);
        $exam->file=$filename;
      }
      $exam->update();
      return redirect()->back();

  }

    public function addfile(Request $request)
    {
      $exam=new exams;
      $user =Auth::user();
      

      $exam->date=$request->input('date');
      $exam->niveau=$request->input('niveau');
      $exam->description=$request->input('description');
      $exam->email="$user->email";
      if($request->hasFile('file'))
      {
        $file=$request->file('file');
        $extention=$file->getClientOriginalExtension();
        $filename=time().'.'.$extention;
        $file->move('file/',$filename);
        $exam->file=$filename;
      }
      $exam->save();
      return redirect()->back() ;
    




      //redirect()->back()->with('statue','file added Successfully')
      /*$name=Storage::disk('local')->put('file',$request->file);
      $a=exams::create(['date' => $request->date,
      'niveau' => $request->arriver,
      'date' => $request->date,
      'email' =>"ùqls@kggk.com",
      'file' =>$name,
      'description' => $request->description,]);
      return view('frontend.user.dashboard');*/
     
    }
   /*public function retourner()
    {
      $exam=new exams();
      return view('frontend.user.dashboard',compact('exam')) ;
    }*/
}
