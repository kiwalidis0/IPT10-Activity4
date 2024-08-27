<?php
require_once 'Account.php';

class SavingAccount extends Account {
    private $account_number;
    private $balance;

    public function __construct($account_number, $balance) {
        $this->account_number = $account_number;
        $this->balance = $balance;
    }
}

?>