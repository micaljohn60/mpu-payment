<?php

define ('HMAC_SHA256', 'sha256');
define ('SECRET_KEY', 'cc04a1e4712b4d4484d4b9dc3d8347df70ae3b12c6a24cd59a2532d7ea9c711a1b7def276dea4cce86ec5cf1768a4535284db5d7f37c477587babd8defa42e6623e1df36c330452e909f044639fde005564c8a18c4b74662b2fe74a5190c99b8353b183735244ecdb5b48492dd00e722e4786f57d7da4ca48f3b69a03102b11b');

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
?>
