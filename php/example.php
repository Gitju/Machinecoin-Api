<?php

## Simple command-line script to show examples

require './Machinecoind.php';

$config = array
(
    'user' => '<rpcusername>',
    'pass' => '<rpcpassword>',
    'host' => '127.0.0.1',
    'port' => '40332'
);

// create client connection
$Machinecoind = new Machinecoind( $config );

// create a new address
$address = $Machinecoind->getaddress( 'gitju' );
print( 'Address: ' . $address . ' ');

// list accounts in wallet
print_r( $Machinecoind->listaccounts() );

// get balance in wallet
print( 'gitju: ' . $Machinecoind->getbalance( 'gitju' ) );

// move money from accounts in wallet
// moves from 'nico' to account 'gitju'
$Machinecoind->move( 'nico', 'gitju', 10000 );

// send money externally (withdrawal?)
// send from account to external address
$Machinecoind->sendfrom( 'gitju', 'MCsEypMLMtBkAuqzevYxeFxiSUx5eWAU3y', 100 );

?>