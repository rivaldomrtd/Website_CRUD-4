<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kamar;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Exports\KamarExport;
use Maatwebsite\Excel\Facades\Excel;

class KamarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $kamar = \App\Models\Kamar::All();
        return view('0135kamar', ['kamar' => $kamar]);
    }
    public function kamarexport()
    {
        return Excel::download(new KamarExport, '0135Kamar.xlsx');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('0135tambah_Kamar');
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
        Kamar::create([
            'id_pasien' => $request->id_pasien,
            'id_dokter' => $request->id_dokter,
        ]);
        return redirect('/kamar');
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
        $kamar = Kamar::find($id);
        return view('0135edit_kamar', ['kamar' => $kamar]);
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
        $kamar = Kamar::find($id);
        $kamar->id_pasien = $request->id_pasien;
        $kamar->id_kamar = $request->id_kamar;
        $kamar->save();
        return redirect('kamar');
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
        $kamar = Kamar::find($id);
        $kamar->delete();
        return redirect('kamar');
    }
    public function cari(Request $request)
    {
        $kamar = $request->cari;
        $kamar = DB::table('kamar')
            ->where('id', 'like', "%" . $kamar . "%")
            ->paginate();
        return view('0135kamar', ['kamar' => $kamar]);
    }
}
