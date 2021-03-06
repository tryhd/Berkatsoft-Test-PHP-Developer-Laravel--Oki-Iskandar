<?php

namespace App\Http\Controllers;
Use App\Customer;
use Session;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data=Customer::all();
        return view('customer.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $data=Customer::all();
        return view('customer.tambah',compact('data'));
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
            'nama'=>'required',
            'alamat'=>'required',
            'email'=>'required|email',
            'telpon'=>'required',
        ]);
        $data=Customer::create([
            'nama'=>$request->nama,
            'alamat'=>$request->alamat,
            'email'=>$request->email,
            'telpon'=>$request->telpon,
        ]);
        Session::flash('message', 'Data '.$data->nama. ' berhasil ditambahkan!');
        Session::flash('type', 'success');
        return redirect()->route('customer.index');
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
        $data=Customer::find($id);
        return view('customer.edit',compact('data'));
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
            'nama'=>'required',
            'alamat'=>'required',
            'email'=>'required|email',
            'telpon'=>'required',
        ]);
        $data=Customer::find($id);
        $data->nama=$request->nama;
        $data->alamat=$request->alamat;
        $data->email=$request->email;
        $data->telpon=$request->telpon;
        $data->save();
        Session::flash('message', 'Data '.$data->nama. ' berhasil diubah!');
        Session::flash('type', 'success');
        return redirect()->route('customer.index');
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
        $data=Customer::findorfail($id);
        $data->delete();
        Session::flash('message', 'Data '.$data->nama. ' berhasil dihapus!');
        Session::flash('type', 'success');
        return redirect()->back();
    }
}
