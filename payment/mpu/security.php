<?php

define ('HMAC_SHA256', 'sha256');
define ('SECRET_KEY', 'f05ec492a9df4cafb112665e150a2a07443f1cddc1e84c12a5394ebf772a36a84dd2f98420ed40748ebae6d0c772e2d8d1ef089b08f7496eb0bb4cac6d3838d107b2c4c65ae24e7d944c92b61c60c069f9c7319158e2415e90422054e7cbf98a78ec415ec7b14fe899f3a59099d9a58ae0d4672328a748b98934a217c8601223');

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
