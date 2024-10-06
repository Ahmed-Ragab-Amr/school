<?php

namespace App\Http\Controllers\admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Imports\StudentsImport;
use App\Imports\TeachersImport;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{

    public function ShowLogin()
    {
        return view('admin.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|string',
            'password' => 'required|string',
        ]);

        $user = User::where('email', $request->email)->first();

        if (!$user) {
            return redirect()->back()->withErrors([
                'email' => 'المستخدم غير موجود.',
            ]);
        }

        if (Hash::check($request->password, $user->password)) {
            Auth::login($user);
            return redirect()->route('admin.home');
        }

        return redirect()->back()->withErrors([
            'password' => 'كلمة المرور غير صحيحة.',
        ]);
    }

    public function importStudent(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:xlsx,xls,csv'
        ]);

        Excel::import(new StudentsImport, $request->file('file')->store('temp'));

        return redirect()->back();
    }

    public function importteacher(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:xlsx,xls,csv'
        ]);

        Excel::import(new TeachersImport, $request->file('file')->store('temp'));

        return redirect()->back();
    }

    public function create()
    {
        return view('admin.user.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'national_id'=>'required|unique:users|digits:10',
            'password'=>'required',
            'user_type'=>'required|in:اداري,معلم,طالب,المدير,التوجيه الطلابي,الصحه المدرسيه,مصادر التعلم,الامن والسلامه',
        ]);

        $data = $request->except('image_path');

        if($request->hasFile('image_path'))
        {
            $file = $request->file('image_path');
            $path = $file->store('profile_images' , 'uploads');
            $data['image_path'] = $path;
        }

        $data['password'] = $request->password;

        $user = User::create($data);

        if($user->user_type == 'طالب')
        {

            return redirect()->route('users.show' , $user = 'students');

        }else if($user->user_type == 'معلم')
        {

            return redirect()->route('users.show' , $user = 'teachers');

        }else if($user->user_type == 'اداري')
        {

            return redirect()->route('users.show' , $user = 'managers');

        }
        else if($user->user_type == 'المدير')
        {

            return redirect()->route('users.show' , $user = 'boss');

        }
        else if($user->user_type == 'التوجيه الطلابي')
        {

            return redirect()->route('users.show' , $user = 'guid');

        }
        else if($user->user_type == 'الصحه المدرسيه')
        {

            return redirect()->route('users.show' , $user = 'health');

        }
        else if($user->user_type == 'مصادر التعلم')
        {

            return redirect()->route('users.show' , $user = 'learn');

        }
        else if($user->user_type == 'الامن والسلامه')
        {

            return redirect()->route('users.show' , $user = 'safty');

        }

    }

    public function show($user)
    {
        if($user == 'teachers')
        {
            return view('admin.user.teachers.show');
        }

        else if($user == 'students')
        {
            return view('admin.user.students.show');
        }

        else if($user == 'managers')
        {
            return view('admin.user.managers.show');
        }
        else if($user == 'boss')
        {
            return view('admin.user.boss.show');
        }
        else if($user == 'guid')
        {
            return view('admin.user.guid.show');
        }
        else if($user == 'health')
        {
            return view('admin.user.health.show');
        }
        else if($user == 'learn')
        {
            return view('admin.user.learn.show');
        }
        else if($user == 'safty')
        {
            return view('admin.user.safty.show');
        }
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('admin.user.edit' , ['user'=>$user]);
    }

    public function update(Request $request , $id)
    {
        $request->validate([
            'name'=>'required',
            'national_id'=>'required|digits:10',
            'password'=>'required',
            'user_type'=>'required|in:اداري,معلم,طالب,المدير,التوجيه الطلابي,الصحه المدرسيه,مصادر التعلم,الامن والسلامه',
        ]);

        $user = User::findOrFail($id);
        $old_image = $user->image_path;

        $data = $request->except('image_path');

        if($request->hasFile('image_path'))
        {
            $file = $request->file('image_path');
            $path = $file->store('profile_images' , 'uploads');
            $data['image_path'] = $path;
        }
        else
        {
            $data['image_path'] = $old_image;
        }

        $data['password'] =$request->password;

        $user->update($data);

        if($request->hasFile('image_path') && isset($old_image))
        {
            Storage::disk('uploads')->delete($old_image);
        }

        if($user->user_type == 'طالب')
        {

            return redirect()->route('users.show' , $user = 'students');

        }else if($user->user_type == 'معلم')
        {

            return redirect()->route('users.show' , $user = 'teachers');

        }else if($user->user_type == 'اداري')
        {

            return redirect()->route('users.show' , $user = 'managers');

        }
        else if($user->user_type == 'المدير')
        {

            return redirect()->route('users.show' , $user = 'boss');

        }
        else if($user->user_type == 'التوجيه الطلابي')
        {

            return redirect()->route('users.show' , $user = 'guid');

        }
        else if($user->user_type == 'الصحه المدرسيه')
        {

            return redirect()->route('users.show' , $user = 'health');

        }
        else if($user->user_type == 'مصادر التعلم')
        {

            return redirect()->route('users.show' , $user = 'learn');

        }
        else if($user->user_type == 'الامن والسلامه')
        {

            return redirect()->route('users.show' , $user = 'safty');

        }
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
        return view('admin.user.profile' , [
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

    public function search(Request $request , $type)
    {
        if($type == 'student')
        {
            $students = User::where('grade', 'like', "%{$request->name}%")
                                ->orWhere('name', 'like', "%{$request->name}%")
                                ->orWhere('national_id', $request->name)
                                ->paginate();
            // $students = response()->json($search);
            return view('admin.user.students.show' , ['students'=>$students]);
        }

        else if($type == 'teacher')
        {
            $teachers = User::where('grade', 'like', "%{$request->name}%")
                                ->orWhere('name', 'like', "%{$request->name}%")
                                ->orWhere('national_id', $request->name)
                                ->paginate();
            return view('admin.user.teachers.show' , ['teachers'=>$teachers]);
        }

        else if($type == 'manager')
        {
            $managers = User::where('name', 'like', "%{$request->name}%")
                            ->orWhere('national_id', $request->name)
                            ->paginate();
            return view('admin.user.managers.show' , ['managers'=>$managers]);
        }
    }

    public function delete($id)
    {
        $user = User::findOrFail($id);
        $image = $user->image_path;
        $user->delete();
        if(isset($image))
        {
            Storage::disk('uploads')->delete($image);
        }
        return redirect()->back();
    }


}
