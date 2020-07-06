<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require_once "../vendor/autoload.php";

class sendForJob {
    private $nameCandidat;
    private $posteCandidat;
    private $cvCandidat;
    private $lmCandidat;
    private $mailSend;
    private $clientMailSend;
    private $mailHeaders;

    /**
     * sendForJob constructor.
     * @param $nameCandidat
     * @param $posteCandidat
     * @param $cvCandidat
     * @param $lmCandidat
     */
    public function __construct($nameCandidat, $posteCandidat, $cvCandidat, $lmCandidat)
    {
        $this->nameCandidat = $nameCandidat;
        $this->posteCandidat = $posteCandidat;
        $this->cvCandidat = $cvCandidat;
        $this->lmCandidat = $lmCandidat;

        $this->initSMTPServe();
    }

    /**
     * @return mixed
     */
    public function getNameCandidat()
    {
        return $this->nameCandidat;
    }

    /**
     * @param mixed $nameCandidat
     */
    public function setNameCandidat($nameCandidat)
    {
        $this->nameCandidat = $nameCandidat;
    }

    /**
     * @return mixed
     */
    public function getPosteCandidat()
    {
        return $this->posteCandidat;
    }

    /**
     * @param mixed $posteCandidat
     */
    public function setPosteCandidat($posteCandidat)
    {
        $this->posteCandidat = $posteCandidat;
    }

    /**
     * @return mixed
     */
    public function getCvCandidat()
    {
        return $this->cvCandidat;
    }

    /**
     * @param mixed $cvCandidat
     */
    public function setCvCandidat($cvCandidat)
    {
        $this->cvCandidat = $cvCandidat;
    }

    /**
     * @return mixed
     */
    public function getLmCandidat()
    {
        return $this->lmCandidat;
    }

    /**
     * @param mixed $lmCandidat
     */
    public function setLmCandidat($lmCandidat)
    {
        $this->lmCandidat = $lmCandidat;
    }


    public function sendMailLce() {
        $this->mailSend->From = $this->emailClient;
        $this->mailSend->FromName = $this->nameClient;
        //L'email qui reçoit
    /*    $this->mailSend->addAddress('assita.sow@lce-ci.com', 'ASSITA SOW');
        $this->mailSend->addAddress(' lonan.coulibaly@lce-ci.com', 'LONAN COULIBALY');
        $this->mailSend->addAddress('olivier.traore@lce-ci.com', 'TRAORE OLIVIER');
        $this->mailSend->addAddress('Lonan.coulibaly@gmail.com', 'LONAN COULIBALY');*/
        $this->mailSend->addAddress('diakite.soumaila@lce-ci.com', 'DIAKITE SOUMAILA');
        $this->mailSend->isHTML(true);
        $this->mailSend->Subject = "Demande d'emploi";
        $this->constructHtmlLCE();

        try {
            $this->mailSend->send();
        } catch (Exception $e) {
            die("Mailer Error: " . $this->mailSend->ErrorInfo);
        }
    }

    public function sendMailCustomer() {

        $this->clientMailSend->From = 'hotline@lce-ci.com';
        $this->clientMailSend->FromName = 'La LOCOMOTIVE';
        //L'email qui reçoit
        $this->clientMailSend->addAddress($this->emailClient, $this->nameClient);
        $this->clientMailSend->isHTML(true);
        $this->clientMailSend->Subject = "Demande d'emploi";

        $this->constructHtmlCustomer();

        try {
            $this->clientMailSend->send();
        } catch (Exception $e) {
            die("Mailer Error: " . $this->clientMailSend->ErrorInfo);
        }
    }

    private function constructHtmlLCE() {
        //  src="cid:logo logo-fb-insta-linked-twit-up-welcome-white-youtube"
        $this->mailSend->Body = "
            <!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional //EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">

<html xmlns=\"http://www.w3.org/1999/xhtml\" xmlns:o=\"urn:schemas-microsoft-com:office:office\" xmlns:v=\"urn:schemas-microsoft-com:vml\">
<head>
<!--[if gte mso 9]><xml><o:OfficeDocumentSettings><o:AllowPNG/><o:PixelsPerInch>96</o:PixelsPerInch></o:OfficeDocumentSettings></xml><![endif]-->
<meta content=\"text/html; charset=utf-8\" http-equiv=\"Content-Type\"/>
<meta content=\"width=device-width\" name=\"viewport\"/>
<!--[if !mso]><!-->
<meta content=\"IE=edge\" http-equiv=\"X-UA-Compatible\"/>
<!--<![endif]-->
<title></title>
<!--[if !mso]><!-->
<!--<![endif]-->
<style type=\"text/css\">
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
<style id=\"media-query\" type=\"text/css\">
		@media (max-width: 720px) {

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
<body class=\"clean-body\" style=\"margin: 0; padding: 0; -webkit-text-size-adjust: 100%; background-color: #f9f9f9;\">
<!--[if IE]><div class=\"ie-browser\"><![endif]-->
<table bgcolor=\"#f9f9f9\" cellpadding=\"0\" cellspacing=\"0\" class=\"nl-container\" role=\"presentation\" style=\"table-layout: fixed; vertical-align: top; min-width: 320px; Margin: 0 auto; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #f9f9f9; width: 100%;\" valign=\"top\" width=\"100%\">
<tbody>
<tr style=\"vertical-align: top;\" valign=\"top\">
<td style=\"word-break: break-word; vertical-align: top;\" valign=\"top\">
<!--[if (mso)|(IE)]><table width=\"100%\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\"><tr><td align=\"center\" style=\"background-color:#f9f9f9\"><![endif]-->
<div style=\"background-color:transparent;\">
<div class=\"block-grid\" style=\"Margin: 0 auto; min-width: 320px; max-width: 700px; overflow-wrap: break-word; word-wrap: break-word; word-break: break-word; background-color: transparent;\">
<div style=\"border-collapse: collapse;display: table;width: 100%;background-color:transparent;\">
<!--[if (mso)|(IE)]><table width=\"100%\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\" style=\"background-color:transparent;\"><tr><td align=\"center\"><table cellpadding=\"0\" cellspacing=\"0\" border=\"0\" style=\"width:700px\"><tr class=\"layout-full-width\" style=\"background-color:transparent\"><![endif]-->
<!--[if (mso)|(IE)]><td align=\"center\" width=\"700\" style=\"background-color:transparent;width:700px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;\" valign=\"top\"><table width=\"100%\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\"><tr><td style=\"padding-right: 0px; padding-left: 0px; padding-top:5px; padding-bottom:5px;\"><![endif]-->
<div class=\"col num12\" style=\"min-width: 320px; max-width: 700px; display: table-cell; vertical-align: top; width: 700px;\">
<div style=\"width:100% !important;\">
<!--[if (!mso)&(!IE)]><!-->
<div style=\"border-top:0px solid transparent; border-left:0px solid transparent; border-bottom:0px solid transparent; border-right:0px solid transparent; padding-top:5px; padding-bottom:5px; padding-right: 0px; padding-left: 0px;\">
<!--<![endif]-->
<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"divider\" role=\"presentation\" style=\"table-layout: fixed; vertical-align: top; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; min-width: 100%; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;\" valign=\"top\" width=\"100%\">
<tbody>
<tr style=\"vertical-align: top;\" valign=\"top\">
<td class=\"divider_inner\" style=\"word-break: break-word; vertical-align: top; min-width: 100%; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; padding-top: 5px; padding-right: 5px; padding-bottom: 5px; padding-left: 5px;\" valign=\"top\">
<table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"divider_content\" height=\"0\" role=\"presentation\" style=\"table-layout: fixed; vertical-align: top; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; border-top: 0px solid transparent; height: 0px; width: 100%;\" valign=\"top\" width=\"100%\">
<tbody>
<tr style=\"vertical-align: top;\" valign=\"top\">
<td height=\"0\" style=\"word-break: break-word; vertical-align: top; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;\" valign=\"top\"><span></span></td>
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
<div style=\"background-color:transparent;\">
<div class=\"block-grid\" style=\"Margin: 0 auto; min-width: 320px; max-width: 700px; overflow-wrap: break-word; word-wrap: break-word; word-break: break-word; background-color: transparent;\">
<div style=\"border-collapse: collapse;display: table;width: 100%;background-color:transparent;\">
<!--[if (mso)|(IE)]><table width=\"100%\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\" style=\"background-color:transparent;\"><tr><td align=\"center\"><table cellpadding=\"0\" cellspacing=\"0\" border=\"0\" style=\"width:700px\"><tr class=\"layout-full-width\" style=\"background-color:transparent\"><![endif]-->
<!--[if (mso)|(IE)]><td align=\"center\" width=\"700\" style=\"background-color:transparent;width:700px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;\" valign=\"top\"><table width=\"100%\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\"><tr><td style=\"padding-right: 0px; padding-left: 0px; padding-top:5px; padding-bottom:5px;\"><![endif]-->
<div class=\"col num12\" style=\"min-width: 320px; max-width: 700px; display: table-cell; vertical-align: top; width: 700px;\">
<div style=\"width:100% !important;\">
<!--[if (!mso)&(!IE)]><!-->
<div style=\"border-top:0px solid transparent; border-left:0px solid transparent; border-bottom:0px solid transparent; border-right:0px solid transparent; padding-top:5px; padding-bottom:5px; padding-right: 0px; padding-left: 0px;\">
<!--<![endif]-->
<div align=\"center\" class=\"img-container center autowidth\" style=\"padding-right: 0px;padding-left: 0px;\">
<!--[if mso]><table width=\"100%\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\"><tr style=\"line-height:0px\"><td style=\"padding-right: 0px;padding-left: 0px;\" align=\"center\"><![endif]--><img align=\"center\" alt=\"Alternate text\" border=\"0\" class=\"center autowidth\" src=\"cid:logo\" style=\"text-decoration: none; -ms-interpolation-mode: bicubic; height: auto; border: 0; width: 100%; max-width: 252px; display: block;\" title=\"Alternate text\" width=\"252\"/>
<!--[if mso]></td></tr></table><![endif]-->
</div>
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
<div style=\"background-color:transparent;\">
<div class=\"block-grid\" style=\"Margin: 0 auto; min-width: 320px; max-width: 700px; overflow-wrap: break-word; word-wrap: break-word; word-break: break-word; background-color: transparent;\">
<div style=\"border-collapse: collapse;display: table;width: 100%;background-color:transparent;\">
<!--[if (mso)|(IE)]><table width=\"100%\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\" style=\"background-color:transparent;\"><tr><td align=\"center\"><table cellpadding=\"0\" cellspacing=\"0\" border=\"0\" style=\"width:700px\"><tr class=\"layout-full-width\" style=\"background-color:transparent\"><![endif]-->
<!--[if (mso)|(IE)]><td align=\"center\" width=\"700\" style=\"background-color:transparent;width:700px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;\" valign=\"top\"><table width=\"100%\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\"><tr><td style=\"padding-right: 0px; padding-left: 0px; padding-top:5px; padding-bottom:5px;\"><![endif]-->
<div class=\"col num12\" style=\"min-width: 320px; max-width: 700px; display: table-cell; vertical-align: top; width: 700px;\">
<div style=\"width:100% !important;\">
<!--[if (!mso)&(!IE)]><!-->
<div style=\"border-top:0px solid transparent; border-left:0px solid transparent; border-bottom:0px solid transparent; border-right:0px solid transparent; padding-top:5px; padding-bottom:5px; padding-right: 0px; padding-left: 0px;\">
<!--<![endif]-->
<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"divider\" role=\"presentation\" style=\"table-layout: fixed; vertical-align: top; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; min-width: 100%; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;\" valign=\"top\" width=\"100%\">
<tbody>
<tr style=\"vertical-align: top;\" valign=\"top\">
<td class=\"divider_inner\" style=\"word-break: break-word; vertical-align: top; min-width: 100%; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; padding-top: 5px; padding-right: 5px; padding-bottom: 5px; padding-left: 5px;\" valign=\"top\">
<table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"divider_content\" height=\"5\" role=\"presentation\" style=\"table-layout: fixed; vertical-align: top; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; border-top: 0px solid transparent; height: 5px; width: 100%;\" valign=\"top\" width=\"100%\">
<tbody>
<tr style=\"vertical-align: top;\" valign=\"top\">
<td height=\"5\" style=\"word-break: break-word; vertical-align: top; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;\" valign=\"top\"><span></span></td>
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
<div style=\"background-color:transparent;\">
<div class=\"block-grid\" style=\"Margin: 0 auto; min-width: 320px; max-width: 700px; overflow-wrap: break-word; word-wrap: break-word; word-break: break-word; background-color: transparent;\">
<div style=\"border-collapse: collapse;display: table;width: 100%;background-color:transparent;\">
<!--[if (mso)|(IE)]><table width=\"100%\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\" style=\"background-color:transparent;\"><tr><td align=\"center\"><table cellpadding=\"0\" cellspacing=\"0\" border=\"0\" style=\"width:700px\"><tr class=\"layout-full-width\" style=\"background-color:transparent\"><![endif]-->
<!--[if (mso)|(IE)]><td align=\"center\" width=\"700\" style=\"background-color:transparent;width:700px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;\" valign=\"top\"><table width=\"100%\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\"><tr><td style=\"padding-right: 0px; padding-left: 0px; padding-top:5px; padding-bottom:0px;\"><![endif]-->
<div class=\"col num12\" style=\"min-width: 320px; max-width: 700px; display: table-cell; vertical-align: top; width: 700px;\">
<div style=\"width:100% !important;\">
<!--[if (!mso)&(!IE)]><!-->
<div style=\"border-top:0px solid transparent; border-left:0px solid transparent; border-bottom:0px solid transparent; border-right:0px solid transparent; padding-top:5px; padding-bottom:0px; padding-right: 0px; padding-left: 0px;\">
<!--<![endif]-->
<div align=\"center\" class=\"img-container center autowidth\" style=\"padding-right: 0px;padding-left: 0px;\">
<!--[if mso]><table width=\"100%\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\"><tr style=\"line-height:0px\"><td style=\"padding-right: 0px;padding-left: 0px;\" align=\"center\"><![endif]--><img align=\"center\" alt=\"Alternate text\" border=\"0\" class=\"center autowidth\" src=\"cid:up\" style=\"text-decoration: none; -ms-interpolation-mode: bicubic; height: auto; border: 0; width: 100%; max-width: 700px; display: block;\" title=\"Alternate text\" width=\"700\"/>
<!--[if mso]></td></tr></table><![endif]-->
</div>
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
<div style=\"background-color:transparent;\">
<div class=\"block-grid\" style=\"Margin: 0 auto; min-width: 320px; max-width: 700px; overflow-wrap: break-word; word-wrap: break-word; word-break: break-word; background-color: #ffd3e0;\">
<div style=\"border-collapse: collapse;display: table;width: 100%;background-color:#ffd3e0;\">
<!--[if (mso)|(IE)]><table width=\"100%\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\" style=\"background-color:transparent;\"><tr><td align=\"center\"><table cellpadding=\"0\" cellspacing=\"0\" border=\"0\" style=\"width:700px\"><tr class=\"layout-full-width\" style=\"background-color:#ffd3e0\"><![endif]-->
<!--[if (mso)|(IE)]><td align=\"center\" width=\"700\" style=\"background-color:#ffd3e0;width:700px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;\" valign=\"top\"><table width=\"100%\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\"><tr><td style=\"padding-right: 0px; padding-left: 0px; padding-top:0px; padding-bottom:0px;\"><![endif]-->
<div class=\"col num12\" style=\"min-width: 320px; max-width: 700px; display: table-cell; vertical-align: top; width: 700px;\">
<div style=\"width:100% !important;\">
<!--[if (!mso)&(!IE)]><!-->
<div style=\"border-top:0px solid transparent; border-left:0px solid transparent; border-bottom:0px solid transparent; border-right:0px solid transparent; padding-top:0px; padding-bottom:0px; padding-right: 0px; padding-left: 0px;\">
<!--<![endif]-->
<!--[if mso]><table width=\"100%\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\"><tr><td style=\"padding-right: 40px; padding-left: 40px; padding-top: 10px; padding-bottom: 10px; font-family: Tahoma, sans-serif\"><![endif]-->
<div style=\"color:#191919;font-family:Montserrat, Trebuchet MS, Lucida Grande, Lucida Sans Unicode, Lucida Sans, Tahoma, sans-serif;line-height:1.5;padding-top:10px;padding-right:40px;padding-bottom:10px;padding-left:40px;\">
<div style=\"line-height: 1.5; font-size: 12px; color: #191919; font-family: Montserrat, Trebuchet MS, Lucida Grande, Lucida Sans Unicode, Lucida Sans, Tahoma, sans-serif; mso-line-height-alt: 18px;\">
<p style=\"font-size: 16px; line-height: 1.5; text-align: center; word-break: break-word; mso-line-height-alt: 24px; margin: 0;\"><strong><span style=\"font-size: 38px;\">Contact for job</span></strong></p>
</div>
</div>
<!--[if mso]></td></tr></table><![endif]-->
<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"divider\" role=\"presentation\" style=\"table-layout: fixed; vertical-align: top; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; min-width: 100%; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;\" valign=\"top\" width=\"100%\">
<tbody>
<tr style=\"vertical-align: top;\" valign=\"top\">
<td class=\"divider_inner\" style=\"word-break: break-word; vertical-align: top; min-width: 100%; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; padding-top: 10px; padding-right: 10px; padding-bottom: 10px; padding-left: 10px;\" valign=\"top\">
<table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"divider_content\" height=\"10\" role=\"presentation\" style=\"table-layout: fixed; vertical-align: top; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; border-top: 0px solid transparent; height: 10px; width: 100%;\" valign=\"top\" width=\"100%\">
<tbody>
<tr style=\"vertical-align: top;\" valign=\"top\">
<td height=\"10\" style=\"word-break: break-word; vertical-align: top; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;\" valign=\"top\"><span></span></td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
<!--[if mso]><table width=\"100%\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\"><tr><td style=\"padding-right: 10px; padding-left: 10px; padding-top: 10px; padding-bottom: 10px; font-family: Tahoma, sans-serif\"><![endif]-->
<div style=\"color:#191919;font-family:Montserrat, Trebuchet MS, Lucida Grande, Lucida Sans Unicode, Lucida Sans, Tahoma, sans-serif;line-height:1.2;padding-top:10px;padding-right:10px;padding-bottom:10px;padding-left:10px;\">
<div style=\"line-height: 1.2; font-size: 12px; color: #191919; font-family: Montserrat, Trebuchet MS, Lucida Grande, Lucida Sans Unicode, Lucida Sans, Tahoma, sans-serif; mso-line-height-alt: 14px;\">
<p style=\"font-size: 14px; line-height: 1.2; word-break: break-word; text-align: left; mso-line-height-alt: 17px; margin: 0;\"><strong><span style=\"font-size: 22px;\">Nom : DIAKITE SOUMAILA</span></strong></p>
</div>
</div>
<!--[if mso]></td></tr></table><![endif]-->
<!--[if mso]><table width=\"100%\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\"><tr><td style=\"padding-right: 10px; padding-left: 10px; padding-top: 10px; padding-bottom: 10px; font-family: Tahoma, sans-serif\"><![endif]-->
<div style=\"color:#191919;font-family:Montserrat, Trebuchet MS, Lucida Grande, Lucida Sans Unicode, Lucida Sans, Tahoma, sans-serif;line-height:1.2;padding-top:10px;padding-right:10px;padding-bottom:10px;padding-left:10px;\">
<div style=\"line-height: 1.2; font-size: 12px; color: #191919; font-family: Montserrat, Trebuchet MS, Lucida Grande, Lucida Sans Unicode, Lucida Sans, Tahoma, sans-serif; mso-line-height-alt: 14px;\">
<p style=\"font-size: 14px; line-height: 1.2; word-break: break-word; text-align: left; mso-line-height-alt: 17px; margin: 0;\"><strong><span style=\"font-size: 22px;\">Poste : Dev</span></strong></p>
</div>
</div>
<!--[if mso]></td></tr></table><![endif]-->
<!--[if mso]><table width=\"100%\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\"><tr><td style=\"padding-right: 10px; padding-left: 10px; padding-top: 10px; padding-bottom: 10px; font-family: Tahoma, sans-serif\"><![endif]-->
<div style=\"color:#191919;font-family:Montserrat, Trebuchet MS, Lucida Grande, Lucida Sans Unicode, Lucida Sans, Tahoma, sans-serif;line-height:1.2;padding-top:10px;padding-right:10px;padding-bottom:10px;padding-left:10px;\">
<div style=\"line-height: 1.2; font-size: 12px; color: #191919; font-family: Montserrat, Trebuchet MS, Lucida Grande, Lucida Sans Unicode, Lucida Sans, Tahoma, sans-serif; mso-line-height-alt: 14px;\">
<p style=\"font-size: 14px; line-height: 1.2; word-break: break-word; text-align: left; mso-line-height-alt: 17px; margin: 0;\"><strong><span style=\"font-size: 22px;\">Contact : 67988610</span></strong></p>
</div>
</div>
<!--[if mso]></td></tr></table><![endif]-->
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
<div style=\"background-color:transparent;\">
<div class=\"block-grid\" style=\"Margin: 0 auto; min-width: 320px; max-width: 700px; overflow-wrap: break-word; word-wrap: break-word; word-break: break-word; background-color: #ffffff;\">
<div style=\"border-collapse: collapse;display: table;width: 100%;background-color:#ffffff;\">
<!--[if (mso)|(IE)]><table width=\"100%\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\" style=\"background-color:transparent;\"><tr><td align=\"center\"><table cellpadding=\"0\" cellspacing=\"0\" border=\"0\" style=\"width:700px\"><tr class=\"layout-full-width\" style=\"background-color:#ffffff\"><![endif]-->
<!--[if (mso)|(IE)]><td align=\"center\" width=\"700\" style=\"background-color:#ffffff;width:700px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;\" valign=\"top\"><table width=\"100%\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\"><tr><td style=\"padding-right: 0px; padding-left: 0px; padding-top:0px; padding-bottom:5px;\"><![endif]-->
<div class=\"col num12\" style=\"min-width: 320px; max-width: 700px; display: table-cell; vertical-align: top; width: 700px;\">
<div style=\"width:100% !important;\">
<!--[if (!mso)&(!IE)]><!-->
<div style=\"border-top:0px solid transparent; border-left:0px solid transparent; border-bottom:0px solid transparent; border-right:0px solid transparent; padding-top:0px; padding-bottom:5px; padding-right: 0px; padding-left: 0px;\">
<!--<![endif]-->
<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"divider\" role=\"presentation\" style=\"table-layout: fixed; vertical-align: top; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; min-width: 100%; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;\" valign=\"top\" width=\"100%\">
<tbody>
<tr style=\"vertical-align: top;\" valign=\"top\">
<td class=\"divider_inner\" style=\"word-break: break-word; vertical-align: top; min-width: 100%; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px;\" valign=\"top\">
<table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"divider_content\" role=\"presentation\" style=\"table-layout: fixed; vertical-align: top; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; border-top: 2px solid #FFD3E0; width: 5%;\" valign=\"top\" width=\"5%\">
<tbody>
<tr style=\"vertical-align: top;\" valign=\"top\">
<td style=\"word-break: break-word; vertical-align: top; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;\" valign=\"top\"><span></span></td>
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
<div style=\"background-color:transparent;\">
<div class=\"block-grid\" style=\"Margin: 0 auto; min-width: 320px; max-width: 700px; overflow-wrap: break-word; word-wrap: break-word; word-break: break-word; background-color: #ffffff;\">
<div style=\"border-collapse: collapse;display: table;width: 100%;background-color:#ffffff;\">
<!--[if (mso)|(IE)]><table width=\"100%\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\" style=\"background-color:transparent;\"><tr><td align=\"center\"><table cellpadding=\"0\" cellspacing=\"0\" border=\"0\" style=\"width:700px\"><tr class=\"layout-full-width\" style=\"background-color:#ffffff\"><![endif]-->
<!--[if (mso)|(IE)]><td align=\"center\" width=\"700\" style=\"background-color:#ffffff;width:700px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;\" valign=\"top\"><table width=\"100%\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\"><tr><td style=\"padding-right: 0px; padding-left: 0px; padding-top:0px; padding-bottom:5px;\"><![endif]-->
<div class=\"col num12\" style=\"min-width: 320px; max-width: 700px; display: table-cell; vertical-align: top; width: 700px;\">
<div style=\"width:100% !important;\">
<!--[if (!mso)&(!IE)]><!-->
<div style=\"border-top:0px solid transparent; border-left:0px solid transparent; border-bottom:0px solid transparent; border-right:0px solid transparent; padding-top:0px; padding-bottom:5px; padding-right: 0px; padding-left: 0px;\">
<!--<![endif]-->
<table cellpadding=\"0\" cellspacing=\"0\" class=\"social_icons\" role=\"presentation\" style=\"table-layout: fixed; vertical-align: top; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt;\" valign=\"top\" width=\"100%\">
<tbody>
<tr style=\"vertical-align: top;\" valign=\"top\">
<td style=\"word-break: break-word; vertical-align: top; padding-top: 10px; padding-right: 10px; padding-bottom: 10px; padding-left: 10px;\" valign=\"top\">
<table align=\"center\" cellpadding=\"0\" cellspacing=\"0\" class=\"social_table\" role=\"presentation\" style=\"table-layout: fixed; vertical-align: top; border-spacing: 0; border-collapse: collapse; mso-table-tspace: 0; mso-table-rspace: 0; mso-table-bspace: 0; mso-table-lspace: 0;\" valign=\"top\">
<tbody>
".$this->footer()."
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
<!--[if mso]><table width=\"100%\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\"><tr><td style=\"padding-right: 40px; padding-left: 40px; padding-top: 0px; padding-bottom: 10px; font-family: Tahoma, sans-serif\"><![endif]-->
<div style=\"color:#555555;font-family:Montserrat, Trebuchet MS, Lucida Grande, Lucida Sans Unicode, Lucida Sans, Tahoma, sans-serif;line-height:2;padding-top:0px;padding-right:40px;padding-bottom:10px;padding-left:40px;\">
<div style=\"line-height: 2; font-size: 12px; color: #555555; font-family: Montserrat, Trebuchet MS, Lucida Grande, Lucida Sans Unicode, Lucida Sans, Tahoma, sans-serif; mso-line-height-alt: 24px;\">
<p style=\"font-size: 14px; line-height: 2; word-break: break-word; text-align: center; mso-line-height-alt: 28px; margin: 0;\"><strong>Nous innovons, vous performez</strong></p>
</div>
</div>
<!--[if mso]></td></tr></table><![endif]-->
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
<div style=\"background-color:transparent;\">
<div class=\"block-grid\" style=\"Margin: 0 auto; min-width: 320px; max-width: 700px; overflow-wrap: break-word; word-wrap: break-word; word-break: break-word; background-color: #ffffff;\">
<div style=\"border-collapse: collapse;display: table;width: 100%;background-color:#ffffff;\">
<!--[if (mso)|(IE)]><table width=\"100%\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\" style=\"background-color:transparent;\"><tr><td align=\"center\"><table cellpadding=\"0\" cellspacing=\"0\" border=\"0\" style=\"width:700px\"><tr class=\"layout-full-width\" style=\"background-color:#ffffff\"><![endif]-->
<!--[if (mso)|(IE)]><td align=\"center\" width=\"700\" style=\"background-color:#ffffff;width:700px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;\" valign=\"top\"><table width=\"100%\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\"><tr><td style=\"padding-right: 0px; padding-left: 0px; padding-top:5px; padding-bottom:0px;\"><![endif]-->
<div class=\"col num12\" style=\"min-width: 320px; max-width: 700px; display: table-cell; vertical-align: top; width: 700px;\">
<div style=\"width:100% !important;\">
<!--[if (!mso)&(!IE)]><!-->
<div style=\"border-top:0px solid transparent; border-left:0px solid transparent; border-bottom:0px solid transparent; border-right:0px solid transparent; padding-top:5px; padding-bottom:0px; padding-right: 0px; padding-left: 0px;\">
<!--<![endif]-->
<!--[if mso]><table width=\"100%\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\"><tr><td style=\"padding-right: 10px; padding-left: 10px; padding-top: 10px; padding-bottom: 10px; font-family: Tahoma, sans-serif\"><![endif]-->
<div style=\"color:#ffffff;font-family:Montserrat, Trebuchet MS, Lucida Grande, Lucida Sans Unicode, Lucida Sans, Tahoma, sans-serif;line-height:1.2;padding-top:10px;padding-right:10px;padding-bottom:10px;padding-left:10px;\">
<div style=\"line-height: 1.2; font-size: 12px; font-family: Montserrat, Trebuchet MS, Lucida Grande, Lucida Sans Unicode, Lucida Sans, Tahoma, sans-serif; color: #ffffff; mso-line-height-alt: 14px;\">
<p style=\"font-size: 12px; line-height: 1.2; text-align: center; word-break: break-word; font-family: inherit; mso-line-height-alt: 14px; margin: 0;\"><span style=\"color: #555555;\">www.lce-ci.com</span></p>
</div>
</div>
<!--[if mso]></td></tr></table><![endif]-->
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
<div style=\"background-color:transparent;\">
<div class=\"block-grid\" style=\"Margin: 0 auto; min-width: 320px; max-width: 700px; overflow-wrap: break-word; word-wrap: break-word; word-break: break-word; background-color: transparent;\">
<div style=\"border-collapse: collapse;display: table;width: 100%;background-color:transparent;\">
<!--[if (mso)|(IE)]><table width=\"100%\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\" style=\"background-color:transparent;\"><tr><td align=\"center\"><table cellpadding=\"0\" cellspacing=\"0\" border=\"0\" style=\"width:700px\"><tr class=\"layout-full-width\" style=\"background-color:transparent\"><![endif]-->
<!--[if (mso)|(IE)]><td align=\"center\" width=\"700\" style=\"background-color:transparent;width:700px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;\" valign=\"top\"><table width=\"100%\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\"><tr><td style=\"padding-right: 0px; padding-left: 0px; padding-top:0px; padding-bottom:5px;\"><![endif]-->
<div class=\"col num12\" style=\"min-width: 320px; max-width: 700px; display: table-cell; vertical-align: top; width: 700px;\">
<div style=\"width:100% !important;\">
<!--[if (!mso)&(!IE)]><!-->
<div style=\"border-top:0px solid transparent; border-left:0px solid transparent; border-bottom:0px solid transparent; border-right:0px solid transparent; padding-top:0px; padding-bottom:5px; padding-right: 0px; padding-left: 0px;\">
<!--<![endif]-->
<div align=\"center\" class=\"img-container center autowidth\" style=\"padding-right: 0px;padding-left: 0px;\">
<!--[if mso]><table width=\"100%\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\"><tr style=\"line-height:0px\"><td style=\"padding-right: 0px;padding-left: 0px;\" align=\"center\"><![endif]--><img align=\"center\" alt=\"Alternate text\" border=\"0\" class=\"center autowidth\" src=\"cid:white\" style=\"text-decoration: none; -ms-interpolation-mode: bicubic; height: auto; border: 0; width: 100%; max-width: 700px; display: block;\" title=\"Alternate text\" width=\"700\"/>
<!--[if mso]></td></tr></table><![endif]-->
</div>
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
        ";
    }

    private function constructHtmlCustomer() {
        //  src="cid:logo logo-fb-insta-linked-twit-up-welcome-white-youtube"
        $this->clientMailSend->Body = "
        <!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional //EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">

<html xmlns=\"http://www.w3.org/1999/xhtml\" xmlns:o=\"urn:schemas-microsoft-com:office:office\" xmlns:v=\"urn:schemas-microsoft-com:vml\">
<head>
<!--[if gte mso 9]><xml><o:OfficeDocumentSettings><o:AllowPNG/><o:PixelsPerInch>96</o:PixelsPerInch></o:OfficeDocumentSettings></xml><![endif]-->
<meta content=\"text/html; charset=utf-8\" http-equiv=\"Content-Type\"/>
<meta content=\"width=device-width\" name=\"viewport\"/>
<!--[if !mso]><!-->
<meta content=\"IE=edge\" http-equiv=\"X-UA-Compatible\"/>
<!--<![endif]-->
<title></title>
<!--[if !mso]><!-->
<!--<![endif]-->
<style type=\"text/css\">
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
<style id=\"media-query\" type=\"text/css\">
		@media (max-width: 720px) {

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
<body class=\"clean-body\" style=\"margin: 0; padding: 0; -webkit-text-size-adjust: 100%; background-color: #f9f9f9;\">
<!--[if IE]><div class=\"ie-browser\"><![endif]-->
<table bgcolor=\"#f9f9f9\" cellpadding=\"0\" cellspacing=\"0\" class=\"nl-container\" role=\"presentation\" style=\"table-layout: fixed; vertical-align: top; min-width: 320px; Margin: 0 auto; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #f9f9f9; width: 100%;\" valign=\"top\" width=\"100%\">
<tbody>
<tr style=\"vertical-align: top;\" valign=\"top\">
<td style=\"word-break: break-word; vertical-align: top;\" valign=\"top\">
<!--[if (mso)|(IE)]><table width=\"100%\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\"><tr><td align=\"center\" style=\"background-color:#f9f9f9\"><![endif]-->
<div style=\"background-color:transparent;\">
<div class=\"block-grid\" style=\"Margin: 0 auto; min-width: 320px; max-width: 700px; overflow-wrap: break-word; word-wrap: break-word; word-break: break-word; background-color: transparent;\">
<div style=\"border-collapse: collapse;display: table;width: 100%;background-color:transparent;\">
<!--[if (mso)|(IE)]><table width=\"100%\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\" style=\"background-color:transparent;\"><tr><td align=\"center\"><table cellpadding=\"0\" cellspacing=\"0\" border=\"0\" style=\"width:700px\"><tr class=\"layout-full-width\" style=\"background-color:transparent\"><![endif]-->
<!--[if (mso)|(IE)]><td align=\"center\" width=\"700\" style=\"background-color:transparent;width:700px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;\" valign=\"top\"><table width=\"100%\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\"><tr><td style=\"padding-right: 0px; padding-left: 0px; padding-top:5px; padding-bottom:5px;\"><![endif]-->
<div class=\"col num12\" style=\"min-width: 320px; max-width: 700px; display: table-cell; vertical-align: top; width: 700px;\">
<div style=\"width:100% !important;\">
<!--[if (!mso)&(!IE)]><!-->
<div style=\"border-top:0px solid transparent; border-left:0px solid transparent; border-bottom:0px solid transparent; border-right:0px solid transparent; padding-top:5px; padding-bottom:5px; padding-right: 0px; padding-left: 0px;\">
<!--<![endif]-->
<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"divider\" role=\"presentation\" style=\"table-layout: fixed; vertical-align: top; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; min-width: 100%; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;\" valign=\"top\" width=\"100%\">
<tbody>
<tr style=\"vertical-align: top;\" valign=\"top\">
<td class=\"divider_inner\" style=\"word-break: break-word; vertical-align: top; min-width: 100%; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; padding-top: 5px; padding-right: 5px; padding-bottom: 5px; padding-left: 5px;\" valign=\"top\">
<table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"divider_content\" height=\"0\" role=\"presentation\" style=\"table-layout: fixed; vertical-align: top; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; border-top: 0px solid transparent; height: 0px; width: 100%;\" valign=\"top\" width=\"100%\">
<tbody>
<tr style=\"vertical-align: top;\" valign=\"top\">
<td height=\"0\" style=\"word-break: break-word; vertical-align: top; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;\" valign=\"top\"><span></span></td>
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
<div style=\"background-color:transparent;\">
<div class=\"block-grid\" style=\"Margin: 0 auto; min-width: 320px; max-width: 700px; overflow-wrap: break-word; word-wrap: break-word; word-break: break-word; background-color: transparent;\">
<div style=\"border-collapse: collapse;display: table;width: 100%;background-color:transparent;\">
<!--[if (mso)|(IE)]><table width=\"100%\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\" style=\"background-color:transparent;\"><tr><td align=\"center\"><table cellpadding=\"0\" cellspacing=\"0\" border=\"0\" style=\"width:700px\"><tr class=\"layout-full-width\" style=\"background-color:transparent\"><![endif]-->
<!--[if (mso)|(IE)]><td align=\"center\" width=\"700\" style=\"background-color:transparent;width:700px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;\" valign=\"top\"><table width=\"100%\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\"><tr><td style=\"padding-right: 0px; padding-left: 0px; padding-top:5px; padding-bottom:5px;\"><![endif]-->
<div class=\"col num12\" style=\"min-width: 320px; max-width: 700px; display: table-cell; vertical-align: top; width: 700px;\">
<div style=\"width:100% !important;\">
<!--[if (!mso)&(!IE)]><!-->
<div style=\"border-top:0px solid transparent; border-left:0px solid transparent; border-bottom:0px solid transparent; border-right:0px solid transparent; padding-top:5px; padding-bottom:5px; padding-right: 0px; padding-left: 0px;\">
<!--<![endif]-->
<div align=\"center\" class=\"img-container center autowidth\" style=\"padding-right: 0px;padding-left: 0px;\">
<!--[if mso]><table width=\"100%\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\"><tr style=\"line-height:0px\"><td style=\"padding-right: 0px;padding-left: 0px;\" align=\"center\"><![endif]--><img align=\"center\" alt=\"Alternate text\" border=\"0\" class=\"center autowidth\" src=\"cid:logo\" style=\"text-decoration: none; -ms-interpolation-mode: bicubic; height: auto; border: 0; width: 100%; max-width: 252px; display: block;\" title=\"Alternate text\" width=\"252\"/>
<!--[if mso]></td></tr></table><![endif]-->
</div>
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
<div style=\"background-color:transparent;\">
<div class=\"block-grid\" style=\"Margin: 0 auto; min-width: 320px; max-width: 700px; overflow-wrap: break-word; word-wrap: break-word; word-break: break-word; background-color: transparent;\">
<div style=\"border-collapse: collapse;display: table;width: 100%;background-color:transparent;\">
<!--[if (mso)|(IE)]><table width=\"100%\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\" style=\"background-color:transparent;\"><tr><td align=\"center\"><table cellpadding=\"0\" cellspacing=\"0\" border=\"0\" style=\"width:700px\"><tr class=\"layout-full-width\" style=\"background-color:transparent\"><![endif]-->
<!--[if (mso)|(IE)]><td align=\"center\" width=\"700\" style=\"background-color:transparent;width:700px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;\" valign=\"top\"><table width=\"100%\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\"><tr><td style=\"padding-right: 0px; padding-left: 0px; padding-top:5px; padding-bottom:5px;\"><![endif]-->
<div class=\"col num12\" style=\"min-width: 320px; max-width: 700px; display: table-cell; vertical-align: top; width: 700px;\">
<div style=\"width:100% !important;\">
<!--[if (!mso)&(!IE)]><!-->
<div style=\"border-top:0px solid transparent; border-left:0px solid transparent; border-bottom:0px solid transparent; border-right:0px solid transparent; padding-top:5px; padding-bottom:5px; padding-right: 0px; padding-left: 0px;\">
<!--<![endif]-->
<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"divider\" role=\"presentation\" style=\"table-layout: fixed; vertical-align: top; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; min-width: 100%; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;\" valign=\"top\" width=\"100%\">
<tbody>
<tr style=\"vertical-align: top;\" valign=\"top\">
<td class=\"divider_inner\" style=\"word-break: break-word; vertical-align: top; min-width: 100%; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; padding-top: 5px; padding-right: 5px; padding-bottom: 5px; padding-left: 5px;\" valign=\"top\">
<table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"divider_content\" height=\"5\" role=\"presentation\" style=\"table-layout: fixed; vertical-align: top; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; border-top: 0px solid transparent; height: 5px; width: 100%;\" valign=\"top\" width=\"100%\">
<tbody>
<tr style=\"vertical-align: top;\" valign=\"top\">
<td height=\"5\" style=\"word-break: break-word; vertical-align: top; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;\" valign=\"top\"><span></span></td>
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
<div style=\"background-color:transparent;\">
<div class=\"block-grid\" style=\"Margin: 0 auto; min-width: 320px; max-width: 700px; overflow-wrap: break-word; word-wrap: break-word; word-break: break-word; background-color: transparent;\">
<div style=\"border-collapse: collapse;display: table;width: 100%;background-color:transparent;\">
<!--[if (mso)|(IE)]><table width=\"100%\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\" style=\"background-color:transparent;\"><tr><td align=\"center\"><table cellpadding=\"0\" cellspacing=\"0\" border=\"0\" style=\"width:700px\"><tr class=\"layout-full-width\" style=\"background-color:transparent\"><![endif]-->
<!--[if (mso)|(IE)]><td align=\"center\" width=\"700\" style=\"background-color:transparent;width:700px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;\" valign=\"top\"><table width=\"100%\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\"><tr><td style=\"padding-right: 0px; padding-left: 0px; padding-top:5px; padding-bottom:0px;\"><![endif]-->
<div class=\"col num12\" style=\"min-width: 320px; max-width: 700px; display: table-cell; vertical-align: top; width: 700px;\">
<div style=\"width:100% !important;\">
<!--[if (!mso)&(!IE)]><!-->
<div style=\"border-top:0px solid transparent; border-left:0px solid transparent; border-bottom:0px solid transparent; border-right:0px solid transparent; padding-top:5px; padding-bottom:0px; padding-right: 0px; padding-left: 0px;\">
<!--<![endif]-->
<div align=\"center\" class=\"img-container center autowidth\" style=\"padding-right: 0px;padding-left: 0px;\">
<!--[if mso]><table width=\"100%\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\"><tr style=\"line-height:0px\"><td style=\"padding-right: 0px;padding-left: 0px;\" align=\"center\"><![endif]--><img align=\"center\" alt=\"Alternate text\" border=\"0\" class=\"center autowidth\" src=\"cid:up\" style=\"text-decoration: none; -ms-interpolation-mode: bicubic; height: auto; border: 0; width: 100%; max-width: 700px; display: block;\" title=\"Alternate text\" width=\"700\"/>
<!--[if mso]></td></tr></table><![endif]-->
</div>
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
<div style=\"background-color:transparent;\">
<div class=\"block-grid\" style=\"Margin: 0 auto; min-width: 320px; max-width: 700px; overflow-wrap: break-word; word-wrap: break-word; word-break: break-word; background-color: #ffd3e0;\">
<div style=\"border-collapse: collapse;display: table;width: 100%;background-color:#ffd3e0;\">
<!--[if (mso)|(IE)]><table width=\"100%\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\" style=\"background-color:transparent;\"><tr><td align=\"center\"><table cellpadding=\"0\" cellspacing=\"0\" border=\"0\" style=\"width:700px\"><tr class=\"layout-full-width\" style=\"background-color:#ffd3e0\"><![endif]-->
<!--[if (mso)|(IE)]><td align=\"center\" width=\"700\" style=\"background-color:#ffd3e0;width:700px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;\" valign=\"top\"><table width=\"100%\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\"><tr><td style=\"padding-right: 0px; padding-left: 0px; padding-top:0px; padding-bottom:0px;\"><![endif]-->
<div class=\"col num12\" style=\"min-width: 320px; max-width: 700px; display: table-cell; vertical-align: top; width: 700px;\">
<div style=\"width:100% !important;\">
<!--[if (!mso)&(!IE)]><!-->
<div style=\"border-top:0px solid transparent; border-left:0px solid transparent; border-bottom:0px solid transparent; border-right:0px solid transparent; padding-top:0px; padding-bottom:0px; padding-right: 0px; padding-left: 0px;\">
<!--<![endif]-->
<!--[if mso]><table width=\"100%\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\"><tr><td style=\"padding-right: 40px; padding-left: 40px; padding-top: 10px; padding-bottom: 10px; font-family: Tahoma, sans-serif\"><![endif]-->
<div style=\"color:#191919;font-family:Montserrat, Trebuchet MS, Lucida Grande, Lucida Sans Unicode, Lucida Sans, Tahoma, sans-serif;line-height:1.5;padding-top:10px;padding-right:40px;padding-bottom:10px;padding-left:40px;\">
<div style=\"line-height: 1.5; font-size: 12px; color: #191919; font-family: Montserrat, Trebuchet MS, Lucida Grande, Lucida Sans Unicode, Lucida Sans, Tahoma, sans-serif; mso-line-height-alt: 18px;\">
<p style=\"font-size: 16px; line-height: 1.5; text-align: center; word-break: break-word; mso-line-height-alt: 24px; margin: 0;\"><strong><span style=\"font-size: 38px;\">Hello, </span></strong></p>
<p style=\"font-size: 16px; line-height: 1.5; text-align: center; word-break: break-word; mso-line-height-alt: 24px; margin: 0;\"><strong><span style=\"font-size: 38px;\">welcome to LCE-CI!</span></strong></p>
</div>
</div>
<!--[if mso]></td></tr></table><![endif]-->
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
<div style=\"background-color:transparent;\">
<div class=\"block-grid\" style=\"Margin: 0 auto; min-width: 320px; max-width: 700px; overflow-wrap: break-word; word-wrap: break-word; word-break: break-word; background-color: #ffffff;\">
<div style=\"border-collapse: collapse;display: table;width: 100%;background-color:#ffffff;\">
<!--[if (mso)|(IE)]><table width=\"100%\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\" style=\"background-color:transparent;\"><tr><td align=\"center\"><table cellpadding=\"0\" cellspacing=\"0\" border=\"0\" style=\"width:700px\"><tr class=\"layout-full-width\" style=\"background-color:#ffffff\"><![endif]-->
<!--[if (mso)|(IE)]><td align=\"center\" width=\"700\" style=\"background-color:#ffffff;width:700px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;\" valign=\"top\"><table width=\"100%\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\"><tr><td style=\"padding-right: 0px; padding-left: 0px; padding-top:0px; padding-bottom:5px;\"><![endif]-->
<div class=\"col num12\" style=\"min-width: 320px; max-width: 700px; display: table-cell; vertical-align: top; width: 700px;\">
<div style=\"width:100% !important;\">
<!--[if (!mso)&(!IE)]><!-->
<div style=\"border-top:0px solid transparent; border-left:0px solid transparent; border-bottom:0px solid transparent; border-right:0px solid transparent; padding-top:0px; padding-bottom:5px; padding-right: 0px; padding-left: 0px;\">
<!--<![endif]-->
<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"divider\" role=\"presentation\" style=\"table-layout: fixed; vertical-align: top; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; min-width: 100%; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;\" valign=\"top\" width=\"100%\">
<tbody>
<tr style=\"vertical-align: top;\" valign=\"top\">
<td class=\"divider_inner\" style=\"word-break: break-word; vertical-align: top; min-width: 100%; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; padding-top: 10px; padding-right: 10px; padding-bottom: 10px; padding-left: 10px;\" valign=\"top\">
<table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"divider_content\" height=\"5\" role=\"presentation\" style=\"table-layout: fixed; vertical-align: top; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; border-top: 0px solid transparent; height: 5px; width: 100%;\" valign=\"top\" width=\"100%\">
<tbody>
<tr style=\"vertical-align: top;\" valign=\"top\">
<td height=\"5\" style=\"word-break: break-word; vertical-align: top; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;\" valign=\"top\"><span></span></td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"divider\" role=\"presentation\" style=\"table-layout: fixed; vertical-align: top; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; min-width: 100%; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;\" valign=\"top\" width=\"100%\">
<tbody>
<tr style=\"vertical-align: top;\" valign=\"top\">
<td class=\"divider_inner\" style=\"word-break: break-word; vertical-align: top; min-width: 100%; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; padding-top: 5px; padding-right: 5px; padding-bottom: 5px; padding-left: 5px;\" valign=\"top\">
<table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"divider_content\" role=\"presentation\" style=\"table-layout: fixed; vertical-align: top; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; border-top: 2px solid #FFD3E0; width: 15%;\" valign=\"top\" width=\"15%\">
<tbody>
<tr style=\"vertical-align: top;\" valign=\"top\">
<td style=\"word-break: break-word; vertical-align: top; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;\" valign=\"top\"><span></span></td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"divider\" role=\"presentation\" style=\"table-layout: fixed; vertical-align: top; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; min-width: 100%; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;\" valign=\"top\" width=\"100%\">
<tbody>
<tr style=\"vertical-align: top;\" valign=\"top\">
<td class=\"divider_inner\" style=\"word-break: break-word; vertical-align: top; min-width: 100%; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px;\" valign=\"top\">
<table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"divider_content\" role=\"presentation\" style=\"table-layout: fixed; vertical-align: top; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; border-top: 2px solid #FFD3E0; width: 5%;\" valign=\"top\" width=\"5%\">
<tbody>
<tr style=\"vertical-align: top;\" valign=\"top\">
<td style=\"word-break: break-word; vertical-align: top; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;\" valign=\"top\"><span></span></td>
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
<div style=\"background-color:transparent;\">
<div class=\"block-grid\" style=\"Margin: 0 auto; min-width: 320px; max-width: 700px; overflow-wrap: break-word; word-wrap: break-word; word-break: break-word; background-color: #ffffff;\">
<div style=\"border-collapse: collapse;display: table;width: 100%;background-color:#ffffff;\">
<!--[if (mso)|(IE)]><table width=\"100%\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\" style=\"background-color:transparent;\"><tr><td align=\"center\"><table cellpadding=\"0\" cellspacing=\"0\" border=\"0\" style=\"width:700px\"><tr class=\"layout-full-width\" style=\"background-color:#ffffff\"><![endif]-->
<!--[if (mso)|(IE)]><td align=\"center\" width=\"700\" style=\"background-color:#ffffff;width:700px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;\" valign=\"top\"><table width=\"100%\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\"><tr><td style=\"padding-right: 0px; padding-left: 0px; padding-top:5px; padding-bottom:5px;\"><![endif]-->
<div class=\"col num12\" style=\"min-width: 320px; max-width: 700px; display: table-cell; vertical-align: top; width: 700px;\">
<div style=\"width:100% !important;\">
<!--[if (!mso)&(!IE)]><!-->
<div style=\"border-top:0px solid transparent; border-left:0px solid transparent; border-bottom:0px solid transparent; border-right:0px solid transparent; padding-top:5px; padding-bottom:5px; padding-right: 0px; padding-left: 0px;\">
<!--<![endif]-->
<!--[if mso]><table width=\"100%\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\"><tr><td style=\"padding-right: 10px; padding-left: 10px; padding-top: 10px; padding-bottom: 10px; font-family: Tahoma, sans-serif\"><![endif]-->
<div style=\"color:#555555;font-family:Montserrat, Trebuchet MS, Lucida Grande, Lucida Sans Unicode, Lucida Sans, Tahoma, sans-serif;line-height:1.2;padding-top:10px;padding-right:10px;padding-bottom:10px;padding-left:10px;\">
<div style=\"line-height: 1.2; font-size: 12px; color: #555555; font-family: Montserrat, Trebuchet MS, Lucida Grande, Lucida Sans Unicode, Lucida Sans, Tahoma, sans-serif; mso-line-height-alt: 14px;\">
<p style=\"line-height: 1.2; word-break: break-word; font-size: 16px; mso-line-height-alt: 19px; margin: 0;\"><span style=\"font-size: 16px;\">Bonjour,</span></p>
<p style=\"line-height: 1.2; word-break: break-word; mso-line-height-alt: NaNpx; margin: 0;\"> </p>
<p style=\"line-height: 1.2; word-break: break-word; font-size: 16px; mso-line-height-alt: 19px; margin: 0;\"><span style=\"font-size: 16px;\">Nous avons bien reçu votre candidature et vous remercions de la confiance et l’intérêt que vous témoignez à La <strong>Locomotive</strong>.</span></p>
<p style=\"line-height: 1.2; word-break: break-word; font-size: 16px; mso-line-height-alt: 19px; margin: 0;\"><span style=\"font-size: 16px;\">Nous allons l’étudier avec la plus grande attention et nous ne manquerons pas de vous contacter si votre profil répond à nos attentes.</span></p>
<p style=\"line-height: 1.2; word-break: break-word; mso-line-height-alt: NaNpx; margin: 0;\"> </p>
<p style=\"line-height: 1.2; word-break: break-word; font-size: 16px; mso-line-height-alt: 19px; margin: 0;\"><span style=\"font-size: 16px;\">Sans nouvelle de notre part dans un délai de trois semaines à compter d’aujourd’hui, veuillez considérer que votre candidature n’est pas retenue.</span></p>
<p style=\"line-height: 1.2; word-break: break-word; font-size: 16px; mso-line-height-alt: 19px; margin: 0;\"><span style=\"font-size: 16px;\">Sauf avis contraire de votre part, nous nous permettons de conserver dans notre base de données l’ensemble des éléments que vous nous avez transmis afin de vous faire part d’opportunités futures susceptibles de vous intéresser.</span></p>
<p style=\"line-height: 1.2; word-break: break-word; mso-line-height-alt: NaNpx; margin: 0;\"> </p>
<p style=\"line-height: 1.2; word-break: break-word; font-size: 16px; mso-line-height-alt: 19px; margin: 0;\"><span style=\"font-size: 16px;\">Cordialement,</span></p>
<p style=\"line-height: 1.2; word-break: break-word; mso-line-height-alt: NaNpx; margin: 0;\"> </p>
<p style=\"text-align: right; line-height: 1.2; word-break: break-word; font-size: 16px; mso-line-height-alt: 19px; margin: 0;\"><span style=\"font-size: 16px;\">Le service recrutement</span></p>
</div>
</div>
<!--[if mso]></td></tr></table><![endif]-->
<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"divider\" role=\"presentation\" style=\"table-layout: fixed; vertical-align: top; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; min-width: 100%; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;\" valign=\"top\" width=\"100%\">
<tbody>
<tr style=\"vertical-align: top;\" valign=\"top\">
<td class=\"divider_inner\" style=\"word-break: break-word; vertical-align: top; min-width: 100%; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; padding-top: 10px; padding-right: 10px; padding-bottom: 10px; padding-left: 10px;\" valign=\"top\">
<table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"divider_content\" height=\"15\" role=\"presentation\" style=\"table-layout: fixed; vertical-align: top; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; border-top: 0px solid transparent; height: 15px; width: 100%;\" valign=\"top\" width=\"100%\">
<tbody>
<tr style=\"vertical-align: top;\" valign=\"top\">
<td height=\"15\" style=\"word-break: break-word; vertical-align: top; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;\" valign=\"top\"><span></span></td>
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
<div style=\"background-color:transparent;\">
<div class=\"block-grid\" style=\"Margin: 0 auto; min-width: 320px; max-width: 700px; overflow-wrap: break-word; word-wrap: break-word; word-break: break-word; background-color: transparent;\">
<div style=\"border-collapse: collapse;display: table;width: 100%;background-color:transparent;\">
<!--[if (mso)|(IE)]><table width=\"100%\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\" style=\"background-color:transparent;\"><tr><td align=\"center\"><table cellpadding=\"0\" cellspacing=\"0\" border=\"0\" style=\"width:700px\"><tr class=\"layout-full-width\" style=\"background-color:transparent\"><![endif]-->
<!--[if (mso)|(IE)]><td align=\"center\" width=\"700\" style=\"background-color:transparent;width:700px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;\" valign=\"top\"><table width=\"100%\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\"><tr><td style=\"padding-right: 0px; padding-left: 0px; padding-top:5px; padding-bottom:5px;\"><![endif]-->
<div class=\"col num12\" style=\"min-width: 320px; max-width: 700px; display: table-cell; vertical-align: top; width: 700px;\">
<div style=\"width:100% !important;\">
<!--[if (!mso)&(!IE)]><!-->
<div style=\"border-top:0px solid transparent; border-left:0px solid transparent; border-bottom:0px solid transparent; border-right:0px solid transparent; padding-top:5px; padding-bottom:5px; padding-right: 0px; padding-left: 0px;\">
<!--<![endif]-->
<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"divider\" role=\"presentation\" style=\"table-layout: fixed; vertical-align: top; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; min-width: 100%; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;\" valign=\"top\" width=\"100%\">
<tbody>
<tr style=\"vertical-align: top;\" valign=\"top\">
<td class=\"divider_inner\" style=\"word-break: break-word; vertical-align: top; min-width: 100%; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; padding-top: 5px; padding-right: 5px; padding-bottom: 5px; padding-left: 5px;\" valign=\"top\">
<table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"divider_content\" height=\"10\" role=\"presentation\" style=\"table-layout: fixed; vertical-align: top; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; border-top: 0px solid transparent; height: 10px; width: 100%;\" valign=\"top\" width=\"100%\">
<tbody>
<tr style=\"vertical-align: top;\" valign=\"top\">
<td height=\"10\" style=\"word-break: break-word; vertical-align: top; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;\" valign=\"top\"><span></span></td>
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
<div style=\"background-color:transparent;\">
<div class=\"block-grid\" style=\"Margin: 0 auto; min-width: 320px; max-width: 700px; overflow-wrap: break-word; word-wrap: break-word; word-break: break-word; background-color: transparent;\">
<div style=\"border-collapse: collapse;display: table;width: 100%;background-color:transparent;\">
<!--[if (mso)|(IE)]><table width=\"100%\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\" style=\"background-color:transparent;\"><tr><td align=\"center\"><table cellpadding=\"0\" cellspacing=\"0\" border=\"0\" style=\"width:700px\"><tr class=\"layout-full-width\" style=\"background-color:transparent\"><![endif]-->
<!--[if (mso)|(IE)]><td align=\"center\" width=\"700\" style=\"background-color:transparent;width:700px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;\" valign=\"top\"><table width=\"100%\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\"><tr><td style=\"padding-right: 0px; padding-left: 0px; padding-top:5px; padding-bottom:0px;\"><![endif]-->
<div class=\"col num12\" style=\"min-width: 320px; max-width: 700px; display: table-cell; vertical-align: top; width: 700px;\">
<div style=\"width:100% !important;\">
<!--[if (!mso)&(!IE)]><!-->
<div style=\"border-top:0px solid transparent; border-left:0px solid transparent; border-bottom:0px solid transparent; border-right:0px solid transparent; padding-top:5px; padding-bottom:0px; padding-right: 0px; padding-left: 0px;\">
<!--<![endif]-->
<div align=\"center\" class=\"img-container center autowidth\" style=\"padding-right: 0px;padding-left: 0px;\">
<!--[if mso]><table width=\"100%\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\"><tr style=\"line-height:0px\"><td style=\"padding-right: 0px;padding-left: 0px;\" align=\"center\"><![endif]--><img align=\"center\" alt=\"Alternate text\" border=\"0\" class=\"center autowidth\" src=\"cid:up\" style=\"text-decoration: none; -ms-interpolation-mode: bicubic; height: auto; border: 0; width: 100%; max-width: 700px; display: block;\" title=\"Alternate text\" width=\"700\"/>
<!--[if mso]></td></tr></table><![endif]-->
</div>
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
<div style=\"background-color:transparent;\">
<div class=\"block-grid\" style=\"Margin: 0 auto; min-width: 320px; max-width: 700px; overflow-wrap: break-word; word-wrap: break-word; word-break: break-word; background-color: #ffffff;\">
<div style=\"border-collapse: collapse;display: table;width: 100%;background-color:#ffffff;\">
<!--[if (mso)|(IE)]><table width=\"100%\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\" style=\"background-color:transparent;\"><tr><td align=\"center\"><table cellpadding=\"0\" cellspacing=\"0\" border=\"0\" style=\"width:700px\"><tr class=\"layout-full-width\" style=\"background-color:#ffffff\"><![endif]-->
<!--[if (mso)|(IE)]><td align=\"center\" width=\"700\" style=\"background-color:#ffffff;width:700px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;\" valign=\"top\"><table width=\"100%\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\"><tr><td style=\"padding-right: 0px; padding-left: 0px; padding-top:0px; padding-bottom:5px;\"><![endif]-->
<div class=\"col num12\" style=\"min-width: 320px; max-width: 700px; display: table-cell; vertical-align: top; width: 700px;\">
<div style=\"width:100% !important;\">
<!--[if (!mso)&(!IE)]><!-->
<div style=\"border-top:0px solid transparent; border-left:0px solid transparent; border-bottom:0px solid transparent; border-right:0px solid transparent; padding-top:0px; padding-bottom:5px; padding-right: 0px; padding-left: 0px;\">
<!--<![endif]-->
<table cellpadding=\"0\" cellspacing=\"0\" class=\"social_icons\" role=\"presentation\" style=\"table-layout: fixed; vertical-align: top; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt;\" valign=\"top\" width=\"100%\">
<tbody>
<tr style=\"vertical-align: top;\" valign=\"top\">
<td style=\"word-break: break-word; vertical-align: top; padding-top: 10px; padding-right: 10px; padding-bottom: 10px; padding-left: 10px;\" valign=\"top\">
<table align=\"center\" cellpadding=\"0\" cellspacing=\"0\" class=\"social_table\" role=\"presentation\" style=\"table-layout: fixed; vertical-align: top; border-spacing: 0; border-collapse: collapse; mso-table-tspace: 0; mso-table-rspace: 0; mso-table-bspace: 0; mso-table-lspace: 0;\" valign=\"top\">
<tbody>
".$this->footer()."
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"divider\" role=\"presentation\" style=\"table-layout: fixed; vertical-align: top; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; min-width: 100%; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;\" valign=\"top\" width=\"100%\">
<tbody>
<tr style=\"vertical-align: top;\" valign=\"top\">
<td class=\"divider_inner\" style=\"word-break: break-word; vertical-align: top; min-width: 100%; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; padding-top: 10px; padding-right: 10px; padding-bottom: 10px; padding-left: 10px;\" valign=\"top\">
<table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"divider_content\" height=\"5\" role=\"presentation\" style=\"table-layout: fixed; vertical-align: top; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; border-top: 0px solid transparent; height: 5px; width: 95%;\" valign=\"top\" width=\"95%\">
<tbody>
<tr style=\"vertical-align: top;\" valign=\"top\">
<td height=\"5\" style=\"word-break: break-word; vertical-align: top; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;\" valign=\"top\"><span></span></td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
<!--[if mso]><table width=\"100%\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\"><tr><td style=\"padding-right: 40px; padding-left: 40px; padding-top: 0px; padding-bottom: 10px; font-family: Tahoma, sans-serif\"><![endif]-->
<div style=\"color:#555555;font-family:Montserrat, Trebuchet MS, Lucida Grande, Lucida Sans Unicode, Lucida Sans, Tahoma, sans-serif;line-height:2;padding-top:0px;padding-right:40px;padding-bottom:10px;padding-left:40px;\">
<div style=\"line-height: 2; font-size: 12px; color: #555555; font-family: Montserrat, Trebuchet MS, Lucida Grande, Lucida Sans Unicode, Lucida Sans, Tahoma, sans-serif; mso-line-height-alt: 24px;\">
<p style=\"font-size: 14px; line-height: 2; word-break: break-word; text-align: center; mso-line-height-alt: 28px; margin: 0;\">Nous innovons, vous performez</p>
</div>
</div>
<!--[if mso]></td></tr></table><![endif]-->
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
<div style=\"background-color:transparent;\">
<div class=\"block-grid\" style=\"Margin: 0 auto; min-width: 320px; max-width: 700px; overflow-wrap: break-word; word-wrap: break-word; word-break: break-word; background-color: #ffffff;\">
<div style=\"border-collapse: collapse;display: table;width: 100%;background-color:#ffffff;\">
<!--[if (mso)|(IE)]><table width=\"100%\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\" style=\"background-color:transparent;\"><tr><td align=\"center\"><table cellpadding=\"0\" cellspacing=\"0\" border=\"0\" style=\"width:700px\"><tr class=\"layout-full-width\" style=\"background-color:#ffffff\"><![endif]-->
<!--[if (mso)|(IE)]><td align=\"center\" width=\"700\" style=\"background-color:#ffffff;width:700px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;\" valign=\"top\"><table width=\"100%\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\"><tr><td style=\"padding-right: 0px; padding-left: 0px; padding-top:5px; padding-bottom:0px;\"><![endif]-->
<div class=\"col num12\" style=\"min-width: 320px; max-width: 700px; display: table-cell; vertical-align: top; width: 700px;\">
<div style=\"width:100% !important;\">
<!--[if (!mso)&(!IE)]><!-->
<div style=\"border-top:0px solid transparent; border-left:0px solid transparent; border-bottom:0px solid transparent; border-right:0px solid transparent; padding-top:5px; padding-bottom:0px; padding-right: 0px; padding-left: 0px;\">
<!--<![endif]-->
<!--[if mso]><table width=\"100%\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\"><tr><td style=\"padding-right: 10px; padding-left: 10px; padding-top: 10px; padding-bottom: 10px; font-family: Tahoma, sans-serif\"><![endif]-->
<div style=\"color:#ffffff;font-family:Montserrat, Trebuchet MS, Lucida Grande, Lucida Sans Unicode, Lucida Sans, Tahoma, sans-serif;line-height:1.2;padding-top:10px;padding-right:10px;padding-bottom:10px;padding-left:10px;\">
<div style=\"line-height: 1.2; font-size: 12px; font-family: Montserrat, Trebuchet MS, Lucida Grande, Lucida Sans Unicode, Lucida Sans, Tahoma, sans-serif; color: #ffffff; mso-line-height-alt: 14px;\">
<p style=\"font-size: 12px; line-height: 1.2; text-align: center; word-break: break-word; font-family: inherit; mso-line-height-alt: 14px; margin: 0;\"><span style=\"color: #555555;\">www.lce-ci.com</span></p>
</div>
</div>
<!--[if mso]></td></tr></table><![endif]-->
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
<div style=\"background-color:transparent;\">
<div class=\"block-grid\" style=\"Margin: 0 auto; min-width: 320px; max-width: 700px; overflow-wrap: break-word; word-wrap: break-word; word-break: break-word; background-color: transparent;\">
<div style=\"border-collapse: collapse;display: table;width: 100%;background-color:transparent;\">
<!--[if (mso)|(IE)]><table width=\"100%\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\" style=\"background-color:transparent;\"><tr><td align=\"center\"><table cellpadding=\"0\" cellspacing=\"0\" border=\"0\" style=\"width:700px\"><tr class=\"layout-full-width\" style=\"background-color:transparent\"><![endif]-->
<!--[if (mso)|(IE)]><td align=\"center\" width=\"700\" style=\"background-color:transparent;width:700px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;\" valign=\"top\"><table width=\"100%\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\"><tr><td style=\"padding-right: 0px; padding-left: 0px; padding-top:0px; padding-bottom:5px;\"><![endif]-->
<div class=\"col num12\" style=\"min-width: 320px; max-width: 700px; display: table-cell; vertical-align: top; width: 700px;\">
<div style=\"width:100% !important;\">
<!--[if (!mso)&(!IE)]><!-->
<div style=\"border-top:0px solid transparent; border-left:0px solid transparent; border-bottom:0px solid transparent; border-right:0px solid transparent; padding-top:0px; padding-bottom:5px; padding-right: 0px; padding-left: 0px;\">
<!--<![endif]-->
<div align=\"center\" class=\"img-container center autowidth\" style=\"padding-right: 0px;padding-left: 0px;\">
<!--[if mso]><table width=\"100%\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\"><tr style=\"line-height:0px\"><td style=\"padding-right: 0px;padding-left: 0px;\" align=\"center\"><![endif]--><img align=\"center\" alt=\"Alternate text\" border=\"0\" class=\"center autowidth\" src=\"cid:white\" style=\"text-decoration: none; -ms-interpolation-mode: bicubic; height: auto; border: 0; width: 100%; max-width: 700px; display: block;\" title=\"Alternate text\" width=\"700\"/>
<!--[if mso]></td></tr></table><![endif]-->
</div>
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
<div style=\"background-color:transparent;\">
<div class=\"block-grid\" style=\"Margin: 0 auto; min-width: 320px; max-width: 700px; overflow-wrap: break-word; word-wrap: break-word; word-break: break-word; background-color: transparent;\">
<div style=\"border-collapse: collapse;display: table;width: 100%;background-color:transparent;\">
<!--[if (mso)|(IE)]><table width=\"100%\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\" style=\"background-color:transparent;\"><tr><td align=\"center\"><table cellpadding=\"0\" cellspacing=\"0\" border=\"0\" style=\"width:700px\"><tr class=\"layout-full-width\" style=\"background-color:transparent\"><![endif]-->
<!--[if (mso)|(IE)]><td align=\"center\" width=\"700\" style=\"background-color:transparent;width:700px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;\" valign=\"top\"><table width=\"100%\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\"><tr><td style=\"padding-right: 0px; padding-left: 0px; padding-top:5px; padding-bottom:5px;\"><![endif]-->
<div class=\"col num12\" style=\"min-width: 320px; max-width: 700px; display: table-cell; vertical-align: top; width: 700px;\">
<div style=\"width:100% !important;\">
<!--[if (!mso)&(!IE)]><!-->
<div style=\"border-top:0px solid transparent; border-left:0px solid transparent; border-bottom:0px solid transparent; border-right:0px solid transparent; padding-top:5px; padding-bottom:5px; padding-right: 0px; padding-left: 0px;\">
<!--<![endif]-->
<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"divider\" role=\"presentation\" style=\"table-layout: fixed; vertical-align: top; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; min-width: 100%; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;\" valign=\"top\" width=\"100%\">
<tbody>
<tr style=\"vertical-align: top;\" valign=\"top\">
<td class=\"divider_inner\" style=\"word-break: break-word; vertical-align: top; min-width: 100%; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; padding-top: 10px; padding-right: 10px; padding-bottom: 10px; padding-left: 10px;\" valign=\"top\">
<table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"divider_content\" height=\"5\" role=\"presentation\" style=\"table-layout: fixed; vertical-align: top; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; border-top: 0px solid transparent; height: 5px; width: 100%;\" valign=\"top\" width=\"100%\">
<tbody>
<tr style=\"vertical-align: top;\" valign=\"top\">
<td height=\"5\" style=\"word-break: break-word; vertical-align: top; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;\" valign=\"top\"><span></span></td>
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
<!--[if (mso)|(IE)]></td></tr></table><![endif]-->
</td>
</tr>
</tbody>
</table>
<!--[if (IE)]></div><![endif]-->
</body>
</html>
    ";
    }

    private function footer() {
        return "
            <tr align=\"center\" style=\"vertical-align: top; display: inline-block; text-align: center;\" valign=\"top\">
            <td style=\"word-break: break-word; vertical-align: top; padding-bottom: 0; padding-right: 4px; padding-left: 4px;\" valign=\"top\"><a href=\"#\" target=\"_blank\"><img alt=\"Facebook\" height=\"32\" src=\"cid:fb\" style=\"text-decoration: none; -ms-interpolation-mode: bicubic; height: auto; border: 0; display: block;\" title=\"Facebook\" width=\"32\"/></a></td>
            <td style=\"word-break: break-word; vertical-align: top; padding-bottom: 0; padding-right: 4px; padding-left: 4px;\" valign=\"top\"><a href=\"#\" target=\"_blank\"><img alt=\"Twitter\" height=\"32\" src=\"cid:twit\" style=\"text-decoration: none; -ms-interpolation-mode: bicubic; height: auto; border: 0; display: block;\" title=\"Twitter\" width=\"32\"/></a></td>
            <td style=\"word-break: break-word; vertical-align: top; padding-bottom: 0; padding-right: 4px; padding-left: 4px;\" valign=\"top\"><a href=\"#\" target=\"_blank\"><img alt=\"Instagram\" height=\"32\" src=\"cid:insta\" style=\"text-decoration: none; -ms-interpolation-mode: bicubic; height: auto; border: 0; display: block;\" title=\"Instagram\" width=\"32\"/></a></td>
            <td style=\"word-break: break-word; vertical-align: top; padding-bottom: 0; padding-right: 4px; padding-left: 4px;\" valign=\"top\"><a href=\"#\" target=\"_blank\"><img alt=\"LinkedIn\" height=\"32\" src=\"cid:linked\" style=\"text-decoration: none; -ms-interpolation-mode: bicubic; height: auto; border: 0; display: block;\" title=\"LinkedIn\" width=\"32\"/></a></td>
            <td style=\"word-break: break-word; vertical-align: top; padding-bottom: 0; padding-right: 4px; padding-left: 4px;\" valign=\"top\"><a href=\"#\" target=\"_blank\"><img alt=\"YouTube\" height=\"32\" src=\"cid:youtube\" style=\"text-decoration: none; -ms-interpolation-mode: bicubic; height: auto; border: 0; display: block;\" title=\"YouTube\" width=\"32\"/></a></td>
            </tr>
        ";
    }

    private function initSMTPServe() {
        //For Lce
        $this->mailSend = new PHPMailer(true);
        //Enable SMTP debugging.
        //$mailSend->SMTPDebug = 3;
        $this->mailSend->isSMTP();
        $this->mailSend->Host = "smtp.gmail.com";
        $this->mailSend->WordWrap = 50;
        $this->mailSend->SMTPAuth = true;
        $this->mailSend->Username = "diakitesoumaila182@gmail.com";
        $this->mailSend->Password = "Ds56058826";
        $this->mailSend->SMTPSecure = "tls";
        $this->mailSend->Port = 587;
        $this->mailSend->SMTPOptions = array(
            'ssl' => array(
                'verify_peer' => false,
                'verify_peer_name' => false,
                'allow_self_signed' => true
            )
        );

        $this->mailSend->addEmbeddedImage('../assets/img/images_mails/logo_lce.png', 'logo');//logo-fb-insta-linked-twit-up-welcome-white-youtube
        $this->mailSend->addEmbeddedImage('../assets/img/images_mails/facebook2x.png', 'fb');
        $this->mailSend->addEmbeddedImage('../assets/img/images_mails/instagram2x.png', 'insta');
        $this->mailSend->addEmbeddedImage('../assets/img/images_mails/linkedin2x.png', 'linked');
        $this->mailSend->addEmbeddedImage('../assets/img/images_mails/twitter2x.png', 'twit');
        $this->mailSend->addEmbeddedImage('../assets/img/images_mails/Up_pink.png', 'up');
        $this->mailSend->addEmbeddedImage('../assets/img/images_mails/Welcome_Email.png', 'welcome');
        $this->mailSend->addEmbeddedImage('../assets/img/images_mails/white_down.png', 'white');
        $this->mailSend->addEmbeddedImage('../assets/img/images_mails/youtube2x.png', 'youtube');
        $this->mailSend->addAttachment('../assets/job_file/'.$this->getCvCandidat(), $this->getCvCandidat());
        $this->mailSend->addAttachment('../assets/job_file/'.$this->getLmCandidat(), $this->getLmCandidat());


        //For customers
        $this->clientMailSend = new PHPMailer(true);
        //Enable SMTP debugging.
        //$mailSend->SMTPDebug = 3;
        $this->clientMailSend->isSMTP();
        $this->clientMailSend->Host = "smtp.gmail.com";
        $this->clientMailSend->WordWrap = 50;
        $this->clientMailSend->SMTPAuth = true;
        $this->clientMailSend->Username = "diakitesoumaila182@gmail.com";
        $this->clientMailSend->Password = "Ds56058826";
        $this->clientMailSend->SMTPSecure = "tls";
        $this->clientMailSend->Port = 587;
        $this->clientMailSend->SMTPOptions = array(
            'ssl' => array(
                'verify_peer' => false,
                'verify_peer_name' => false,
                'allow_self_signed' => true
            )
        );

        $this->clientMailSend->addEmbeddedImage('../assets/img/images_mails/logo_lce.png', 'logo');//logo-fb-insta-linked-twit-up-welcome-white-youtube
        $this->clientMailSend->addEmbeddedImage('../assets/img/images_mails/facebook2x.png', 'fb');
        $this->clientMailSend->addEmbeddedImage('../assets/img/images_mails/instagram2x.png', 'insta');
        $this->clientMailSend->addEmbeddedImage('../assets/img/images_mails/linkedin2x.png', 'linked');
        $this->clientMailSend->addEmbeddedImage('../assets/img/images_mails/twitter2x.png', 'twit');
        $this->clientMailSend->addEmbeddedImage('../assets/img/images_mails/Up_pink.png', 'up');
        $this->clientMailSend->addEmbeddedImage('../assets/img/images_mails/Welcome_Email.png', 'welcome');
        $this->clientMailSend->addEmbeddedImage('../assets/img/images_mails/white_down.png', 'white');
        $this->clientMailSend->addEmbeddedImage('../assets/img/images_mails/youtube2x.png', 'youtube');
    }
}
