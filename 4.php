<?php

class Wallet 
{
    private $amount;

    public function deposit()
    {
        
    }

    public function withdraw()
    {
        return 'Ini adalah Withdraw pada Class Wallet';
    }

    public function checkBalance()
    {

    }
}

$wallet = new Wallet();

echo $wallet->withdraw();