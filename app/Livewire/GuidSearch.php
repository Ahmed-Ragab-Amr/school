<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class GuidSearch extends Component
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
        $guides = User::where('user_type', 'التوجيه الطلابي')
                        ->where(function($query) {
                        $query->where('name', 'like', '%' . $this->search . '%')
                        ->orWhere('national_id', 'like', '%' . $this->search . '%');

        })
        ->paginate(10);
        return view('livewire.guid-search' , ['guides'=>$guides] );
    }
}
