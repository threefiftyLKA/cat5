<?php

namespace App\Livewire;

use Livewire\Component;

class FuelReport extends Component
{
    public $all, $readyToCopy = false;

    public $route;
    public $stop;
    public $carrier;
    public $siteid;
    public $arrivaltime;
    public $fuel;
    public $galpumped;
    public $fuelpercentage;
    public $commpower;
    public $genstatus;
    public $gentype;
    public $genhours;
    public $tanksize;
    public $genid;
    public $serial;
    public $sitepowered;
    public $gateaccess;
    public $notes;
    public $etanext;

    public function mount(){
        $this->sitepowered = "Commercial Power";
        $this->gentype = "Portable";
    }

    public function render()
    {
        return view('livewire.fuel-report');
    }

    public function copyNow(){

        if($this->commpower == true){
            $commpower = 'ON';
        }else{
            $commpower = 'OFF';
        }

        if($this->genstatus == true){
            $genstatus = 'ON';
        }else{
            $genstatus = 'OFF';
        }

        $text =
        '*FUEL REPORT* ' ."\n" . "\n".
        '*ROUTE #:* ' .$this->route. "\n" .
        '*STOP #:* ' .$this->stop. "\n" .
        '*CARRIER:* ' .$this->carrier. "\n" .
        '*SITE ID:* ' .$this->siteid. "\n" .
        '*ARRIVAL TIME:* ' .$this->arrivaltime. "\n" . "\n".
        '*FUEL TYPE:* ' .$this->fuel. "\n" .
        '*GAL. PUMPED:* ' .$this->galpumped. "\n" .
        '*FUEL LEVEL %:* ' .$this->fuelpercentage. "\n" .
        '*COM POWER:* ' .$commpower. "\n" .
        '*GEN STATUS:* ' .$genstatus. "\n" .
        '*GEN TYPE:* ' .$this->gentype. "\n" .
        '*TOTAL GEN HOURS:* ' .$this->genhours. "\n" .
        '*TANK SIZE:* ' .$this->tanksize. "\n" .
        '*GEN ID:* ' .$this->genid. "\n" .
        '*SERIAL #:* ' .$this->serial. "\n" .
        '*SITE POWERED BY:* ' .$this->sitepowered. "\n" .
        '*GATE ACCESS CODE:* ' .$this->gateaccess. "\n" . "\n".
        '*NOTES:* ' .$this->notes. "\n" . "\n".
        '*ETA NEXT SITE:* ' .$this->etanext;
        $this->all = $text;
        $this->readyToCopy = true;
        session()->forget('success');
    }

    public function resetAll(){

        $this->route = '';
        $this->stop = '';
        $this->carrier = '';
        $this->siteid = '';
        $this->arrivaltime = '';
        $this->fuel = '';
        $this->galpumped = '';
        $this->fuelpercentage = '';
        $this->commpower = false;
        $this->genstatus = false;
        $this->gentype = 'Portable';
        $this->genhours = '';
        $this->tanksize = '';
        $this->genid = '';
        $this->serial = '';
        $this->sitepowered = 'Commercial Power';
        $this->gateaccess = '';
        $this->notes = '';
        $this->etanext = '';
        session()->forget('success');




    }

    public function copied(){
        session()->flash('success', 'Copied');
        $this->readyToCopy = false;
    }
}