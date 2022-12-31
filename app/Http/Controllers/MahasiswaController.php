<?php

namespace App\Http\Controllers;

use App\Http\Requests\MahasiswaFormRequest;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Mahasiswa::paginate(5);
        return view('mahasiswa.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('mahasiswa.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MahasiswaFormRequest $request)
    {
        $data = $request->validated();
        $mahasiswa = Mahasiswa::create($data);
        return redirect('mahasiswa')->with('message','Data Mahasiswa Berhasil Ditambah!');
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
    public function edit($nim)
    {
        $data = Mahasiswa::find($nim);
        return view('mahasiswa.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(MahasiswaFormRequest $request, $nim)
    {
        $data = $request->validated();
            $mahasiswa = Mahasiswa::where('nim', $nim)->update([
                'nim' => $data['nim'],
                'nama' => $data['nama'],
                'umur' => $data['umur'],
                'alamat' => $data['alamat'],
                'kota' => $data['kota'],
                'kelas' => $data['kelas'],
                'jurusan' => $data['jurusan']
            ]);
        return redirect('mahasiswa')->with('message','Data Mahasiswa Berhasil Diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($nim)
    {
        $data = Mahasiswa::find($nim)->delete();
        return redirect('mahasiswa')->with('message','Data Mahasiswa Berhasil Dihapus!');
    }
}
