<?php

define ('HMAC_SHA256', 'sha256');
// define ('SECRET_KEY', 'cc04a1e4712b4d4484d4b9dc3d8347df70ae3b12c6a24cd59a2532d7ea9c711a1b7def276dea4cce86ec5cf1768a4535284db5d7f37c477587babd8defa42e6623e1df36c330452e909f044639fde005564c8a18c4b74662b2fe74a5190c99b8353b183735244ecdb5b48492dd00e722e4786f57d7da4ca48f3b69a03102b11b');
define('SECRET_KEY','cc04a1e4712b4d4484d4b9dc3d8347df70ae3b12c6a24cd59a2532d7ea9c711a1b7def276dea4cce86ec5cf1768a4535284db5d7f37c477587babd8defa42e6623e1df36c330452e909f044639fde005564c8a18c4b74662b2fe74a5190c99b8353b183735244ecdb5b48492dd00e722e4786f57d7da4ca48f3b69a03102b11b');

function sign ($params) {
  return signData(buildDataToSign($params), SECRET_KEY);
}

function signData($data, $secretKey) {
    return base64_encode(hash_hmac('sha256', $data, $secretKey, true));
}

function buildDataToSign($params) {
        $signedFieldNames = explode(",",$params["signed_field_names"]);
        foreach ($signedFieldNames as $field) {
           $dataToSign[] = $field . "=" . $params[$field];
        }
        return commaSeparate($dataToSign);
}

function commaSeparate ($dataToSign) {
    return implode(",",$dataToSign);
}
require_once __DIR__ . DIRECTORY_SEPARATOR . '../../../vendor/autoload.php';
require_once __DIR__ . DIRECTORY_SEPARATOR . '../../../Resources/ExternalConfiguration.php';

function SimpleAuthorizationInternet($flag)
{
	if (isset($flag) && $flag == "true") {
		$capture = true;
	} else {
		$capture = false;
	}
	
	$clientReferenceInformationArr = [
			"code" => "TC50171_3"
	];
	$clientReferenceInformation = new CyberSource\Model\Ptsv2paymentsClientReferenceInformation($clientReferenceInformationArr);

	$processingInformationArr = [
			"capture" => $capture
	];
	$processingInformation = new CyberSource\Model\Ptsv2paymentsProcessingInformation($processingInformationArr);

	$paymentInformationCardArr = [
			"number" => "4111111111111111",
			"expirationMonth" => "12",
			"expirationYear" => "2031"
	];
	$paymentInformationCard = new CyberSource\Model\Ptsv2paymentsPaymentInformationCard($paymentInformationCardArr);

	$paymentInformationArr = [
			"card" => $paymentInformationCard
	];
	$paymentInformation = new CyberSource\Model\Ptsv2paymentsPaymentInformation($paymentInformationArr);

	$orderInformationAmountDetailsArr = [
			"totalAmount" => "102.21",
			"currency" => "USD"
	];
	$orderInformationAmountDetails = new CyberSource\Model\Ptsv2paymentsOrderInformationAmountDetails($orderInformationAmountDetailsArr);

	$orderInformationBillToArr = [
			"firstName" => "John",
			"lastName" => "Doe",
			"address1" => "1 Market St",
			"locality" => "san francisco",
			"administrativeArea" => "CA",
			"postalCode" => "94105",
			"country" => "US",
			"email" => "test@cybs.com",
			"phoneNumber" => "4158880000"
	];
	$orderInformationBillTo = new CyberSource\Model\Ptsv2paymentsOrderInformationBillTo($orderInformationBillToArr);

	$orderInformationArr = [
			"amountDetails" => $orderInformationAmountDetails,
			"billTo" => $orderInformationBillTo
	];
	$orderInformation = new CyberSource\Model\Ptsv2paymentsOrderInformation($orderInformationArr);

	$requestObjArr = [
			"clientReferenceInformation" => $clientReferenceInformation,
			"processingInformation" => $processingInformation,
			"paymentInformation" => $paymentInformation,
			"orderInformation" => $orderInformation
	];
	$requestObj = new CyberSource\Model\CreatePaymentRequest($requestObjArr);


	$commonElement = new CyberSource\ExternalConfiguration();
	$config = $commonElement->ConnectionHost();
	$merchantConfig = $commonElement->merchantConfigObject();

	$api_client = new CyberSource\ApiClient($config, $merchantConfig);
	$api_instance = new CyberSource\Api\PaymentsApi($api_client);

	try {
		$apiResponse = $api_instance->createPayment($requestObj);
		print_r(PHP_EOL);
		print_r($apiResponse);

		return $apiResponse;
	} catch (Cybersource\ApiException $e) {
		print_r($e->getResponseBody());
		print_r($e->getMessage());
	}
}

if(!defined('DO_NOT_RUN_SAMPLES')){
	echo "\nSimpleAuthorizationInternet Sample Code is Running..." . PHP_EOL;
	SimpleAuthorizationInternet('false');
}
?>
