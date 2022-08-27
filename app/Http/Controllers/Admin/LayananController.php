<?php

namespace App\Http\Controllers\Admin;

use App\Models\Layanan;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreLayananRequest;
use App\Http\Requests\UpdateLayananRequest;

class LayananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.layanan.index',[
            'layanans' => Layanan::latest()->get()
        ]);
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
     * @param  \App\Http\Requests\StoreLayananRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreLayananRequest $request)
    {
        $validate = $request->validate();

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
        return view('admin.layanan.show',[
            'layanans' => Layanan::find($layanan)
        ]);
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
     * @param  \App\Http\Requests\UpdateLayananRequest  $request
     * @param  \App\Models\Layanan  $layanan
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateLayananRequest $request, Layanan $layanan)
    {
        $validate = $request->validate();

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
