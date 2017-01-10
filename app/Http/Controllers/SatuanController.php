<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Satuan;
use Yajra\Datatables\Html\Builder;
use Yajra\Datatables\Datatables;
use Session;

class SatuanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, Builder $htmlBuilder)
    {
        //
        if ($request->ajax()) {
            # code...
            $satuans = Satuan::select(['id','nama']);
            return Datatables::of($satuans)                
            ->addColumn('action', function($satuan_barang){
                    return view('aksi._action', [
                        'model'    => $satuan_barang,
                        'form_url' => route('satuan_barang.destroy', $satuan_barang->id),
                        'edit_url' => route('satuan_barang.edit', $satuan_barang->id),
                        'confirm_message' => 'Yakin mau mengapus ' . $satuan_barang->nama . '?'
                        ]);
                })->make(true);
        }
        //

        $html = $htmlBuilder
        ->addColumn(['data'=>'nama', 'name'=>'nama', 'title'=>'Nama'])
        ->addColumn(['data'=>'action', 'name'=>'action', 'title'=>'Pilihan', 'orderable'=>false, 'searchable'=>false]);

        return view('satuan_barang.index')->with(compact('html'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('satuan_barang.create');

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
        $this->validate($request, ['nama'=>'required|max:255|unique:satuans,nama,']);
        $satuan = Satuan::create($request->only('nama'));

        Session::flash("flash_notification", [ 
                "level"=>"success",
                "message"=>"Satuan telah ditambahkan"
            ]);

        return redirect()->route('satuan_barang.index');
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
        $satuan_barang = Satuan::find($id);

        return view('satuan_barang.edit')->with(compact('satuan_barang'));
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
        $this->validate($request, [
        'nama'=>'required|max:255|unique:satuans,nama,' . $id]);
        $satuan = Satuan::find($id);
        $satuan->update($request->only('nama'));

        Session::flash("flash_notification", [
                    "level"=>"success",
                    "message"=>"Satuan telah diperbaharui"
                ]);
        return redirect()->route('satuan_barang.index');
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
        $satuan = Satuan::find($id);
        $satuan->delete();

        Session::flash("flash_notification", [
                    "level"=>"danger",
                    "message"=>"Satuan telah dihapus"
                ]);
        return redirect()->route('satuan_barang.index');
    }
}
