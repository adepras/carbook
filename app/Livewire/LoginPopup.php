<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class LoginPopup extends Component
{
    public $email = '';
    public $password = '';
    public $showModal = false;

    protected $listeners = ['showLoginModal' => 'showModal'];

    protected $rules = [
        'email' => 'required|email',
        'password' => 'required|min:6',
    ];

    public function showModal()
    {
        $this->showModal = true;
    }

    public function closeModal()
    {
        $this->resetInput();
        $this->showModal = false;
    }

    // public function login()
    // {
    //     $this->validate();

    //     if (Auth::attempt(['email' => $this->email, 'password' => $this->password])) {
    //         session()->flash('success', 'Login berhasil.');
    //         $this->closeModal();
    //         return redirect()->route('profile');
    //     }

    //     session()->flash('error', 'Email atau password salah.');
    // }

    // public function resetInput()
    // {
    //     $this->email = '';
    //     $this->password = '';
    // }

    public function render()
    {
        return view('livewire.login-popup');
    }
}
