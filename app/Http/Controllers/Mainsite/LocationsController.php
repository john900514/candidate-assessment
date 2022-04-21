<?php

namespace App\Http\Controllers\MainSite;

use App\Exceptions\Clubs\LocationException;
use App\Http\Controllers\Controller;
use App\Models\Clubs\Location;
use Illuminate\Http\Request;
use Inertia\Inertia;

class LocationsController extends Controller
{
    public function index()
    {
        $data = [
            'prefooter' => true,
            'clubs' => []
        ];

        $clubs = Location::whereActive(1);
        foreach($clubs as $club)
        {
            $data['club'][$club->club_id] = $club->club_name;
        }

        return Inertia::render('Locations/Index/LocationsDirectoryPage', $data);
    }

    public function show(string $club_id)
    {
        $data = [
            'prefooter' => false,
            'club' => [],
            'bannerImg' => 'url('.asset('img/Hero-BG-2x.jpeg').')'
        ];

        $club = Location::whereClubId($club_id)->first();

        if(is_null($club))
        {
            throw LocationException::clubDoesNotExist();
        }

        $data['clubs'] = $club->toArray();

        return Inertia::render('Locations/ClubInfo/ClubInfoPage', $data);
    }
}
