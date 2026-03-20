<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Education;
use App\Models\Profile;
use App\Models\Project;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard', [
            'projectsCount' => Project::count(),
            'educationsCount' => Education::count(),
            'messagesCount' => Contact::count(),
            'profile' => Profile::first(),
            'latestMessages' => Contact::latest()->take(3)->get(),
            'latestProjects' => Project::latest()->take(3)->get(),
        ]);
    }
}