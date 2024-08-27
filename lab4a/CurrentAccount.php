<?php
require_once 'Account.php';

class CurrentAccount extends Account {
    private $account_number;
    private $balance;

    public function __construct($account_number, $balance) {
        $this->account_number = $account_number;
        $this->balance = $balance;
    }

    public function withdraw(){
        return false;
    }

}

?>