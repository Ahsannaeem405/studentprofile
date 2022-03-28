<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Models\Student;

class studentController extends Controller
{
    public function viewstudents(){

        $student=Student::all();



        return view('student',compact('student'));
    }


    // public function imagesave(Request $request){
       

    //     if ($request->hasfile('file')) {
    //         $image = $request->file('file');
           

    //         $imageName = time().'.'.$request->file->extension();
           
    //         $imagePath = $request->file->move(public_path('StudentsImage'), $imageName);
    //        Session::put('img_news',$imageName);
     
    //     } 

             
    // }


    public function addstudent(Request $request){


        $student=new Student();
        $get=Session::get('img_news');

        $student->name=$request->name;
        $student->email=$request->email;
        if($request->hasFile('file2'))
        {
          
        $file2=$request->file('file2');
        $extension=$request->file2->extension();
        $fileName2=rand(11111,99999)."_.".$extension;
        $request->file2->move(('StudentsImage'),$fileName2);
        $student->image =$fileName2;
        }
      
        $student->number=$request->number;
        $student->registration=$request->registration;
        $student->cgpa=$request->cgpa;
        $student->typeofstudy=$request->typeofstudy;
        $student->semester=$request->semester;
        $student->AA=$request->AA;
        $student->graduated=$request->graduated;
        $student->degreename=$request->degreename;
        $student->departmentname=$request->departmentname;
        $student->activity=$request->activity;
        $student->award=$request->award;
           $student->barcode=$request->barcode;

        
  if ($request->hasfile('pdffile')) {
   

    $file = $request->pdffile;
 
$filename = $file->getClientOriginalName();

$file->move(('file/'),$filename);

$student->pdffile=$filename;
  }
        $student->save();

        return redirect()->back()->with('status', 'Student Added Successfully.');
    
    }


    public function updatestudent(Request $request,$id){


        $student=Student::find($id);
  
    

        $student->name=$request->name;
        $student->email=$request->email;

 
        if($request->hasFile('file2'))

        {
          
        $file2=$request->file('file2');
        $extension=$request->file2->extension();
        $fileName2=rand(11111,99999)."_.".$extension;
        $request->file2->move(('StudentsImage'),$fileName2);
        $student->image =$fileName2;
        }
        $student->number=$request->number;
        $student->registration=$request->registration;
        $student->cgpa=$request->cgpa;
        $student->typeofstudy=$request->typeofstudy;
        $student->semester=$request->semester;
        $student->AA=$request->AA;
        $student->graduated=$request->graduated;
        $student->degreename=$request->degreename;

        $student->departmentname=$request->departmentname;
        $student->activity=$request->activity;
        $student->award=$request->award;
           $student->barcode=$request->barcode;
         if ($request->hasfile('pdffile')) {
   

            $file = $request->pdffile;
         
        $filename = $file->getClientOriginalName();
        
        $file->move(('file/'),$filename);
        
        $student->pdffile=$filename;
          }
        $student->save();

        return redirect()->back()->with('status', 'Student Updated Successfully.');
    
    }


    public function deletestudent(Request $request,$id){

      
        $students_delete=Student::find($id);
        $students_delete->delete();
        
        return redirect()->back()->with('status', 'Student deleted Successfully.');

}


public function getrecord(Request $request){



if($request->RadioButtonInputTypeGroup==1){

    $student=Student::where('barcode',$request->TextBoxValue)->first();

    
    if($student==null){
        return redirect()->back()->with('status', 'Student Not Found');

    }
    else{

        $status=1;

        return view('record',compact('student','status'));
    }

}

else{
    $student=Student::where('registration',$request->TextBoxValue)->first();

    if($student==null){
        return redirect()->back()->with('status', 'Student Not Found');

    }
    else{
        $status=2;
        return view('record',compact('student','status'));
    }
}

}
}
