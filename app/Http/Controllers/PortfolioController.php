<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use App\Models\Project;
use App\Models\Education;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index()
    {
        $educations = Education::latest()->get();
        $profile = Profile::first();
        $projects = Project::latest()->get();
        return view('portfolio.index', compact('profile', 'projects', 'educations'));
    }
}
