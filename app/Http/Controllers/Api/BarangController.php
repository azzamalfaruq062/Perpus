<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Barang::all();

        $respon = [
            'response' => 'sukses',
            'data' => $data
        ];

        return response($respon, 200);
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
        $validator = $request->validate([
            'nama_barang'=> 'required|string',
            'harga_sewa'=> 'required|integer',
            'stok'=> 'required|integer'
        ]);

        $data = Barang::create($validator);

        $respon = [
            'response' => 'sukses',
            'data' => $data
        ];

        return response($respon, 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Barang::find($id);

        if($data){
            $respon = [
                'response' => 'sukses',
                'data' => $data
            ];
    
            return response($respon, 200);
        }else{
            $respon = [
                'response' => 'Data tidak ada',
            ];
    
            return response($respon, 400);
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
        $data = Barang::find($id);
        $data->update($request->all());

        $respon = [
            'respon' => 'data berhasil diupdate',
            'data' => $data
        ];

        return response($respon, '201');
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
