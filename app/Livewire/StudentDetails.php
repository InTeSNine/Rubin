<?php

namespace App\Livewire;

use Livewire\Component;

class StudentDetails extends Component
{
    public $student;

    public function mount($id)
    {
        $students = [
            1 => ['id' => 1, 'name' => 'علی رضایی', 'email' => 'ali@example.com', 'skills' => 'PHP, Laravel'],
            2 => ['id' => 2, 'name' => 'مریم محمودی', 'email' => 'maryam@example.com', 'skills' => 'React, Vue'],
            3 => ['id' => 3, 'name' => 'علی رضایی', 'email' => 'ali@example.com', 'skills' => 'PHP, Laravel'],
            4 => ['id' => 4, 'name' => 'مریم محمودی', 'email' => 'maryam@example.com', 'skills' => 'React, Vue'],
            5 => ['id' => 5, 'name' => 'علی رضایی', 'email' => 'ali@example.com', 'skills' => 'PHP, Laravel'],
            6 => ['id' => 6, 'name' => 'مریم محمودی', 'email' => 'maryam@example.com', 'skills' => 'React, Vue'],
            7 => ['id' => 7, 'name' => 'علی رضایی', 'email' => 'ali@example.com', 'skills' => 'PHP, Laravel'],
            8 => ['id' => 8, 'name' => 'مریم محمودی', 'email' => 'maryam@example.com', 'skills' => 'React, Vue'],
            9 => ['id' => 9, 'name' => 'علی رضایی', 'email' => 'ali@example.com', 'skills' => 'PHP, Laravel'],
            10 => ['id' => 10, 'name' => 'مریم محمودی', 'email' => 'maryam@example.com', 'skills' => 'React, Vue'],
            11 => ['id' => 11, 'name' => 'علی رضایی', 'email' => 'ali@example.com', 'skills' => 'PHP, Laravel'],
            12 => ['id' => 12, 'name' => 'مریم محمودی', 'email' => 'maryam@example.com', 'skills' => 'React, Vue'],
        ];

        $this->student = $students[$id] ?? abort(404);
    }

    public function backToList()
    {
        return redirect()->to('/students');
    }

    public function render()
    {
        return view('livewire.student-details');
    }
}
