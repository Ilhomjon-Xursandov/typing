<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Service;


class PageController extends Controller
{
    public function index()
    {
        $countUsers = User::count();
        $countServices = Service::count();
        $services = Service::limit(8)->get();
        return view('Frontend.index')
            ->with([
                'userCount'=>$countUsers,
                'serviceCount'=>$countServices,
                'services'=>$services,
            ]);
    }
    public function mentors()
    {
        return view('Frontend.mentors');
    }

    public function courses()
    {
        $allServices = Service::all();
        return view('Frontend.courses')->with('services', $allServices);
    }

    public function contacts()
    {
        return view('Frontend.contacts');
    }

}
