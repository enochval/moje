<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GeneralSettingsController extends Controller
{
    public function settings()
    {
        return view('settings.general-settings');
    }
}
