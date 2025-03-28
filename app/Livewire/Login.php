<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use JetBrains\PhpStorm\NoReturn;
use Livewire\Attributes\On;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Login extends Component
{
    #[Validate('required|string|email')]
    public $username;



    #[Validate('required|string')]
    public $password;

    public function submit()
    {
        $validated = $this->validate();
        $credentials = ['email' => $this->username, 'password' => $this->password];
        if (Auth::attempt($credentials)) {
            session()->regenerate();
            $views = Auth::user()
                    ->views()
                    ->get()
                    ->pluck('views')
                    ->flatten(1)
                    ->unique('id')
                    ->values();
            if($views){
                session(['menu' => $views]);
            }
            else{
                session()->flash("warning",'Usted no tiene roles asignados.');
                return redirect('/');
            }
            return redirect()->intended(route('dashboard'));
        }
        $this->addError('email', 'Las credenciales no son válidas.');
    }

    public function render()
    {
        return view('livewire.login');
    }
}
