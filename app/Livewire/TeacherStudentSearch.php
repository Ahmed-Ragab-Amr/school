<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class TeacherStudentSearch extends Component
{

    use WithPagination;
    public $search = '';



    public function updateSearch($value)
    {
        $this->search = $value;
    }

    public function render()
    {
        $users = User::where('user_type', 'طالب')
                        ->where(function($query) {
                        $query->where('name', 'like', '%' . $this->search . '%')
                        ->orWhere('national_id', 'like', '%' . $this->search . '%')
                        ->orWhere('grade', 'like', '%' . $this->search . '%');
        })
        ->paginate(10);
        return view('livewire.teacher-student-search' , ['users'=>$users] );
    }
}







