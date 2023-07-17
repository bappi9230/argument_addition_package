<?php

namespace Bappi\Sum;

class Add{

    /**
     * @param int
     * @param mixed $a
     * @param mixed $b
     */

    public function sum(...$argc){

        $limit = config('summation.max_argument');
        if( count($argc) < $limit){
            $result =0;
            foreach($argc as $item){
                $result = $result + $item;
            }
            return $result;
        }
        else{
            throw new \Exception('Argument must be less then '.$limit);
        }
    }

}
