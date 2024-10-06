<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'national_id',
        'email',
        'password',
        'user_type',
        'image_path',
        'grade'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function homeworks()
    {
        return $this->hasMany(Homework::class);
    }

    public function cources()
    {
        return $this->hasMany(Cource::class);
    }
    
    public function certificates()
    {
        return $this->hasMany(Certificate::class);
    }
    public function avtivities()
    {
        return $this->hasMany(Activity::class);
    }
    public function cvs()
    {
        return $this->hasMany(Cv::class);
    }
    public function englishes()
    {
        return $this->hasMany(English::class);
    }
    public function islamics()
    {
        return $this->hasMany(Islamic::class);
    }
    public function languages()
    {
        return $this->hasMany(Language::class);
    }
    public function maths()
    {
        return $this->hasMany(Math::class);
    }
    public function others()
    {
        return $this->hasMany(Other::class);
    }
    public function paperworks()
    {
        return $this->hasMany(Paperwork::class);
    }
    public function sciences()
    {
        return $this->hasMany(Science::class);
    }
    public function skills()
    {
        return $this->hasMany(Skill::class);
    }
    public function socials()
    {
        return $this->hasMany(Social::class);
    }
    public function tables()
    {
        return $this->hasMany(Table::class);
    }
    public function visions()
    {
        return $this->hasMany(Vision::class);
    }
    public function students()
    {
        return $this->hasMany(Student::class);
    }
    public function statistics()
    {
        return $this->hasMany(Statistic::class);
    }
    public function situations()
    {
        return $this->hasMany(Situation::class);
    }
    public function programs()
    {
        return $this->hasMany(Program::class);
    }
    public function plains()
    {
        return $this->hasMany(Plain::class);
    }
    public function meetings()
    {
        return $this->hasMany(Meeting::class);
    }
    public function informations()
    {
        return $this->hasMany(Information::class);
    }
    public function guidances()
    {
        return $this->hasMany(Guidance::class);
    }
    public function goals()
    {
        return $this->hasMany(Goal::class);
    }
   
   
}
