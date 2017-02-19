<?php

$accessToken = "EAAZAZB2enmBAcBABxh2EjNlXTgFnJK3DtMz619bkx4UaobMPZBQ0mRVm8yghrlZAMYCYzRiIWQQGlQpc0WdMGbeQGpwvlPZBN2Tb2E7Yj57ZCjDXqs78DKh98DS4RepeoPkYhmgjMc3AykqXre2Nj4ZAQgoy3qi76yLALRqWoxYZBwZDZD";

$url = "https://graph.facebook.com/v2.6/me/thread_settings?access_token=".$accessToken;

$data = '
{
  "setting_type" : "domain_whitelisting",
  "whitelisted_domains" : ["http://www.lankadeepa.lk"],
  "domain_action_type": "add"
}
';

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
echo "<br/><pre>";
$response = json_decode($response, true);
print_r($response);



?>
