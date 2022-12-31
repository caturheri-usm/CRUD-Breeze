<?php

namespace App\Http\Controllers;

use App\Models\Matkul;
use Illuminate\Http\Request;

class MatkulController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Matkul::paginate(5);
        return view('matkul.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('matkul.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'kode'      => 'required|max:10',
            'matkul'    => 'required|max:100',
            'dosen'     => 'required|max:150,',
            'sks'       => 'required|max:6',
            'total_mhs' => 'required|max:50',
            'ruangan'   => 'required|max:20',
        ]);
        $data = Matkul::create($data);
        return redirect('matkul')->with('message','Data Mata Kuliah Berhasil Ditambah!');
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
    public function edit($kode)
    {
        $data = Matkul::find($kode);
        return view('matkul.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $kode)
    {
        $data = $request->validate([
            'kode'      => 'required|max:10',
            'matkul'    => 'required|max:100',
            'dosen'    => 'required|max:150,',
            'sks'    => 'required|max:6',
            'total_mhs'    => 'required|max:50',
            'ruangan'    => 'required|max:20',
        ]);
            $data = Matkul::where('kode', $kode)->update([
                'kode' => $data['kode'],
                'matkul' => $data['matkul'],
                'dosen' => $data['dosen'],
                'sks' => $data['sks'],
                'total_mhs' => $data['total_mhs'],
                'ruangan' => $data['ruangan']
            ]);
        return redirect('matkul')->with('message','Data Mata Kuliah Berhasil Diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($kode)
    {
        $data = Matkul::find($kode)->delete();
        return redirect('matkul')->with('message','Data Mata Kuliah Berhasil Dihapus!');
    }
}
