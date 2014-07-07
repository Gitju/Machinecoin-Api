# Machinecoin-Api PHP

A basic PHP library to talk to a machinecoind daemon to get you started in your machine project.

I haven't implemented all of the end points of the API, focused on account and moving of coins. I'm trying to make sure the library is documented and includes examples so its easy to use before being complete.  Patches welcome.


## Requirements

Requires **machinecoind** to already be installed and running on your local server or reachable by your server.  

Get machinecoind source from: https://github.com/Gitju/Machinecoin

Also, here's a [guide building machinecoind](https://github.com/Gitju/Machinecoin-Docs/tree/master/guides/build) on debian-based system.  


## Usage:

Example use, see examples.php for more

```
require "./MachinecoinRPC.php";

$config = array(
    'user' => 'machinecoinrpc',
    'pass' => '--password--',
    'host' => '127.0.0.1',
    'port' => '40332' );

// create client conncetion
$machinecoinrpc = new machinecoin( $config );

// create a new address
$address = $machinecoinrpc->get_address( 'gitju' );
print( $address );

// check balance 
print( "gitju: " . $machinecoinrpc->get_balance( 'gitju' ) );

// send money externally (withdrawl?)
$machinecoinrpc->send( 'gitju', 'MCsEypMLMtBkAuqzevYxeFxiSUx5eWAU3y', 100 );

```


## About

Library created by

  Marcus Kazmierczak, http://mkaz.com/
  
  Juergen Scholz, http://machinecoin.org


