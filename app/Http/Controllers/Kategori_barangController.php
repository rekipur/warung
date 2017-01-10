<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kategori_barang;
use Yajra\Datatables\Html\Builder;
use Yajra\Datatables\Datatables;
use Session;

class Kategori_barangController extends Controller
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
            $kategori_barangs = Kategori_barang::select(['id','nama']);
            return Datatables::of($kategori_barangs)                
            ->addColumn('action', function($kategori_barang){
                    return view('aksi._action', [
                        'model'    => $kategori_barang,
                        'form_url' => route('kategori_barang.destroy', $kategori_barang->id),
                        'edit_url' => route('kategori_barang.edit', $kategori_barang->id),
                        'confirm_message' => 'Yakin mau mengapus ' . $kategori_barang->nama_jabatan . '?'
                        ]);
                })->make(true);
        }
        //

        $html = $htmlBuilder
        ->addColumn(['data'=>'nama', 'name'=>'nama', 'title'=>'Nama'])
        ->addColumn(['data'=>'action', 'name'=>'action', 'title'=>'Pilihan', 'orderable'=>false, 'searchable'=>false]);

        return view('kategori_barang.index')->with(compact('html'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('kategori_barang.create');
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
        $this->validate($request, ['nama'=>'required|max:255|unique:kategori_barangs,nama,']);
        $kb = Kategori_barang::create($request->only('nama'));

        Session::flash("flash_notification", [ 
                "level"=>"success",
                "message"=>"Kategori telah ditambahkan"
            ]);

        return redirect()->route('kategori_barang.index');
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
        $kategori_barang = Kategori_barang::find($id);

        return view('kategori_barang.edit')->with(compact('kategori_barang'));
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
        'nama'=>'required|max:255|unique:kategori_barangs,nama,' . $id]);
        $kategori = Kategori_barang::find($id);
        $kategori->update($request->only('nama'));

        Session::flash("flash_notification", [
                    "level"=>"success",
                    "message"=>"Kategori telah diperbaharui"
                ]);
        return redirect()->route('kategori_barang.index');
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

        $kategori = Kategori_barang::find($id);
        $kategori->delete();

        Session::flash("flash_notification", [
                    "level"=>"danger",
                    "message"=>"Kategori telah dihapus"
                ]);
        return redirect()->route('kategori_barang.index');

    }
}
