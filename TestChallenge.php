<?php

require('./Challenge.php');

class TestChallenge
{
    private $challengeObject = null;

    /**
     * @param Challenge $challenge
     */
    public function __construct(Challenge $challenge)
    {
        $this->challengeObject = $challenge;
    }

    /**
     * Test the returned value when get unique number from an array
     *
     * @param array $arrayNum
     * @param int $expectedResult
     * @return string|Throwable
     */
    public function test_find_unique_value_in_array(array $arrayNum, float $expectedResult) 
    {
        $returnedValue = $this->challengeObject->findUniqValue($arrayNum);

        if(assert($returnedValue == $expectedResult)){
            echo "Test passed! ";
        }
    }

    /**
     * Test the returned string is valid or not
     *
     * @param string $strSentence
     * @param string $expectedResult
     * @return string|Throwable
     */
    public function test_spin_words_bigger_than_five_letters(string $strSentence, string $expectedResult) 
    { 
        $returnedValue = $this->challengeObject->spinWords($strSentence);

        if(assert($returnedValue == $expectedResult)){
            echo "Test passed! ";
        }
    }

    /**
     * Check if the returned value of amount of jumps are right
     *
     * @param int $start
     * @param int $end
     * @param int $expectedResult
     * @return string|Throwable
     */
    public function test_amount_of_jumps(int $start, int $end, int $expectedResult) 
    {  
        $returnedValue = $this->challengeObject->amountOfJumps($start, $end);

        if(assert($returnedValue == $expectedResult)){
            echo "Test passed! ";
        }
    }
}

$test = new TestChallenge(new Challenge());

$test->test_find_unique_value_in_array([ 1, 1, 1, 2, 1, 1 ], 2);
$test->test_find_unique_value_in_array([ 0, 0, 0.55, 0, 0 ], 0.55);

$test->test_spin_words_bigger_than_five_letters("Hey fellow warriors", "Hey wollef sroirraw ");
$test->test_spin_words_bigger_than_five_letters("This is a test", "This is a test ");
$test->test_spin_words_bigger_than_five_letters("This is another test", "This is rehtona test ");

$test->test_amount_of_jumps(1, 5, 2);
$test->test_amount_of_jumps(1, 10, 3);
$test->test_amount_of_jumps(1, 15, 6);