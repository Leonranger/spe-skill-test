<?php
class SpeSkillTest{
    function countNumber($n)  
    {  
        if ($n == 0)  
            return 0;  
        return (1 + countNumber($n / 10));  
    }  

    function narcissistic($n)  
    {  
        $check_number = countNumber($n);  
        $temp = $n;  
        $count = 0;  
      
        while ($temp)  
        {  
            $count += pow($temp % 10, $check_number);  
            $temp = (int)$temp / 10;  
        }  
      
        return ($n == $count);  
    } 
        // Testing Code  
        // $n = 1634;  
        // if (narcissistic(!$n))  
        //     echo "true";  
        // else
        //     echo "false";   
}
?>