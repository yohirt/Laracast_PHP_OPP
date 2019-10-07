<?php

class LightSwitch  
{
    public function on()
    {
        
    }
    public function of()
    {
        
    }
    protected function connect(){

    }
    protected function activate(){

    }
}

class innerSwitch extends LightSwitch 
{
    
}


$switch = new innerSwitch;
$switch->connect();


?>