<?php

namespace App\Http\Controllers;

use App\Models\Education;
use App\Models\Expertise;
use App\Models\Owner;
use App\Models\Project;
use App\Models\Skill;
use App\Models\Work;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $educations = Education::all();
        $expertises = Expertise::all();
        $owner = Owner::first();
        $projects = Project::all();
        $skills = Skill::all();
        $work = Work::first();
        return view('portofolio.home',[
            'educations' => $educations,
            'expertises' => $expertises,
            'owner' =>  $owner,
            'projects' => $projects,
            'skills' =>   $skills,
            'work'=>     $work,
        ]);
    }
}
