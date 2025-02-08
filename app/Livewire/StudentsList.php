<?php

namespace App\Livewire;

use Livewire\Component;

class StudentsList extends Component
{
    public $students = [
        ['id' => 1, 'name' => 'علی رضایی'],
        ['id' => 2, 'name' => 'مریم محمودی'],
        ['id' => 3, 'name' => 'احمد نادری'],
        ['id' => 4, 'name' => 'سارا قاسمی'],
        ['id' => 5, 'name' => 'محمد کریمی'],
    ];

    public function getProfileImage($id)
    {
        $images = [
            asset('storage/images/profiles/1.png'),
            asset('storage/images/profiles/2.png'),
            asset('storage/images/profiles/3.png'),
            asset('storage/images/profiles/4.png'),
            asset('storage/images/profiles/5.png'),
        ];

        return $images[$id % count($images)];
    }

    public function render()
    {
        return view('livewire.students-list');
    }
}
