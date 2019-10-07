<?php
class Mother  
{
    public function getEyeCount()
    {
        return 2;
    }
}
class child extends Mother 
{
    public function FunctionName(Type $var = null)
    {
        # code...
    }
}

echo (new child)->getEyeCount()



?>