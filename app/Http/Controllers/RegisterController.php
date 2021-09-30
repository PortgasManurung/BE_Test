<?php

namespace App\Http\Controllers;

use App\Models\Bank;
use App\Models\CandidateStatus;
use App\Models\Education;
use App\Models\Register;
use Illuminate\Http\Request;
use App\Models\Religion;
use App\Models\Source;
use App\Models\University;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $religion = Religion::all();
        $university = University::all();
        $bank = Bank::all();
        $education = Education::all();
        $source = Source::all();
        $register = Register::all();
        return view('form_registrasi',compact('religion','university','bank','education','source','register'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $model = new Register;
        return view('register.create',compact($model));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $model = new Register;
        $model->id =$request->id;
        $model->name =$request->nama;
        $model->gender =$request->jk;
        $model->date_of_birth =$request->date;
        $model->city_of_birth =$request->city_of_birth;
        $model->religion_id =$request->agama;
        $model->email =$request->email;
        $model->phone =$request->phone;
        $model->identity_number =$request->ktp;
        $model->bank_id =$request->bank_id;

        $model->instagram =$request->instagram;
        $model->twitter =$request->twitter;
        $model->linkedin =$request->linkedin;
        $model->facebook =$request->facebook;

        $model->bank_account =$request->account;
        $model->bank_name =$request->bank_name;
        $model->address =$request->address;
        $model->education_id =$request->education_id;
        $model->university_id =$request->university_id;

        $model->major =$request->jurusan;

        $model->graduation_year =$request->tahun_lulus;
        $model->in_college =$request->masih;
        $model->semester =$request->semester;

        $model->skill =$request->skill;
        $model->file_cv =$request->cv;
        $model->file_photo =$request->photo;
        $model->file_portfolio =$request->portfolio;
        $model->skill =$request->nama;
        $model->source_information_id =$request->customRadio;

        $model->candidate_status_id = $request->candidate_status_id;
        $model->identity_file =$request->file('ktp_file')->store('identity_images');
        $model->file_cv =$request->file('cv')->store('cv_images');
        $model->file_photo =$request->file('photo')->store('foto_images');;
        $model->file_portfolio =$request->file('portfolio')->store('portfolio_images');;

        $c = $model->save();
        return redirect('form_registrasi');


        
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
    }
}
