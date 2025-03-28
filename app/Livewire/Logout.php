<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Logout extends Component
{
    protected $listeners = ['logout' => 'logout'];

    public function logout(){
        Auth::logout();
        session()->forget('menu');
        session()->invalidate();
        session()->regenerateToken();
        return redirect('/');
    }
    public function render()
    {
        return view('livewire.logout');
    }
}
