<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $data = Barang::all();
        // dd($data);
        // $data = Barang::select('barang.nama_barang', 'barang.harga_sewa', 'detail_penyewaan.kuantitas')->join('detail_penyewaan', 'detail_penyewaan.barang_id', '=', 'barang.id')->get();
        $profinsi = Http::get('https://emsifa.github.io/api-wilayah-indonesia/api/provinces.json');
        $data = Barang::select('id', 'nama_barang','harga_sewa', 'stok')->paginate(1);
        // dd($data->json());
        $prof = $profinsi->json();
        return view('sewa/tampil', compact('data', 'prof'));

        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('sewa/tambah');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        // $data = Barang::select('id_barang');
        // Barang::create($request->all());
        // DB::table('barang')->insert([
        //     'nama_barang' => $request->nama_barang,
        //     'harga_sewa' => $request->harga_sewa,
        //     'stok' => $request->stok
        // ]);
        // Barang::create(array(
        //     'nama_barang' => $request->nama_barang,
        //     'harga_sewa' => $request->harga_sewa,
        //     'stok' => $request->stok
        // ));
        // DB::insert('insert into barang (id, name) values (?, ?)', [1, 'Dayle']);
        
        $validator = $request->validate([
            'nama_barang'=> 'required|string',
            'harga_sewa'=> 'required|integer',
            'stok'=> 'required|integer'
        ]);

        Barang::create($validator);

        return redirect('/sewa')->with('success', 'Berhasil tambah Barang !');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $barang = Barang::select('id', 'nama_barang','harga_sewa', 'stok')->where('id', $id)->get();
        // return view('flashmassage', compact('barang'));
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // $barang = Barang::select('id', 'nama_barang', 'harga_sewa', 'stok')->where('id', $id)->get();
        // return view('sewa/edit', compact('barang'));
        $barang = DB::table('barang')->where('id',$id)->get();
	    return view('sewa/edit',['barang' => $barang]);
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
        // $data = Barang::find($id);
        // $data->update($request->all());
	    DB::table('barang')->where('id',$request->id)->update([
		'nama_barang' => $request->nama_barang,
		'harga_sewa' => $request->harga_sewa,
		'stok' => $request->stok,
	]);
	return redirect('/sewa')->with('success', 'Berhasil Update Barang !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
	        DB::table('barang')->where('id',$id)->delete();
            return redirect('/sewa')->with('success', 'Berhasil hapus Barang');
    }

    public function wilayah()
    {
        // $a = Http::get('https://emsifa.github.io/api-wilayah-indonesia/api/provinces.json');
        // dd($data->json());
            // $profinsi = Http::get('https://emsifa.github.io/api-wilayah-indonesia/api/provinces.json');
        // $data = Barang::select('id', 'nama_barang','harga_sewa', 'stok')->paginate(1);
        // dd($data->json());
            // $prof = $profinsi->json();
            // return view('sewa/tampil', compact('prof'));
        // Http::post('http://127.0.0.1:8000/api/sewa', [
        //     'nama_barang' => 'Tas',
        //     'harga_sewa' => '1234',
        //     'stok' => '34',
        // ]);

    }
}
