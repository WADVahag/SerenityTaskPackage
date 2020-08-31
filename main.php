<?php 

class GeckoGetter {

    // if want to have an object please make the second variable false 
    // for example getGeckoCoinArray('01coin' , false);

    public function getGeckoCoinArray($coinId){
    
     $coinObject = (array) json_decode(file_get_contents('https://api.coingecko.com/api/v3/coins/'.$coinId));
        
        return $coinObject;

    }

    public function getGeckoCoinObject($coinId){
    
        $coinObject = json_decode(file_get_contents('https://api.coingecko.com/api/v3/coins/'.$coinId));
           
           return $coinObject;
   
    }

}

return new GeckoGetter;