<?php

namespace App\Livewire;

use Livewire\Component;

class GeneratorDeploy extends Component
{

    public $all, $readyToCopy = false;
    public $carrier, $name, $siteid, $accessissues, $genaccess, $commpower, $gendeploy, $portablegenstatus, $connectiontype;
    public $sitepowered, $genmake, $genser, $genid, $genlicenseplate, $kwkva, $tanksize, $genrunhours;
    public $fffdeploy, $notes;

    public function mount(){
        $this->connectiontype = "Hardwire";
        $this->sitepowered = "Commercial Power";
    }

    public function render()
    {
        return view('livewire.generator-deploy');
    }

    public function copyNow(){

        if($this->accessissues == true){
            $accessissues = 'Yes';
        }else{
            $accessissues = 'No';
        }

        if($this->genaccess == true){
            $genaccess = 'Yes';
        }else{
            $genaccess = 'No';
        }

        if($this->commpower == true){
            $commpower = 'ON';
        }else{
            $commpower = 'OFF';
        }

        if($this->gendeploy == true){
            $gendeploy = 'Yes';
        }else{
            $gendeploy = 'No';
        }

        if($this->portablegenstatus == true){
            $portablegenstatus = 'RUN';
        }else{
            $portablegenstatus = 'OFF';
        }

        if($this->fffdeploy == true){
            $fffdeploy = 'Yes';
        }else{
            $fffdeploy = 'No';
        }



        $text =
        '*GEN DEPLOY* ' ."\n" . "\n".
        '*CARRIER:* ' .$this->carrier. "\n" .
        '*NAME:* ' .$this->name. "\n" .
        '*SITE ID:* ' .$this->siteid. "\n" . "\n".
        '*Access Issues:* ' .$accessissues. "\n" .
        '*Gen Access:* ' .$genaccess. "\n" . "\n".
        '*Comm Power Status:* ' .$commpower. "\n" .
        '*Successful Gen Deploy:* ' .$gendeploy. "\n" .
        '*Portable Gen Status:* ' .$portablegenstatus. "\n" .
        '*Connection Type:* ' .$this->connectiontype. "\n" .
        '*Site Powered By:* ' .$this->sitepowered. "\n" . "\n".
        '*Gen Make:* ' .$this->genmake. "\n" .
        '*Gen Ser#:* ' .$this->genser. "\n" .
        '*Gen ID#:* ' .$this->genid. "\n" .
        '*Gen License Plate :* ' .$this->genlicenseplate. "\n" .
        '*KW/KVA:* ' .$this->kwkva. "\n" .
        '*Tank Size:* ' .$this->tanksize. "\n" .
        '*Gen Run Hours:* ' .$this->genrunhours. "\n" . "\n".
        '*FFF Deployment Submitted:* ' .$fffdeploy. "\n" . "\n".
        '*NOTES:* ' .$this->notes. "\n" . "\n".
        'HEALTH CHECK PLEASE';
        $this->all = $text;
        $this->readyToCopy = true;
        session()->forget('success');
    }

    public function resetAll(){

        $this->carrier = '';
        $this->name = '';
        $this->siteid = '';
        $this->accessissues = false;
        $this->genaccess =false;
        $this->commpower =false;
        $this->gendeploy =false;
        $this->portablegenstatus =false;
        $this->connectiontype = 'Hardwire';
        $this->sitepowered = 'Commercial Power';
        $this->genmake = '';
        $this->genser = '';
        $this->genid = '';
        $this->genlicenseplate = '';
        $this->kwkva = '';
        $this->tanksize = '';
        $this->genrunhours = '';
        $this->fffdeploy = false;
        $this->notes = '';
        session()->forget('success');




    }

    public function copied(){
        session()->flash('success', 'Copied');
        $this->readyToCopy = false;
    }
}
