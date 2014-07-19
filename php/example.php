<?php

## Simple command-line script to show examples

require './MachinecoinRPC.php';

$config = array
(
    'user' => '<rpcusername>',
    'pass' => '<rpcpassword>',
    'host' => '127.0.0.1',
    'port' => '40332'
);

// create client connection
$MacRPC = new MacRPC( $config );

// create a new address
$address = $MacRPC->getaddress( 'gitju' );
print( 'Address: ' . $address . ' ');

// list accounts in wallet
print_r( $MacRPC->listaccounts() );

// get balance in wallet
print( 'gitju: ' . $MacRPC->getbalance( 'gitju' ) );

// move money from accounts in wallet
// moves from 'nico' to account 'gitju'
$MacRPC->move( 'nico', 'gitju', 10000 );

// send money externally (withdrawal?)
// send from account to external address
$MacRPC->sendfrom( 'gitju', 'MCsEypMLMtBkAuqzevYxeFxiSUx5eWAU3y', 100 );

?>