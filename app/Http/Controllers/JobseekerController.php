<?php

namespace App\Http\Controllers;

use App\Models\Calonpegawai;
use App\Models\District;
use App\Models\Jobseeker;
use App\Models\Province;
use App\Models\Regency;
use App\Models\Village;
use Illuminate\Http\Request;

class JobseekerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $provinsis = Province::all();
        return view('datadiri.halamandatadiri',compact('provinsis'));

    }

    public function getKabupaten(Request $request)
    {
        $id_provinsi = $request->id_provinsi;
        $kabupatens = Regency::where('province_id',$id_provinsi);
        foreach($kabupatens as $kabupaten){
            echo "<options value='$kabupaten->id'>$kabupaten->name<options>";
        }
    }

    public function getKecamatan(Request $request)
    {
        $id_kabupaten = $request->id_kabupaten;
        $kecamatans = District::where('regency_id',$id_kabupaten);
        foreach($kecamatans as $kecamatan){
            echo "<options value='$kecamatan->id'>$kecamatan->name<options>";
        }
    }

    public function getDesa(Request $request)
    {
        $id_kecamatan = $request->id_kecamatan;
        $kelurahans = Village::where('district_id',$id_kecamatan);
        foreach($kelurahans as $kelurahan){
            echo "<options value='$kelurahan->id'>$kelurahan->name<options>";
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'max:255','string'],
            'tanggalLahir' => ['required', '','string'],
            'alamat' => ['required', 'max:255','string'],
            'skills' => ['required', 'max:255','string'],
            'status' => ['required','string','in_array:lajang,menikah'],
            'kelamin' => ['required','string','in_array:L,P'],
            'noHP' => ['required','numeric','max:9999999999999'],
            'fotoDiri' => ['required'],
        ]);
        Calonpegawai::create($request->all());
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Jobseeker $jobseeker)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Jobseeker $jobseeker)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Jobseeker $jobseeker)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Jobseeker $jobseeker)
    {
        //
    }
}
