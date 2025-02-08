<?php

namespace App\Livewire;

use Livewire\Component;

class ChatBot extends Component
{
    public $question;
    public $answer = "منتظر سوال شما هستم...";

    public function ask()
    {
        $this->answer = "پاسخ به: " . $this->question;
    }

    public function render()
    {
        return view('livewire.chat-bot');
    }
}
