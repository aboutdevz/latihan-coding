<?php


class Rumus
{
    public $test;

    public function bin2dec($input)
    {
        $count = count($input)-1;
        $setresult = 0;
        $pangkat = 0;
        $this->test = $count;
        foreach ($input as $num) {
            $pangkat = 2**$count;
            $result = intval($num) * $pangkat;
            $setresult += $result;
            $count--;
        }
        return $setresult;
    }
}
