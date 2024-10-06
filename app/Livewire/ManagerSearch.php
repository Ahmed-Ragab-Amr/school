<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class ManagerSearch extends Component
{
    use WithPagination;
    public $search = '';


    public function updateSearch($value)
    {
        $this->search = $value;
        // قم بتحديث نتائج البحث هنا إذا لزم الأمر
    }

    public function render()
    {
        $managers = User::where('user_type', 'اداري')
                        ->where(function($query) {
                        $query->where('name', 'like', '%' . $this->search . '%')
                        ->orWhere('national_id', 'like', '%' . $this->search . '%');

        })
        ->paginate(10);
        return view('livewire.manager-search' , ['managers'=>$managers] );
    }
}
