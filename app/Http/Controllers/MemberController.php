<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\Member;
use App\Models\User;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use illuminate\Support\Facades\DB;
use Barryvdh\DomPDF\Facade\Pdf;
use Mail;
use App\Mail\DemoMail;

class MemberController extends Controller
{
    //
    public function showOption(Request $req)
    {
        $inputValue = $req->all();
        $req->validate([
            'show_option' => 'required',
        ]);
        $arrayTostring = implode(',', $req->input('show_option'));
    }


    public function showRadio(Request $req)
    {
        $inputValue = $req->all();
        $req->validate([
            'show_shift' => 'required',
        ]);
        $arrayTostring = implode(',', $req->input('show_shift'));
    }

    public function addData(Request $req)
    {

                $req->validate([
                'student_name' => 'required|string|max:255',
                'image' => 'required',
                'student_cnic' => 'required',
                'father_name' => 'required',
                'father_cnic' => 'required',
                'guardian_name' => 'required',
                'gender' => 'required',
                'D_O_B' => 'required',
                'B_Group' => 'required',
                'nationality' => 'required',
                'religion' => 'required',
                'domicile' => 'required',
                'mob_number' => 'required',
                'w_number' => 'required',
                'fg_number' => 'required',
                'father_occupation' => 'required',
                'father_income' => 'required',
                'permanet_address' => 'required',
                'postal_address' => 'required',
                'program' => 'required',
                'ssc_institution_name' => 'required',
                'ssc_roll_no' => 'required',
                'ssc_passing_year' => 'required',
                'ssc_marks_obtained' => 'required',
                'ssc_div' => 'required',
                'institution_name' => 'required',
                'roll_no' => 'required',
                'passing_year' => 'required',
                'marks_obtained' => 'required',
                'div' => 'required',
                ]);

            $member = new Member;
            $member->student_name = $req->student_name;

            if($req->hasFile('image'))
            {
             // $destination = public_path('image/' . $member->image);
                $file = $req->file('image');
                $extension = $file->getClientOriginalExtension();
                $filename = time(). '.' . $extension;
                $file->move(public_path('image'), $filename);
                $member->image = $filename;

            }

            $member->student_cnic = $req->student_cnic;
            $member->father_name = $req->father_name;
            $member->father_cnic = $req->father_cnic;
            $member->guardian_name = $req->guardian_name;
            $member->gender = $req->gender;
            $member->D_O_B = $req->D_O_B;
            $member->B_Group = $req->B_Group;
            $member->nationality = $req->nationality;
            $member->religion = $req->religion;
            $member->domicile = $req->domicile;
            $member->mob_number = $req->mob_number;
            $member->w_number = $req->w_number;
            $member->fg_number = $req->fg_number;
            $member->father_occupation = $req->father_occupation;
            $member->father_income = $req->father_income;
            $member->permanet_address = $req->permanet_address;
            $member->postal_address = $req->postal_address;
            $member->program = $req->program;
            $member->show_shift = is_array($req->show_shift) ? implode(',', $req->show_shift) : $req->show_shift;
            $member->show_option = json_encode($req->show_option);
            $member->ssc_institution_name = $req->ssc_institution_name;
            $member->ssc_roll_no = $req->ssc_roll_no;
            $member->ssc_passing_year = $req->ssc_passing_year;
            $member->ssc_marks_obtained = $req->ssc_marks_obtained;
            $member->ssc_div = $req->ssc_div;
            $member->institution_name = $req->institution_name;
            $member->roll_no = $req->roll_no;
            $member->passing_year = $req->passing_year;
            $member->marks_obtained = $req->marks_obtained;
            $member->div = $req->div;
            $member->save();

            $member->show_option = json_decode($member->show_option, true); // Decode JSON to array
            $data = compact('member');
            $pdf = Pdf::loadView('users-pdf', $data);
        
            // Store PDF data and filename in sessions
            session([
                'pdf_data' => $pdf->output(),
                'pdf_filename' => 'invoice.pdf'
            ]);

            return redirect()->route('send-mail');       
    }
    public function demo()
    {
        $member = Member::all();
        return view('list',compact('member'));
        
    }

    public function remove($id)
    {
        $member = Member::find($id);
        $member->delete();
        return redirect()->back();
    }

    public function edit($id)
    {
        $member = Member::find($id);
        if(is_null($member)) {
            // not found 
            return redirect()->back();
        } else {
            // found
            $data = compact('member');

            return view('edit')->with($data);
        }
    }

    public function print($id)
    {
        $member = Member::find($id);
        if(is_null($member)) {
            // not found 
            return redirect()->back();
        } else {
            // found
            $data = compact('member');
            return view('users-pdf')->with($data);
        }
    }

    public function update(Request $req)
    {
            $member = Member::find($req->id);
            $member->student_name = $req->student_name;

            if($req->hasFile('image'))
            {
                $destination = public_path('image/' . $member->image);
                if(File::exists($destination))
                {
                    File::delete($destination);
                }
                $file = $req->file('image');
                $extension = $file->getClientOriginalExtension();
                $filename = time(). '.' . $extension;
                $file->move(public_path('image'), $filename);
                $member->image = $filename;

            }
            
            $member->student_cnic = $req->student_cnic;
            $member->father_name = $req->father_name;
            $member->father_cnic = $req->father_cnic;
            $member->guardian_name = $req->guardian_name;
            $member->gender = $req->gender;
            $member->D_O_B = $req->D_O_B;
            $member->B_Group = $req->B_Group;
            $member->nationality = $req->nationality;
            $member->religion = $req->religion;
            $member->domicile = $req->domicile;
            $member->mob_number = $req->mob_number;
            $member->w_number = $req->w_number;
            $member->fg_number = $req->fg_number;
            $member->father_occupation = $req->father_occupation;
            $member->father_income = $req->father_income;
            $member->permanet_address = $req->permanet_address;
            $member->postal_address = $req->postal_address;
            $member->program = $req->program;
            $member->show_shift = is_array($req->show_shift) ? implode(',', $req->show_shift) : $req->show_shift;
            $member->show_option = json_encode($req->show_option);
            $member->ssc_institution_name = $req->ssc_institution_name;
            $member->ssc_roll_no = $req->ssc_roll_no;
            $member->ssc_passing_year = $req->ssc_passing_year;
            $member->ssc_marks_obtained = $req->ssc_marks_obtained;
            $member->ssc_div = $req->ssc_div;
            $member->institution_name = $req->institution_name;
            $member->roll_no = $req->roll_no;
            $member->passing_year = $req->passing_year;
            $member->marks_obtained = $req->marks_obtained;
            $member->div = $req->div;
            $member->save();
            return redirect('list');
    }

    public function generatePdf($id) 
    {
        ini_set('max_execution_time',3600);

        $member = Member::find($id);
        $member->show_option = json_decode($member->show_option, true);
        $data = compact('member');
        $pdf = Pdf::loadView('users-pdf', $data);

        return $pdf->download('invoice.pdf');
    }

    public function index()
    {
        return view('auth.login');
    }

    public function register_view()
    {
        return view('auth.register');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required'
            ]);
        if (Auth::attempt($request->only('email', 'password'))) {
        return redirect('/list');
        }
        
        return redirect('login')->withError('login details are not valid');
        
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users|email',
            'password' => 'required|confirmed'
        ]);

        User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=> Hash::make($request->password)
        ]);

        if (Auth::attempt($request->only('email', 'password'))) {
            return redirect('/list');
        }
        
        return redirect('register')->withError('Error');
    }

    public function logout()
    {
        Session::flush();
        Auth::logout();
        return redirect('login');
    }

    public function emailfunction()
    {
        $pdfData = session('pdf_data');
        $pdfFilename = session('pdf_filename');

        $mailData = [
                'title' => 'Mail about new student data',
                'body' => 'Below are the pdf of new entry',
            ];
            Mail::to('zmaaz99@gmail.com')->send(new DemoMail($mailData, $pdfData, $pdfFilename));

            dd('Thank You! Your data has been successfully submitted. ');
        
    }

}