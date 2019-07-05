<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\sekolah;

class SekolahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sekolah = sekolah::all();
        $response = [
        'success' => true,
        'data' => $sekolah,
        'message' => 'berhasil'
    ];
    return response()->json($response, 200);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $sekolah = new sekolah();
        $sekolah->walikelas = $request->walikelas;
        $sekolah->kepsek = $request->kepsek;
        $sekolah->wakasek = $request->wakasek;
        $sekolah->tatausaha = $request->tatausaha;
        $sekolah->penasehat = $request->penasehat;
        $sekolah->save();
        $response = [
        'success' => true,
        'data' => $sekolah,
        'message' => 'berhasil'
    ];
       return response()->json($response, 200);
}
    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $sekolah = sekolah::findOrFail($id);
        $response = [
            'success' => true,
            'data' => $sekolah,
            'message' => 'berhasil'
        ];
        return response()->json($response, 200);
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
        $sekolah = sekolah::findOrFail($id);
        $sekolah->walikelas = $request->walikelas;
        $sekolah->kepsek = $request->kepsek;
        $sekolah->wakasek = $request->wakasek;
        $sekolah->tatausaha = $request->tatausaha;
        $sekolah->penasehat = $request->penasehat;
        $sekolah->save();
        $response = [
        'success' => true,
        'data' => $sekolah,
        'message' => 'berhasil'
    ];
       return response()->json($response, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sekolah = sekolah::findOrFail($id)->delete();
        $response = [
        'success' => true,
        'data' => $sekolah,
        'message' => 'berhasil'
    ];
       return response()->json($response, 200);
    }
}
