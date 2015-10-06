# Machinecoin-RPC PHP

A basic PHP library to talk to a machinecoind daemon to get you started in your machine project.

We haven't implemented all of the end points of the API, focused on account and moving of coins. We are trying to make sure the library is documented and includes examples so its easy to use before being complete.  Patches welcome.


## Requirements

Requires **machinecoind** to already be installed and running on your local server or reachable by your server.  

Get machinecoind source from: https://github.com/machinecoin-project/Machinecoin

Also, here's a [guide building machinecoind](https://github.com/machinecoin-project/Machinecoin-Docs/tree/master/guides/build) on debian-based system.  


## Usage:

Example use, see examples.php for more

```
require "./Machinecoind.php";

$config = array(
    'rpc_user' => '<rpcusername>',
    'rpc_pass' => '<rpcpassword>',
    'rpc_host' => '127.0.0.1',
    'rpc_port' => '40332' );

// create client conncetion
$Machinecoind = new Machinecoind( $config );

// create a new address
$address = $Machinecoind->getaddress( 'gitju' );
print( $address );

// check balance 
print( "gitju: " . $Machinecoind->getbalance( 'gitju' ) );

// send money externally (withdrawl?)
$Machinecoind->sendfrom( 'gitju', 'MCsEypMLMtBkAuqzevYxeFxiSUx5eWAU3y', 100 );

```


## About

Library created by

  Marcus Kazmierczak, http://mkaz.com/
  
  Juergen Scholz, http://machinecoin.org


