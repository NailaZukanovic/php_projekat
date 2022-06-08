<?php

function send_email_decline_lekar($email) {
    $fromEmail = "eldar.pepic9@gmail.com";

    $to = $email;
    $subject = "Ordinacija Pepić";
    $headers = "Mime-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= 'From: '.$fromEmail.'<'.$fromEmail.'>' . "\r\n".'Reply-To: '.$fromEmail."\r\n" . 'X-Mailer: PHP/' . phpversion();
    $message = "<!DOCTYPE html>
    <html lang='en' xmlns='http://www.w3.org/1999/xhtml' xmlns:v='urn:schemas-microsoft-com:vml' xmlns:o='urn:schemas-microsoft-com:office:office'>
    <head>
        <meta charset='utf-8'> <!-- utf-8 works for most cases -->
        <meta name='viewport' content='width=device-width'> <!-- Forcing initial-scale shouldn't be necessary -->
        <meta http-equiv='X-UA-Compatible' content='IE=edge'> <!-- Use the latest (edge) version of IE rendering engine -->
        <meta name='x-apple-disable-message-reformatting'>  <!-- Disable auto-scale in iOS 10 Mail entirely -->
        
        <title></title> <!-- The title tag shows in email notifications, like Android 4.4. -->
    
        <link href='https://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet'>
    
        <!-- CSS Reset : BEGIN -->
        <style>
    
            /* What it does: Remove spaces around the email design added by some email clients. */
            /* Beware: It can remove the padding / margin and add a background color to the compose a reply window. */
            html,
    body {
        margin: 0 auto !important;
        padding: 0 !important;
        height: 100% !important;
        width: 100% !important;
        background: #f1f1f1;
    }
    
    /* What it does: Stops email clients resizing small text. */
    * {
        -ms-text-size-adjust: 100%;
        -webkit-text-size-adjust: 100%;
    }
    
    /* What it does: Centers email on Android 4.4 */
    div[style*='margin: 16px 0'] {
        margin: 0 !important;
    }
    
    /* What it does: Stops Outlook from adding extra spacing to tables. */
    table,
    td {
        mso-table-lspace: 0pt !important;
        mso-table-rspace: 0pt !important;
    }
    
    /* What it does: Fixes webkit padding issue. */
    table {
        border-spacing: 0 !important;
        border-collapse: collapse !important;
        table-layout: fixed !important;
        margin: 0 auto !important;
    }
    
    /* What it does: Uses a better rendering method when resizing images in IE. */
    img {
        -ms-interpolation-mode:bicubic;
    }
    
    /* What it does: Prevents Windows 10 Mail from underlining links despite inline CSS. Styles for underlined links should be inline. */
    a {
        text-decoration: none;
    }
    
    /* What it does: A work-around for email clients meddling in triggered links. */
    *[x-apple-data-detectors],  /* iOS */
    .unstyle-auto-detected-links *,
    .aBn {
        border-bottom: 0 !important;
        cursor: default !important;
        color: inherit !important;
        text-decoration: none !important;
        font-size: inherit !important;
        font-family: inherit !important;
        font-weight: inherit !important;
        line-height: inherit !important;
    }
    
    /* What it does: Prevents Gmail from displaying a download button on large, non-linked images. */
    .a6S {
        display: none !important;
        opacity: 0.01 !important;
    }
    
    /* What it does: Prevents Gmail from changing the text color in conversation threads. */
    .im {
        color: inherit !important;
    }
    
    /* If the above doesn't work, add a .g-img class to any image in question. */
    img.g-img + div {
        display: none !important;
    }
    
    /* What it does: Removes right gutter in Gmail iOS app: https://github.com/TedGoas/Cerberus/issues/89  */
    /* Create one of these media queries for each additional viewport size you'd like to fix */
    
    /* iPhone 4, 4S, 5, 5S, 5C, and 5SE */
    @media only screen and (min-device-width: 320px) and (max-device-width: 374px) {
        u ~ div .email-container {
            min-width: 320px !important;
        }
    }
    /* iPhone 6, 6S, 7, 8, and X */
    @media only screen and (min-device-width: 375px) and (max-device-width: 413px) {
        u ~ div .email-container {
            min-width: 375px !important;
        }
    }
    /* iPhone 6+, 7+, and 8+ */
    @media only screen and (min-device-width: 414px) {
        u ~ div .email-container {
            min-width: 414px !important;
        }
    }
    
        </style>
    
        <!-- CSS Reset : END -->
    
        <!-- Progressive Enhancements : BEGIN -->
        <style>
    
            .primary{
        background: #45a049;
    }
    .bg_white{
        background: #ffffff;
    }
    .bg_light{
        background: #fafafa;
    }
    .bg_black{
        background: #000000;
    }
    .bg_dark{
        background: rgba(0,0,0,.8);
    }
    .email-section{
        padding:2.5em;
    }
    
    /*BUTTON*/
    .btn{
        padding: 10px 15px;
        display: inline-block;
    }
    .btn.btn-primary{
        border-radius: 5px;
        background: #45a049;
        color: #ffffff;
    }
    .btn.btn-white{
        border-radius: 5px;
        background: #ffffff;
        color: #000000;
    }
    .btn.btn-white-outline{
        border-radius: 5px;
        background: transparent;
        border: 1px solid #fff;
        color: #fff;
    }
    .btn.btn-black-outline{
        border-radius: 0px;
        background: transparent;
        border: 2px solid #000;
        color: #000;
        font-weight: 700;
    }
    
    h1,h2,h3,h4,h5,h6{
        font-family: 'Lato', sans-serif;
        color: #000000;
        margin-top: 0;
        font-weight: 400;
    }
    
    body{
        font-family: 'Lato', sans-serif;
        font-weight: 400;
        font-size: 15px;
        line-height: 1.8;
        color: rgba(0,0,0,.4);
    }
    
    a{
        color: #45a049;
    }
    
    /*LOGO*/
    
    .logo h1{
        margin: 0;
    }
    .logo h1 a{
        color: #45a049;
        font-size: 24px;
        font-weight: 700;
        font-family: 'Lato', sans-serif;
    }
    
    /*HERO*/
    .hero{
        position: relative;
        z-index: 0;
    }
    
    .hero .text{
        color: rgba(0,0,0,.3);
    }
    .hero .text h2{
        color: #000;
        font-size: 40px;
        margin-bottom: 0;
        font-weight: 400;
        line-height: 1.4;
    }
    .hero .text h3{
        font-size: 24px;
        font-weight: 300;
    }
    .hero .text h2 span{
        font-weight: 600;
        color: #45a049;
    }
    
    
    /*HEADING SECTION*/
    
    .heading-section h2{
        color: #000000;
        font-size: 28px;
        margin-top: 0;
        line-height: 1.4;
        font-weight: 400;
    }
    .heading-section .subheading{
        margin-bottom: 20px !important;
        display: inline-block;
        font-size: 13px;
        text-transform: uppercase;
        letter-spacing: 2px;
        color: rgba(0,0,0,.4);
        position: relative;
    }
    .heading-section .subheading::after{
        position: absolute;
        left: 0;
        right: 0;
        bottom: -10px;
        content: '';
        width: 100%;
        height: 2px;
        background: #45a049;
        margin: 0 auto;
    }
    
    .heading-section-white{
        color: rgba(255,255,255,.8);
    }
    .heading-section-white h2{
        
        line-height: 1;
        padding-bottom: 0;
    }
    .heading-section-white h2{
        color: #ffffff;
    }
    .heading-section-white .subheading{
        margin-bottom: 0;
        display: inline-block;
        font-size: 13px;
        text-transform: uppercase;
        letter-spacing: 2px;
        color: rgba(255,255,255,.4);
    }
    
    
    ul.social{
        padding: 0;
    }
    ul.social li{
        display: inline-block;
        margin-right: 10px;
    }
    
    /*FOOTER*/
    
    .footer{
        border-top: 1px solid rgba(0,0,0,.05);
        color: rgba(0,0,0,.5);
    }
    .footer .heading{
        color: #000;
        font-size: 20px;
    }
    .footer ul{
        margin: 0;
        padding: 0;
    }
    .footer ul li{
        list-style: none;
        margin-bottom: 10px;
    }
    .footer ul li a{
        color: rgba(0,0,0,1);
    }
    
    
    @media screen and (max-width: 500px) {
    
    
    }
    
    
        </style>
    
    
    </head>
    
    <body width='100%' style='margin: 0; padding: 0 !important; mso-line-height-rule: exactly; background-color: #f1f1f1;'>
        <center style='width: 100%; background-color: #f1f1f1;'>
        <div style='display: none; font-size: 1px;max-height: 0px; max-width: 0px; opacity: 0; overflow: hidden; mso-hide: all; font-family: sans-serif;'>
          &zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;
        </div>
        <div style='max-width: 600px; margin: 0 auto;' class='email-container'>
            <!-- BEGIN BODY -->
          <table align='center' role='presentation' cellspacing='0' cellpadding='0' border='0' width='100%' style='margin: auto;'>
              <tr>
              <td valign='top' class='bg_white' style='padding: 1em 2.5em 0 2.5em;'>
                  <table role='presentation' border='0' cellpadding='0' cellspacing='0' width='100%'>
                      <tr>
                          <td class='logo' style='text-align: center;'>
                            <h1><a href='#'>Zahtev za lekara</a></h1>
                          </td>
                      </tr>
                  </table>
              </td>
              </tr><!-- end tr -->
              <tr>
              <td valign='middle' class='hero bg_white' style='padding: 3em 0 2em 0;'>
                     </td>
              </tr><!-- end tr -->
                    <tr>
              <td valign='middle' class='hero bg_white' style='padding: 2em 0 4em 0;'>
                <table>
                    <tr>
                        <td>
                        <div class='text' style='background: #721c24; padding: 2px 2.5em; width: auto; text-align: center;'>
                        <h4 style='color: #fff'>Vaš zahtev za lekara je nažalost odbijen! <br />
                            Ukoliko vam je potrebna bilo kakva pomoć, kontaktirajte nas!</h4>
                    </div>
                        </td>
                    </tr>
                </table>
              </td>
              </tr><!-- end tr -->
          <!-- 1 Column Text + Button : END -->
          </table>
          <table align='center' role='presentation' cellspacing='0' cellpadding='0' border='0' width='100%' style='margin: auto;'>
              <tr>
              <td valign='middle' class='bg_light footer email-section'>
                <table>
                    <tr>
                    <td valign='top' width='33.333%' style='padding-top: 20px;'>
                      <table role='presentation' cellspacing='0' cellpadding='0' border='0' width='100%'>
                        <tr>
                          <td style='text-align: left; padding-right: 10px;'>
                              <h3 class='heading'>Radno vreme:</h3>
                              <p>Radnim danima: 7:00-18:00</p>
                              <p>Subotom: 9:00-16:00</p>
                              <p>Nedeljom: 10:00-13:00</p>
                              </td>
                        </tr>
                      </table>
                    </td>
                    <td valign='top' width='33.333%' style='padding-top: 20px;'>
                      <table role='presentation' cellspacing='0' cellpadding='0' border='0' width='100%'>
                        <tr>
                          <td style='text-align: left; padding-left: 5px; padding-right: 5px;'>
                              <h3 class='heading'>Kontakt</h3>
                              <ul>
                                        <li><span class='text'>Tutin, Revolucije bb</span></li>
                                        <li><span class='text'>eldar.pepic@live.de</span></li>
                                        <li><span class='text'>+ 381 64 0600 600</span></li>
                                      </ul>
                          </td>
                        </tr>
                      </table>
                    </td>
                    <td valign='top' width='33.333%' style='padding-top: 20px;'>
                      <table role='presentation' cellspacing='0' cellpadding='0' border='0' width='100%'>
                        <tr>
                          <td style='text-align: left; padding-left: 10px;'>
                              <h3 class='heading'>Useful Links</h3>
                              <ul>
                                        <li><a href='#'>Početna</a></li>
                                        <li><a href='#'>O nama</a></li>
                                        <li><a href='#'>Naš tim</a></li>
                                        <li><a href='#'>Galerija</a></li>
                                      </ul>
                          </td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                </table>
              </td>
            </tr><!-- end: tr -->
            <tr>
              <td class='bg_light' style='text-align: center;'>
                  powered by Eldar
              </td>
            </tr>
          </table>
    
        </div>
      </center>
    </body>
    </html>";
    return mail($to, $subject, $message, $headers);
}

function send_email_accept_lekar($email) {
    $fromEmail = "eldar.pepic9@gmail.com";

    $to = $email;
    $subject = "Ordinacija Pepić";
    $headers = "Mime-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= 'From: '.$fromEmail.'<'.$fromEmail.'>' . "\r\n".'Reply-To: '.$fromEmail."\r\n" . 'X-Mailer: PHP/' . phpversion();
    $message = "<!DOCTYPE html>
    <html lang='en' xmlns='http://www.w3.org/1999/xhtml' xmlns:v='urn:schemas-microsoft-com:vml' xmlns:o='urn:schemas-microsoft-com:office:office'>
    <head>
        <meta charset='utf-8'> <!-- utf-8 works for most cases -->
        <meta name='viewport' content='width=device-width'> <!-- Forcing initial-scale shouldn't be necessary -->
        <meta http-equiv='X-UA-Compatible' content='IE=edge'> <!-- Use the latest (edge) version of IE rendering engine -->
        <meta name='x-apple-disable-message-reformatting'>  <!-- Disable auto-scale in iOS 10 Mail entirely -->
        
        <title></title> <!-- The title tag shows in email notifications, like Android 4.4. -->
    
        <link href='https://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet'>
    
        <!-- CSS Reset : BEGIN -->
        <style>
    
            /* What it does: Remove spaces around the email design added by some email clients. */
            /* Beware: It can remove the padding / margin and add a background color to the compose a reply window. */
            html,
    body {
        margin: 0 auto !important;
        padding: 0 !important;
        height: 100% !important;
        width: 100% !important;
        background: #f1f1f1;
    }
    
    /* What it does: Stops email clients resizing small text. */
    * {
        -ms-text-size-adjust: 100%;
        -webkit-text-size-adjust: 100%;
    }
    
    /* What it does: Centers email on Android 4.4 */
    div[style*='margin: 16px 0'] {
        margin: 0 !important;
    }
    
    /* What it does: Stops Outlook from adding extra spacing to tables. */
    table,
    td {
        mso-table-lspace: 0pt !important;
        mso-table-rspace: 0pt !important;
    }
    
    /* What it does: Fixes webkit padding issue. */
    table {
        border-spacing: 0 !important;
        border-collapse: collapse !important;
        table-layout: fixed !important;
        margin: 0 auto !important;
    }
    
    /* What it does: Uses a better rendering method when resizing images in IE. */
    img {
        -ms-interpolation-mode:bicubic;
    }
    
    /* What it does: Prevents Windows 10 Mail from underlining links despite inline CSS. Styles for underlined links should be inline. */
    a {
        text-decoration: none;
    }
    
    /* What it does: A work-around for email clients meddling in triggered links. */
    *[x-apple-data-detectors],  /* iOS */
    .unstyle-auto-detected-links *,
    .aBn {
        border-bottom: 0 !important;
        cursor: default !important;
        color: inherit !important;
        text-decoration: none !important;
        font-size: inherit !important;
        font-family: inherit !important;
        font-weight: inherit !important;
        line-height: inherit !important;
    }
    
    /* What it does: Prevents Gmail from displaying a download button on large, non-linked images. */
    .a6S {
        display: none !important;
        opacity: 0.01 !important;
    }
    
    /* What it does: Prevents Gmail from changing the text color in conversation threads. */
    .im {
        color: inherit !important;
    }
    
    /* If the above doesn't work, add a .g-img class to any image in question. */
    img.g-img + div {
        display: none !important;
    }
    
    /* What it does: Removes right gutter in Gmail iOS app: https://github.com/TedGoas/Cerberus/issues/89  */
    /* Create one of these media queries for each additional viewport size you'd like to fix */
    
    /* iPhone 4, 4S, 5, 5S, 5C, and 5SE */
    @media only screen and (min-device-width: 320px) and (max-device-width: 374px) {
        u ~ div .email-container {
            min-width: 320px !important;
        }
    }
    /* iPhone 6, 6S, 7, 8, and X */
    @media only screen and (min-device-width: 375px) and (max-device-width: 413px) {
        u ~ div .email-container {
            min-width: 375px !important;
        }
    }
    /* iPhone 6+, 7+, and 8+ */
    @media only screen and (min-device-width: 414px) {
        u ~ div .email-container {
            min-width: 414px !important;
        }
    }
    
        </style>
    
        <!-- CSS Reset : END -->
    
        <!-- Progressive Enhancements : BEGIN -->
        <style>
    
            .primary{
        background: #45a049;
    }
    .bg_white{
        background: #ffffff;
    }
    .bg_light{
        background: #fafafa;
    }
    .bg_black{
        background: #000000;
    }
    .bg_dark{
        background: rgba(0,0,0,.8);
    }
    .email-section{
        padding:2.5em;
    }
    
    /*BUTTON*/
    .btn{
        padding: 10px 15px;
        display: inline-block;
    }
    .btn.btn-primary{
        border-radius: 5px;
        background: #45a049;
        color: #ffffff;
    }
    .btn.btn-white{
        border-radius: 5px;
        background: #ffffff;
        color: #000000;
    }
    .btn.btn-white-outline{
        border-radius: 5px;
        background: transparent;
        border: 1px solid #fff;
        color: #fff;
    }
    .btn.btn-black-outline{
        border-radius: 0px;
        background: transparent;
        border: 2px solid #000;
        color: #000;
        font-weight: 700;
    }
    
    h1,h2,h3,h4,h5,h6{
        font-family: 'Lato', sans-serif;
        color: #000000;
        margin-top: 0;
        font-weight: 400;
    }
    
    body{
        font-family: 'Lato', sans-serif;
        font-weight: 400;
        font-size: 15px;
        line-height: 1.8;
        color: rgba(0,0,0,.4);
    }
    
    a{
        color: #45a049;
    }
    
    /*LOGO*/
    
    .logo h1{
        margin: 0;
    }
    .logo h1 a{
        color: #45a049;
        font-size: 24px;
        font-weight: 700;
        font-family: 'Lato', sans-serif;
    }
    
    /*HERO*/
    .hero{
        position: relative;
        z-index: 0;
    }
    
    .hero .text{
        color: rgba(0,0,0,.3);
    }
    .hero .text h2{
        color: #000;
        font-size: 40px;
        margin-bottom: 0;
        font-weight: 400;
        line-height: 1.4;
    }
    .hero .text h3{
        font-size: 24px;
        font-weight: 300;
    }
    .hero .text h2 span{
        font-weight: 600;
        color: #45a049;
    }
    
    
    /*HEADING SECTION*/
    
    .heading-section h2{
        color: #000000;
        font-size: 28px;
        margin-top: 0;
        line-height: 1.4;
        font-weight: 400;
    }
    .heading-section .subheading{
        margin-bottom: 20px !important;
        display: inline-block;
        font-size: 13px;
        text-transform: uppercase;
        letter-spacing: 2px;
        color: rgba(0,0,0,.4);
        position: relative;
    }
    .heading-section .subheading::after{
        position: absolute;
        left: 0;
        right: 0;
        bottom: -10px;
        content: '';
        width: 100%;
        height: 2px;
        background: #45a049;
        margin: 0 auto;
    }
    
    .heading-section-white{
        color: rgba(255,255,255,.8);
    }
    .heading-section-white h2{
        
        line-height: 1;
        padding-bottom: 0;
    }
    .heading-section-white h2{
        color: #ffffff;
    }
    .heading-section-white .subheading{
        margin-bottom: 0;
        display: inline-block;
        font-size: 13px;
        text-transform: uppercase;
        letter-spacing: 2px;
        color: rgba(255,255,255,.4);
    }
    
    
    ul.social{
        padding: 0;
    }
    ul.social li{
        display: inline-block;
        margin-right: 10px;
    }
    
    /*FOOTER*/
    
    .footer{
        border-top: 1px solid rgba(0,0,0,.05);
        color: rgba(0,0,0,.5);
    }
    .footer .heading{
        color: #000;
        font-size: 20px;
    }
    .footer ul{
        margin: 0;
        padding: 0;
    }
    .footer ul li{
        list-style: none;
        margin-bottom: 10px;
    }
    .footer ul li a{
        color: rgba(0,0,0,1);
    }
    
    
    @media screen and (max-width: 500px) {
    
    
    }
    
    
        </style>
    
    
    </head>
    
    <body width='100%' style='margin: 0; padding: 0 !important; mso-line-height-rule: exactly; background-color: #f1f1f1;'>
        <center style='width: 100%; background-color: #f1f1f1;'>
        <div style='display: none; font-size: 1px;max-height: 0px; max-width: 0px; opacity: 0; overflow: hidden; mso-hide: all; font-family: sans-serif;'>
          &zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;
        </div>
        <div style='max-width: 600px; margin: 0 auto;' class='email-container'>
            <!-- BEGIN BODY -->
          <table align='center' role='presentation' cellspacing='0' cellpadding='0' border='0' width='100%' style='margin: auto;'>
              <tr>
              <td valign='top' class='bg_white' style='padding: 1em 2.5em 0 2.5em;'>
                  <table role='presentation' border='0' cellpadding='0' cellspacing='0' width='100%'>
                      <tr>
                          <td class='logo' style='text-align: center;'>
                            <h1><a href='#'>Zahtev za lekara</a></h1>
                          </td>
                      </tr>
                  </table>
              </td>
              </tr><!-- end tr -->
              <tr>
              <td valign='middle' class='hero bg_white' style='padding: 3em 0 2em 0;'>
                     </td>
              </tr><!-- end tr -->
                    <tr>
              <td valign='middle' class='hero bg_white' style='padding: 2em 0 4em 0;'>
                <table>
                    <tr>
                        <td>
                        <div class='text' style='background: #155724; padding: 2px 2.5em; width: auto; text-align: center;'>
                        <h4 style='color: #fff'>Vaš zahtev za lekara je uspešno prihvaćen! <br />
                            Dobro došli u naš tim!</h4>
                    </div>
                        </td>
                    </tr>
                </table>
              </td>
              </tr><!-- end tr -->
          <!-- 1 Column Text + Button : END -->
          </table>
          <table align='center' role='presentation' cellspacing='0' cellpadding='0' border='0' width='100%' style='margin: auto;'>
              <tr>
              <td valign='middle' class='bg_light footer email-section'>
                <table>
                    <tr>
                    <td valign='top' width='33.333%' style='padding-top: 20px;'>
                      <table role='presentation' cellspacing='0' cellpadding='0' border='0' width='100%'>
                        <tr>
                          <td style='text-align: left; padding-right: 10px;'>
                              <h3 class='heading'>Radno vreme:</h3>
                              <p>Radnim danima: 7:00-18:00</p>
                              <p>Subotom: 9:00-16:00</p>
                              <p>Nedeljom: 10:00-13:00</p>
                              </td>
                        </tr>
                      </table>
                    </td>
                    <td valign='top' width='33.333%' style='padding-top: 20px;'>
                      <table role='presentation' cellspacing='0' cellpadding='0' border='0' width='100%'>
                        <tr>
                          <td style='text-align: left; padding-left: 5px; padding-right: 5px;'>
                              <h3 class='heading'>Kontakt</h3>
                              <ul>
                                        <li><span class='text'>Tutin, Revolucije bb</span></li>
                                        <li><span class='text'>eldar.pepic@live.de</span></li>
                                        <li><span class='text'>+ 381 64 0600 600</span></li>
                                      </ul>
                          </td>
                        </tr>
                      </table>
                    </td>
                    <td valign='top' width='33.333%' style='padding-top: 20px;'>
                      <table role='presentation' cellspacing='0' cellpadding='0' border='0' width='100%'>
                        <tr>
                          <td style='text-align: left; padding-left: 10px;'>
                              <h3 class='heading'>Useful Links</h3>
                              <ul>
                                        <li><a href='#'>Početna</a></li>
                                        <li><a href='#'>O nama</a></li>
                                        <li><a href='#'>Naš tim</a></li>
                                        <li><a href='#'>Galerija</a></li>
                                      </ul>
                          </td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                </table>
              </td>
            </tr><!-- end: tr -->
            <tr>
              <td class='bg_light' style='text-align: center;'>
                  powered by Eldar
              </td>
            </tr>
          </table>
    
        </div>
      </center>
    </body>
    </html>";
    return mail($to, $subject, $message, $headers);
}


function send_email($email) {
    $fromEmail = "eldar.pepic9@gmail.com";

    $to = $email;
    $subject = "Ordinacija Pepić";
    $headers = "Mime-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= 'From: '.$fromEmail.'<'.$fromEmail.'>' . "\r\n".'Reply-To: '.$fromEmail."\r\n" . 'X-Mailer: PHP/' . phpversion();
    $message = "<!DOCTYPE html>
    <html lang='en' xmlns='http://www.w3.org/1999/xhtml' xmlns:v='urn:schemas-microsoft-com:vml' xmlns:o='urn:schemas-microsoft-com:office:office'>
    <head>
        <meta charset='utf-8'> <!-- utf-8 works for most cases -->
        <meta name='viewport' content='width=device-width'> <!-- Forcing initial-scale shouldn't be necessary -->
        <meta http-equiv='X-UA-Compatible' content='IE=edge'> <!-- Use the latest (edge) version of IE rendering engine -->
        <meta name='x-apple-disable-message-reformatting'>  <!-- Disable auto-scale in iOS 10 Mail entirely -->
        
        <title></title> <!-- The title tag shows in email notifications, like Android 4.4. -->
    
        <link href='https://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet'>
    
        <!-- CSS Reset : BEGIN -->
        <style>
    
            /* What it does: Remove spaces around the email design added by some email clients. */
            /* Beware: It can remove the padding / margin and add a background color to the compose a reply window. */
            html,
    body {
        margin: 0 auto !important;
        padding: 0 !important;
        height: 100% !important;
        width: 100% !important;
        background: #f1f1f1;
    }
    
    /* What it does: Stops email clients resizing small text. */
    * {
        -ms-text-size-adjust: 100%;
        -webkit-text-size-adjust: 100%;
    }
    
    /* What it does: Centers email on Android 4.4 */
    div[style*='margin: 16px 0'] {
        margin: 0 !important;
    }
    
    /* What it does: Stops Outlook from adding extra spacing to tables. */
    table,
    td {
        mso-table-lspace: 0pt !important;
        mso-table-rspace: 0pt !important;
    }
    
    /* What it does: Fixes webkit padding issue. */
    table {
        border-spacing: 0 !important;
        border-collapse: collapse !important;
        table-layout: fixed !important;
        margin: 0 auto !important;
    }
    
    /* What it does: Uses a better rendering method when resizing images in IE. */
    img {
        -ms-interpolation-mode:bicubic;
    }
    
    /* What it does: Prevents Windows 10 Mail from underlining links despite inline CSS. Styles for underlined links should be inline. */
    a {
        text-decoration: none;
    }
    
    /* What it does: A work-around for email clients meddling in triggered links. */
    *[x-apple-data-detectors],  /* iOS */
    .unstyle-auto-detected-links *,
    .aBn {
        border-bottom: 0 !important;
        cursor: default !important;
        color: inherit !important;
        text-decoration: none !important;
        font-size: inherit !important;
        font-family: inherit !important;
        font-weight: inherit !important;
        line-height: inherit !important;
    }
    
    /* What it does: Prevents Gmail from displaying a download button on large, non-linked images. */
    .a6S {
        display: none !important;
        opacity: 0.01 !important;
    }
    
    /* What it does: Prevents Gmail from changing the text color in conversation threads. */
    .im {
        color: inherit !important;
    }
    
    /* If the above doesn't work, add a .g-img class to any image in question. */
    img.g-img + div {
        display: none !important;
    }
    
    /* What it does: Removes right gutter in Gmail iOS app: https://github.com/TedGoas/Cerberus/issues/89  */
    /* Create one of these media queries for each additional viewport size you'd like to fix */
    
    /* iPhone 4, 4S, 5, 5S, 5C, and 5SE */
    @media only screen and (min-device-width: 320px) and (max-device-width: 374px) {
        u ~ div .email-container {
            min-width: 320px !important;
        }
    }
    /* iPhone 6, 6S, 7, 8, and X */
    @media only screen and (min-device-width: 375px) and (max-device-width: 413px) {
        u ~ div .email-container {
            min-width: 375px !important;
        }
    }
    /* iPhone 6+, 7+, and 8+ */
    @media only screen and (min-device-width: 414px) {
        u ~ div .email-container {
            min-width: 414px !important;
        }
    }
    .btnLekari {
  background: #45a049;
  outline: none;
  border: 2px solid #45a049;
  color: #fff;
  padding: 8px 22px;
  border-radius: 20px;
  font-size: 14px;
  transition: all 0.3s ease;
  cursor: pointer;
}
.btnLekari:hover {
  background: #367e39;
}
    
        </style>
    
        <!-- CSS Reset : END -->
    
        <!-- Progressive Enhancements : BEGIN -->
        <style>
    
            .primary{
        background: #45a049;
    }
    .bg_white{
        background: #ffffff;
    }
    .bg_light{
        background: #fafafa;
    }
    .bg_black{
        background: #000000;
    }
    .bg_dark{
        background: rgba(0,0,0,.8);
    }
    .email-section{
        padding:2.5em;
    }
    
    /*BUTTON*/
    .btn{
        padding: 10px 15px;
        display: inline-block;
    }
    .btn.btn-primary{
        border-radius: 5px;
        background: #45a049;
        color: #ffffff;
    }
    .btn.btn-white{
        border-radius: 5px;
        background: #ffffff;
        color: #000000;
    }
    .btn.btn-white-outline{
        border-radius: 5px;
        background: transparent;
        border: 1px solid #fff;
        color: #fff;
    }
    .btn.btn-black-outline{
        border-radius: 0px;
        background: transparent;
        border: 2px solid #000;
        color: #000;
        font-weight: 700;
    }
    
    h1,h2,h3,h4,h5,h6{
        font-family: 'Lato', sans-serif;
        color: #000000;
        margin-top: 0;
        font-weight: 400;
    }
    
    body{
        font-family: 'Lato', sans-serif;
        font-weight: 400;
        font-size: 15px;
        line-height: 1.8;
        color: rgba(0,0,0,.4);
    }
    
    a{
        color: #45a049;
    }
    
    /*LOGO*/
    
    .logo h1{
        margin: 0;
    }
    .logo h1 a{
        color: #45a049;
        font-size: 24px;
        font-weight: 700;
        font-family: 'Lato', sans-serif;
    }
    
    /*HERO*/
    .hero{
        position: relative;
        z-index: 0;
    }
    
    .hero .text{
        color: rgba(0,0,0,.3);
    }
    .hero .text h2{
        color: #000;
        font-size: 40px;
        margin-bottom: 0;
        font-weight: 400;
        line-height: 1.4;
    }
    .hero .text h3{
        font-size: 24px;
        font-weight: 300;
    }
    .hero .text h2 span{
        font-weight: 600;
        color: #45a049;
    }
    
    
    /*HEADING SECTION*/
    
    .heading-section h2{
        color: #000000;
        font-size: 28px;
        margin-top: 0;
        line-height: 1.4;
        font-weight: 400;
    }
    .heading-section .subheading{
        margin-bottom: 20px !important;
        display: inline-block;
        font-size: 13px;
        text-transform: uppercase;
        letter-spacing: 2px;
        color: rgba(0,0,0,.4);
        position: relative;
    }
    .heading-section .subheading::after{
        position: absolute;
        left: 0;
        right: 0;
        bottom: -10px;
        content: '';
        width: 100%;
        height: 2px;
        background: #45a049;
        margin: 0 auto;
    }
    
    .heading-section-white{
        color: rgba(255,255,255,.8);
    }
    .heading-section-white h2{
        
        line-height: 1;
        padding-bottom: 0;
    }
    .heading-section-white h2{
        color: #ffffff;
    }
    .heading-section-white .subheading{
        margin-bottom: 0;
        display: inline-block;
        font-size: 13px;
        text-transform: uppercase;
        letter-spacing: 2px;
        color: rgba(255,255,255,.4);
    }
    
    
    ul.social{
        padding: 0;
    }
    ul.social li{
        display: inline-block;
        margin-right: 10px;
    }
    
    /*FOOTER*/
    
    .footer{
        border-top: 1px solid rgba(0,0,0,.05);
        color: rgba(0,0,0,.5);
    }
    .footer .heading{
        color: #000;
        font-size: 20px;
    }
    .footer ul{
        margin: 0;
        padding: 0;
    }
    .footer ul li{
        list-style: none;
        margin-bottom: 10px;
    }
    .footer ul li a{
        color: rgba(0,0,0,1);
    }
    
    
    @media screen and (max-width: 500px) {
    
    
    }
    
    
        </style>
    
    
    </head>
    
    <body width='100%' style='margin: 0; padding: 0 !important; mso-line-height-rule: exactly; background-color: #f1f1f1;'>
        <center style='width: 100%; background-color: #f1f1f1;'>
        <div style='display: none; font-size: 1px;max-height: 0px; max-width: 0px; opacity: 0; overflow: hidden; mso-hide: all; font-family: sans-serif;'>
          &zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;
        </div>
        <div style='max-width: 600px; margin: 0 auto;' class='email-container'>
            <!-- BEGIN BODY -->
          <table align='center' role='presentation' cellspacing='0' cellpadding='0' border='0' width='100%' style='margin: auto;'>
              <tr>
              <td valign='top' class='bg_white' style='padding: 1em 2.5em 0 2.5em;'>
                  <table role='presentation' border='0' cellpadding='0' cellspacing='0' width='100%'>
                      <tr>
                          <td class='logo' style='text-align: center;'>
                            <h1><a href='#'>e-Verifikacija</a></h1>
                          </td>
                      </tr>
                  </table>
              </td>
              </tr><!-- end tr -->
              <tr>
              <td valign='middle' class='hero bg_white' style='padding: 3em 0 2em 0;'>
                     </td>
              </tr><!-- end tr -->
                    <tr>
              <td valign='middle' class='hero bg_white' style='padding: 2em 0 4em 0;'>
                <table>
                    <tr>
                        <td>
                            <div class='text' style='padding: 0 2.5em; text-align: center;'>
                                <h2>Molimo Vas verifikujte Vašu email adresu</h2>
                                <h3>Ukoliko vam je potrebna bilo kakva pomoć, kontaktirajte nas!</h3>
                                <p><a class='btn btn-primary btnLekari' href='https://internamedicina.000webhostapp.com/verifysite.php?email=". $email . "'>Verifikuj nalog</a></p>
                            </div>
                        </td>
                    </tr>
                </table>
              </td>
              </tr><!-- end tr -->
          <!-- 1 Column Text + Button : END -->
          </table>
          <table align='center' role='presentation' cellspacing='0' cellpadding='0' border='0' width='100%' style='margin: auto;'>
              <tr>
              <td valign='middle' class='bg_light footer email-section'>
                <table>
                    <tr>
                    <td valign='top' width='33.333%' style='padding-top: 20px;'>
                      <table role='presentation' cellspacing='0' cellpadding='0' border='0' width='100%'>
                        <tr>
                          <td style='text-align: left; padding-right: 10px;'>
                              <h3 class='heading'>Radno vreme:</h3>
                              <p>Radnim danima: 7:00-18:00</p>
                              <p>Subotom: 9:00-16:00</p>
                              <p>Nedeljom: 10:00-13:00</p>
                              </td>
                        </tr>
                      </table>
                    </td>
                    <td valign='top' width='33.333%' style='padding-top: 20px;'>
                      <table role='presentation' cellspacing='0' cellpadding='0' border='0' width='100%'>
                        <tr>
                          <td style='text-align: left; padding-left: 5px; padding-right: 5px;'>
                              <h3 class='heading'>Kontakt</h3>
                              <ul>
                                        <li><span class='text'>Tutin, Revolucije bb</span></li>
                                        <li><span class='text'>eldar.pepic@live.de</span></li>
                                        <li><span class='text'>+ 381 64 0600 600</span></li>
                                      </ul>
                          </td>
                        </tr>
                      </table>
                    </td>
                    <td valign='top' width='33.333%' style='padding-top: 20px;'>
                      <table role='presentation' cellspacing='0' cellpadding='0' border='0' width='100%'>
                        <tr>
                          <td style='text-align: left; padding-left: 10px;'>
                              <h3 class='heading'>Useful Links</h3>
                              <ul>
                                        <li><a href='#'>Početna</a></li>
                                        <li><a href='#'>O nama</a></li>
                                        <li><a href='#'>Naš tim</a></li>
                                        <li><a href='#'>Galerija</a></li>
                                      </ul>
                          </td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                </table>
              </td>
            </tr><!-- end: tr -->
            <tr>
              <td class='bg_light' style='text-align: center;'>
                  powered by Eldar
              </td>
            </tr>
          </table>
    
        </div>
      </center>
    </body>
    </html>";
    return mail($to, $subject, $message, $headers);
}

function send_email_for_reset($email) {
    $fromEmail = "eldar.pepic9@gmail.com";

    $to = $email;
    $subject = "Ordinacija Pepić";
    $headers = "Mime-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= 'From: '.$fromEmail.'<'.$fromEmail.'>' . "\r\n".'Reply-To: '.$fromEmail."\r\n" . 'X-Mailer: PHP/' . phpversion();
    $message = "<!DOCTYPE html>
    <html lang='en' xmlns='http://www.w3.org/1999/xhtml' xmlns:v='urn:schemas-microsoft-com:vml' xmlns:o='urn:schemas-microsoft-com:office:office'>
    <head>
        <meta charset='utf-8'> <!-- utf-8 works for most cases -->
        <meta name='viewport' content='width=device-width'> <!-- Forcing initial-scale shouldn't be necessary -->
        <meta http-equiv='X-UA-Compatible' content='IE=edge'> <!-- Use the latest (edge) version of IE rendering engine -->
        <meta name='x-apple-disable-message-reformatting'>  <!-- Disable auto-scale in iOS 10 Mail entirely -->
        
        <title></title> <!-- The title tag shows in email notifications, like Android 4.4. -->
    
        <link href='https://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet'>
    
        <!-- CSS Reset : BEGIN -->
        <style>
    
            /* What it does: Remove spaces around the email design added by some email clients. */
            /* Beware: It can remove the padding / margin and add a background color to the compose a reply window. */
            html,
    body {
        margin: 0 auto !important;
        padding: 0 !important;
        height: 100% !important;
        width: 100% !important;
        background: #f1f1f1;
    }
    
    /* What it does: Stops email clients resizing small text. */
    * {
        -ms-text-size-adjust: 100%;
        -webkit-text-size-adjust: 100%;
    }
    
    /* What it does: Centers email on Android 4.4 */
    div[style*='margin: 16px 0'] {
        margin: 0 !important;
    }
    
    /* What it does: Stops Outlook from adding extra spacing to tables. */
    table,
    td {
        mso-table-lspace: 0pt !important;
        mso-table-rspace: 0pt !important;
    }
    
    /* What it does: Fixes webkit padding issue. */
    table {
        border-spacing: 0 !important;
        border-collapse: collapse !important;
        table-layout: fixed !important;
        margin: 0 auto !important;
    }
    
    /* What it does: Uses a better rendering method when resizing images in IE. */
    img {
        -ms-interpolation-mode:bicubic;
    }
    
    /* What it does: Prevents Windows 10 Mail from underlining links despite inline CSS. Styles for underlined links should be inline. */
    a {
        text-decoration: none;
    }
    
    /* What it does: A work-around for email clients meddling in triggered links. */
    *[x-apple-data-detectors],  /* iOS */
    .unstyle-auto-detected-links *,
    .aBn {
        border-bottom: 0 !important;
        cursor: default !important;
        color: inherit !important;
        text-decoration: none !important;
        font-size: inherit !important;
        font-family: inherit !important;
        font-weight: inherit !important;
        line-height: inherit !important;
    }
    
    /* What it does: Prevents Gmail from displaying a download button on large, non-linked images. */
    .a6S {
        display: none !important;
        opacity: 0.01 !important;
    }
    
    /* What it does: Prevents Gmail from changing the text color in conversation threads. */
    .im {
        color: inherit !important;
    }
    
    /* If the above doesn't work, add a .g-img class to any image in question. */
    img.g-img + div {
        display: none !important;
    }
    
    /* What it does: Removes right gutter in Gmail iOS app: https://github.com/TedGoas/Cerberus/issues/89  */
    /* Create one of these media queries for each additional viewport size you'd like to fix */
    
    /* iPhone 4, 4S, 5, 5S, 5C, and 5SE */
    @media only screen and (min-device-width: 320px) and (max-device-width: 374px) {
        u ~ div .email-container {
            min-width: 320px !important;
        }
    }
    /* iPhone 6, 6S, 7, 8, and X */
    @media only screen and (min-device-width: 375px) and (max-device-width: 413px) {
        u ~ div .email-container {
            min-width: 375px !important;
        }
    }
    /* iPhone 6+, 7+, and 8+ */
    @media only screen and (min-device-width: 414px) {
        u ~ div .email-container {
            min-width: 414px !important;
        }
    }
    
        </style>
    
        <!-- CSS Reset : END -->
    
        <!-- Progressive Enhancements : BEGIN -->
        <style>
    
            .primary{
        background: #45a049;
    }
    .bg_white{
        background: #ffffff;
    }
    .bg_light{
        background: #fafafa;
    }
    .bg_black{
        background: #000000;
    }
    .bg_dark{
        background: rgba(0,0,0,.8);
    }
    .email-section{
        padding:2.5em;
    }
    
    /*BUTTON*/
        .btnLekari {
  background: #45a049;
  outline: none;
  border: 2px solid #45a049;
  color: #fff;
  padding: 8px 22px;
  border-radius: 20px;
  font-size: 14px;
  transition: all 0.3s ease;
  cursor: pointer;
}
.btnLekari:hover {
  background: #367e39;
}
    
    .btn{
        padding: 10px 15px;
        display: inline-block;
    }
    .btn.btn-primary{
        border-radius: 5px;
        background: #45a049;
        color: #ffffff;
    }
    .btn.btn-white{
        border-radius: 5px;
        background: #ffffff;
        color: #000000;
    }
    .btn.btn-white-outline{
        border-radius: 5px;
        background: transparent;
        border: 1px solid #fff;
        color: #fff;
    }
    .btn.btn-black-outline{
        border-radius: 0px;
        background: transparent;
        border: 2px solid #000;
        color: #000;
        font-weight: 700;
    }
    
    h1,h2,h3,h4,h5,h6{
        font-family: 'Lato', sans-serif;
        color: #000000;
        margin-top: 0;
        font-weight: 400;
    }
    
    body{
        font-family: 'Lato', sans-serif;
        font-weight: 400;
        font-size: 15px;
        line-height: 1.8;
        color: rgba(0,0,0,.4);
    }
    
    a{
        color: #45a049;
    }
    
    /*LOGO*/
    
    .logo h1{
        margin: 0;
    }
    .logo h1 a{
        color: #45a049;
        font-size: 24px;
        font-weight: 700;
        font-family: 'Lato', sans-serif;
    }
    
    /*HERO*/
    .hero{
        position: relative;
        z-index: 0;
    }
    
    .hero .text{
        color: rgba(0,0,0,.3);
    }
    .hero .text h2{
        color: #000;
        font-size: 40px;
        margin-bottom: 0;
        font-weight: 400;
        line-height: 1.4;
    }
    .hero .text h3{
        font-size: 24px;
        font-weight: 300;
    }
    .hero .text h2 span{
        font-weight: 600;
        color: #45a049;
    }
    
    
    /*HEADING SECTION*/
    
    .heading-section h2{
        color: #000000;
        font-size: 28px;
        margin-top: 0;
        line-height: 1.4;
        font-weight: 400;
    }
    .heading-section .subheading{
        margin-bottom: 20px !important;
        display: inline-block;
        font-size: 13px;
        text-transform: uppercase;
        letter-spacing: 2px;
        color: rgba(0,0,0,.4);
        position: relative;
    }
    .heading-section .subheading::after{
        position: absolute;
        left: 0;
        right: 0;
        bottom: -10px;
        content: '';
        width: 100%;
        height: 2px;
        background: #45a049;
        margin: 0 auto;
    }
    
    .heading-section-white{
        color: rgba(255,255,255,.8);
    }
    .heading-section-white h2{
        
        line-height: 1;
        padding-bottom: 0;
    }
    .heading-section-white h2{
        color: #ffffff;
    }
    .heading-section-white .subheading{
        margin-bottom: 0;
        display: inline-block;
        font-size: 13px;
        text-transform: uppercase;
        letter-spacing: 2px;
        color: rgba(255,255,255,.4);
    }
    
    
    ul.social{
        padding: 0;
    }
    ul.social li{
        display: inline-block;
        margin-right: 10px;
    }
    
    /*FOOTER*/
    
    .footer{
        border-top: 1px solid rgba(0,0,0,.05);
        color: rgba(0,0,0,.5);
    }
    .footer .heading{
        color: #000;
        font-size: 20px;
    }
    .footer ul{
        margin: 0;
        padding: 0;
    }
    .footer ul li{
        list-style: none;
        margin-bottom: 10px;
    }
    .footer ul li a{
        color: rgba(0,0,0,1);
    }
    
    
    @media screen and (max-width: 500px) {
    
    
    }
    
    
        </style>
    
    
    </head>
    
    <body width='100%' style='margin: 0; padding: 0 !important; mso-line-height-rule: exactly; background-color: #f1f1f1;'>
        <center style='width: 100%; background-color: #f1f1f1;'>
        <div style='display: none; font-size: 1px;max-height: 0px; max-width: 0px; opacity: 0; overflow: hidden; mso-hide: all; font-family: sans-serif;'>
          &zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;
        </div>
        <div style='max-width: 600px; margin: 0 auto;' class='email-container'>
            <!-- BEGIN BODY -->
          <table align='center' role='presentation' cellspacing='0' cellpadding='0' border='0' width='100%' style='margin: auto;'>
              <tr>
              <td valign='top' class='bg_white' style='padding: 1em 2.5em 0 2.5em;'>
                  <table role='presentation' border='0' cellpadding='0' cellspacing='0' width='100%'>
                      <tr>
                          <td class='logo' style='text-align: center;'>
                            <h1><a href='#'>Resetovanje lozinke</a></h1>
                          </td>
                      </tr>
                  </table>
              </td>
              </tr><!-- end tr -->
              <tr>
              <td valign='middle' class='hero bg_white' style='padding: 3em 0 2em 0;'>
                     </td>
              </tr><!-- end tr -->
                    <tr>
              <td valign='middle' class='hero bg_white' style='padding: 2em 0 4em 0;'>
                <table>
                    <tr>
                        <td>
                            <div class='text' style='padding: 0 2.5em; text-align: center;'>
                                <h2>Zaboravili ste lozinku? </h2>
                                <h3>Pošaljite zahtev za resetovanje lozinke.</h3>
                                <p><a class='btn btn-primary btnLekari' href='https://internamedicina.000webhostapp.com/confirmresetpassword.php?email=". $email . "'>Resetuj lozinku</a></p>
                            </div>
                        </td>
                    </tr>
                </table>
              </td>
              </tr><!-- end tr -->
          <!-- 1 Column Text + Button : END -->
          </table>
          <table align='center' role='presentation' cellspacing='0' cellpadding='0' border='0' width='100%' style='margin: auto;'>
              <tr>
              <td valign='middle' class='bg_light footer email-section'>
                <table>
                    <tr>
                    <td valign='top' width='33.333%' style='padding-top: 20px;'>
                      <table role='presentation' cellspacing='0' cellpadding='0' border='0' width='100%'>
                        <tr>
                          <td style='text-align: left; padding-right: 10px;'>
                              <h3 class='heading'>Radno vreme:</h3>
                              <p>Radnim danima: 7:00-18:00</p>
                              <p>Subotom: 9:00-16:00</p>
                              <p>Nedeljom: 10:00-13:00</p>
                              </td>
                        </tr>
                      </table>
                    </td>
                    <td valign='top' width='33.333%' style='padding-top: 20px;'>
                      <table role='presentation' cellspacing='0' cellpadding='0' border='0' width='100%'>
                        <tr>
                          <td style='text-align: left; padding-left: 5px; padding-right: 5px;'>
                              <h3 class='heading'>Kontakt</h3>
                              <ul>
                                        <li><span class='text'>Tutin, Revolucije bb</span></li>
                                        <li><span class='text'>eldar.pepic@live.de</span></li>
                                        <li><span class='text'>+ 381 64 0600 600</span></li>
                                      </ul>
                          </td>
                        </tr>
                      </table>
                    </td>
                    <td valign='top' width='33.333%' style='padding-top: 20px;'>
                      <table role='presentation' cellspacing='0' cellpadding='0' border='0' width='100%'>
                        <tr>
                          <td style='text-align: left; padding-left: 10px;'>
                              <h3 class='heading'>Pomoćni linkovi</h3>
                              <ul>
                                        <li><a href='#'>Početna</a></li>
                                        <li><a href='#'>O nama</a></li>
                                        <li><a href='#'>Naš tim</a></li>
                                        <li><a href='#'>Galerija</a></li>
                                      </ul>
                          </td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                </table>
              </td>
            </tr><!-- end: tr -->
            <tr>
              <td class='bg_light' style='text-align: center;'>
                  powered by Eldar
              </td>
            </tr>
          </table>
    
        </div>
      </center>
    </body>
    </html>";
    return mail($to, $subject, $message, $headers);
}


function clean($string) {
    return htmlentities($string);
}

function redirect($location) {
    header("location:{$location}");
}

function set_message($message) {
    if(!empty($message)) {
        $_SESSION['message'] = $message;
    } else {
        $message = "";
    }
}

function display_message() {
    if(isset($_SESSION['message'])) {
        echo "<div class='successmessage'>" . $_SESSION['message'] . "</div>";
        unset($_SESSION['message']);
    }
}

function email_exists($email) {
        $email = filter_var($email, FILTER_SANITIZE_EMAIL);
        $query = "SELECT id FROM users WHERE email = '$email'";
        $result = query($query);  
        if($result->num_rows > 0) {
            return true;
        } else {
            return false;
        }
}


function user_exists($user) {
        $user = filter_var($user, FILTER_SANITIZE_STRING);
        $query = "SELECT id FROM users WHERE username = '$user'";
        $result = query($query);
    
        if($result->num_rows > 0) {
            return true;
        } else {
            return false;
        }
}


function validate_user_registration() {
    $errors = [];

    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $firstname = clean($_POST['firstname']);
        $lastname = clean($_POST['lastname']);
        // $username = clean($_POST['username']);
        $password = clean($_POST['password']);
        $confirm_password = clean($_POST['password_repeat']);
        $pol = clean($_POST['pol']);
        $nalog = clean($_POST['nalog']);
        $mestoRodj = clean($_POST['mestoRodj']);
        $drzavaRodj = clean($_POST['drzavaRodj']);
        $datumRodj = clean($_POST['datumRodj']);
        $jmbg = clean($_POST['jmbg']);
        $mobile = clean($_POST['mobile']);
        $email = clean($_POST['email']);

        if(strlen($firstname) < 3) {
            $errors[] = "Vaše ime mora imati više od 3 karaktera!";
        }

        if(strlen($lastname) < 3) {
            $errors[] = "Vaše prezime mora imati više od 3 karaktera!";
        }

        // if(strlen($username) < 3) {
        //     $errors[] = "Vaše korisničko ime mora imati više od 3 karaktera!";
        // }
        
        // if(strlen($username) > 20) {
        //     $errors[] = "Vaše korisničko ime ne može biti duže od 20 karaktera!";
        // }

        if(email_exists($email)) {
            $errors[] = "Email već postoji!";
        }

        // if(user_exists($username)) {
        //     $errors[] = "Korisničko ime već postoji!";
        // }

        
        if(strlen($password) < 8) {
            $errors[] = "Vaša lozinka mora biti duža od 8 karaktera!";
        }

        if($password != $confirm_password) {
            $errors[] = "Vaše lozinke se ne poklapaju!";
        }
        
         if(strlen($jmbg) < 13 || strlen($jmbg) > 13) {
            $errors[] = "Vaš jedinstveni matični broj mora imati tačno 13 karaktera!";
        }

        if(!empty($errors)) {
            foreach ($errors as $error) {
                echo "<div class='alert'>" . $error . "</div>";
            }
        } else {
            $nalog = filter_var($nalog, FILTER_SANITIZE_STRING);
            $firstname = filter_var($firstname, FILTER_SANITIZE_STRING);
            $lastname = filter_var($lastname, FILTER_SANITIZE_STRING);
            // $username = filter_var($username, FILTER_SANITIZE_STRING);
            $password = filter_var($password, FILTER_SANITIZE_STRING);
            $mobile = filter_var($mobile, FILTER_SANITIZE_STRING);
            $jmbg = filter_var($jmbg, FILTER_SANITIZE_STRING);
            $mestoRodj = filter_var($mestoRodj, FILTER_SANITIZE_STRING);
            $drzavaRodj = filter_var($drzavaRodj, FILTER_SANITIZE_STRING);
            $datumRodj = filter_var($datumRodj, FILTER_SANITIZE_STRING);
            create_user($nalog, $firstname, $lastname, $password, $pol, $drzavaRodj, $mestoRodj, $datumRodj, $jmbg, $mobile, $email);
           
        }
    }
}

function validate_user_adding() {
    $errors = [];

    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $firstname = clean($_POST['firstname']);
        $lastname = clean($_POST['lastname']);
        // $username = clean($_POST['username']);
        $password = clean($_POST['password']);
        $confirm_password = clean($_POST['password_repeat']);
        $pol = clean($_POST['pol']);
        $nalog = clean($_POST['nalog']);
        $mestoRodj = clean($_POST['mestoRodj']);
        $drzavaRodj = clean($_POST['drzavaRodj']);
        $datumRodj = clean($_POST['datumRodj']);
        $jmbg = clean($_POST['jmbg']);
        $mobile = clean($_POST['mobile']);
        $email = clean($_POST['email']);

        if(strlen($firstname) < 3) {
            $errors[] = "Vaše ime mora imati više od 3 karaktera!";
        }

        if(strlen($lastname) < 3) {
            $errors[] = "Vaše prezime mora imati više od 3 karaktera!";
        }

        // if(strlen($username) < 3) {
        //     $errors[] = "Vaše korisničko ime mora imati više od 3 karaktera!";
        // }
        
        // if(strlen($username) > 20) {
        //     $errors[] = "Vaše korisničko ime ne može biti duže od 20 karaktera!";
        // }

        if(email_exists($email)) {
            $errors[] = "Email već postoji!";
        }

        // if(user_exists($username)) {
        //     $errors[] = "Korisničko ime već postoji!";
        // }

        
        if(strlen($password) < 8) {
            $errors[] = "Vaša lozinka mora biti duža od 8 karaktera!";
        }

        if($password != $confirm_password) {
            $errors[] = "Vaše lozinke se ne poklapaju!";
        }
        
        if(strlen($jmbg) < 13 || strlen($jmbg) > 13) {
            $errors[] = "Vaš jedinstveni matični broj mora imati tačno 13 karaktera!";
        }

        if(!empty($errors)) {
            foreach ($errors as $error) {
                echo "<div class='alert'>" . $error . "</div>";
            }
        } else {
            $nalog = filter_var($nalog, FILTER_SANITIZE_STRING);
            $firstname = filter_var($firstname, FILTER_SANITIZE_STRING);
            $lastname = filter_var($lastname, FILTER_SANITIZE_STRING);
            // $username = filter_var($username, FILTER_SANITIZE_STRING);
            $password = filter_var($password, FILTER_SANITIZE_STRING);
            $mobile = filter_var($mobile, FILTER_SANITIZE_STRING);
            $jmbg = filter_var($jmbg, FILTER_SANITIZE_STRING);
            $mestoRodj = filter_var($mestoRodj, FILTER_SANITIZE_STRING);
            $drzavaRodj = filter_var($drzavaRodj, FILTER_SANITIZE_STRING);
            $datumRodj = filter_var($datumRodj, FILTER_SANITIZE_STRING);
            adding_user($nalog, $firstname, $lastname, $password, $pol, $drzavaRodj, $mestoRodj, $datumRodj, $jmbg, $mobile, $email);
        }
    }
}

function create_user($nalog ,$firstname, $lastname, $password, $pol, $drzavaRodj, $mestoRodj, $datumRodj, $jmbg, $mobile, $email) {
    
        $nalog = escape($nalog);
        $firstname = escape($firstname);
        $lastname = escape($lastname);
        // $username = escape($username);
        $password = escape($password);
        $pol = escape($pol);
        $mestoRodj = escape($mestoRodj);
        $drzavaRodj = escape($drzavaRodj);
        $datumRodj = escape($datumRodj);
        $jmbg = escape($jmbg);
        $mobile = escape($mobile);
        $email = escape($email);
        $password = password_hash($password, PASSWORD_DEFAULT);
    
        
        if($nalog == 'lekar'){
            $sql = "INSERT INTO zahtevi (nalog ,firstname, lastname, password, pol, drzavaRodj, mestoRodj, datumRodj, jmbg, mobile, email, image, verify) ";
            $sql .= "VALUES('$nalog', '$firstname', '$lastname', '$password', '$pol', '$drzavaRodj', '$mestoRodj', '$datumRodj', '$jmbg', '$mobile', '$email', 'uploads/default.jpg', '1')";
            confirm(query($sql));
            set_message("Uspešno ste se registrovali!");    
            redirect("login.php");
        }
        
        if($nalog == 'pacijent'){
            $sql = "INSERT INTO users (nalog ,firstname, lastname, password, pol, drzavaRodj, mestoRodj, datumRodj, jmbg, mobile, email, image, verify) ";
            $sql .= "VALUES('$nalog', '$firstname', '$lastname', '$password', '$pol', '$drzavaRodj', '$mestoRodj', '$datumRodj', '$jmbg', '$mobile', '$email', 'uploads/default.jpg', '0')";
            confirm(query($sql));
            set_message("Uspešno ste se registrovali!"); 
            send_email($email);   
            redirect("login.php");
        
        }

}

function adding_user($nalog ,$firstname, $lastname, $password, $pol, $drzavaRodj, $mestoRodj, $datumRodj, $jmbg, $mobile, $email) {
    
    $nalog = escape($nalog);
    $firstname = escape($firstname);
    $lastname = escape($lastname);
    $password = escape($password);
    $pol = escape($pol);
    $mestoRodj = escape($mestoRodj);
    $drzavaRodj = escape($drzavaRodj);
    $datumRodj = escape($datumRodj);
    $jmbg = escape($jmbg);
    $mobile = escape($mobile);
    $email = escape($email);
    $password = password_hash($password, PASSWORD_DEFAULT);

         
        $sql = "INSERT INTO users (nalog ,firstname, lastname, password, pol, drzavaRodj, mestoRodj, datumRodj, jmbg, mobile, email, image, verify) ";
        $sql .= "VALUES('$nalog', '$firstname', '$lastname', '$password', '$pol', '$drzavaRodj', '$mestoRodj', '$datumRodj', '$jmbg', '$mobile', '$email', 'uploads/default.jpg', 0)";
        confirm(query($sql));
        set_message("Uspešno ste se registrovali!");    
          send_email($email); 
        redirect("korisnici.php");
}

function validate_user_login() {
    $errors = [];
    
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $email = clean($_POST['email']);
        $password = clean($_POST['password']);
        $nalog = clean($_POST['nalog']);

        if(empty($email)) { 
            $errors[] = "Polje E-mail ne može biti prazno";
        }

        if(empty($password)) {
            $errors[] = "Polje lozinka ne može biti prazno";
        }

        if(empty($nalog)) {
            $errors[] = "Polje nalog ne može biti prazno";
        }

        if(empty($errors)) {
                if(user_login($email, $password)) {
                    redirect("index.php");
                } else {
                    $errors[] = "Vaša e-mail adresa ili lozinka su netačni";
                }
        }

        if(!empty($errors)) {
            foreach($errors as $error) {
                echo '<div class="alert">' . $error . '</div>';
            }
        }
    }
}

function user_login($email, $password) {
    $password = filter_var($password, FILTER_SANITIZE_STRING);
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);
     
            $query = "SELECT * FROM users WHERE usersEmail='$email'";
            $result = query($query);
        
            if($result->num_rows > 0) {
                $data = $result->fetch_assoc();
        
                if(password_verify($password, $data['usersPwd'])) {
                    $_SESSION['usersEmail'] = $email;
                    return true;
                } else {
                    return false;
                }
            } else {
                return false;
            }
}

function user_profile_image_upload($user_id) {
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $img_name = $_FILES['profile_image_file']['name'];
        $img_size = $_FILES['profile_image_file']['size'];
        $tmp_name = $_FILES['profile_image_file']['tmp_name'];
        $error_img = $_FILES['profile_image_file']['error'];


            if($error_img === 0) {
                if($img_size > 5000000) {
                    $em = "Your file is too large";
                     set_message("Vaš fajl je prevelik");
                }
                else {
                    $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
                    $img_ex_lc = strtolower($img_ex);
    
                    $allowed_exs = array("jpg", "jpeg", "png");
    
                    if(in_array($img_ex_lc, $allowed_exs)) {
                        $new_img_name = uniqid("IMG-",true). '.'.$img_ex_lc;
                        $img_upload_path = 'uploads/'.$new_img_name;
                        move_uploaded_file($tmp_name, $img_upload_path);
                        $query = "UPDATE users SET image='$img_upload_path' WHERE id=$user_id";
            
            confirm(query($query));
            
            echo("<script>location.href = 'profile.php';</script>");
            // set_message("Uspešno ste izmenili sliku");
            // redirect("profile.php");
    
                    }else {
                        $em = "Nepoznata greska";
                        set_message("Nepoznata greska");
                        // redirect("index.php?error=$em");
                    }
                }
            } else {
                $em = "Nepoznata greska";
                set_message("Nepoznata greska");
                // redirect("index.php?error=$em");
            }   
        }  
}
function user_profile_image_upload_admin($user_id) {
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $img_name = $_FILES['profile_image_file_admin']['name'];
        $img_size = $_FILES['profile_image_file_admin']['size'];
        $tmp_name = $_FILES['profile_image_file_admin']['tmp_name'];
        $error_img = $_FILES['profile_image_file_admin']['error'];


            if($error_img === 0) {
                if($img_size > 5000000) {
                    $em = "Your file is too large";
                     set_message("Vaš fajl je prevelik");
                }
                else {
                    $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
                    $img_ex_lc = strtolower($img_ex);
    
                    $allowed_exs = array("jpg", "jpeg", "png");
    
                    if(in_array($img_ex_lc, $allowed_exs)) {
                        $new_img_name = uniqid("IMG-",true). '.'.$img_ex_lc;
                        $img_upload_path = 'uploads/'.$new_img_name;
                        move_uploaded_file($tmp_name, $img_upload_path);
                        $query = "UPDATE users SET image='$img_upload_path' WHERE id=$user_id";
            
            confirm(query($query));
            echo("<script>location.href = 'profileAdmin.php';</script>");
            // set_message("Uspešno ste izmenili sliku");
            // redirect("profileAdmin.php");
            
    
                    }else {
                        $em = "Nepoznata greska";
                        set_message("Nepoznata greska");
                        // redirect("index.php?error=$em");
                    }
                }
            } else {
                $em = "Nepoznata greska";
                set_message("Nepoznata greska");
                // redirect("index.php?error=$em");
            }   
      }  
}

function user_profile_image_upload_lekar($user_id) {
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $img_name = $_FILES['profile_image_file_lekar']['name'];
        $img_size = $_FILES['profile_image_file_lekar']['size'];
        $tmp_name = $_FILES['profile_image_file_lekar']['tmp_name'];
        $error_img = $_FILES['profile_image_file_lekar']['error'];


            if($error_img === 0) {
                if($img_size > 5000000) {
                    $em = "Your file is too large";
                     set_message("Vaš fajl je prevelik");
                }
                else {
                    $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
                    $img_ex_lc = strtolower($img_ex);
    
                    $allowed_exs = array("jpg", "jpeg", "png");
    
                    if(in_array($img_ex_lc, $allowed_exs)) {
                        $new_img_name = uniqid("IMG-",true). '.'.$img_ex_lc;
                        $img_upload_path = 'uploads/'.$new_img_name;
                        move_uploaded_file($tmp_name, $img_upload_path);
                        $query = "UPDATE users SET image='$img_upload_path' WHERE id=$user_id";
            
            confirm(query($query));
            
            echo("<script>location.href = 'profileLekar.php';</script>");
            // set_message("Uspešno ste izmenili sliku");
            // redirect("profileLekar.php");
    
                    }else {
                        $em = "Nepoznata greska";
                        set_message("Nepoznata greska");
                        // redirect("index.php?error=$em");
                    }
                }
            } else {
                $em = "Nepoznata greska";
                set_message("Nepoznata greska");
                // redirect("index.php?error=$em");
            }   
        }  
}

function admin_login($email, $password) {
    $password = filter_var($password, FILTER_SANITIZE_STRING);
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);
     
            $query = "SELECT * FROM admins WHERE adminsEmail='$email'";
            $result = query($query);
        
            if($result->num_rows > 0) {
                $data = $result->fetch_assoc();
        
                if(password_verify($password, $data['adminsPwd'])) {
                    $_SESSION['adminsEmail'] = $email;
                    return true;
                } else {
                    return false;
                }
            } else {
                return false;
            }
}

function get_user($id = NULL) {
    if($id != NULL) {
        $query = "SELECT * FROM users where id=" . $id;
        $result = query($query);

        if($result->num_rows > 0) {
            return $result->fetch_assoc();
        } else {
            return "Korisnik nije pronadjen";
        }
    } else {
        $query = "SELECT * FROM users where email='" . $_SESSION['email'] . "'";
        $result = query($query);

        if($result->num_rows > 0) {
            return $result->fetch_assoc();
        } else {
            return "Korisnik nije pronadjen";
        }
    }
}

function get_raspored($id = NULL) {
    if($id != NULL) {
        $query = "SELECT * FROM raspored where id_lekar=" . $id;
        $result = query($query);

        if($result->num_rows > 0) {
            return $result->fetch_assoc();
        } else {
            return "Korisnik nije pronadjen";
        }
    } else {
        $query = "SELECT * FROM raspored where id='" . $_SESSION['id_lekar'] . "'";
        $result = query($query);

        if($result->num_rows > 0) {
            return $result->fetch_assoc();
        } else {
            return "Korisnik nije pronadjen";
        }
    }
}

function get_raspored_table($id) {
    $query = "SELECT * FROM raspored where id=" . $id;
    $result = query($query);  
    if($result->num_rows > 0) {
        return $result->fetch_assoc();
    } else {
        return "Korisnik nije pronadjen";
    }
}

function get_karton($id) {
    $query = "SELECT * FROM karton where id_pacijent=" . $id;
    $result = query($query);  
    if($result->num_rows > 0) {
        return $result->fetch_assoc();
    } else {
        return "Karton nije pronadjen";
    }
}

function get_karton_idPregled($id) {
    $query = "SELECT * FROM karton where id_pregled=" . $id;
    $result = query($query);  
    if($result->num_rows > 0) {
        return $result->fetch_assoc();
    } else {
        return "Karton nije pronadjen";
    }
}

function get_pregled_table($id) {
    $query = "SELECT * FROM lekarpacijent WHERE id_lekara =" . $id;
    $result = query($query);  
    if($result->num_rows > 0) {
        return $result->fetch_assoc();
    } else {
        return "Korisnik nije pronadjen";
    }
}

function proba() {
    $query = "SELECT id_lekara FROM lekarpacijent";
    $result = query($query);  
    if($result->num_rows > 0) {
        return $result->fetch_assoc();
    } else {
        return "Korisnik nije pronadjen";
    }
}
function get_pregled($id) {
    $query = "SELECT * FROM pregled WHERE id =" . $id;
    $result = query($query);  
    if($result->num_rows > 0) {
        return $result->fetch_assoc();
    } else {
        return "Korisnik nije pronadjen";
    }
}
function get_pregled_from_pacijent($id) {
    $query = "SELECT * FROM pregled WHERE id_pacijent =" . $id;
    $result = query($query);  
    if($result->num_rows > 0) {
        return $result->fetch_assoc();
    } else {
        return "Korisnik nije pronadjen";
    }
}

function get_pregled_table_idpacijent($id) {
    $query = "SELECT * FROM lekarpacijent WHERE id_pacijenta =" . $id;
    $result = query($query);  
    if($result->num_rows > 0) {
        return $result->fetch_assoc();
    } else {
        return "Korisnik nije pronadjen";
    }
}
function lekarpacijent_id($id) {
    $query = "SELECT * FROM lekarpacijent WHERE id =" . $id;
    $result = query($query);  
    if($result->num_rows > 0) {
        return $result->fetch_assoc();
    } else {
        return "Korisnik nije pronadjen";
    }
}



function get_lekar_pacijent($id = NULL) {
    if($id != NULL) {
        $sql = "SELECT * FROM lekarpacijent WHERE id_pacijenta=" . $id;
        $result = query($sql);

        if($result->num_rows > 0) {
            return $result->fetch_assoc();
        } else {
            return "Korisnik nije pronadjen";
        }
    } else {
        $query = "SELECT * FROM lekarpacijent where pacijent_email='" . $_SESSION['email'] . "'";
        $result = query($query);

        if($result->num_rows > 0) {
            return $result->fetch_assoc();
        } else {
            return "Korisnik nije pronadjen";
        }
    }
}
function get_pacijent_lekar($id = NULL) {
    if($id != NULL) {
        $sql = "SELECT * FROM lekarpacijent WHERE id_lekara=" . $id;
        $result = query($sql);

        if($result->num_rows > 0) {
            return $result->fetch_assoc();
        } else {
            return "Korisnik nije pronadjen";
        }
    } else {
        $query = "SELECT * FROM lekarpacijent where lekar_email='" . $_SESSION['email'] . "'";
        $result = query($query);

        if($result->num_rows > 0) {
            return $result->fetch_assoc();
        } else {
            return "Korisnik nije pronadjen";
        }
    }
}

function get_userFromZahtevi($id = NULL) {
    if($id != NULL) {
        $query = "SELECT * FROM zahtevi where id=" . $id;
        $result = query($query);

        if($result->num_rows > 0) {
            return $result->fetch_assoc();
        } else {
            return "Korisnik nije pronadjen";
        }
    } else {
        $query = "SELECT * FROM zahtevi where email='" . $_SESSION['email'] . "'";
        $result = query($query);

        if($result->num_rows > 0) {
            return $result->fetch_assoc();
        } else {
            return "Korisnik nije pronadjen";
        }
    }
}


function fetch_all_posts_from_admin() {
    $query = "SELECT * FROM obavestenja ORDER BY vreme DESC";
    $result = query($query);

    if($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $user = get_user($row['id_lekar']);
            $sadrzajj = substr($row['sadrzaj'],0,200);

            echo "<div class='blog-post'>
                <div class='blog-post__img'>
                    <img class='img_post' src='" .  $row['slika'] ."' alt='post'>
                </div>
                <div class='blog-post__info'>
                    <div class='blog-post__date'>
                        <span>" . $user['firstname'] . ' ' . $user['lastname'] ."</span>
                        <span>" . $row['vreme'] . "</span>
                    </div>
                    <div class='blog-post__title'>" . $row['naslov'] . "</div>
                    <p class='blog-post__text'>
                       $sadrzajj ...
                    </p>
                    <a href='prikazobavestenje.php?id=". $row['id'] . "' class='blog-post__cta'>Pogledaj više</a>
                    <a onclick='return checkIzbrisi();' href='izbrisiobavestenje.php?id=". $row['id'] . "' class='blog-post__cta5'>Izbriši post</a>
                </div>
            </div>

            <div class='margin-y'></div>
            ";
        }
    }
}

function get_user_promena_lekara($id_lekar = NULL, $id_pacijent = NULL) {
    if($id_pacijent != NULL) {
        $query = "SELECT * FROM zahtev_promena_lekara where id_lekara = $id_lekar and id_pacijenta = $id_pacijent";
        $result = query($query);

        if($result->num_rows > 0) {
            return $result->fetch_assoc();
        } else {
            return "Korisnik nije pronadjen";
        }
    } 
}

function get_lekar($id = NULL) {
    if($id != NULL) {
        $query = "SELECT * FROM `users` WHERE id = $id AND nalog = 'lekar'";
        $result = query($query);

        if($result->num_rows > 0) {
            return $result->fetch_assoc();
        } else {
            return "Korisnik nije pronadjen";
        }
    } else {
        $query = "SELECT * FROM users where email='" . $_SESSION['email'] . "'";
        $result = query($query);

        if($result->num_rows > 0) {
            return $result->fetch_assoc();
        } else {
            return "Korisnik nije pronadjen";
        }
    }
}



function login_check_pages() {
    if(isset($_SESSION['email'])) {
        redirect("index.php");
    }
}


function display_lekari() {
    
    $query = "SELECT * FROM `users` WHERE nalog = 'lekar' ORDER BY id ASC";
    $result = query($query);

    if($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $user = get_user($row['id']);

            echo "<div class='swiper-slide card'>
                            <div class='card-content'>
                                <div class='image'>
                                    <img src='" . $user['image'] . "' alt='lekari'>
                                </div>

                                <div class='media-icons'>
                                    <i class='fab fa-facebook'></i>
                                    <i class='fab fa-twitter'></i>
                                    <i class='fab fa-github'></i>
                                </div>

                                <div class='name-profession'>
                                    <span class='name'>" . $user['firstname'] . ' ' . $user['lastname'] . "</span>
                                    <span class='profession'><i class='fa-solid fa-user-doctor'></i> Lekar</span>
                                </div>

                                <div class='btnLekari'>
                                   <a  href='dodajpregled.php?lekarid=". $user['id'] . "' ><button class='prijavise'>Prijavi se <i class='fa-solid fa-right-to-bracket'></i></button></a>
                                </div>
                            </div>
                        </div>";
            
        }
    }
}
function nas_tim() {
    
    $query = "SELECT * FROM `users` WHERE nalog = 'lekar' ORDER BY id ASC";
    $result = query($query);

    if($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $user = get_user($row['id']);

            echo "<div class='swiper-slide card1'>
                            <div class='card-content'>
                                <div class='image'>
                                    <img src='" . $user['image'] . "' alt='lekari'>
                                </div>

                                <div class='media-icons'>
                                    <i class='fab fa-facebook'></i>
                                    <i class='fab fa-twitter'></i>
                                    <i class='fab fa-github'></i>
                                </div>

                                <div class='name-profession'>
                                    <span class='name'>" . $user['firstname'] . ' ' . $user['lastname'] . "</span>
                                    <span class='profession'><i class='fa-solid fa-user-doctor'></i> Lekar</span>
                                </div>
                                <div class='name-profession'>
                                    <span class='profession'><i class='fa-solid fa-envelope'></i> " . $user['email'] . "</span>
                                </div>

                                
                            </div>
                        </div>";
            
        }
    }
}

function display_lekari_promena() {
    
    $query = "SELECT * FROM `users` WHERE nalog = 'lekar' ORDER BY id ASC";
    $result = query($query);

    if($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $user = get_user($row['id']);

            echo "<div class='swiper-slide card'>
                            <div class='card-content'>
                                <div class='image'>
                                    <img src='" . $user['image'] . "' alt='lekari'>
                                </div>

                                <div class='media-icons'>
                                    <i class='fab fa-facebook'></i>
                                    <i class='fab fa-twitter'></i>
                                    <i class='fab fa-github'></i>
                                </div>

                                <div class='name-profession'>
                                    <span class='name'>" . $user['firstname'] . ' ' . $user['lastname'] . "</span>
                                    <span class='profession'><i class='fa-solid fa-user-doctor'></i> Lekar</span>
                                </div>

                                <div class='btnLekari'>
                                   <a  href='promenilekara.php?lekarid=". $user['id'] . "' ><button class='prijavise'>Prijavi se <i class='fa-solid fa-right-to-bracket'></i></button></a>
                                </div>
                            </div>
                        </div>";
            
        }
    }
}


function display_lekari_zahtev() {
    
    $query = "SELECT * FROM `zahtevi` WHERE  nalog = 'lekar' ORDER BY id ASC";
    $result = query($query);

    if($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $user = get_userFromZahtevi($row['id']);
            echo "<tr>
            <th scope='row'>" . $user['id'] . "</th>
            <td>" . $user['firstname'] . "</td>
            <td>" . $user['lastname'] . "</td>
            <td>" . $user['email'] . "</td>
            <td>
            <a class='btnPrijava' onclick='return checkPrihvatiLekara()' href='prihvatizahtev.php?zahtevid=". $user['id'] . "'>Prihvati zahtev</a>
            <a class='btnPrijava' onclick='return checkOdbijLekara()' href='odbijzahtev.php?zahtevid=". $user['id'] . "'>Odbij zahtev</a>
            </td>
        </tr>";
            
        }
    }
}


function display_pacijent_pregled($id_lekar_pacijent) {
    
    $query = "SELECT * FROM pregled WHERE id_lekar = $id_lekar_pacijent";
    $result = query($query);

    if($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            foreach($result as $row) { 
            $user = get_user($row['id_pacijent']);
                echo "<tr>
                <th scope='row'>" . $row['id'] . "</th>
                <td>" . $user['jmbg'] . "</td>
                <td>" . $user['firstname'] . "</td>
                <td>" . $user['lastname'] . "</td>
                <td>" . $user['email'] . "</td>
                <td>" . $user['pol'] . "</td>
                <td>" . $row['datum'] . "</td>
                <td>" . substr($row['vreme'],0,5 ). 'h' . "</td>
                
                </tr>";
        
            }
        }
    }
        
}

function display_pacijent_pregled_zakljucilecenje($id_lekar_pacijent) {
    
    $query = "SELECT * FROM lekarpacijent WHERE id_lekara = $id_lekar_pacijent";
    $result = query($query);

    if($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            foreach($result as $row) { 
            $user = get_user($row['id_pacijenta']);
                echo "<tr>
                <th scope='row'>" . $row['id_pacijenta'] . "</th>
                <td>" . $user['jmbg'] . "</td>
                <td>" . $user['firstname'] . "</td>
                <td>" . $user['lastname'] . "</td>
                <td>" . $user['email'] . "</td>
                <td>" . $user['pol'] . "</td>
                <td>
                <a class='btnPrijava1' onclick='return checkZakljuci()' href='zakljuci.php?zahtevid=". $user['id'] . "'><i class='fa-solid fa-circle-check'></i></a>
                </td>
                </tr>";
        
            }
        }
    }
        
}


function display_pacijent_pregled_card($id_lekar) {
    
    $query = "SELECT * FROM pregled WHERE id_lekar = $id_lekar";
    $result = query($query);

    
    if($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            foreach($result as $row) { 
            $user = get_user($row['id_pacijent']);
          
                echo "
                <div class='col-2'>
                    <div class='cardPacijenti'>
                        <div class='card-imgpacijent'>
                            <img src='" . $user['image'] . "'>
                        </div>
                        <ul class='social-iconspacijent'>
                            <li><a  href='karton1.php?karton=". $row['id'] . "&id_pacijent=". $user['id'] . "'>Dodaj karton <i class='ml-1 fa-solid fa-plus'></i></a></li>
                        </ul>
                        <div class='detailspacijent'>
                            <h2>" . $user['firstname'] . ' ' . $user['lastname'] . "</h2>
                            <div class='vremeflex'>
                            <span class='job-tittlepacij'>
                            
                            Termin: " . $row['datum'] . " 
                            Vreme: " . substr($row['vreme'],0,5) . 'h'."  
                            </span>
                            </div>
                        </div>
                    </div>
                </div> ";
        
            }
        }
    }
        
}
    


function display_pacijenti() {
    
    $query = "SELECT * FROM `users` WHERE nalog = 'pacijent' ORDER BY id ASC";
    $result = query($query);

    if($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $user = get_user($row['id']);
            echo "<tr>
            <th scope='row'>" . $user['id'] . "</th>
            <td>" . $user['firstname'] . "</td>
            <td>" . $user['lastname'] . "</td>
            <td>" . $user['email'] . "</td>
            <td>
            <a class='btnPrijava' onclick='return checkUkloniPacijenta()' href='uklonipacijenta.php?ukloniid=". $user['id'] . "'>Ukloni pacijenta <i class='fa-solid fa-trash-can'></i></a>
            </td>
        </tr>";
            
        }
    }
}

function display_zahtevi_promena() {
    
    $query = "SELECT * FROM zahtev_promena_lekara ORDER BY id ASC";
    $result = query($query);

    if($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $lekar = get_user($row['id_lekara']);
            $pacijent = get_user($row['id_pacijenta']);
            echo "<tr>
            <th scope='row'>" . $row['id'] . "</th>
            <td>" . $pacijent['firstname'] . ' ' . $pacijent['lastname'] ."</td>
            <td>" . $lekar['firstname'] . ' ' . $lekar['lastname'] ."</td>
            <td>" . $row['vreme'] . "</td>
            <td>
            <a class='btnPrijava' onclick='return checkPrihvatiZahtevPromena()' href='prihvatizahtevpromenu.php?prihvatiid=". $pacijent['id'] . "&id_lekar=". $lekar['id'] . "'>Prihvati zahtev <i class='fa-solid fa-circle-check'></i></a>
            <a class='btnPrijava' onclick='return checkOdbijZahtevPromena()' href='odbijzahtevpromenu.php?ukloniid=". $pacijent['id'] . "&id_lekar=". $lekar['id'] . "'>Odbij zahtev <i class='fa-solid fa-trash-can'></i></a>
            </td>
        </tr>";
            
        }
    }
}

function display_lekari_table() {
    
    $query = "SELECT * FROM `users` WHERE nalog = 'lekar' ORDER BY id ASC";
    $result = query($query);

    if($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $user = get_user($row['id']);

            echo "<div class='swiper-slide card'>
            <div class='card-content'>
                <div class='image'>
                    <img src='" . $user['image'] . "' alt='lekari'>
                </div>

                <div class='media-icons'>
                    <i class='fab fa-facebook'></i>
                    <i class='fab fa-twitter'></i>
                    <i class='fab fa-github'></i>
                </div>

                <div class='name-profession'>
                    <span class='name'>" . $user['firstname'] . ' ' . $user['lastname'] . "</span>
                    <span class='profession'><i class='fa-solid fa-user-doctor'></i> Lekar</span>
                </div>

                <div class='btnLekari'>
                    <a onclick='return checkUkloniLekara()' href='uklonilekara.php?ukloniid=". $user['id'] . "'><button class='prijavise'>Ukloni Lekara <i class='fa-solid fa-trash-can'></i></button></a>
                </div>
            </div>
        </div>";


            // <a class='btnPrijava' href='uklonilekara.php?ukloniid=". $user['id'] . "'>Ukloni Lekara <i class='fa-solid fa-trash-can'></i></a>
           
        // ";
            
        }
    }
}


function display_lekari_raspored() {
    
    $query = "SELECT * FROM `users` WHERE nalog = 'lekar' ORDER BY id ASC";
    $result = query($query);

    

    if($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $user = get_user($row['id']);
            // echo "<option value=" . $user['id'].">" . $user['firstname'] . ' ' . $user['lastname'] . ' ' . $user['id'] .  "</option>";
            // $_SESSION['idLekar'] = $lekar_id;
            foreach($result as $value) { 
                $lekar_id = $value['id'];
                // echo $lekar_id;
                echo "<option value=" . $lekar_id.">" . $value['firstname'] . ' ' . $value['lastname'] . "</option>";
            }
        }
    }

}
function display_raspored($id = NULL) {
    
    $query = "SELECT * FROM raspored where id_lekar = " . $id;
    $result = query($query);

    

    if($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            // $user = get_user($row['id']);
            foreach($result as $raspored) { 
        
                echo "<option value=" . $raspored['id'] .">" . $raspored['datum'] . ' ' . substr($raspored['vreme'],0,5 ). 'h' . "</option>";
            }    
        }
    }
    else {
        echo "<option>Nema dostupnih termina</option>";
            
    }
}

function dodaj_raspored() {

if($_SERVER['REQUEST_METHOD'] == 'POST') {
        
    $datum = clean($_POST['datum']);
    $lekar = clean($_POST['lekari']);
    $vreme = clean($_POST['vreme']);

    $lekari = get_user($lekar);
    $firstname = $lekari['firstname'];
    $lastname = $lekari['lastname'];
    // $email = $lekar['email'];
    $jmbg = $lekari['jmbg'];
    // $image = $lekar['image'];

    

    $sql = "INSERT INTO raspored (datum ,vreme, id_lekar, lekarime, lekarprezime, jmbg) ";
    $sql .= "VALUES('$datum', '$vreme', $lekar, '$firstname', '$lastname', '$jmbg')";
    confirm(query($sql));
    set_message("Uspešno ste dodali raspored!");
    // redirect("profile.php");
    }
}

function send_reset() {

if($_SERVER['REQUEST_METHOD'] == 'POST') {
        
    $email = clean($_POST['email']);
   

   send_email_for_reset($email);
   echo("<script>location.href = 'login.php?msg=Uspešno poslat zahtev';</script>");
    }
}

function validate_reset_pass() {
    $errors = [];

    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $email = $_GET['email'];
        $lozinka = clean($_POST['lozinka']);
        $potvrda_lozinke = clean($_POST['potvrda_lozinka']);
        

        
        
        if(strlen($lozinka) < 8) {
            $errors[] = "Vaša lozinka mora biti duža od 8 karaktera!";
        }

        if($lozinka != $potvrda_lozinke) {
            $errors[] = "Vaše lozinke se ne poklapaju!";
        }
        

        if(!empty($errors)) {
            foreach ($errors as $error) {
                echo "<div class='alert'>" . $error . "</div>";
            }
        } else {
            reset_password($lozinka, $email);
        }
    }
}

function reset_password($lozinka, $email) {
    $lozinka = escape($lozinka);
    $email = escape($email);

    $lozinka = password_hash($lozinka, PASSWORD_DEFAULT);
   
        $sql2 = "UPDATE users SET password = '$lozinka' WHERE email = '$email'";
        
        confirm(query($sql2));
        // echo("<script>location.href = 'login.php?msg=Uspešno resetovanje lozinke';</script>");
        
        // set_message("Uspešno resetovanje lozinke");
        // redirect("login.php");
        
   echo("<script>location.href = 'login.php?msg=Uspešno resetovanje lozinke!';</script>");
}
function verify_acc($email) {
    
   
        $sql2 = "UPDATE users SET verify = 1 WHERE email = '$email'";
        
        confirm(query($sql2));
        // echo("<script>location.href = 'login.php?msg=Uspešno resetovanje lozinke';</script>");
        
}



function zakazite_pregled($id = NULL) {
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $raspored = clean($_POST['raspored']);
        $raspored_table = get_raspored_table($raspored);
        $datum = $raspored_table['datum'];
        $vreme = $raspored_table['vreme'];
        // $raspored_id = $raspored_table['id'];
        $user_id = $id; //id pacijent
      
        
        $lekar_pacijent = get_lekar_pacijent($user_id); //pacijent
        $lekar_pacijent_id = $lekar_pacijent['id']; 
        $lekar_id = $lekar_pacijent['id_lekara'];  //id lekara

      

        
        // $raspored = get_raspored($lekar_id);

        $sql = "INSERT INTO pregled (id_raspored ,id_lekar, id_pacijent, datum, vreme) ";
        $sql .= "VALUES($raspored, $lekar_id, $user_id, '$datum', '$vreme')";
        
        $sql2 = "DELETE FROM raspored WHERE id=$raspored";
        
        
        confirm(query($sql));
        confirm(query($sql2));
        echo("<script>location.href = 'vaslekar.php?msg=$msg';</script>");
     
        set_message("uspesno");
        // redirect("vaslekar.php");
            // header("Refresh:0");
            //  echo("<script>location.href = '".ADMIN_URL."/vaslekar1.php?msg=$msg';</script>"); 
                // confirm(query($sql));
    }
}

function display_vremedatum_pregled($id_pacijent) {
    
    $query = "SELECT * FROM pregled WHERE id_pacijent = $id_pacijent";
    $result = query($query);

    if($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $user = get_user($id_pacijent);
            $lekar = get_user($row['id_lekar']);
                echo "<tr>
                <td>" . $user['firstname'] . "</td>
                <td>" . $user['lastname'] . "</td>
                
                <td>" . $row['datum'] . "</td>
                <td>" . substr($row['vreme'],0,5 ). 'h' . "</td>
                <td>" . $lekar['firstname'] . ' ' . $lekar['lastname'] . "</td>
                
                </tr>";
        
            
        }
    }
        
}

function dodaj_karton($id_lekar, $id_pregled) {
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $nalaz = clean($_POST['nalaz']);
        $dijagnoza = clean($_POST['dijagnoza']);
        $pregled = clean($_POST['pregled']);
        $id_pacijent = $_GET['id_pacijent'];
        $id_lekar = $id_lekar;
        $karton = get_karton($id_pacijent);

        $sql = "INSERT INTO karton (nalaz, dijagnoza, pregled, id_lekar, id_pacijent, id_pregled) ";
        $sql .= "VALUES('$nalaz', '$dijagnoza', '$pregled', $id_lekar, $id_pacijent, $id_pregled)";
     
        
        confirm(query($sql));
       
    
    }
}

function create_posts_admin() {
    $errors = [];
    if($_SERVER['REQUEST_METHOD'] == "POST") {
        $naslov = clean($_POST['naslov']);
        $sadrzaj = clean($_POST['sadrzaj']);

        $img_name = $_FILES['my_image']['name'];
        $img_size = $_FILES['my_image']['size'];
        $tmp_name = $_FILES['my_image']['tmp_name'];
        $error_img = $_FILES['my_image']['error'];

       
        if(strlen($sadrzaj) > 700) {
            $errors[] = "Vas tekst sadrzi vise od 700 karaktera";
        }

        if(!empty($errors)) {
            foreach($errors as $error) {
                echo '<div class="alert">' . $error . ' </div>';
            }
        } else {
            $naslov = filter_var($naslov, FILTER_SANITIZE_STRING);
            $naslov = escape($naslov);
            $sadrzaj = filter_var($sadrzaj, FILTER_SANITIZE_STRING);
            $sadrzaj = escape($sadrzaj);
            $user = get_user();
            $user_id = $user['id'];

            if($error_img === 0) {
                if($img_size > 5000000) {
                    $em = "Your file is too large";
                     set_message("Vaš fajl je prevelik");
                     
            header("location:obavestenje.php?error=Vaš fajl je prevelik!");
    
                }
                else {
                    $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
                    $img_ex_lc = strtolower($img_ex);
    
                    $allowed_exs = array("jpg", "jpeg", "png");
    
                    if(in_array($img_ex_lc, $allowed_exs)) {
                        $new_img_name = uniqid("IMG-",true). '.'.$img_ex_lc;
                        $img_upload_path = 'uploads/'.$new_img_name;
                        move_uploaded_file($tmp_name, $img_upload_path);
                        $query = "INSERT INTO obavestenja(naslov, sadrzaj, slika, id_lekar)";
            $query .= "VALUES('$naslov', '$sadrzaj', '$img_upload_path', $user_id)";
            confirm(query($query));
           
            header("location:obavestenje.php?msg=Uspešno ste dodali obaveštenje!");
                    }else {
                        $em = "Nepoznata greska";
            header("location:obavestenje.php?error=Nepoznata greška!");
                    }
                }
            } else {
                $em = "Nepoznata greska";
                
            header("location:obavestenje.php?error=Nepoznata greška!");
                // redirect("index.php?error=$em");
            }   
        }  
    }
}

function create_posts() {
    $errors = [];
    if($_SERVER['REQUEST_METHOD'] == "POST") {
        $naslov = clean($_POST['naslov']);
        $sadrzaj = clean($_POST['sadrzaj']);

        $img_name = $_FILES['my_image']['name'];
        $img_size = $_FILES['my_image']['size'];
        $tmp_name = $_FILES['my_image']['tmp_name'];
        $error_img = $_FILES['my_image']['error'];

       
        if(strlen($sadrzaj) > 700) {
            $errors[] = "Vas tekst sadrzi vise od 700 karaktera";
        }

        if(!empty($errors)) {
            foreach($errors as $error) {
                echo '<div class="alert">' . $error . ' </div>';
            }
        } else {
            $naslov = filter_var($naslov, FILTER_SANITIZE_STRING);
            $naslov = escape($naslov);
            $sadrzaj = filter_var($sadrzaj, FILTER_SANITIZE_STRING);
            $sadrzaj = escape($sadrzaj);
            $user = get_user();
            $user_id = $user['id'];

            if($error_img === 0) {
                if($img_size > 5000000) {
                    $em = "Your file is too large";
                     set_message("Vaš fajl je prevelik"); 
                     echo("<script>location.href = 'obavestenje.php?error=Vaš fajl je prevelik!';</script>");
    
                }
                else {
                    $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
                    $img_ex_lc = strtolower($img_ex);
    
                    $allowed_exs = array("jpg", "jpeg", "png");
    
                    if(in_array($img_ex_lc, $allowed_exs)) {
                        $new_img_name = uniqid("IMG-",true). '.'.$img_ex_lc;
                        $img_upload_path = 'uploads/'.$new_img_name;
                        move_uploaded_file($tmp_name, $img_upload_path);
                        $query = "INSERT INTO obavestenja(naslov, sadrzaj, slika, id_lekar)";
            $query .= "VALUES('$naslov', '$sadrzaj', '$img_upload_path', $user_id)";
            confirm(query($query));
            set_message("Uspešno ste dodali obaveštenje");
            
             echo("<script>location.href = 'obavestenje.php?msg=Uspešno ste dodali obaveštenje!';</script>");
    
                    }else {
                        $em = "Nepoznata greska";
                        set_message("Nepoznata greska");
                        // redirect("index.php?error=$em");
                    }
                }
            } else {
                $em = "Nepoznata greska";
                set_message("Nepoznata greska");
                // redirect("index.php?error=$em");
            }   
        }  
    }
}

function fetch_all_posts() {
    $query = "SELECT * FROM obavestenja ORDER BY vreme DESC";
    $result = query($query);

    if($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $user = get_user($row['id_lekar']);
            $sadrzajj = substr($row['sadrzaj'],0,200);

            echo "<div class='blog-post'>
                <div class='blog-post__img'>
                    <img class='img_post' src='" .  $row['slika'] ."' alt='post'>
                </div>
                <div class='blog-post__info'>
                    <div class='blog-post__date'>
                        <span>" . $user['firstname'] . ' ' . $user['lastname'] ."</span>
                        <span>" . $row['vreme'] . "</span>
                    </div>
                    <div class='blog-post__title'>" . $row['naslov'] . "</div>
                    <p class='blog-post__text'>
                       $sadrzajj ...
                    </p>
                    <a href='prikazobavestenje.php?id=". $row['id'] . "' class='blog-post__cta'>Pogledaj više</a>
                </div>
            </div>

            <div class='margin-y'></div>
            ";
        }
    }
}
function fetch_post($id) {
    $query = "SELECT * FROM obavestenja WHERE id = $id";
    $result = query($query);

    if($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $user = get_user($row['id_lekar']);
            $sadrzajj = substr($row['sadrzaj'],0,200);

            echo " <div class='card_obav'>
            <div class='thubmnail_obav'>
                <img src='" .  $row['slika'] ."' class='left'>
            </div>
            <div class='right'>
                <h1 class='h1sadrzaj'>" . $row['naslov'] . "</h1>
                <div class='author_obav'>
                    <h2 class='h2sadrzaj'>" . $user['firstname'] . ' ' . $user['lastname'] . "</h2>
                </div>
                <div class='seperator'>
                    <p class='psadrzaj'>" . $row['sadrzaj'] . "</p>
                </div>
                <h5 class='h5sadrzaj'>" . substr($row['vreme'],0,10) . "</h5>
                <h6 class='h6sadrzaj'>" . substr($row['vreme'],11,13) . "</h6>
            </div>
        </div>
            ";
        }
    }
}

function probaaaaa($pregled_id) {
    $query = "SELECT * FROM karton where id_pregled=" . $pregled_id;
    $result9 = query($query);  
    if($result9->num_rows > 0) {
    $karton_pregled = get_karton_idPregled($pregled_id);
    $id_karton_pregled = $karton_pregled['id_pregled'];
    return $id_karton_pregled;
    }
}

function promeniProfil_admin_validate($id) {
    $errors = [];

    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $firstname = clean($_POST['imepromena']);
        $lastname = clean($_POST['prezimepromena']);
        $lozinka = clean($_POST['passpromena']);
        $potvrda_lozinke = clean($_POST['passrptpromena']);
        
        
        if(strlen($lozinka) < 8) {
            $errors[] = "Vaša lozinka mora biti duža od 8 karaktera!";
        }

        if($lozinka != $potvrda_lozinke) {
            $errors[] = "Vaše lozinke se ne poklapaju!";
        }
        

        if(!empty($errors)) {
            foreach ($errors as $error) {
                echo "<div class='alert'>" . $error . "</div>";
            }
        } else {
            promeniProfil_admin($id, $firstname, $lastname, $lozinka);
        }
    }
}

function promeniProfil_admin($id_admin, $firstname, $lastname, $lozinka) {
    $firstname = escape($firstname);
    $lastname = escape($lastname);
    $lozinka = escape($lozinka);

    $lozinka = password_hash($lozinka, PASSWORD_DEFAULT);
   
        $sql2 = "UPDATE users SET password = '$lozinka', firstname = '$firstname', lastname = '$lastname' WHERE id = $id_admin";
        
        confirm(query($sql2));
        // echo("<script>location.href = 'login.php?msg=Uspešno resetovanje lozinke';</script>");
        
        // set_message("Uspešno resetovanje lozinke");
        // redirect("login.php");
        
   echo("<script>location.href = 'profileAdmin.php?msg=Uspešne izmene podataka!';</script>");
}

function promeniProfil_lekar_validate($id) {
    $errors = [];

    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $firstname = clean($_POST['imepromena']);
        $lastname = clean($_POST['prezimepromena']);
        $lozinka = clean($_POST['passpromena']);
        $potvrda_lozinke = clean($_POST['passrptpromena']);
        
        
        if(strlen($lozinka) < 8) {
            $errors[] = "Vaša lozinka mora biti duža od 8 karaktera!";
        }

        if($lozinka != $potvrda_lozinke) {
            $errors[] = "Vaše lozinke se ne poklapaju!";
        }
        

        if(!empty($errors)) {
            foreach ($errors as $error) {
                echo "<div class='alert'>" . $error . "</div>";
            }
        } else {
            promeniProfil_lekar($id, $firstname, $lastname, $lozinka);
        }
    }
}

function promeniProfil_lekar($id_admin, $firstname, $lastname, $lozinka) {
    $firstname = escape($firstname);
    $lastname = escape($lastname);
    $lozinka = escape($lozinka);

    $lozinka = password_hash($lozinka, PASSWORD_DEFAULT);
   
        $sql2 = "UPDATE users SET password = '$lozinka', firstname = '$firstname', lastname = '$lastname' WHERE id = $id_admin";
        
        confirm(query($sql2));
        // echo("<script>location.href = 'login.php?msg=Uspešno resetovanje lozinke';</script>");
        
        // set_message("Uspešno resetovanje lozinke");
        // redirect("login.php");
        
   echo("<script>location.href = 'profileLekar.php?msg=Uspešne izmene podataka!';</script>");
}

function promeniProfil_pacijent_validate($id) {
    $errors = [];

    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $firstname = clean($_POST['imepromena']);
        $lastname = clean($_POST['prezimepromena']);
        $lozinka = clean($_POST['passpromena']);
        $potvrda_lozinke = clean($_POST['passrptpromena']);
        
        
        if(strlen($lozinka) < 8) {
            $errors[] = "Vaša lozinka mora biti duža od 8 karaktera!";
        }

        if($lozinka != $potvrda_lozinke) {
            $errors[] = "Vaše lozinke se ne poklapaju!";
        }
        

        if(!empty($errors)) {
            foreach ($errors as $error) {
                echo "<div class='alert'>" . $error . "</div>";
            }
        } else {
            promeniProfil_pacijent($id, $firstname, $lastname, $lozinka);
        }
    }
}

function promeniProfil_pacijent($id_admin, $firstname, $lastname, $lozinka) {
    $firstname = escape($firstname);
    $lastname = escape($lastname);
    $lozinka = escape($lozinka);

    $lozinka = password_hash($lozinka, PASSWORD_DEFAULT);
   
        $sql2 = "UPDATE users SET password = '$lozinka', firstname = '$firstname', lastname = '$lastname' WHERE id = $id_admin";
        
        confirm(query($sql2));
        // echo("<script>location.href = 'login.php?msg=Uspešno resetovanje lozinke';</script>");
        
        // set_message("Uspešno resetovanje lozinke");
        // redirect("login.php");
        
   echo("<script>location.href = 'profile.php?msg=Uspešne izmene podataka!';</script>");
}


?>

<script>
function checkZakljuci() {
    return confirm(`Da li ste sigurni da želite da zaključite lečenje?`);
}

function checkUkloniPacijenta() {
    return confirm(`Da li ste sigurni da želite ukloniti pacijenta?`);
}

function checkUkloniLekara() {
    return confirm(`Da li ste sigurni da želite ukloniti lekara?`);
}

function checkOdbijLekara() {
    return confirm(`Da li ste sigurni da želite odbiti zahtev lekara?`);
}

function checkPrihvatiLekara() {
    return confirm(`Da li ste sigurni da želite prihvatiti zahtev lekara?`);
}

function checkPrihvatiZahtevPromena() {
    return confirm(`Da li ste sigurni da želite prihvatiti zahtev?`);
}

function checkOdbijZahtevPromena() {
    return confirm(`Da li ste sigurni da želite odbiti zahtev?`);
}
function checkIzbrisi() {
    return confirm(`Da li ste sigurni da želite obrisati obaveštenje?`);
}
</script>