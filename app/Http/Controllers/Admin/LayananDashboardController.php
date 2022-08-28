<?php

namespace App\Http\Controllers\Admin;

use App\Models\Layanan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LayananDashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $admin = auth()->user()->is_admin;
        if($admin)
        {
            return view('admin.layanan.index',[
                'layanans' => Layanan::latest()->get()
            ]);
        }

        $user = auth()->user()->name;
        if($user)
        {
            return view('admin.layanan.index',[
                'layanans' => Layanan::where('nama_toko','=', $user)->get()
            ]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.layanan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'nama_toko' => 'required|max:255',
            'nama' => 'required|max:255',
            'harga' => 'required|max:255',
        ]);

        $validate['nama_toko'] = auth()->user()->name;
        Layanan::create($validate);

        return redirect('/admin/layanan')->with('success','Updated Successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Layanan  $layanan
     * @return \Illuminate\Http\Response
     */
    public function show(Layanan $layanan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Layanan  $layanan
     * @return \Illuminate\Http\Response
     */
    public function edit(Layanan $layanan)
    {
        return view('admin.layanan.edit',[
            'layanans' => $layanan
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Layanan  $layanan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Layanan $layanan)
    {
        $validate = $request->validate([
            'nama_toko' => 'required|max:255',
            'nama' => 'required|max:255',
            'harga' => 'required|max:255',
        ]);

        $validate['nama_toko'] = auth()->user()->name;
        Layanan::where('id', $layanan->id)->update($validate);

        return redirect('/admin/layanan')->with('success','Updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Layanan  $layanan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Layanan $layanan)
    {
        Layanan::destroy($layanan->id);

        return redirect('/admin/layanan')->with('success','Deleted Successfully!');
    }
}
