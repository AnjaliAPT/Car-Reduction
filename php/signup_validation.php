<?php
ob_start();
?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/8.11.8/sweetalert2.min.css" integrity="sha256-2bAj1LMT7CXUYUwuEnqqooPb1W0Sw0uKMsqNH0HwMa4=" crossorigin="anonymous" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/8.11.8/sweetalert2.all.min.js" integrity="sha256-2RS1U6UNZdLS0Bc9z2vsvV4yLIbJNKxyA4mrx5uossk=" crossorigin="anonymous"></script>

<?php


// print_r($_POST);

// foreach ($_POST as $key => $value)
//     echo $key . '=' . $value . '<br />';


if ($_SERVER["REQUEST_METHOD"] == "POST") {


	header('Cache-Control: no cache'); //no cache
	session_cache_limiter('private_no_expire'); // works
	//session_cache_limiter('public'); // works too
	include('connect.php');
	$f_name = mysqli_real_escape_string($db, $_POST["name"]);
	$l_name = mysqli_real_escape_string($db, $_POST["last_name"]);
	$e = mysqli_real_escape_string($db, $_POST["email"]);
	$mob = mysqli_real_escape_string($db, $_POST["mobile"]);
	$gend = mysqli_real_escape_string($db, $_POST["gender"]);



	$hsh = md5(rand(0, 1000));
	$pswd = rand(10000, 99999);
	$hash_pswd = md5($pswd);
	$user = $f_name . $pswd;

	$email_verify = "https://ferry-carpool.herokuapp.com//php/email_verify.php?email=$e&hash=$hsh";
	$website = "https://ferry-carpool.herokuapp.com/";
	// $website = "http://47abf639.ngrok.io/Car-Reduction/index.php";
	// $email_verify = "http://47abf639.ngrok.io//Car-Reduction/php/email_verify.php?email=$e&hash=$hsh";




	// PHPMailer

	require 'PHPMailerAutoload.php';
	require 'credential.php';

	$mail = new PHPMailer;

	$mail->SMTPDebug = 4;                               // Enable verbose debug output

	$mail->isSMTP();                                      // Set mailer to use SMTP
	$mail->Host = 'smtp.gmail.com;';  // Specify main and backup SMTP servers
	$mail->SMTPAuth = true;                               // Enable SMTP authentication
	$mail->Username = EMAIL;                 // SMTP username
	$mail->Password = PASS;                           // SMTP password
	$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
	$mail->Port = 587;                                    // TCP port to connect to

	$mail->setFrom(EMAIL, 'ferry');
	$mail->addAddress($e, $f_name . " " . $l_name);     // Add a recipient
	// $mail->addAddress('ellen@example.com');               // Name is optional
	$mail->addReplyTo('ferry | <noreply@ferry.com>');
	// $mail->addCC('cc@example.com');
	// $mail->addBCC('bcc@example.com');

	// $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
	// $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
	$mail->isHTML(true);                                  // Set email format to HTML

	$mail->Subject = 'Confirm your Email';



	$mail->Body    = '




	<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional //EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

	<html xmlns="http://www.w3.org/1999/xhtml" xmlns:o="urn:schemas-microsoft-com:office:office" xmlns:v="urn:schemas-microsoft-com:vml">
	<head>
	<!--[if gte mso 9]><xml><o:OfficeDocumentSettings><o:AllowPNG/><o:PixelsPerInch>96</o:PixelsPerInch></o:OfficeDocumentSettings></xml><![endif]-->
	<meta content="text/html" charset="utf-8" http-equiv="Content-Type"/>
	<meta content="width=device-width" name="viewport"/>
	<!--[if !mso]><!-->
	<meta content="IE=edge" http-equiv="X-UA-Compatible"/>
	<!--<![endif]-->
	<title></title>
	<!--[if !mso]><!-->
	<link href="https://fonts.googleapis.com/css?family=Bitter" rel="stylesheet" type="text/css"/>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css"/>
	<!--<![endif]-->
	<style type="text/css">
			body {
				margin: 0;
				padding: 0;
			}

			table,
			td,
			tr {
				vertical-align: top;
				border-collapse: collapse;
			}

			* {
				line-height: inherit;
			}

			a[x-apple-data-detectors=true] {
				color: inherit !important;
				text-decoration: none !important;
			}
		</style>
	<style id="media-query" type="text/css">
			@media (max-width: 625px) {

				.block-grid,
				.col {
					min-width: 320px !important;
					max-width: 100% !important;
					display: block !important;
				}

				.block-grid {
					width: 100% !important;
				}

				.col {
					width: 100% !important;
				}

				.col>div {
					margin: 0 auto;
				}

				img.fullwidth,
				img.fullwidthOnMobile {
					max-width: 100% !important;
				}

				.no-stack .col {
					min-width: 0 !important;
					display: table-cell !important;
				}

				.no-stack.two-up .col {
					width: 50% !important;
				}

				.no-stack .col.num4 {
					width: 33% !important;
				}

				.no-stack .col.num8 {
					width: 66% !important;
				}

				.no-stack .col.num4 {
					width: 33% !important;
				}

				.no-stack .col.num3 {
					width: 25% !important;
				}

				.no-stack .col.num6 {
					width: 50% !important;
				}

				.no-stack .col.num9 {
					width: 75% !important;
				}

				.video-block {
					max-width: none !important;
				}

				.mobile_hide {
					min-height: 0px;
					max-height: 0px;
					max-width: 0px;
					display: none;
					overflow: hidden;
					font-size: 0px;
				}

				.desktop_hide {
					display: block !important;
					max-height: none !important;
				}
			}
		</style>
	</head>
	<body class="clean-body" style="margin: 0; padding: 0; -webkit-text-size-adjust: 100%; background-color: #FFFFFF;">
	<!--[if IE]><div class="ie-browser"><![endif]-->
	<table bgcolor="#FFFFFF" cellpadding="0" cellspacing="0" class="nl-container" role="presentation" style="table-layout: fixed; vertical-align: top; min-width: 320px; Margin: 0 auto; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #FFFFFF; width: 100%;" valign="top" width="100%">
	<tbody>
	<tr style="vertical-align: top;" valign="top">
	<td style="word-break: break-word; vertical-align: top;" valign="top">
	<!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td align="center" style="background-color:#FFFFFF"><![endif]-->
	<div style="background:linear-gradient(to right, #5e92db, #39b2a7);">
	<div class="block-grid" style="Margin: 0 auto; min-width: 320px; max-width: 605px; overflow-wrap: break-word; word-wrap: break-word; word-break: break-word; background-color: transparent;">
	<div style="border-collapse: collapse;display: table;width: 100%;background-color:transparent;">
	<!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0" style="background:linear-gradient(to right, #5e92db, #39b2a7);"><tr><td align="center"><table cellpadding="0" cellspacing="0" border="0" style="width:605px"><tr class="layout-full-width" style="background-color:transparent"><![endif]-->
	<!--[if (mso)|(IE)]><td align="center" width="605" style="background-color:transparent;width:605px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;" valign="top"><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 0px; padding-left: 0px; padding-top:0px; padding-bottom:0px;"><![endif]-->
	<div class="col num12" style="min-width: 320px; max-width: 605px; display: table-cell; vertical-align: top; width: 605px;">
	<div style="width:100% !important;">
	<!--[if (!mso)&(!IE)]><!-->
	<div style="border-top:0px solid transparent; border-left:0px solid transparent; border-bottom:0px solid transparent; border-right:0px solid transparent; padding-top:0px; padding-bottom:0px; padding-right: 0px; padding-left: 0px;">
	<!--<![endif]-->
	<table border="0" cellpadding="0" cellspacing="0" class="divider" role="presentation" style="table-layout: fixed; vertical-align: top; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; min-width: 100%; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;" valign="top" width="100%">
	<tbody>
	<tr style="vertical-align: top;" valign="top">
	<td class="divider_inner" style="word-break: break-word; vertical-align: top; min-width: 100%; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; padding-top: 20px; padding-right: 20px; padding-bottom: 20px; padding-left: 20px;" valign="top">
	<table align="center" border="0" cellpadding="0" cellspacing="0" class="divider_content" role="presentation" style="table-layout: fixed; vertical-align: top; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; border-top: 0px solid transparent; width: 100%;" valign="top" width="100%">
	<tbody>
	<tr style="vertical-align: top;" valign="top">
	<td style="word-break: break-word; vertical-align: top; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;" valign="top"><span></span></td>
	</tr>
	</tbody>
	</table>
	</td>
	</tr>
	</tbody>
	</table>
	<!--[if mso]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 10px; padding-left: 10px; padding-top: 20px; padding-bottom: 10px; font-family: Georgia, \'Times New Roman\', serif"><![endif]-->
	<div style="color:#FFFFFF;font-family:\'Bitter\', Georgia, Times, \'Times New Roman\', serif;line-height:1.2;padding-top:20px;padding-right:10px;padding-bottom:10px;padding-left:10px;">
	<div style="font-size: 12px; line-height: 1.2; font-family: \'Bitter\', Georgia, Times, \'Times New Roman\', serif; color: #FFFFFF; mso-line-height-alt: 14px;">
	<p style="font-size: 28px; line-height: 1.2; text-align: center; word-break: break-word; font-family: Bitter, Georgia, Times, \'Times New Roman\', serif; mso-line-height-alt: 34px; margin: 0;"><span style="font-size: 28px;">Welcome to Ferry</span></p>
	</div>
	</div>
	<!--[if mso]></td></tr></table><![endif]-->
	<table border="0" cellpadding="0" cellspacing="0" class="divider" role="presentation" style="table-layout: fixed; vertical-align: top; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; min-width: 100%; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;" valign="top" width="100%">
	<tbody>
	<tr style="vertical-align: top;" valign="top">
	<td class="divider_inner" style="word-break: break-word; vertical-align: top; min-width: 100%; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; padding-top: 20px; padding-right: 20px; padding-bottom: 20px; padding-left: 20px;" valign="top">
	<table align="center" border="0" cellpadding="0" cellspacing="0" class="divider_content" role="presentation" style="table-layout: fixed; vertical-align: top; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; border-top: 0px solid transparent; width: 100%;" valign="top" width="100%">
	<tbody>
	<tr style="vertical-align: top;" valign="top">
	<td style="word-break: break-word; vertical-align: top; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;" valign="top"><span></span></td>
	</tr>
	</tbody>
	</table>
	</td>
	</tr>
	</tbody>
	</table>
	<!--[if (!mso)&(!IE)]><!-->
	</div>
	<!--<![endif]-->
	</div>
	</div>
	<!--[if (mso)|(IE)]></td></tr></table><![endif]-->
	<!--[if (mso)|(IE)]></td></tr></table></td></tr></table><![endif]-->
	</div>
	</div>
	</div>
	<div style="background-color:#f3f3f3;">
	<div class="block-grid" style="Margin: 0 auto; min-width: 320px; max-width: 605px; overflow-wrap: break-word; word-wrap: break-word; word-break: break-word; background-color: transparent;">
	<div style="border-collapse: collapse;display: table;width: 100%;background-color:transparent;">
	<!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0" style="background-color:#f3f3f3;"><tr><td align="center"><table cellpadding="0" cellspacing="0" border="0" style="width:605px"><tr class="layout-full-width" style="background-color:transparent"><![endif]-->
	<!--[if (mso)|(IE)]><td align="center" width="605" style="background-color:transparent;width:605px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;" valign="top"><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 0px; padding-left: 0px; padding-top:0px; padding-bottom:0px;"><![endif]-->
	<div class="col num12" style="min-width: 320px; max-width: 605px; display: table-cell; vertical-align: top; width: 605px;">
	<div style="width:100% !important;">
	<!--[if (!mso)&(!IE)]><!-->
	<div style="border-top:0px solid transparent; border-left:0px solid transparent; border-bottom:0px solid transparent; border-right:0px solid transparent; padding-top:0px; padding-bottom:0px; padding-right: 0px; padding-left: 0px;">
	<!--<![endif]-->
	<table border="0" cellpadding="0" cellspacing="0" class="divider" role="presentation" style="table-layout: fixed; vertical-align: top; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; min-width: 100%; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;" valign="top" width="100%">
	<tbody>
	<tr style="vertical-align: top;" valign="top">
	<td class="divider_inner" style="word-break: break-word; vertical-align: top; min-width: 100%; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; padding-top: 25px; padding-right: 25px; padding-bottom: 25px; padding-left: 25px;" valign="top">
	<table align="center" border="0" cellpadding="0" cellspacing="0" class="divider_content" role="presentation" style="table-layout: fixed; vertical-align: top; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; border-top: 0px solid transparent; width: 100%;" valign="top" width="100%">
	<tbody>
	<tr style="vertical-align: top;" valign="top">
	<td style="word-break: break-word; vertical-align: top; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;" valign="top"><span></span></td>
	</tr>
	</tbody>
	</table>
	</td>
	</tr>
	</tbody>
	</table>
	<!--[if (!mso)&(!IE)]><!-->
	</div>
	<!--<![endif]-->
	</div>
	</div>
	<!--[if (mso)|(IE)]></td></tr></table><![endif]-->
	<!--[if (mso)|(IE)]></td></tr></table></td></tr></table><![endif]-->
	</div>
	</div>
	</div>
	<div style="background-color:#f3f3f3;">
	<div class="block-grid" style="Margin: 0 auto; min-width: 320px; max-width: 605px; overflow-wrap: break-word; word-wrap: break-word; word-break: break-word; background-color: transparent;">
	<div style="border-collapse: collapse;display: table;width: 100%;background-color:transparent;">
	<!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0" style="background-color:#f3f3f3;"><tr><td align="center"><table cellpadding="0" cellspacing="0" border="0" style="width:605px"><tr class="layout-full-width" style="background-color:transparent"><![endif]-->
	<!--[if (mso)|(IE)]><td align="center" width="605" style="background-color:transparent;width:605px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;" valign="top"><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 0px; padding-left: 0px; padding-top:5px; padding-bottom:5px;"><![endif]-->
	<div class="col num12" style="min-width: 320px; max-width: 605px; display: table-cell; vertical-align: top; width: 605px;">
	<div style="width:100% !important;">
	<!--[if (!mso)&(!IE)]><!-->
	<div style="border-top:0px solid transparent; border-left:0px solid transparent; border-bottom:0px solid transparent; border-right:0px solid transparent; padding-top:5px; padding-bottom:5px; padding-right: 0px; padding-left: 0px;">
	<!--<![endif]-->
	<!--[if mso]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 10px; padding-left: 10px; padding-top: 10px; padding-bottom: 10px; font-family: Georgia, \'Times New Roman\', serif"><![endif]-->
	<div style="color:#134C75;font-family:\'Bitter\', Georgia, Times, \'Times New Roman\', serif;line-height:1.2;padding-top:10px;padding-right:10px;padding-bottom:10px;padding-left:10px;">
	<div style="line-height: 1.2; font-size: 12px; color: #134C75; font-family: \'Bitter\', Georgia, Times, \'Times New Roman\', serif; mso-line-height-alt: 14px;">
	<p style="text-align: center; line-height: 1.2; word-break: break-word; font-size: 28px; mso-line-height-alt: 34px; margin: 0;"><span style="font-size: 28px;">CONFIRM YOUR EMAIL ADDRESS</span></p>
	</div>
	</div>
	<!--[if mso]></td></tr></table><![endif]-->
	<!--[if mso]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 10px; padding-left: 10px; padding-top: 10px; padding-bottom: 10px; font-family: Arial, sans-serif"><![endif]-->
	<div style="color:#555555;font-family:Open Sans, Helvetica Neue, Helvetica, Arial, sans-serif;line-height:1.5;padding-top:10px;padding-right:10px;padding-bottom:10px;padding-left:10px;">
	<div style="font-size: 12px; line-height: 1.5; color: #555555; font-family: Open Sans, Helvetica Neue, Helvetica, Arial, sans-serif; mso-line-height-alt: 18px;">
	<p style="font-size: 18px; line-height: 1.5; word-break: break-word; mso-line-height-alt: 27px; margin: 0;"><span style="font-size: 18px;">Please&nbsp;click&nbsp;the&nbsp;button&nbsp;below&nbsp;to&nbsp;confirm&nbsp;your&nbsp;email&nbsp;address.</span></p>
	</div>
	</div>
	<!--[if mso]></td></tr></table><![endif]-->
	<div align="center" class="button-container" style="padding-top:10px;padding-right:10px;padding-bottom:10px;padding-left:10px;">
	<!--[if mso]><table width="100%" cellpadding="0" cellspacing="0" border="0" style="border-spacing: 0; border-collapse: collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;"><tr><td style="padding-top: 10px; padding-right: 10px; padding-bottom: 10px; padding-left: 10px" align="center"><v:roundrect xmlns:v="urn:schemas-microsoft-com:vml" xmlns:w="urn:schemas-microsoft-com:office:word" href="' . $email_verify . '" style="height:39pt; width:147pt; v-text-anchor:middle;" arcsize="49%" stroke="false" fillcolor="rgb(8, 78, 131)"><w:anchorlock/><v:textbox inset="0,0,0,0"><center style="color:#ffffff; font-family:Arial, sans-serif; font-size:14px"><![endif]--><a href="' . $email_verify . '" style="-webkit-text-size-adjust: none; text-decoration: none; display: inline-block; color: #ffffff; background-color: rgb(8, 78, 131); border-radius: 25px; -webkit-border-radius: 25px; -moz-border-radius: 25px; width: auto; width: auto; border-top: 1px solid rgb(8, 78, 131); border-right: 1px solid rgb(8, 78, 131); border-bottom: 1px solid rgb(8, 78, 131); border-left: 1px solid rgb(8, 78, 131); padding-top: 10px; padding-bottom: 10px; font-family: Open Sans, Helvetica Neue, Helvetica, Arial, sans-serif; text-align: center; mso-border-alt: none; word-break: keep-all;" target="_blank"><span style="padding-left:30px;padding-right:30px;font-size:14px;display:inline-block;"><span style="font-size: 16px; line-height: 2; word-break: break-word; mso-line-height-alt: 32px;"><span data-mce-style="font-size: 14px; line-height: 28px;" style="font-size: 14px; line-height: 28px;">CONFIRM EMAIL</span></span></span></a>
	<!--[if mso]></center></v:textbox></v:roundrect></td></tr></table><![endif]-->
	</div>
	<table border="0" cellpadding="0" cellspacing="0" class="divider" role="presentation" style="table-layout: fixed; vertical-align: top; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; min-width: 100%; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;" valign="top" width="100%">
	<tbody>
	<tr style="vertical-align: top;" valign="top">
	<td class="divider_inner" style="word-break: break-word; vertical-align: top; min-width: 100%; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; padding-top: 30px; padding-right: 10px; padding-bottom: 30px; padding-left: 10px;" valign="top">
	<table align="center" border="0" cellpadding="0" cellspacing="0" class="divider_content" role="presentation" style="table-layout: fixed; vertical-align: top; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; border-top: 1px solid #DDDDDD; width: 100%;" valign="top" width="100%">
	<tbody>
	<tr style="vertical-align: top;" valign="top">
	<td style="word-break: break-word; vertical-align: top; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;" valign="top"><span></span></td>
	</tr>
	</tbody>
	</table>
	</td>
	</tr>
	</tbody>
	</table>
	<!--[if mso]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 10px; padding-left: 10px; padding-top: 10px; padding-bottom: 10px; font-family: Arial, sans-serif"><![endif]-->
	<div style="color:#555555;font-family:Open Sans, Helvetica Neue, Helvetica, Arial, sans-serif;line-height:1.8;padding-top:10px;padding-right:10px;padding-bottom:10px;padding-left:10px;">
	<div style="line-height: 1.8; font-size: 12px; color: #555555; font-family: Open Sans, Helvetica Neue, Helvetica, Arial, sans-serif; mso-line-height-alt: 22px;">

	<p style="line-height: 1.8; word-break: break-word; font-size: 15px; mso-line-height-alt: 27px; margin: 0;"text-align: center;"><span style="font-size: 15px;"><strong>USERNAME </strong>&nbsp;:&nbsp;' . $user . '</span></p>
	<p style="line-height: 1.8; word-break: break-word; font-size: 15px; mso-line-height-alt: 27px; margin: 0;"text-align: center;"><span style="font-size: 15px;"><strong>PASSWORD </strong>&nbsp;:&nbsp;' . $pswd . '</span></p><br/>
	<p style="line-height: 1.8; word-break: break-word; font-size: 15px; mso-line-height-alt: 27px; margin: 0;"><span style="font-size: 15px;">In case the above link is not working, manually insert the following URL :</span></p>
	<p style="line-height: 1.8; word-break: break-word; font-size: 15px; mso-line-height-alt: 27px; margin: 0;"><span style="font-size: 15px;">' . $email_verify . '</span></p>
	<br/>
	<p style="line-height: 1.8; word-break: break-word; font-size: 15px; mso-line-height-alt: 27px; margin: 0;"><span style="font-size: 15px;">Cheers,</span></p>
	<p style="line-height: 1.8; word-break: break-word; font-size: 15px; mso-line-height-alt: 27px; margin: 0;"><span style="font-size: 15px;">The Ferry Team</span></p>
	</div>
	</div>
	<!--[if mso]></td></tr></table><![endif]-->
	<table border="0" cellpadding="0" cellspacing="0" class="divider" role="presentation" style="table-layout: fixed; vertical-align: top; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; min-width: 100%; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;" valign="top" width="100%">
	<tbody>
	<tr style="vertical-align: top;" valign="top">
	<td class="divider_inner" style="word-break: break-word; vertical-align: top; min-width: 100%; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; padding-top: 25px; padding-right: 25px; padding-bottom: 25px; padding-left: 25px;" valign="top">
	<table align="center" border="0" cellpadding="0" cellspacing="0" class="divider_content" role="presentation" style="table-layout: fixed; vertical-align: top; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; border-top: 0px solid transparent; width: 100%;" valign="top" width="100%">
	<tbody>
	<tr style="vertical-align: top;" valign="top">
	<td style="word-break: break-word; vertical-align: top; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;" valign="top"><span></span></td>
	</tr>
	</tbody>
	</table>
	</td>
	</tr>
	</tbody>
	</table>
	<!--[if (!mso)&(!IE)]><!-->
	</div>
	<!--<![endif]-->
	</div>
	</div>
	<!--[if (mso)|(IE)]></td></tr></table><![endif]-->
	<!--[if (mso)|(IE)]></td></tr></table></td></tr></table><![endif]-->
	</div>
	</div>
	</div>
	<div style="background-color:transparent;">
	<div class="block-grid mixed-two-up" style="Margin: 0 auto; min-width: 320px; max-width: 605px; overflow-wrap: break-word; word-wrap: break-word; word-break: break-word; background-color: transparent;">
	<div style="border-collapse: collapse;display: table;width: 100%;background-color:transparent;">
	<!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0" style="background-color:transparent;"><tr><td align="center"><table cellpadding="0" cellspacing="0" border="0" style="width:605px"><tr class="layout-full-width" style="background-color:transparent"><![endif]-->
	<!--[if (mso)|(IE)]><td align="center" width="403" style="background-color:transparent;width:403px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;" valign="top"><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 0px; padding-left: 0px; padding-top:15px; padding-bottom:15px;"><![endif]-->
	<div class="col num8" style="display: table-cell; vertical-align: top; min-width: 320px; max-width: 400px; width: 403px;">
	<div style="width:100% !important;">
	<!--[if (!mso)&(!IE)]><!-->
	<div style="border-top:0px solid transparent; border-left:0px solid transparent; border-bottom:0px solid transparent; border-right:0px solid transparent; padding-top:15px; padding-bottom:15px; padding-right: 0px; padding-left: 0px;">
	<!--<![endif]-->
	<!--[if mso]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 10px; padding-left: 10px; padding-top: 10px; padding-bottom: 10px; font-family: Arial, sans-serif"><![endif]-->
	<div style="color:#8F8F8F;font-family:Open Sans, Helvetica Neue, Helvetica, Arial, sans-serif;line-height:1.2;padding-top:10px;padding-right:10px;padding-bottom:10px;padding-left:10px;">
	<div style="font-size: 12px; line-height: 1.2; color: #8F8F8F; font-family: Open Sans, Helvetica Neue, Helvetica, Arial, sans-serif; mso-line-height-alt: 14px;">
	<p style="font-size: 11px; line-height: 1.2; word-break: break-word; text-align: center; mso-line-height-alt: 13px; margin: 0;"><span style="font-size: 11px;">Copyright©<script>
	              document.write(new Date().getFullYear());
	            </script>&nbsp;FERRY&nbsp;|&nbsp;Marcos&nbsp;Akash</span></p>
	</div>
	</div>
	<!--[if mso]></td></tr></table><![endif]-->
	<!--[if (!mso)&(!IE)]><!-->
	</div>
	<!--<![endif]-->
	</div>
	</div>
	<!--[if (mso)|(IE)]></td></tr></table><![endif]-->
	<!--[if (mso)|(IE)]></td><td align="center" width="201" style="background-color:transparent;width:201px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;" valign="top"><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 10px; padding-left: 10px; padding-top:15px; padding-bottom:15px;"><![endif]-->
	<div class="col num4" style="display: table-cell; vertical-align: top; max-width: 320px; min-width: 200px; width: 201px;">
	<div style="width:100% !important;">
	<!--[if (!mso)&(!IE)]><!-->
	<div style="border-top:0px solid transparent; border-left:0px solid transparent; border-bottom:0px solid transparent; border-right:0px solid transparent; padding-top:15px; padding-bottom:15px; padding-right: 10px; padding-left: 10px;">
	<!--<![endif]-->
	<div></div>
	<!--[if (!mso)&(!IE)]><!-->
	</div>
	<!--<![endif]-->
	</div>
	</div>
	<!--[if (mso)|(IE)]></td></tr></table><![endif]-->
	<!--[if (mso)|(IE)]></td></tr></table></td></tr></table><![endif]-->
	</div>
	</div>
	</div>
	<!--[if (mso)|(IE)]></td></tr></table><![endif]-->
	</td>
	</tr>
	</tbody>
	</table>
	<!--[if (IE)]></div><![endif]-->
	</body>
	</html>


	    ';









	//PHPMailer


	// https://myaccount.google.com/u/0/lesssecureapps?pli=1



	if (isset($_POST["car_binary"])) {
		$car_bin = 1;
		$reg = mysqli_real_escape_string($db, $_POST["registration_no"]);
		$type = mysqli_real_escape_string($db, $_POST["car_type"]);
		$no = mysqli_real_escape_string($db, $_POST["car_no"]);
		$query = "INSERT INTO `cars`(`registration_no`, `car_type`,`car_no`,  `username`) VALUES ('$reg','$type','$no','$user');";
		// echo ($query);
		mysqli_query($db, $query);
	} else {
		$car_bin = 0;
	}
	$query = "INSERT INTO `user`(`first_name`, `last_name`,`email`, `mobile`, `gender`, `password`, `car_binary`, `email_binary`, `username`, `hash`) VALUES ('$f_name','$l_name','$e', '$mob', '$gend','$pswd',$car_bin,0,'$user','$hsh');";
	mysqli_query($db, $query);

	if (!$mail->send()) {

?>

		<script>
			$(document).ready(function() {
				Swal.fire({
					title: "SIGNUP",
					text: "Error while signing up",
					type: "error"
				}).then(function() {
					window.location = "../index.php";
				});
			});
		</script>
	<?php

	} else {

	?>
		<script>
			$(document).ready(function() {
				Swal.fire({
					title: "SIGNUP",
					text: "Thanks for signing up. Please check your email for confirmation!",
					type: "success"
				}).then(function() {
					window.location = "../index.php";
				});
			});
		</script>
<?php

	}

	exit();

	ob_end_clean();
	// die();
}
// session_destroy();

function test_input($data)
{
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}
