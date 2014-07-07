<?php

## Simple command-line script to show examples

require "./MachinecoinRPC.php";

$config = array(
    'user' => 'machinecoincoinrpc',
    'pass' => '--password--',
    'host' => '127.0.0.1',
    'port' => '22555' );

// create client conncetion
$machinecoin = new machinecoin( $config );


// create a new address
$address = $machinecoin->get_address( 'gitju' );
print( "Address: $address \n" );

// list accounts in wallet
print_r( $machinecoin->list_accounts() );

// get balance in wallet
print( "gitju: " . $machinecoin->get_balance( 'gitju' ) );

// move money from accounts in wallet
// moves from 'nico' to account 'gitju'
$machinecoin->move( 'nico', 'gitju', 10000 );

// send money externally (withdrawl?)
// send from account to external address
$machinecoin->send( 'gitju', 'MCsEypMLMtBkAuqzevYxeFxiSUx5eWAU3y', 100 );

