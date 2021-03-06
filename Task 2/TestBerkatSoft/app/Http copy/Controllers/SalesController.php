<?php

namespace App\Http\Controllers;
Use App\Sales;
Use App\Produk;
Use App\Customer;
use Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class SalesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data=DB::select("SELECT t.id,t.id_produk,t.id_cust,t.total_item,t.tanggal,t.tagihan,p.nama_produk,p.id,p.harga,c.nama,c.id
        FROM sale t
        JOIN produk p
        JOIN customer c
        WHERE t.id_produk=p.id AND t.id_cust=c.id
        ");
        return view('Sales.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $data=Sales::all();
        $cust=Customer::all();
        $produk=Produk::all();
        return view('Sales.tambah',compact('data','cust','produk'));
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
            'tanggal'=>'required|date',
            'total_item'=>'required',
        ]);
        //Get Produk
        $produk=Produk::find($request->input('produk'));
        //cek stok
        if($request->total_item > $produk->stok){
            Session::flash('message', 'Stok barang tidak mencukupi, data penjualan gagal ditambahkan!');
            Session::flash('type', 'danger');
            return redirect()->back();
        }else{
            //input data transaksi
            $data=Sales::create([
                'id_cust'=>$request->input('cust'),
                'id_produk'=>$request->input('produk'),
                'tanggal'=>$request->tanggal,
                'total_item'=>$request->total_item,
            ]);
            //update stok
            $sisa['stok']=$produk->stok - $request->total_item;
            $produk->update($sisa);
            //set total tagihan
            $data->tagihan=$request->total_item * $produk->harga;
            $data->save();
            Session::flash('message', 'Data penjualan berhasil ditambahkan!');
            Session::flash('type', 'success');
            return redirect()->route('sale.index');
        }
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
    public function destroy($id)
    {
        //
    }
}
