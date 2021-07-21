<?php

require_once 'configDB.php';
require_once 'razorpay-php/Razorpay.php';

use Razorpay\Api\Api;

$keyId = 'rzp_test_6l9msRdrl5v33A';
$secretKey = 'RFhREwrxynpudUDwGifE0tDQ';
$api = new Api($keyId,$secretKey);

$CUSTOMER_NAME = $_POST['CUSTOMER_NAME'];
$CUSTOMER_EMAIL = $_POST['CUSTOMER_EMAIL'];
$CUSTOMER_MOBILE = $_POST['CUSTOMER_MOBILE'];
$PAY_AMT = $_POST['PAY_AMT'];

$order = $api->order->create(array(

    'receipt'=> rand(1000,9999) . 'ORD',
    'amount'=> $PAY_AMT,
    'payment_capture' =>1,
    'currency' => 'INR',
));
?>

<form action="success.php" method="POST">
<script
    src="https://checkout.razorpay.com/v1/checkout.js"
    data-key="<?php echo $keyId ?>"
    data-amount="<?php echo $order->amount ?>"
    data-currency="INR"
    data-order_id="<?php echo $order->id ?>"
    data-buttontext="Pay with Razorpay"
    data-name="Donate Care "
    data-description="Pay your Fees"
    
    data-prefill.name="<?php echo $CUSTOMER_NAME; ?>"
    data-prefill.email="<?php echo $CUSTOMER_EMAIL; ?>"
    data-prefill.contact="<?php echo $CUSTOMER_MOBILE; ?>"
    
    data-theme.color="#F37254"
></script>
<input type="hidden" custom="Hidden Element" name="hidden">
</form>