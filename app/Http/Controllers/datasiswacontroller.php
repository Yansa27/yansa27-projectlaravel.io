<?php

namespace App\Http\Controllers;
use App\datasiswa_model;
use App\dataguru_model;
use App\jadwal_model;
use Illuminate\Http\Request;

class datasiswacontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mahasiswa = datasiswa_model::all();
        return view('datasiswa',['mahasiswa' => $mahasiswa]);
    }

    public function dosen()
    {
        $dosen = dataguru_model::all();
        return view('dataguru',['dosen' => $dosen]);
    }

    public function jadwal()
    {
        $jadwal = jadwal_model::all();
        return view('jadwal',['jadwal' => $jadwal]);
    }

    public function jadwall()
    {
        $jadwal = jadwal_model::all();
        return view('dalam/detailjadwal',['jadwal' => $jadwal]);
    }


    public function indexs()
    {
        $mahasiswa = datasiswa_model::all();
        return view('dalam/siswa',['mahasiswa' => $mahasiswa]);
    }


    public function dosen1()
    {
        $dosen = dataguru_model::all();
        return view('dalam/guru',['dosen' => $dosen]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('tambahsiswa');
    }

    public function createguru()
    {
        return view ('tambahguru');
    }

    public function createjadwal()
    {
        return view ('tambahjadwal');
    }
  

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request ->validate{[


        'nama' => 'required',
        'nisn' => 'required|size:9',  
        'email' => 'required',
        'kelas' => 'required'
        ]};

       datasiswa_model::create($request->all());

       return redirect('/siswa');

    }

    public function storeguru(Request $request)
    {
        $request ->validate{[


        'nama' => 'required',
        'nip' => 'required|size:9',  
        'mata_pelajaran' => 'required'
        ]};

       dataguru_model::create($request->all());

       return redirect('/guru');

    }

    public function storejadwal(Request $request)
    {
        $request ->validate{[


        'senin' => 'required',
        'selasa' => 'required',  
        'rabu' => 'required',
        'kamis' => 'required',
        'jumat' => 'required',
        'sabtu' => 'required'
        ]};

       jadwal_model::create($request->all());

       return redirect('/detailjadwal');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
        public function show (datasiswa_model $mahasiswa) 
    {

      {
        return view ('detailsiswa', compact('mahasiswa'));
      }
      
    }

    public function detail (dataguru_model $dosen) 
    {

      {
        return view ('detailguru', compact('dosen'));
      }
      
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
    public function destroy(datasiswa_model $mahasiswa)
    {
        datasiswa_model::destroy($mahasiswa->id);
        return redirect('/siswa');
    }

    public function destroy1(datasiswa_model $dosen)
    {
        dataguru_model::destroy($dosen->id);
        return redirect('/guru');
    }

    public function destroyjadwal(jadwal_model $jadwal)
    {
        jadwal_model::destroy($jadwal->id);
        return redirect('/detailjadwal');
    }
}
