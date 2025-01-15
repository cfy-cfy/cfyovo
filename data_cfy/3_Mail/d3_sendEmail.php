<?php
// https://phptry1v1.cfy-cfy.repl.co/data_cfy/3_Mail/d3_sendEmail.php
require 'd3_email.class.php';
$mailto='1021931267@qq.com';                 //收件人
$subject="Subject:Sending E-mail using PHP"; //邮件主题
$body="body:Hello! 这是邮件的内容。";          //邮件内容
sendmailto($mailto,$subject,$body);
// echo "finish".date('时间：Y年m月d日  H:i');
function sendmailto($mailto, $mailsub, $mailbd)
{
  //require_once ('email.class.php');
  //##########################################
  $smtpserver   = "smtp.163.com";         //SMTP服务器
  $smtpserverport = 25;                   //SMTP服务器端口
  $smtpusermail  = "cfy_7788999@163.com"; //SMTP服务器的用户邮箱
  $smtpemailto  = $mailto;
  $smtpuser    = "cfy_7788999@163.com";   //SMTP服务器的用户帐号
  $smtppass    = "OTSQKQKDAEPIEPNE";      //SMTP服务器的用户密码
  $mailsubject  = $mailsub;               //邮件主题
  $mailsubject  = "=?UTF-8?B?" . base64_encode($mailsubject) . "?="; //防止乱码
  $mailbody    = $mailbd;                //邮件内容
  //$mailbody = "=?UTF-8?B?".base64_encode($mailbody)."?=";          //防止乱码
  $mailtype    = "HTML"; //邮件格式（HTML/TXT）,TXT为文本邮件. 139邮箱的短信提醒要设置为HTML才正常
  ##########################################
  $smtp= new smtp($smtpserver, $smtpserverport, true, $smtpuser, $smtppass); //这里面的一个true是表示使用身份验证,否则不使用身份验证.
  $smtp->debug  = TRUE; //是否显示发送的调试信息
  $smtp->sendmail($smtpemailto, $smtpusermail, $mailsubject, $mailbody, $mailtype);
}
?>
