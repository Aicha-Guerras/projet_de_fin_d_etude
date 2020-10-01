<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cour;
use App\Etudiant;
use App\Lecon;
use App\Examen;
use App\Exercice;
use App\Inscription;
use App\Solution;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\UploadedFile;


class mainController extends Controller
{
    /*public function profilEtud(){
        return view('profilEtud');
    }*/

    public function all_course(){
        $courses = Cour::all();
        return view('course.all-course',[
            'courses' => $courses
        ]);
    }

    public function inscribe_course(){
        $courses = Etudiant::where('id' , Auth::guard('etudiant')->user()->id)->with('cours')->first();
        return view('course.inscribe-course',[
            'courses' => $courses
        ]);
    }

    public function create($id){
        $courses = Cour::all();
        return view('create' , [
            'courses' => $courses
        ]);
    }

    public function store_inscribe_course($id){

        $cour = Cour::find($id);
        $inscription = new Inscription();   

        $inscription->etudiant_id = Auth::guard('etudiant')->user()->id;
        $inscription->cour()->associate($cour);

        Session::flash('success', 'Success : You are inscribed!');
        $inscription->save();
        return redirect(route('cour' , $cour->id , [$cour->slug]));
    }

    public function show($id){
        $courses = Etudiant::where('id' , Auth::guard('etudiant')->user()->id)->with('cours')->first();
        $course=Cour::find($id);
        $inscrit=false;
        $true=false;
        return view('course.cour',[
            'cour' => $course,
            'courses' => $courses,
            'inscrit' => $inscrit,
            'true' => $true
            ]);
    }

    public function show_inscribe_course($id){
        $course=Cour::find($id);
        return view('course.inscribe-cour',['cour' => $course]);
    }

    public function lecon($id){
        $course=Cour::find($id);
        $lecon = Cour::where('id' , $id)->with( 'lecons')->first();
        return view('course.lecon',[
            'course' => $course,
            'lecon' => $lecon
        ]);
    }

    public function tp($id){
        $course=Cour::find($id);
        $tp = Cour::where('id' , $id)->with( 'examens')->first();
        return view('course.tp',[
            'course' => $course,
            'tp' => $tp
        ]);
    }

    public function examen($id){
        $course=Cour::find($id);
        $examen = Cour::where('id' , $id)->with( 'examens')->first();
        return view('course.examen',[
            'course' => $course,
            'examen' => $examen
        ]);
    }

    public function exercice_tp($id_examen ){
        $examen=Examen::find($id_examen);
        $exercice = Examen::where('id' , $id_examen)->with( 'exercices')->first();
        return view('course.all-exercice',[
            'examen' => $examen,
            'exercice' => $exercice
        ]);
    }
    public function exercice_examen($id_examen){
        $examen=Examen::find($id_examen);
        $exercice = Examen::where('id' , $id_examen)->with( 'exercices')->first();
        return view('course.all-exercice',[
            'examen' => $examen,
            'exercice' => $exercice
        ]);
    }

    public function exercice($id){
        $exercice=Exercice::find($id);
        return view('course.exercice',[
            'exercice' => $exercice,
        ]);
    }

    public function exercice_store(Request $request , $id){
        $exercice = Exercice::find($id);
        $solutions = new Solution();

        $this->validate($request, [
            'my_file' => 'image|mimes:jpeg,png,jpg,gif,svg',
            'my_file' => 'file|mimes:pdf,docx'
        ]);
        $solutions->etudiant_id = Auth::guard('etudiant')->user()->id;
        if ($request->hasFile('my_file')) {
            $file = $request->file('my_file');
            $fileName = $file->getClientOriginalName();
            $destinationPath = public_path().'/files/';
            $file->move($destinationPath , $fileName);
            $solutions->reponce = $fileName;
        }
        
        $solutions->exercice()->associate($exercice);

        Session::flash('success', 'Success : You send solution!');        
        $solutions->save();
        return redirect(route('exercice' , $exercice->id , [$exercice->slug]));
    }

    public function download($file_name) {
        $file_path = public_path('files/'.$file_name);
        return response()->download($file_path);
        }

}
