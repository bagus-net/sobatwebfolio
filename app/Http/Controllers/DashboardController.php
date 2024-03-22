<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\ProjectOrder;
use App\Models\Tool;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function index()
    {
        $totalProjects = Project::count();
        $totalTools = Tool::count();
        $totalOrders = ProjectOrder::count();

        // dd($totalProjects);

        return view('dashboard', compact('totalProjects', 'totalTools', 'totalOrders'));
    }
}