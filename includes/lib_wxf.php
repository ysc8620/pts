<?php

//获得token

function get_access_token($appid,$appsecret)

{

	$ch = curl_init();

	curl_setopt($ch, CURLOPT_URL, "https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid=".$appid."&secret=".$appsecret."");

	curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");

	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);

	curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);

	curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (compatible; MSIE 5.01; Windows NT 5.0)');

	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);

	curl_setopt($ch, CURLOPT_AUTOREFERER, 1);

	curl_setopt($ch, CURLOPT_POSTFIELDS,$data);

	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

	$tmpInfo = curl_exec($ch);

	

	

	if(curl_errno($ch))

	{

		return curl_error($ch);

	}

	curl_close($ch);

	return json_decode($tmpInfo,true);

}

//获取关注者信息

function getUserInfo($openid)

{

	$ch = curl_init();

	curl_setopt($ch, CURLOPT_URL, "https://api.weixin.qq.com/cgi-bin/user/info?access_token=".ACCESS_TOKEN."&openid=".$openid 



);

	curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");

	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);

	curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);

	curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (compatible; MSIE 5.01; Windows NT 5.0)');

	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);

	curl_setopt($ch, CURLOPT_AUTOREFERER, 1);

	curl_setopt($ch, CURLOPT_POSTFIELDS, $data);

	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

	$tmpInfo = curl_exec($ch);

	

	

	if (curl_errno($ch))

	{

		return curl_error($ch);

	}

	curl_close($ch);

	return json_decode($tmpInfo,true);

}

function grabImage($url,$filename="") {

  if($url==""):return false;endif;



  if($filename=="") {

    $ext=strrchr($url,".");

    if($ext!=".gif" && $ext!=".jpg"):return false;endif;

    $filename=date("dMYHis").$ext;

  }



  ob_start();

  readfile($url);

  $img = ob_get_contents();

  ob_end_clean();

  $size = strlen($img);



  $fp2=@fopen($filename, "a");

  fwrite($fp2,$img);

  fclose($fp2);

  return $filename;

} 


function get_openid($appid,$appsecret,$code)

{

    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL, "https://api.weixin.qq.com/sns/oauth2/access_token?appid=".$appid."&secret=".$appsecret."&code=".$code."&grant_type=authorization_code");

    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");

    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);

    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);

    curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (compatible; MSIE 5.01; Windows NT 5.0)');

    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);

    curl_setopt($ch, CURLOPT_AUTOREFERER, 1);

    curl_setopt($ch, CURLOPT_POSTFIELDS,$data);

    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    $tmpInfo = curl_exec($ch);

    if(curl_errno($ch))

    {

        return curl_error($ch);

    }

    curl_close($ch);

    return json_decode($tmpInfo,true);

}


?>