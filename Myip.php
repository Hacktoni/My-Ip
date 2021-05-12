https://www.facebook.com/109092207990487/posts/117387293827645/
<?php
function getuserip()
{
$clijent = @$_SERVER ['HTTPS_CLIJENT_IP'];
$forward = @$_SERVER ['HTTPS_X_FORWARDED_FOR'];
$remote = @$_SERVER ['REMOTE_ADDR'];

if(filter_var($clijent, FILTER_VALIDATE_IP))
{
$ip = $clijent;
}
elseif(filter_var($clijent, FILTER_VALIDATE_IP))
{
$ip = $forward;
}
else
{
$ip = $remote;
}
return $ip;
}
$user_ip = getuserip();
echo $user_ip;
?>
