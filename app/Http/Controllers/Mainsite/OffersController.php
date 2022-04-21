<?php

namespace App\Http\Controllers\Mainsite;

use App\Http\Controllers\Controller;
use Inertia\Inertia;

class OffersController extends Controller
{
    public function index()
    {
        $data = [
            'prefooter' => true
        ];

        return Inertia::render('Offers/OffersPage', $data);
    }

    public function free_trial()
    {
        $data = [
            'prefooter' => true
        ];

        return Inertia::render('Offers/FreeTrial/FreeTrialPage', $data);
    }
}
