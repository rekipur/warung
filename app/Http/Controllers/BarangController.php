<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Barang;
use Yajra\Datatables\Html\Builder;
use Yajra\Datatables\Datatables;
use Session;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request,Builder $htmlBuilder)
    {
        //
        if ($request->ajax()) {
            # code...
            $barangs = Barang::select(['id','kode_barang','nama_barang','kategori_barang','stok_barang','satuan_barang','harga_barang','deskripsi']);
            return Datatables::of($barangs)
            ->addColumn('action', function($barang){
                return view('aksi._action', [
                        'model' => $barang,
                        'form_url' => route('barang.destroy', $barang->id),
                        'edit_url' => route('barang.edit', $barang->id),
                        'confirm_message' => 'Yakin mau menghapus ' . $barang->nama_barang . '?'
                ]);
            })->make(true);
            }


            $html = $htmlBuilder
            ->addColumn(['data'=>'kode_barang', 'name'=>'kode_barang', 'title'=>'Kode'])
            ->addColumn(['data'=>'nama_barang', 'name'=>'nama_barang', 'title'=>'Nama Barang'])
            ->addColumn(['data'=>'kategori_barang', 'name'=>'kategori_barang', 'title'=>'Kategori'])
            ->addColumn(['data'=>'stok_barang', 'name'=>'stok_barang', 'title'=>'Stok'])
            ->addColumn(['data'=>'satuan_barang', 'name'=>'satuan_barang', 'title'=>'Satuan'])
            ->addColumn(['data'=>'harga_barang', 'name'=>'harga_barang', 'title'=>'Harga'])
            ->addColumn(['data'=>'deskripsi', 'name'=>'deskripsi', 'title'=>'Deskripsi'])
            ->addColumn(['data'=>'action', 'name'=>'action','title'=>'Pilihan','searchable'=>false,'orderable'=>false]);

            return view('barang.index')->with(compact('html'));
            }

    public function history_masuk(Request $request,Builder $htmlBuilder)
    {
        //
        if ($request->ajax()) {
            # code...
            $barangs = Barang::select(['id','kode_barang','nama_barang','created_at']);
            return Datatables::of($barangs)->make(true);
            }


            $html = $htmlBuilder
            ->addColumn(['data'=>'kode_barang', 'name'=>'kode_barang', 'title'=>'Kode'])
            ->addColumn(['data'=>'nama_barang', 'name'=>'nama_barang', 'title'=>'Nama Barang'])
            ->addColumn(['data'=>'created_at', 'name'=>'created_at', 'title'=>'Waktu Input']);

            return view('barang.history-masuk')->with(compact('html'));
            }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('barang.create');
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
        $this->validate($request, [
                'kode_barang'=>'required|max:255|unique:barangs,kode_barang,',
                'nama_barang'=>'required|max:255|unique:barangs,nama_barang,',
                'kategori_barang'     => 'required|exists:kategori_barangs,id',
                'stok_barang'=>'required|numeric',
                'satuan_barang'     => 'required|exists:satuans,id',
                'harga_barang'=>'required|numeric',
                'deskripsi'=>'max:255',
            ]);
        $barang = Barang::create($request->only(['kode_barang','nama_barang','kategori_barang','stok_barang','satuan_barang','harga_barang','deskripsi']));
        Session::flash("flash_notification", [ 
                "level"=>"success",
                "message"=>"Barang telah ditambahkan"
            ]);

        return redirect()->route('barang.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function ajax(Request $request)
    {
        //
        if ($request->ajax()) {
            # code...
        
        $id_barang = $request->barang;
        $barang = Barang::find($id_barang);

        return $barang->harga_barang;
        }
    }

    public function ajax_nama(Request $request)
    {
        //
        if ($request->ajax()) {
            # code...
        
        $id_barang = $request->nama;
        $barang = Barang::find($id_barang);

        return $barang->nama_barang;
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
        $barang = Barang::find($id);

        return view('barang.edit')->with(compact('barang'));
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
                'kode_barang'=>'required|max:255|unique:barangs,kode_barang,',
                'nama_barang'=>'required|max:255|unique:barangs,nama_barang,',
                'kategori_barang'     => 'required|exists:kategori_barangs,id',
                'stok_barang'=>'required|numeric',
                'satuan_barang'     => 'required|exists:satuans,id',
                'harga_barang'=>'required|numeric',
                'deskripsi'=>'max:255',
            ]);
        $barang = Barang::find($id);
        $barang->update($request->only(['kode_barang','nama_barang','kategori_barang','stok_barang','satuan_barang','harga_barang','deskripsi']));

        Session::flash("flash_notification", [ 
                "level"=>"success",
                "message"=>"Barang telah diperbaharui"
            ]);

        return redirect()->route('barang.index');

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
        $barang = Barang::find($id);
        $barang->delete();

        Session::flash("flash_notification", [ 
                "level"=>"danger",
                "message"=>"Barang telah dihapus"
            ]);

        return redirect()->route('barang.index');
    }
}
