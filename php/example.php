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
$machinecoin = new machinecoin( $config );

// create a new address
$address = $machinecoin->getaddress( 'gitju' );
print( 'Address: ' . $address . ' ');

// list accounts in wallet
print_r( $machinecoin->listaccounts() );

// get balance in wallet
print( 'gitju: ' . $machinecoin->getbalance( 'gitju' ) );

// move money from accounts in wallet
// moves from 'nico' to account 'gitju'
$machinecoin->move( 'nico', 'gitju', 10000 );

// send money externally (withdrawal?)
// send from account to external address
$machinecoin->sendfrom( 'gitju', 'MCsEypMLMtBkAuqzevYxeFxiSUx5eWAU3y', 100 );

?>