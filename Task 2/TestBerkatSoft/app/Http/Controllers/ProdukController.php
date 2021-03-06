<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Produk;
Use Session;
class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data=Produk::all();
        return view('Produk.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $data=Produk::all();
        return view('Produk.tambah',compact('data'));
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
        $this->validate($request,[
            'nama_produk'=>'required',
            'stok'=>'required|numeric',
            'harga'=>'required|numeric',
        ]);
        $data=Produk::create([
            'nama_produk'=>$request->nama_produk,
            'stok'=>$request->stok,
            'harga'=>$request->harga,
        ]);
        Session::flash('message', 'Data '.$data->nama_produk. ' berhasil ditambahkan!');
        Session::flash('type', 'success');
        return redirect()->route('produk.index');
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
        $data=Produk::find($id);
        return view('produk.edit',compact('data'));
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
        $this->validate($request,[
            'nama_produk'=>'required',
            'stok'=>'required|numeric',
            'harga'=>'required|numeric',
        ]);
        $data=Produk::find($id);
        $data->nama_produk=$request->nama_produk;
        $data->stok=$request->stok;
        $data->harga=$request->harga;
        $data->save();
        Session::flash('message', 'Data '.$data->nama_produk. ' berhasil diubah!');
        Session::flash('type', 'success');
        return redirect()->route('produk.index');
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
        $data=Produk::findorfail($id);
        $data->delete();
        Session::flash('message', 'Data '.$data->nama_produk. ' berhasil dihapus!');
        Session::flash('type', 'success');
        return redirect()->back();
    }
}
