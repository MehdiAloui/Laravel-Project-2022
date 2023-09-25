<?php

namespace App\Http\Controllers\Frontend\User;
use App\Models\exams;

/**
 * Class DashboardController.
 */
class DashboardController
{
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $exam=exams::all();
        return view('frontend.user.dashboard',["exam"=>$exam]);
        //return view('frontend.user.dashboard');
    }
}
