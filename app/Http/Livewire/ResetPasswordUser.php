<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;

use Illuminate\Support\Facades\Hash;

class ResetPasswordUser extends Component
{
    public $email = '';
    public $password = '';
    public $passwordConfirmation = '';

    public $showSuccesNotification = false;
    public $showFailureNotification = false;

    public $showDemoNotification = false;

    public $urlID = '';

    protected $rules = [
        'password' => 'required|min:6|same:passwordConfirmation'
    ];

    public function mount($id)
    {
        $existingUser = User::find($id);
        $this->urlID = intval($existingUser->id);
    }

    public function resetPassword()
    {
        $this->validate();
        $existingUser = User::where('id', $this->urlID)->first();
        if ($existingUser && $existingUser->id == $this->urlID) {
            $existingUser->update([
                'password' => Hash::make($this->password)
            ]);
            session()->flash('message', 'Password user ' . $existingUser->name . ' telah terupdate!');
            return redirect()->intended('/user-data');
        } else {
            session()->flash('message', 'Password gagal terupdate!');
        }
    }

    public function render()
    {
        return view('livewire.reset-password-user');
    }
}
