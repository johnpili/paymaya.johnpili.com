<?php

require __DIR__ . "/PayMaya-PHP-SDK/sample/Checkout/User.php";

use PayMaya\PayMayaSDK;
use PayMaya\API\Checkout;
use PayMaya\API\Customization;
use PayMaya\Model\Checkout\Item;
use PayMaya\Model\Checkout\ItemAmount;
use PayMaya\Model\Checkout\ItemAmountDetails;

PayMayaSDK::getInstance()->initCheckout("pk-Z0OSzLvIcOI2UIvDhdTGVVfRSSeiGStnceqwUE7n0Ah", 
										"sk-X8qolYjy62kIzEbr0QRK1h4b4KDVHaNcwMYk39jInSl", 
										"SANDBOX");

$cartSession = $_POST['cart_session'];

$shopCustomization = new Customization();
$shopCustomization->logoUrl = "https://johnpili.com/wp-content/uploads/2020/01/johnpili.svg";
$shopCustomization->iconUrl = "https://johnpili.com/wp-content/uploads/2020/02/cropped-johnpili-icon-180x180.png";
$shopCustomization->appleTouchIconUrl = "https://johnpili.com/wp-content/uploads/2020/02/cropped-johnpili-icon-180x180.png";
$shopCustomization->customTitle = "School Payment Page";
$shopCustomization->colorScheme = "#368d5c";
$shopCustomization->set();

// Item
$itemAmountDetails = new ItemAmountDetails();
$itemAmountDetails->shippingFee = "0";
$itemAmountDetails->tax = "24000.00";
$itemAmountDetails->subtotal = "200000.00";

$itemAmount = new ItemAmount();
$itemAmount->currency = "PHP";
$itemAmount->value = "200000.00";

$item = new Item();
$item->name = "School Fees";
$item->code = "Y2020/8th - School Fees";
$item->description = "School Fees";
$item->quantity = "1";
$item->amount = $itemAmount;
$item->totalAmount = $itemAmount;

$totalAmount = new ItemAmount();
$totalAmount->currency = "PHP";
$totalAmount->value = "224000.00";
$totalAmount->details = $itemAmountDetails;

// Checkout
$itemCheckout = new Checkout();
$user = new User();
$itemCheckout->buyer = $user->buyerInfo();
$itemCheckout->items = array($item);
$itemCheckout->totalAmount = $totalAmount;
$itemCheckout->requestReferenceNumber = $cartSession;
$itemCheckout->redirectUrl = array(
	"success" => "https://paymaya.johnpili.com/success.php",
	"failure" => "https://paymaya.johnpili.com/failure.php",
	"cancel" => "https://paymaya.johnpili.com/cancel.php"
	);
$itemCheckout->execute();
$itemCheckout->retrieve();

echo "Checkout ID: " . $itemCheckout->id . "\n";
echo "Checkout URL: " . $itemCheckout->url . "\n";

header("Location: " . $itemCheckout->url);
exit();