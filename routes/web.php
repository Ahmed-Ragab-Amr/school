<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CvController;
use App\Http\Controllers\GoalController;
use App\Http\Controllers\MathController;
use App\Http\Controllers\OtherController;
use App\Http\Controllers\PlainController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\TableController;
use App\Http\Controllers\SocialController;
use App\Http\Controllers\VisionController;
use App\Http\Controllers\EnglishController;
use App\Http\Controllers\IslamicController;
use App\Http\Controllers\MeetingController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\ScienceController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\ActivityController;
use App\Http\Controllers\GuidanceController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\PaperworkController;
use App\Http\Controllers\SituationController;
use App\Http\Controllers\StatisticController;
use App\Http\Controllers\user\UserController;
use App\Http\Controllers\InformationController;
use App\Http\Controllers\user\CourceController;
use App\Http\Controllers\user\HomeworkController;
use App\Http\Controllers\user\CertificateController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/' , [UserController::class , 'showLogin'])->name('login');
Route::post('login' , [UserController::class , 'login'])->name('user.login');

Route::middleware('auth')->group(function (){
    Route::get('profile' ,  [UserController::class , 'show'])->name('user.profile');
    Route::get('student\{id}' ,  [UserController::class , 'showProfile'])->name('studnet.profile');

    Route::get('/download-image/{filename}', [UserController::class, 'download'])->name('download');

    Route::get('student/all' , [UserController::class , 'showStudent'])->name('student.show');

    Route::post('homework' , [HomeworkController::class , 'store'])->name('homework.store');
    Route::delete('homework/{id}/image/{index}' , [HomeworkController::class , 'delete'])->name('homework.delete');

    Route::post('certificate' , [CertificateController::class , 'store'])->name('certificate.store');
    Route::delete('certificate/{id}/image/{index}' , [CertificateController::class , 'delete'])->name('certificate.delete');

    Route::post('cource' , [CourceController::class , 'store'])->name('cource.store');
    Route::delete('cource/{id}/image/{index}' , [CourceController::class , 'delete'])->name('cource.delete');

    Route::post('activity' , [ActivityController::class , 'store'])->name('activity.store');
    Route::delete('activity/{id}/image/{index}' , [ActivityController::class , 'delete'])->name('activity.delete');

    Route::post('cv' , [CvController::class , 'store'])->name('cv.store');
    Route::delete('cv/{id}/image/{index}' , [CvController::class , 'delete'])->name('cv.delete');

    Route::post('english' , [EnglishController::class , 'store'])->name('english.store');
    Route::delete('english/{id}/image/{index}' , [EnglishController::class , 'delete'])->name('english.delete');

    Route::post('goal' , [GoalController::class , 'store'])->name('goal.store');
    Route::delete('goal/{id}/image/{index}' , [GoalController::class , 'delete'])->name('goal.delete');

    Route::post('guidance' , [GuidanceController::class , 'store'])->name('guidance.store');
    Route::delete('guidance/{id}/image/{index}' , [GuidanceController::class , 'delete'])->name('guidance.delete');

    Route::post('information' , [InformationController::class , 'store'])->name('information.store');
    Route::delete('information/{id}/image/{index}' , [InformationController::class , 'delete'])->name('information.delete');

    Route::post('islamic' , [IslamicController::class , 'store'])->name('islamic.store');
    Route::delete('islamic/{id}/image/{index}' , [IslamicController::class , 'delete'])->name('islamic.delete');

    Route::post('language' , [LanguageController::class , 'store'])->name('language.store');
    Route::delete('language/{id}/image/{index}' , [LanguageController::class , 'delete'])->name('language.delete');

    Route::post('math' , [MathController::class , 'store'])->name('math.store');
    Route::delete('math/{id}/image/{index}' , [MathController::class , 'delete'])->name('math.delete');

    Route::post('meeting' , [MeetingController::class , 'store'])->name('meeting.store');
    Route::delete('meeting/{id}/image/{index}' , [MeetingController::class , 'delete'])->name('meeting.delete');

    Route::post('other' , [OtherController::class , 'store'])->name('other.store');
    Route::delete('other/{id}/image/{index}' , [OtherController::class , 'delete'])->name('other.delete');

    Route::post('paperwork' , [PaperworkController::class , 'store'])->name('paperwork.store');
    Route::delete('paperwork/{id}/image/{index}' , [PaperworkController::class , 'delete'])->name('paperwork.delete');

    Route::post('plain' , [PlainController::class , 'store'])->name('plain.store');
    Route::delete('plain/{id}/image/{index}' , [PlainController::class , 'delete'])->name('plain.delete');

    Route::post('program' , [ProgramController::class , 'store'])->name('program.store');
    Route::delete('program/{id}/image/{index}' , [ProgramController::class , 'delete'])->name('program.delete');

    Route::post('science' , [ScienceController::class , 'store'])->name('science.store');
    Route::delete('science/{id}/image/{index}' , [ScienceController::class , 'delete'])->name('science.delete');

    Route::post('situation' , [SituationController::class , 'store'])->name('situation.store');
    Route::delete('situation/{id}/image/{index}' , [SituationController::class , 'delete'])->name('situation.delete');

    Route::post('skill' , [SkillController::class , 'store'])->name('skill.store');
    Route::delete('skill/{id}/image/{index}' , [SkillController::class , 'delete'])->name('skill.delete');

    Route::post('social' , [SocialController::class , 'store'])->name('social.store');
    Route::delete('social/{id}/image/{index}' , [SocialController::class , 'delete'])->name('social.delete');

    Route::post('statistic' , [StatisticController::class , 'store'])->name('statistic.store');
    Route::delete('statistic/{id}/image/{index}' , [StatisticController::class , 'delete'])->name('statistic.delete');

    Route::post('student' , [StudentController::class , 'store'])->name('student.store');
    Route::delete('student/{id}/image/{index}' , [StudentController::class , 'delete'])->name('student.delete');

    Route::post('table' , [TableController::class , 'store'])->name('table.store');
    Route::delete('table/{id}/image/{index}' , [TableController::class , 'delete'])->name('table.delete');

    Route::post('vision' , [VisionController::class , 'store'])->name('vision.store');
    Route::delete('vision/{id}/image/{index}' , [VisionController::class , 'delete'])->name('vision.delete');
});



require __DIR__ . '/admin.php';
require __DIR__ . '/auth.php';
