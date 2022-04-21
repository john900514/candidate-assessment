<?php

namespace App\Http\Controllers\MainSite;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;

class LocationsController extends Controller
{
    public function index()
    {
        $data = [
            'prefooter' => true
        ];

        return Inertia::render('Locations/ClubInfo/ClubInfoPage', $data);
    }

    public function show(string $club_id)
    {
        $data = [
            'prefooter' => true
        ];

        return Inertia::render('Locations/ClubInfo/ClubInfoPage', $data);
    }
}
