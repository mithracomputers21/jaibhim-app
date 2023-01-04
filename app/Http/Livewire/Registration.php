<?php

namespace App\Http\Livewire;

use App\Models\Plan;
use Filament\Forms;
use Illuminate\Contracts\View\View;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Livewire\Component;
use App\Models\Member;
use App\Models\District;
use App\Models\Block;
use App\Models\Village;
use App\Models\Habitation;

class Registration extends Component implements HasForms
{
    use InteractsWithForms;

    public $plan_id = '';
    public $type_id = '';
    public $event_id = '';
    public $name = '';
    public $email = '';
    public $phone_number = '';
    public $address = '';
    public $notes = '';
    
    public function mount(): void 
    {
        $this->form->fill();
    } 

    protected function getFormSchema(): array
    {
        return [
            TextInput::make('plan_id')->required(),
            TextInput::make('type_id')->required(),
            TextInput::make('event_id')->required(),
            TextInput::make('name')->required(),
            TextInput::make('address')->required(),
            TextInput::make('phone_number')->required(),
            TextInput::make('email')->required(),
            TextInput::make('notes')
        ];
    } 

    public function submit(): void
    {
        dd(Member::create());
    }

    public function render()
    {
        return view('livewire.registration');
    }
}
