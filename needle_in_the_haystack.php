<?php
class SpeSkillTest{
    function findNeedle($array){
        $array = array(0 => 'blue', 1 => 'red', 2 => 'green', 3 => 'red');
        $key = array_search('green', $array); // $key = 2;
        return $key;
    }
}
?>