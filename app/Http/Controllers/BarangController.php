<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Status;
use DateTime;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function index()
    {
        $barang = Barang::all();
        return view('barang.index', compact('barang'));
    }

    public function create()
    {
        $daftarStatus = Status::get();
        return view('barang.create', compact('daftarStatus'));
    }

    public function store(Request $request)
    {
        $data = $request->all();

        if($request->hasFile('foto')) {
            $image = $request->file('foto');
            $filename = $image->getClientOriginalName();
            $extension = $image->getClientOriginalExtension();

            //get current datetime to rename image file with datetime
            $datetime = new DateTime();
            $timeFormat = $datetime->format('YmdHis');
            $newFilename = str_replace($filename, $timeFormat, $filename);
            $foto = $newFilename . '.' . $extension;

            //Move image to public folder
            $destination = public_path('fotobarang');
            $image->move($destination, $foto);
            $data['foto'] = $foto;
        }

        Barang::create($data);

        return redirect()->route('barang.index')->with('success','Barang created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function show(Barang $barang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function edit(Barang $barang)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Barang $barang)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function destroy(Barang $barang)
    {
        //
    }
}
