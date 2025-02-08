<?php

namespace App\Livewire;

use Livewire\Component;

class StudentsList extends Component
{
    public $students = [
        ['id' => 1 , 'name' => 'علی رضایی', 'email' => 'ali@example.com'],
        ['id' => 2 , 'name' => 'مریم محمودی', 'email' => 'maryam@example.com'],
        ['id' => 3 , 'name' => 'علی رضایی', 'email' => 'ali@example.com'],
        ['id' => 4 , 'name' => 'مریم محمودی', 'email' => 'maryam@example.com'],
        ['id' => 5 , 'name' => 'علی رضایی', 'email' => 'ali@example.com'],
        ['id' => 6 , 'name' => 'مریم محمودی', 'email' => 'maryam@example.com'],
        ['id' => 7 , 'name' => 'علی رضایی', 'email' => 'ali@example.com'],
        ['id' => 8 , 'name' => 'مریم محمودی', 'email' => 'maryam@example.com'],
        ['id' => 9 , 'name' => 'علی رضایی', 'email' => 'ali@example.com'],
        ['id' => 10, 'name' => 'مریم محمودی', 'email' => 'maryam@example.com'],
        ['id' => 11, 'name' => 'علی رضایی', 'email' => 'ali@example.com'],
        ['id' => 12, 'name' => 'مریم محمودی', 'email' => 'maryam@example.com'],
    ];

    public function viewStudent($id)
    {
        return redirect()->to('/student-details/' . $id);
    }

    public function render()
    {
        return view('livewire.students-list');
    }
}
