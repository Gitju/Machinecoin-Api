# Machinecoin-RPC PHP

A basic PHP library to talk to a machinecoind daemon to get you started in your machine project.

We haven't implemented all of the end points of the API, focused on account and moving of coins. We are trying to make sure the library is documented and includes examples so its easy to use before being complete.  Patches welcome.


## Requirements

Requires **machinecoind** to already be installed and running on your local server or reachable by your server.  

Get machinecoind source from: https://github.com/Gitju/Machinecoin

Also, here's a [guide building machinecoind](https://github.com/Gitju/Machinecoin-Docs/tree/master/guides/build) on debian-based system.  


## Usage:

Example use, see examples.php for more

```
require "./MacRPC.php";

$config = array(
    'user' => '<rpcusername>',
    'pass' => '<rpcpassword>',
    'host' => '127.0.0.1',
    'port' => '40332' );

// create client conncetion
$MacRPC = new MacRPC( $config );

// create a new address
$address = $MacRPC->getaddress( 'gitju' );
print( $address );

// check balance 
print( "gitju: " . $MacRPC->getbalance( 'gitju' ) );

// send money externally (withdrawl?)
$MacRPC->sendfrom( 'gitju', 'MCsEypMLMtBkAuqzevYxeFxiSUx5eWAU3y', 100 );

```


## About

Library created by

  Marcus Kazmierczak, http://mkaz.com/
  
  Juergen Scholz, http://machinecoin.org


