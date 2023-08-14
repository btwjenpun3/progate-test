<?php

include '4.php';

class DigitalWallet extends Wallet 
{
    public function withdraww()
    {
        return 'Ini adalah Withdraw dari Class DigitalWallet';
    }
}

$digitalWallet = new DigitalWallet();

echo $digitalWallet->withdraw();