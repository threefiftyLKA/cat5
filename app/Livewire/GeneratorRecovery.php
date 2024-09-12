<?php

namespace App\Livewire;

use Livewire\Component;

class GeneratorRecovery extends Component
{
    public $all, $readyToCopy = false;
    public $carrier, $name, $siteid, $genid, $commpower, $recoverysuccess, $yardin, $etayard, $fffrecovery, $notes;

    public function mount(){
    }

    public function render()
    {
        return view('livewire.generator-recovery');
    }

    public function copyNow(){

        if($this->commpower == true){
            $commpower = 'ON';
        }else{
            $commpower = 'OFF';
        }

        if($this->recoverysuccess == true){
            $recoverysuccess = 'Yes';
        }else{
            $recoverysuccess = 'No';
        }

        if($this->fffrecovery == true){
            $fffrecovery = 'Yes';
        }else{
            $fffrecovery = 'No';
        }



        $text =
        '*GEN RECOVERY* ' ."\n" . "\n".
        '*CARRIER:* ' .$this->carrier. "\n" .
        '*NAME:* ' .$this->name. "\n" .
        '*SITE ID:* ' .$this->siteid. "\n" .
        '*GEN ID:* ' .$this->genid. "\n" .
        '*COM POWER STATUS:* ' .$commpower. "\n" .
        '*WAS YOUR RECOVERY SUCCESSFUL:* ' .$recoverysuccess. "\n" .
        '*YARD IN ROUTE TO:* ' .$this->yardin. "\n" .
        '*ETA TO YARD:* ' .$this->etayard. "\n" .
        '*FFF RECOVERY SUBMITTED:* ' .$fffrecovery. "\n" . "\n".
        '*NOTES:* ' .$this->notes. "\n" . "\n".
        'HEALTH CHECK PLEASE';
        $this->all = $text;
        $this->readyToCopy = true;
        session()->forget('success');
    }

    public function resetAll(){

        $this->carrier = '';
        $this->siteid = '';
        $this->name = '';
        $this->genid = '';
        $this->commpower = false;
        $this->recoverysuccess = false;
        $this->yardin = '';
        $this->etayard = '';
        $this->fffrecovery = false;
        $this->notes = '';
        session()->forget('success');




    }

    public function copied(){
        session()->flash('success', 'Copied');
        $this->readyToCopy = false;
    }
}
