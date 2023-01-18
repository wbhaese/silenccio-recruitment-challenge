<?php

class Challenge
{
    /**
     * Get unique number from an array
     * 
     * If there wasn't a possible float value
     * It could be implemented
     * using array_count_values()
     *
     * @param array $arrayNum
     * @return int|float
     */
    public function findUniqValue(array $arrayNum) {
        foreach ($arrayNum as $num) {
            $times = 0;
            foreach ($arrayNum as $v){
                if($num == $v){
                    ++$times;
                }
            }
            
            if($times == 1){
                return $num;
            }
        }
    }

    /**
     * Reverse words with 5 or more letters
     *
     * @param string $strSentence
     * @return string
     */
    public function spinWords($strSentence)
    {
        $newSentence = '';
        $sentenceArray = explode(' ', $strSentence);
        
        foreach($sentenceArray as $singleWord)
        {
            if(strlen($singleWord) >= 5){
                $singleWord = strrev($singleWord);    
            }
            
            $newSentence .= $singleWord . ' '; 
        }
        
        return $newSentence;
    }

    /**
     * Calculate amount of jumps that a cat need to do
     *
     * @param int $start
     * @param int $end
     * @return int
     */
    public function amountOfJumps(int $start, int $end)
    {
        $jumps = 0;

        while($start < $end){
            $start += ($end - $start > 2) ? 3 : 1;
            $jumps++;
        }

        return $jumps;   
    }
}