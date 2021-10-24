<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Diocese;
use App\Models\Ethnicity;
use App\Models\Magazine;
use App\Models\News;
use App\Models\Position;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $dioceses = Diocese::all(); 
        $ethnicities = Ethnicity::all();
        $departments = Department::all();
        $positions = Position::all();
        $news = News::latest()->paginate(5);
        $magazines = Magazine::latest()->paginate(5);

        return view('dashbodard',compact('dioceses','ethnicities', 'departments', 'positions', 'news', 'magazines',));
    }
}
