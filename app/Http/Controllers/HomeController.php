<?php

namespace App\Http\Controllers;

use App\Models\OurClient;
use App\Models\OurService;
use App\Models\OurWork;
use App\Models\Slider;
use App\Models\Statistic;
use App\Models\Vision;

class HomeController extends Controller
{
    public function index() {
        view()->share('title',trans('front.home'));

        $sliders = Slider::all();
        $statistics = Statistic::all();
        $clients = OurClient::all();
        $visions = Vision::all();
        $ourServices = OurService::all();

        // dd(OurWork::with('media')->get());

        return view('home', compact('sliders', 'clients', 'statistics', 'visions', 'ourServices'));
    }
}