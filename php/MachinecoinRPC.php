<?php 
/*
                    COPYRIGHT
                    
Copyright 2014 Marcus Kazmierczak
Copyright 2014 Juergen Scholz <j.scholz@machinecoin.org>

This file is part of Machinecoin-Api PHP.

Machinecoin-Api PHP is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation; either version 3 of the License, or
(at your option) any later version.

Machinecoin-Api PHP is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with Machinecoin-Api PHP; if not, write to the Free Software
Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

/**
 * Project : Machinecoin-Api PHP
 * Summary : A basic php library to talk with Machinecoind 
 *         : that bases on php-doge https://github.com/mkaz/php-doge
 *         : from Marcus Kazmierczak
 *
 * Source  : https://github.com/Gitju/Machinecoin-Api
 *
 * Author  : Juergen Scholz, Marcus Kazmierczak (@mkaz)
 * License : GPL v3
 */ 

require_once dirname(  __FILE__ ) . '/jsonRPCClient.php';

class Machinecoin {

      private $client;

      /** 
       * Create client to connect on init
       * @param $config array of parameters $host, $port, $user, $pass
       */

      function __construct( $config ) {

        $connect_string = sprintf ( 'http://%s:%s@%s:%s/',
        $config['user'],
        $config['pass'],
        $config['host'],
        $config['port']);

        // internal client to use for connection
        $this->client = new jsonRPCClient( $connect_string );
      }


      /**
       * Given a Machinecoin address returns the account name
       *
       * @param string $address machinecoin addresss
       * @return string account name key
       */ 
       function getaccount( $address ) {
         return $this->client->getaccount( $address );
       }


      /**
       * Creates or Retrievs a Machinecoin address for a account name
       * An account is just a string used as key to identify account,
       * A Machinecoin address is return which can receive coins
       *
       * @param string $account some string used as key to account
       * @return string machinecoin address 
       */
       function getaccountaddress( $account ) {
         return $this->client->getaccountaddress( $account );
       }


      /**
       * Get balance for given account
       *
       * @param string $account account name
       * @return float account balance
       */
       function getbalance( $account, $minconf=1 ) {
         return $this->client->getbalance( $account, $minconf );
       }


      /**
       * Get the details of a block
       *
       * @param string $hash block hash
       * @return array describing the block
       */
       function getblock( $hash ) {
         return $this->client->getblock( $hash );
       }


      /**
       * Get the the number of blocks in the longest block chain 
       *
       * @return int Machinecoin blocknumber
       */
       function getblockcount() {
         return $this->client->getblockcount();
       }


      /**
       * Get the hash of a block for given index 
       *
       * @param int $index block index
       * @return string block hash
       */
        function getblockhash( $index ) {
          return $this->client->getblockhash( $index );
        }


      /**
       * Get the proof-of-work difficulty 
       *
       * @return float Machinecoin difficulty
       */
       function getdifficulty() {
         return $this->client->getdifficulty();
       }


      /**
       * Create new address for account, recommended to include
       * account name for further API use.
       *
       * @param string $account account name
       * @return string Machinecoin address
       */
       function getnewaddress( $account='' ) {
         return $this->client->getnewaddress( $account );
       }


      /**
       * Get the details of a transaction
       *
       * @param string $txid transaction id
       * @return array describing the transaction
       */
       function gettransaction( $txid ) {
         return $this->client->gettransaction( $txid );
       }


      /**
       * Get list of all accounts on in this Machinecoind wallet
       *
       * @return array strings of account => balance
       */
       function listaccounts() {
         return $this->client->listaccounts();
       }


      /**
       * Move coins from one account on wallet to another
       * Both accounts are local to this Machinecoind instance
       *
       * @param string $account_from account moving from
       * @param string $account_to account moving to
       * @param float $amount amount of coins to move
       * @return
       */
       function move( $account_from, $account_to, $amount ) {
         return $this->client->move( $account_from, $account_to, $amount );
       }


      /**
       * Send coins to any Machinecoin Address
       *
       * @param string $account account sending coins from
       * @param string $to_address Machinecoin address sending to
       * @param float $amount amount of coins to send
       * @return string txid
       */
       function sendfrom( $account, $to_address, $amount ) {
         $txid = $this->client->sendfrom( $account, $to_address, $amount );  
         return $txid;
       }


      /**
       * Associate Machinecoin address to account string
       *
       * @param string $address Machinecoin address
       * @param string $account account string
       */
       function setaccount( $address, $account ) {
         return $this->client->setaccount($address, $account);
       }


      /**
       * Validate a given Machinecoin Address
       * @param string $address to validate
       * @return array with the properties of the address
       */
       function validateaddress( $address ) {
         return $this->client->validateaddress($address);
       }   
}

?>