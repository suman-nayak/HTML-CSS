<?php

class InvalidCardDetailsException extends Exception {
}

class CardExpiredException extends Exception {
}

class InsufficientFundsException extends Exception {
}

class MissingInformationException extends Exception {
}

$card_number = "1234567890123456";
$card_exp_date = "30-09-2027";
$account_balance = 50000;
$transaction_amount = 10000;

try {

    if(empty($card_number) || empty($card_exp_date) || empty($account_balance) || empty($transaction_amount)){
        throw new MissingInformationException("Provide data for all the 4 variables.");
    }

    if(strlen($card_number) < 16){
        throw new InvalidCardDetailsException("Invalid card details. Card number length is less than 16.");
    }

    $current_date = date("d-m-Y");
    $expiry_date = strtotime($card_exp_date);
    $today = strtotime($current_date);

    if($expiry_date < $today){
        throw new CardExpiredException("Card has expired.");
    }

    if($transaction_amount > $account_balance){
        throw new InsufficientFundsException("Insufficient funds.");
    }

    $account_balance = $account_balance - $transaction_amount;

    echo "Transaction Successful";
    echo "<br>Transaction Amount: ".$transaction_amount;
    echo "<br>Remaining Balance: ".$account_balance;

} catch(MissingInformationException $e){

    echo "Transaction Failed";
    echo "<br>".$e->getMessage();

    error_log($e->getMessage());

} catch(InvalidCardDetailsException $e){

    echo "Transaction Failed";
    echo "<br>".$e->getMessage();

    error_log($e->getMessage());

} catch(CardExpiredException $e){

    echo "Transaction Failed";
    echo "<br>".$e->getMessage();

    error_log($e->getMessage());

} catch(InsufficientFundsException $e){

    echo "Transaction Failed";
    echo "<br>".$e->getMessage();

    error_log($e->getMessage());
}

?>