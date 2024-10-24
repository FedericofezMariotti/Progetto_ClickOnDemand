<?php

namespace App\Livewire\Auth;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthForm extends Component
{


    public $login = true;

    public $name;
    public $email;
    public $password;
    public $password_confirmation;

    public function isRegister() 
    {
        $this->login = false;
    }

    public function isLogin() 
    {
        $this->login = true;
    }

    public function login () 
    {

        $validated = $this->validate([
            'email' => 'required|email',
            'password' => 'required|min:8',
        ]);

        

        if (Auth::attempt(['email' => $validated['email'], 'password' => $validated['password']])) 
        {
            $this->redirect('/');
        } else {

             
            session()->flash('error', 'Le tue credenziali non sono valide.');
        }

    }

    public function register()
    {
        $validated = $this->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|same:password_confirmation',
            'password_confirmation' => 'required|min:8',
        ]);
    
        try {
            $user = User::create([
                'name' => $validated['name'],
                'email' => $validated['email'],
                'password' => Hash::make($validated['password']),
            ]);
    
            Auth::login($user);
    
           /*  return redirect('/'); */

           return redirect()->to('/');

        } catch (\Exception $e) {
            
            session()->flash('error', 'Registrazione fallita. Riprova.');;
        }
    }


    public function render()
    {
        return view('auth.auth-form')->layout('layout.auth');  // Specifica il layout creato
    }

    
}
