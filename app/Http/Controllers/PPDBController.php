<?php

namespace App\Http\Controllers;

use App\Models\Testimoni;
use App\Models\VisitorPPDB;
use Illuminate\Http\Request;
use Stevebauman\Location\Facades\Location;

class PPDBController extends Controller
{
    public function index()
    {
        $month = date('m');

        $testimoni = Testimoni::where('status',1)->get();

         // Increment visitor count in database or cache
         $position = Location::get(request()->ip());
         
         $add_user = VisitorPPDB::create([
            'ip_address' => request()->ip(),
            'user_agent' => request()->userAgent(),
            'location' => $position->cityName,
            'created_at' => now()
         ]);

         $no_hp = '+6285173273274';
         $message = "Assalamualaikum Warahmatullahi Wabarakatuh 🙏🏻😊";
         $message_url = urlencode($message);

        return view('index', compact('testimoni', 'month', 'no_hp', 'message_url'));
    }
}
