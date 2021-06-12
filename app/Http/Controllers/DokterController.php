<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dokter;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Exports\DokterExport;
use Maatwebsite\Excel\Facades\Excel;

class DokterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $dokter = \App\Models\Dokter::All();
        return view('0135dokter', ['dokter' => $dokter]);
    }
    public function dokterexport()
    {
        return Excel::download(new DokterExport, '0135Dokter.xlsx');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('0135tambah_Dokter');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        Dokter::create([
            'nama' => $request->nama,
            'jabatan' => $request->jabatan,
        ]);
        return redirect('/dokter');
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
        $dokter = Dokter::find($id);
        return view('0135edit_dokter', ['dokter' => $dokter]);
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
        $dokter = Dokter::find($id);
        $dokter->nama = $request->nama;
        $dokter->jabatan = $request->jabatan;
        $dokter->save();
        return redirect('dokter');
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
        $dokter = Dokter::find($id);
        $dokter->delete();
        return redirect('dokter');
    }
    public function cari(Request $request)
    {
        $dokter = $request->cari;
        $dokter = DB::table('dokter')
            ->where('nama', 'like', "%" . $dokter . "%")
            ->paginate();
        return view('0135dokter', ['dokter' => $dokter]);
    }
}
