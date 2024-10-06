<?php

namespace App\Http\Controllers\user;

use App\Models\Cv;
use App\Models\Goal;
use App\Models\Math;
use App\Models\User;
use App\Models\Other;
use App\Models\Plain;
use App\Models\Skill;
use App\Models\Table;
use App\Models\Social;
use App\Models\Vision;
use App\Models\English;
use App\Models\Islamic;
use App\Models\Meeting;
use App\Models\Program;
use App\Models\Science;
use App\Models\Student;
use App\Models\Activity;
use App\Models\Guidance;
use App\Models\Homework;
use App\Models\Language;
use App\Models\Paperwork;
use App\Models\Situation;
use App\Models\Statistic;
use App\Models\Information;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Response;

class UserController extends Controller
{
    public function showLogin()
    {
        return view('user.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'national_id' => 'required|string',
            'password' => 'required|string',
        ]);

        // محاولة العثور على المستخدم بناءً على الرقم القومي
        $user = User::where('national_id', $request->national_id)->first();

        if (!$user) {
            return redirect()->back()->withErrors([
                'national_id' => 'المستخدم غير موجود.',
            ]);
        }

        // التحقق من كلمة المرور
        if ($request->password == $user->password) {
            Auth::login($user);
            return redirect()->route('user.profile');
        }

        // كلمة المرور غير صحيحة
        return redirect()->back()->withErrors([
            'password' => 'كلمة المرور غير صحيحة.',
        ]);
    }

    public function show()
    {
        $user = User::with([
            'homeworks',
            'cvs',
            'tables',
            'avtivities',
            'paperworks',
            'languages',
            'maths',
            'sciences',
            'islamics',
            'englishes',
            'skills',
            'socials',
            'others',
            'visions',
            'goals',
            'plains',
            'meetings',
            'programs',
            'statistics',
            'situations',
            'guidances',
            'students',
            'informations',
        ])->findOrFail(auth()->user()->id);

        $homeworks = $user->homeworks;
        $cvs = $user->cvs;
        $tables = $user->tables;
        $avtivities = $user->avtivities;
        $paperworks = $user->paperworks;
        $languages = $user->languages;
        $maths = $user->maths;
        $sciences = $user->sciences;
        $islamics = $user->islamics;
        $englishes = $user->englishes;
        $skills = $user->skills;
        $socials = $user->socials;
        $others = $user->others;
        $visions = $user->visions;
        $goals = $user->goals;
        $plains = $user->plains;
        $meetings = $user->meetings;
        $programs = $user->programs;
        $statistics = $user->statistics;
        $situations = $user->situations;
        $guidances = $user->guidances;
        $students = $user->students;
        $informations = $user->informations;

        return view('user.profile' , [

                    'homeworks'=>$homeworks ,
                    'cvs'=>$cvs ,
                    'tables'=>$tables ,
                    'avtivities'=>$avtivities ,
                    'paperworks'=>$paperworks ,
                    'languages'=>$languages ,
                    'maths'=>$maths ,
                    'sciences'=>$sciences,
                    'islamics'=>$islamics,
                    'englishes'=>$englishes,
                    'skills'=>$skills,
                    'socials'=>$socials,
                    'others'=>$others,
                    'visions'=>$visions,
                    'goals'=>$goals,
                    'plains'=>$plains,
                    'meetings'=>$meetings,
                    'programs'=>$programs,
                    'statistics'=>$statistics,
                    'situations'=>$situations,
                    'guidances'=>$guidances,
                    'students'=>$students,
                    'informations'=>$informations,
                    ]);

    }

    public function showStudent()
    {
        $users = User::where('user_type' , 'طالب')->get();
        return view('user.student.show' , ['users'=>$users]);
    }

    public function download($filename)
    {
        $path = public_path("uploads/upload_file/" . $filename);


        // return response()->download($, $filename);
        return response()->download($path, $filename, [
            'Content-Type' => 'application/octet-stream',
            'Content-Disposition' => 'attachment; filename="'.$filename.'"',
        ]);

    }

    public function showProfile($id)
    {
        $user = User::with([
            'homeworks',
            'cvs',
            'tables',
            'avtivities',
            'paperworks',
            'languages',
            'maths',
            'sciences',
            'islamics',
            'englishes',
            'skills',
            'socials',
            'others',
            'visions',
            'goals',
            'plains',
            'meetings',
            'programs',
            'statistics',
            'situations',
            'guidances',
            'students',
            'informations',
        ])->findOrFail($id);
        $homeworks = $user->homeworks;
        $cvs = $user->cvs;
        $tables = $user->tables;
        $avtivities = $user->avtivities;
        $paperworks = $user->paperworks;
        $languages = $user->languages;
        $maths = $user->maths;
        $sciences = $user->sciences;
        $islamics = $user->islamics;
        $englishes = $user->englishes;
        $skills = $user->skills;
        $socials = $user->socials;
        $others = $user->others;
        $visions = $user->visions;
        $goals = $user->goals;
        $plains = $user->plains;
        $meetings = $user->meetings;
        $programs = $user->programs;
        $statistics = $user->statistics;
        $situations = $user->situations;
        $guidances = $user->guidances;
        $students = $user->students;
        $informations = $user->informations;
        return view('teacher.student.profile' , [
            'user'=>$user,
            'homeworks'=>$homeworks ,
            'cvs'=>$cvs ,
            'tables'=>$tables ,
            'avtivities'=>$avtivities ,
            'paperworks'=>$paperworks ,
            'languages'=>$languages ,
            'maths'=>$maths ,
            'sciences'=>$sciences,
            'islamics'=>$islamics,
            'englishes'=>$englishes,
            'skills'=>$skills,
            'socials'=>$socials,
            'others'=>$others,
            'visions'=>$visions,
            'goals'=>$goals,
            'plains'=>$plains,
            'meetings'=>$meetings,
            'programs'=>$programs,
            'statistics'=>$statistics,
            'situations'=>$situations,
            'guidances'=>$guidances,
            'students'=>$students,
            'informations'=>$informations,
            ]);
    }
}

