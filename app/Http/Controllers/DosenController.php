<?php

namespace App\Http\Controllers;

use App\Http\Requests\DosenFormRequest;
use App\Models\Dosen;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DosenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dosen = Dosen::paginate(5);
        return view('dosen.index',compact('dosen'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dosen.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DosenFormRequest $request)
    {
        $dosen = $request->validated();
        // Handle file upload
        if ($request->hasFile('foto')) {
            // Get filename with the extension
            $filenameWithExt = $request->file('foto')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('foto')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            // Upload image
            $path = $request->file('foto')->storeAs('public/dosen', $fileNameToStore);
            } else {
            $fileNameToStore = 'foto.jpg';
        }
        $dosen = Dosen::create([
            'nidn' => $dosen['nidn'],
            'nama' => $dosen['nama'],
            'pendidikan' => $dosen['pendidikan'],
            'univ' => $dosen['univ'],
            'foto' => $fileNameToStore,
        ]);
        return redirect('dosen')->with('message','Data Dosen Berhasil Ditambah!');
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
    public function edit($nidn)
    {
        $dosen = Dosen::find($nidn);
        return view('dosen.edit', compact('dosen'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(DosenFormRequest $request, $nidn)
    {
        $dosen = Dosen::find($nidn);
        $dosen->update([
            'nidn' => $request->nidn,
            'nama' => $request->nama,
            'pendidikan' => $request->pendidikan,
            'univ' => $request->univ,
        ]);

        // Handle file upload
        if ($request->hasFile('foto')) {
            // Get filename with the extension
            $filenameWithExt = $request->file('foto')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('foto')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            // Upload image
            $path = $request->file('foto')->storeAs('public/dosen', $fileNameToStore);
            $dosen->update([
                'foto' => $fileNameToStore
            ]);
    }

    return redirect('dosen')->with('message','Data Dosen Berhasil Diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($nidn)
    {
        $dosen = Dosen::find($nidn);
        Storage::delete('public/dosen/'.$dosen->foto);
        $dosen->delete();
        return redirect('dosen')->with('message','Data Dosen Berhasil Dihapus!');
    }
}
