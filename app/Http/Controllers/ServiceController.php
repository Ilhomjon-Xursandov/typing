<?php

namespace App\Http\Controllers;

use App\Models\Service;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $services = Service::latest()->paginate(10);

        return view('Backend.services.index', compact('services'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Service $service)
    {
        return view('Backend.services.show', compact('service'));
    }
}
