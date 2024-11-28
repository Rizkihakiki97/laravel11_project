<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;


class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // select * from users
        $services = Service::get();
        $title = "Data Paket Laundry";
        return view('paket.index', compact('services', 'title'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = 'Tambah Paket Laundry';
        return view('paket.create', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // return $request;
        Service::Create($request->all());
        // User::Create([
        //     'name' => $request->name,
        //     'email' => $request->email,
        //     'password' => Hash::make($request->password),
        // ]);
        Alert::success('Yeaaayy', 'Data berhasil ditambah');

        return redirect()->to('service');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $title = "Edit Paket";
        // select * form users where id='$id'
        $service = service::find($id);
        return view('paket.edit', compact('title', 'service'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $service = Service::find($id);
        $service->service_name = $request->service_name;
        $service->price = $request->price;
        $service->description = $request->description;
        $service->save();

        Alert::success('Yeaaayy', 'Data berhasil diubah');
        return redirect()->to('service');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $service = Service::find($id)->delete();
        Alert::success('Yeaaayy', 'Data berhasil dihapus');
        return redirect()->to('service');
    }

    public function delete($id)
    {
        $service = Service::find($id)->delete();
        return redirect()->to('service');
    }
}
