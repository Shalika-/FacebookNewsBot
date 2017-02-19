<?php
function getUserInfo($userid){
  global $accessToken;
  $url = "https://graph.facebook.com/v2.6/".$userid."?fields=first_name,last_name,profile_pic,locale,timezone,gender&access_token=".$accessToken;

  $cha = curl_init($url);
  curl_setopt($cha, CURLOPT_RETURNTRANSFER, true);
  $response = curl_exec($cha);
  curl_close($cha);

  return(json_decode($response, true));
}
?>
