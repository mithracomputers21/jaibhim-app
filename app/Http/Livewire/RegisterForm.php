<?php

namespace App\Http\Livewire;

use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Livewire\Component;
use Filament\Forms\Components\TextInput;


class RegisterForm extends Component implements HasForms
{
    use InteractsWithForms;

    public $name;
    public $email;

    protected function getRegisterFormSchema(): array
    {
        return [
            TextInput::make('name'),
            TextInput::make('email'),
        ];
    }

    public function render()
    {
        return view('livewire.register-form');
    }
}
