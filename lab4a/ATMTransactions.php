<?php

class ATMTransactions {
    private $transactionID;
    private $date;
    private $type;
    private $amount;
    private $post;

    public function __construct($transactionID, $date, $type, $amount, $post) {
        $this->transactionID = $transactionID;
        $this->date = $date;
        $this->type = $type;
        $this->amount = $amount;
        $this->post = $post;
    }

    public function modifies(){
        return false;
    }
}

?>