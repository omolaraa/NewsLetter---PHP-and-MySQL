<?php

include 'includes/autoLoader.inc.php';

$newsLetter = new SubscribersView();
$NL_subject = 'Enroll';
if (isset($_POST['select_subject'])){
    $NL_subject = $_POST['NL_subject'];
    $newsLetter->showNLInfo($NL_subject);
}else{
    $newsLetter->showNLInfo($NL_subject);
}

?>


<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional //EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="x-apple-disable-message-reformatting">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <main>
        <link rel="stylesheet" href="css/styles.css">
    </main>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Email Template</title>

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700&display=swap" rel="stylesheet" type="text/css">

</head>

<nav class="navbar bg-secondary">
  <div class="container-fluid">
  <div>
          <ul class="navbar-nav ms-auto d-flex flex-row">
          <li class="nav-item mx-5">
              <a href="index.php" class="nav-link  text-light">Home</a>
            </li>
            <li class="nav-item mx-5">
              <a href="addNL_content.php" class="nav-link  text-light">Add News Letter</a>
            </li>
            <li class="nav-item mx-5">
              <a href="editNL_content.php" class="nav-link  text-light">Edit News Letter</a>
            </li>
          </ul>
        </div>
  </div>
</nav>

<body class="clean-body u_body" style="margin: 0;padding: 0;-webkit-text-size-adjust: 100%;background-color: #ffffff;color: #414042">

    <table id="u_body" style="border-collapse: collapse;table-layout: fixed;border-spacing: 0;vertical-align: top;min-width: 320px;Margin: 0 auto;background-color: #ffffff;width:100%" cellpadding="0" cellspacing="0">
        <tbody>
            <tr style="vertical-align: top">
                <td style="word-break: break-word;border-collapse: collapse !important;vertical-align: top">

                    <div class="u-row-container" style="padding: 0px;background-color: transparent">
                        <div class="u-row no-stack" style="Margin: 0 auto;min-width: 320px;max-width: 600px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: transparent;">
                            <div style="border-collapse: collapse;display: table;width: 100%;height: 100%;background-color: transparent;">

                                <div class="u-col u-col-33p33" style="max-width: 320px;min-width: 200px;display: table-cell;vertical-align: top;">
                                    <div style="height: 100%;width: 100% !important;">
                                        <div style="box-sizing: border-box; height: 100%; padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;"><!--<![endif]-->

                                            <table id="u_content_image_1" style="font-family:'Open Sans',sans-serif;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
                                                <tbody>
                                                    <tr>
                                                        <td class="v-container-padding-padding" style="overflow-wrap:break-word;word-break:break-word;padding:20px 10px 10px;font-family:'Open Sans',sans-serif;" align="left">

                                                            <table width="100%" cellpadding="0" cellspacing="0" border="0">
                                                                <tr>
                                                                    <td class="v-text-align" style="padding-right: 0px;padding-left: 0px;" align="left">

                                                                        <img align="left" border="0" src="images/image-1.png" alt="image" title="image" style="outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;clear: both;display: inline-block !important;border: none;height: auto;float: none;width: 53%;max-width: 95.4px;" width="95.4" class="v-src-width v-src-max-width" />

                                                                    </td>
                                                                </tr>
                                                            </table>

                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>

                                        </div>
                                    </div>
                                </div>
                                <div class="u-col u-col-66p67" style="max-width: 320px;min-width: 400px;display: table-cell;vertical-align: top;">
                                    <div style="height: 100%;width: 100% !important;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;">
                                        <div style="box-sizing: border-box; height: 100%; padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;"><!--<![endif]-->

                                            <table id="u_content_heading_1" style="font-family:'Open Sans',sans-serif;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
                                                <tbody>
                                                    <tr>
                                                        <td class="v-container-padding-padding" style="overflow-wrap:break-word;word-break:break-word;padding:23px 10px 10px;font-family:'Open Sans',sans-serif;" align="left">

                                                            <h1 class="v-text-align v-font-size" style="margin: 0px; line-height: 140%; text-align: right; word-wrap: break-word; font-size: 16px; font-weight: 400;">What We Do?</h1>

                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>



                    <div class="u-row-container" style="padding: 0px;background-color: transparent">
                        <div class="u-row" style="Margin: 0 auto;min-width: 320px;max-width: 600px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: transparent;">
                            <div style="border-collapse: collapse;display: table;width: 100%;height: 100%;background-color: transparent;">

                                <div class="u-col u-col-100" style="max-width: 320px;min-width: 600px;display: table-cell;vertical-align: top;">
                                    <div style="height: 100%;width: 100% !important;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;">
                                        <div style="box-sizing: border-box; height: 100%; padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;">

                                            <table style="font-family:'Open Sans',sans-serif;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
                                                <tbody>
                                                    <tr>
                                                        <td class="v-container-padding-padding" style="overflow-wrap:break-word;word-break:break-word;padding:10px;font-family:'Open Sans',sans-serif;" align="left">

                                                            <table height="0px" align="center" border="0" cellpadding="0" cellspacing="0" width="100%" style="border-collapse: collapse;table-layout: fixed;border-spacing: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;vertical-align: top;border-top: 1px solid #BBBBBB;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%">
                                                                <tbody>
                                                                    <tr style="vertical-align: top">
                                                                        <td style="word-break: break-word;border-collapse: collapse !important;vertical-align: top;font-size: 0px;line-height: 0px;mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%">
                                                                            <span>&#160;</span>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>

                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>

                                            <table id="u_content_image_2" style="font-family:'Open Sans',sans-serif;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
                                                <tbody>
                                                    <tr>
                                                        <td class="v-container-padding-padding" style="overflow-wrap:break-word;word-break:break-word;padding:30px 0px 0px;font-family:'Open Sans',sans-serif;" align="left">

                                                            <table width="100%" cellpadding="0" cellspacing="0" border="0">
                                                                <tr>
                                                                    <td class="v-text-align" style="padding-right: 0px;padding-left: 0px;" align="center">

                                                                        <img align="center" border="0" src="images/<?php echo $newsLetter->NL_bannerImg; ?>" alt="image" title="image" style="outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;clear: both;display: inline-block !important;border: none;height: auto;float: none;width: 100%;max-width: 600px;" width="600" class="v-src-width v-src-max-width" />

                                                                    </td>
                                                                </tr>
                                                            </table>

                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>



                    <div class="u-row-container" style="padding: 0px;background-color: transparent">
                        <div class="u-row" style="Margin: 0 auto;min-width: 320px;max-width: 600px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: transparent;">
                            <div style="border-collapse: collapse;display: table;width: 100%;height: 100%;background-color: transparent;">

                                <div class="u-col u-col-57p33" style="max-width: 320px;min-width: 343.98px;display: table-cell;vertical-align: top;">
                                    <div style="height: 100%;width: 100% !important;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;">
                                        <div style="box-sizing: border-box; height: 100%; padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;"><!--<![endif]-->

                                            <table id="u_content_heading_2" style="font-family:'Open Sans',sans-serif;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
                                                <tbody>
                                                    <tr>
                                                        <td class="v-container-padding-padding" style="overflow-wrap:break-word;word-break:break-word;padding:60px 10px 10px;font-family:'Open Sans',sans-serif;" align="left">

                                                            <h1 class="v-text-align v-font-size" style="margin: 0px; line-height: 120%; text-align: left; word-wrap: break-word; font-size: 27px; font-weight: 400;"><strong> <?php echo $newsLetter->NL_introTitle; ?> </strong></h1>

                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>

                                        </div>
                                    </div>
                                </div>
                                <div class="u-col u-col-42p67" style="max-width: 320px;min-width: 256.02px;display: table-cell;vertical-align: top;">
                                    <div style="height: 100%;width: 100% !important;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;">
                                        <div style="box-sizing: border-box; height: 100%; padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;"><!--<![endif]-->

                                            <table id="u_content_text_1" style="font-family:'Open Sans',sans-serif;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
                                                <tbody>
                                                    <tr>
                                                        <td class="v-container-padding-padding" style="overflow-wrap:break-word;word-break:break-word;padding:60px 10px;font-family:'Open Sans',sans-serif;" align="left">

                                                            <div class="v-text-align v-font-size" style="font-size: 14px; line-height: 140%; text-align: left; word-wrap: break-word;">
                                                                <p style="line-height: 140%;"><?php echo $newsLetter->NL_introDescription; ?></p>
                                                            </div>

                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>



                    <div class="u-row-container" style="padding: 0px;background-color: transparent">
                        <div class="u-row" style="Margin: 0 auto;min-width: 320px;max-width: 600px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: transparent;">
                            <div style="border-collapse: collapse;display: table;width: 100%;height: 100%;background-color: transparent;">

                                <div class="u-col u-col-32p5" style="max-width: 320px;min-width: 195px;display: table-cell;vertical-align: top;">
                                    <div style="height: 100%;width: 100% !important;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;">
                                        <div style="box-sizing: border-box; height: 100%; padding: 0px;border-top: 0px solid transparent;border-left: 1px solid #CCC;border-right: 0px solid transparent;border-bottom: 1px solid #CCC;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;"><!--<![endif]-->

                                            <table style="font-family:'Open Sans',sans-serif;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
                                                <tbody>
                                                    <tr>
                                                        <td class="v-container-padding-padding" style="overflow-wrap:break-word;word-break:break-word;padding:0px;font-family:'Open Sans',sans-serif;" align="left">

                                                            <table width="100%" cellpadding="0" cellspacing="0" border="0">
                                                                <tr>
                                                                    <td class="v-text-align" style="padding-right: 0px;padding-left: 0px;" align="center">

                                                                        <img align="center" border="0" src="images/image-6.png" alt="image" title="image" style="outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;clear: both;display: inline-block !important;border: none;height: auto;float: none;width: 100%;max-width: 195px;" width="195" class="v-src-width v-src-max-width" />

                                                                    </td>
                                                                </tr>
                                                            </table>

                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>

                                            <table id="u_content_heading_4" style="font-family:'Open Sans',sans-serif;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
                                                <tbody>
                                                    <tr>
                                                        <td class="v-container-padding-padding" style="overflow-wrap:break-word;word-break:break-word;padding:20px 30px 10px 10px;font-family:'Open Sans',sans-serif;" align="left">

                                                            <h1 class="v-text-align v-font-size" style="margin: 0px; line-height: 120%; text-align: left; word-wrap: break-word; font-size: 22px; font-weight: 400;"><strong>Keeps Employee Up to Date</strong></h1>

                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>

                                            <table style="font-family:'Open Sans',sans-serif;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
                                                <tbody>
                                                    <tr>
                                                        <td class="v-container-padding-padding" style="overflow-wrap:break-word;word-break:break-word;padding:0px;font-family:'Open Sans',sans-serif;" align="left">

                                                            <table width="100%" cellpadding="0" cellspacing="0" border="0">
                                                                <tr>
                                                                    <td class="v-text-align" style="padding-right: 0px;padding-left: 0px;" align="center">

                                                                        <img align="center" border="0" src="images/image-2.png" alt="image" title="image" style="outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;clear: both;display: inline-block !important;border: none;height: auto;float: none;width: 100%;max-width: 195px;" width="195" class="v-src-width v-src-max-width" />

                                                                    </td>
                                                                </tr>
                                                            </table>

                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>

                                            <table id="u_content_heading_5" style="font-family:'Open Sans',sans-serif;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
                                                <tbody>
                                                    <tr>
                                                        <td class="v-container-padding-padding" style="overflow-wrap:break-word;word-break:break-word;padding:20px 35px 10px 10px;font-family:'Open Sans',sans-serif;" align="left">

                                                            <h1 class="v-text-align v-font-size" style="margin: 0px; line-height: 120%; text-align: left; word-wrap: break-word; font-size: 22px; font-weight: 400;"><strong>Attract Top Companies</strong></h1>

                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>

                                        </div>
                                    </div>
                                </div>
                                <div class="u-col u-col-67p5" style="max-width: 320px;min-width: 405px;display: table-cell;vertical-align: top;">
                                    <div style="height: 100%;width: 100% !important;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;">
                                        <div style="box-sizing: border-box; height: 100%; padding: 0px;border-top: 0px solid transparent;border-left: 1px solid #CCC;border-right: 1px solid #CCC;border-bottom: 1px solid #CCC;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;"><!--<![endif]-->

                                            <table style="font-family:'Open Sans',sans-serif;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
                                                <tbody>
                                                    <tr>
                                                        <td class="v-container-padding-padding" style="overflow-wrap:break-word;word-break:break-word;padding:0px;font-family:'Open Sans',sans-serif;" align="left">

                                                            <table width="100%" cellpadding="0" cellspacing="0" border="0">
                                                                <tr>
                                                                    <td class="v-text-align" style="padding-right: 0px;padding-left: 0px;" align="center">

                                                                        <img align="center" border="0" src="images/image-3.png" alt="image" title="image" style="outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;clear: both;display: inline-block !important;border: none;height: auto;float: none;width: 100%;max-width: 405px;" width="405" class="v-src-width v-src-max-width" />

                                                                    </td>
                                                                </tr>
                                                            </table>

                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>

                                            <table id="u_content_heading_3" style="font-family:'Open Sans',sans-serif;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
                                                <tbody>
                                                    <tr>
                                                        <td class="v-container-padding-padding" style="overflow-wrap:break-word;word-break:break-word;padding:20px 181px 30px 10px;font-family:'Open Sans',sans-serif;" align="left">

                                                            <h1 class="v-text-align v-font-size" style="margin: 0px; line-height: 120%; text-align: left; word-wrap: break-word; font-size: 22px; font-weight: 400;"><strong>Inspire Employees To Learn More </strong></h1>

                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>


                    <div class="u-row-container" style="padding: 0px;background-color: transparent">
                        <div class="u-row" style="Margin: 0 auto;min-width: 320px;max-width: 600px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: transparent;">
                            <div style="border-collapse: collapse;display: table;width: 100%;height: 100%;background-color: transparent;">

                                <div class="u-col u-col-50" style="max-width: 320px;min-width: 300px;display: table-cell;vertical-align: top;">
                                    <div style="height: 100%;width: 100% !important;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;">
                                        <div style="box-sizing: border-box; height: 100%; padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;"><!--<![endif]-->

                                            <table id="u_content_image_6" style="font-family:'Open Sans',sans-serif;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
                                                <tbody>
                                                    <tr>
                                                        <td class="v-container-padding-padding" style="overflow-wrap:break-word;word-break:break-word;padding:60px 0px 10px;font-family:'Open Sans',sans-serif;" align="left">

                                                            <table width="100%" cellpadding="0" cellspacing="0" border="0">
                                                                <tr>
                                                                    <td class="v-text-align" style="padding-right: 0px;padding-left: 0px;" align="center">

                                                                        <img align="center" border="0" src="images/image-11.png" alt="image" title="image" style="outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;clear: both;display: inline-block !important;border: none;height: auto;float: none;width: 100%;max-width: 300px;" width="300" class="v-src-width v-src-max-width" />

                                                                    </td>
                                                                </tr>
                                                            </table>

                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>

                                        </div>
                                    </div>
                                </div>
                                <div class="u-col u-col-50" style="max-width: 320px;min-width: 300px;display: table-cell;vertical-align: top;">
                                    <div style="height: 100%;width: 100% !important;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;">
                                        <div style="box-sizing: border-box; height: 100%; padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;"><!--<![endif]-->

                                            <table id="u_content_image_7" style="font-family:'Open Sans',sans-serif;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
                                                <tbody>
                                                    <tr>
                                                        <td class="v-container-padding-padding" style="overflow-wrap:break-word;word-break:break-word;padding:70px 10px 10px;font-family:'Open Sans',sans-serif;" align="left">

                                                            <table width="100%" cellpadding="0" cellspacing="0" border="0">
                                                                <tr>
                                                                    <td class="v-text-align" style="padding-right: 0px;padding-left: 0px;" align="left">

                                                                        <img align="left" border="0" src="https://cdn.templates.unlayer.com/assets/1684131548201-“.png" alt="image" title="image" style="outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;clear: both;display: inline-block !important;border: none;height: auto;float: none;width: 22%;max-width: 61.6px;" width="61.6" class="v-src-width v-src-max-width" />

                                                                    </td>
                                                                </tr>
                                                            </table>

                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>

                                            <table id="u_content_heading_6" style="font-family:'Open Sans',sans-serif;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
                                                <tbody>
                                                    <tr>
                                                        <td class="v-container-padding-padding" style="overflow-wrap:break-word;word-break:break-word;padding:0px 10px;font-family:'Open Sans',sans-serif;" align="left">

                                                            <h1 class="v-text-align v-font-size" style="margin: 0px; line-height: 140%; text-align: left; word-wrap: break-word; font-size: 22px; font-weight: 400;"><strong><?php echo $newsLetter->NL_endTitle; ?></strong></h1>

                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>

                                            <table id="u_content_text_2" style="font-family:'Open Sans',sans-serif;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
                                                <tbody>
                                                    <tr>
                                                        <td class="v-container-padding-padding" style="overflow-wrap:break-word;word-break:break-word;padding:5px 10px 10px;font-family:'Open Sans',sans-serif;" align="left">

                                                            <div class="v-text-align v-font-size" style="font-size: 14px; line-height: 140%; text-align: left; word-wrap: break-word;">
                                                                <p style="line-height: 140%;"><?php echo $newsLetter->NL_endDescription; ?></p>
                                                                <p style="line-height: 140%;"> </p>
                                                                <p style="line-height: 140%;">Quis ipsum suspendisse ultrices gravida. Risus commodo viverra.</p>
                                                            </div>

                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>



                    <div class="u-row-container" style="padding: 0px;background-color: transparent">
                        <div class="u-row" style="Margin: 0 auto;min-width: 320px;max-width: 600px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: transparent;">
                            <div style="border-collapse: collapse;display: table;width: 100%;height: 100%;background-color: transparent;">

                                <div class="u-col u-col-100" style="max-width: 320px;min-width: 600px;display: table-cell;vertical-align: top;">
                                    <div style="height: 100%;width: 100% !important;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;">
                                        <div style="box-sizing: border-box; height: 100%; padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;"><!--<![endif]-->

                                            <table id="u_content_button_1" style="font-family:'Open Sans',sans-serif;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
                                                <tbody>
                                                    <tr>
                                                        <td class="v-container-padding-padding" style="overflow-wrap:break-word;word-break:break-word;padding:60px 10px 10px;font-family:'Open Sans',sans-serif;" align="left">

                                                            <div class="v-text-align" align="center">
                                                                <a href="https://www.unlayer.com" target="_blank" class="v-button v-size-width v-font-size" style="box-sizing: border-box;display: inline-block;font-family:'Open Sans',sans-serif;text-decoration: none;-webkit-text-size-adjust: none;text-align: center;color: #FFFFFF; background-color: #78b299; border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px; width:27%; max-width:100%; overflow-wrap: break-word; word-break: break-word; word-wrap:break-word; mso-border-alt: none;font-size: 14px;">
                                                                    <span style="display:block;padding:10px 20px;line-height:120%;"><strong><span style="line-height: 16.8px;">Enroll Now</span></strong></span>
                                                                </a>
                                                            </div>

                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>

                                            <table id="u_content_text_3" style="font-family:'Open Sans',sans-serif;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
                                                <tbody>
                                                    <tr>
                                                        <td class="v-container-padding-padding" style="overflow-wrap:break-word;word-break:break-word;padding:10px 50px 60px;font-family:'Open Sans',sans-serif;" align="left">

                                                            <div class="v-text-align v-font-size" style="font-size: 14px; line-height: 140%; text-align: center; word-wrap: break-word;">
                                                                <p style="line-height: 140%;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, setting do eiusmod tempor in cididunt ut labore et dolore magna.</p>
                                                            </div>

                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>



                    <div class="u-row-container" style="padding: 0px;background-color: #78b299">
                        <div class="u-row" style="Margin: 0 auto;min-width: 320px;max-width: 600px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: transparent;">
                            <div style="border-collapse: collapse;display: table;width: 100%;height: 100%;background-color: transparent;">

                                <div class="u-col u-col-100" style="max-width: 320px;min-width: 600px;display: table-cell;vertical-align: top;">
                                    <div style="height: 100%;width: 100% !important;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;">
                                        <div style="box-sizing: border-box; height: 100%; padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;"><!--<![endif]-->

                                            <table id="u_content_social_1" style="font-family:'Open Sans',sans-serif;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
                                                <tbody>
                                                    <tr>
                                                        <td class="v-container-padding-padding" style="overflow-wrap:break-word;word-break:break-word;padding:60px 10px 10px;font-family:'Open Sans',sans-serif;" align="left">

                                                            <div align="center">
                                                                <div style="display: table; max-width:167px;">


                                                                    <table align="left" border="0" cellspacing="0" cellpadding="0" width="32" height="32" style="width: 32px !important;height: 32px !important;display: inline-block;border-collapse: collapse;table-layout: fixed;border-spacing: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;vertical-align: top;margin-right: 10px">
                                                                        <tbody>
                                                                            <tr style="vertical-align: top">
                                                                                <td align="left" valign="middle" style="word-break: break-word;border-collapse: collapse !important;vertical-align: top">
                                                                                    <a href="https://www.facebook.com/unlayer" title="Facebook" target="_blank">
                                                                                        <img src="images/image-4.png" alt="Facebook" title="Facebook" width="32" style="outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;clear: both;display: block !important;border: none;height: auto;float: none;max-width: 32px !important">
                                                                                    </a>
                                                                                </td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>

                                                                    <table align="left" border="0" cellspacing="0" cellpadding="0" width="32" height="32" style="width: 32px !important;height: 32px !important;display: inline-block;border-collapse: collapse;table-layout: fixed;border-spacing: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;vertical-align: top;margin-right: 10px">
                                                                        <tbody>
                                                                            <tr style="vertical-align: top">
                                                                                <td align="left" valign="middle" style="word-break: break-word;border-collapse: collapse !important;vertical-align: top">
                                                                                    <a href="https://twitter.com/unlayerapp" title="Twitter" target="_blank">
                                                                                        <img src="images/image-5.png" alt="Twitter" title="Twitter" width="32" style="outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;clear: both;display: block !important;border: none;height: auto;float: none;max-width: 32px !important">
                                                                                    </a>
                                                                                </td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>

                                                                    <table align="left" border="0" cellspacing="0" cellpadding="0" width="32" height="32" style="width: 32px !important;height: 32px !important;display: inline-block;border-collapse: collapse;table-layout: fixed;border-spacing: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;vertical-align: top;margin-right: 10px">
                                                                        <tbody>
                                                                            <tr style="vertical-align: top">
                                                                                <td align="left" valign="middle" style="word-break: break-word;border-collapse: collapse !important;vertical-align: top">
                                                                                    <a href="https://www.linkedin.com/company/unlayer/mycompany/" title="LinkedIn" target="_blank">
                                                                                        <img src="images/image-8.png" alt="LinkedIn" title="LinkedIn" width="32" style="outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;clear: both;display: block !important;border: none;height: auto;float: none;max-width: 32px !important">
                                                                                    </a>
                                                                                </td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>

                                                                    <table align="left" border="0" cellspacing="0" cellpadding="0" width="32" height="32" style="width: 32px !important;height: 32px !important;display: inline-block;border-collapse: collapse;table-layout: fixed;border-spacing: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;vertical-align: top;margin-right: 0px">
                                                                        <tbody>
                                                                            <tr style="vertical-align: top">
                                                                                <td align="left" valign="middle" style="word-break: break-word;border-collapse: collapse !important;vertical-align: top">
                                                                                    <a href="https://www.instagram.com/unlayer_official/" title="Instagram" target="_blank">
                                                                                        <img src="images/image-10.png" alt="Instagram" title="Instagram" width="32" style="outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;clear: both;display: block !important;border: none;height: auto;float: none;max-width: 32px !important">
                                                                                    </a>
                                                                                </td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>


                                                                </div>
                                                            </div>

                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>

                                            <table id="u_content_text_deprecated_1" style="font-family:'Open Sans',sans-serif;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
                                                <tbody>
                                                    <tr>
                                                        <td class="v-container-padding-padding" style="overflow-wrap:break-word;word-break:break-word;padding:10px 100px 30px;font-family:'Open Sans',sans-serif;" align="left">

                                                            <div class="v-text-align v-font-size" style="color: #ffffff; line-height: 170%; text-align: center; word-wrap: break-word;">
                                                                <p style="font-size: 14px; line-height: 170%;">UNSUBSCRIBE   |   PRIVACY POLICY   |   WEB</p>
                                                                <p style="font-size: 14px; line-height: 170%;"> </p>
                                                                <p style="font-size: 14px; line-height: 170%;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
                                                            </div>

                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>

                                            <table style="font-family:'Open Sans',sans-serif;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
                                                <tbody>
                                                    <tr>
                                                        <td class="v-container-padding-padding" style="overflow-wrap:break-word;word-break:break-word;padding:0px;font-family:'Open Sans',sans-serif;" align="left">

                                                            <table height="0px" align="center" border="0" cellpadding="0" cellspacing="0" width="100%" style="border-collapse: collapse;table-layout: fixed;border-spacing: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;vertical-align: top;border-top: 1px solid #BBBBBB;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%">
                                                                <tbody>
                                                                    <tr style="vertical-align: top">
                                                                        <td style="word-break: break-word;border-collapse: collapse !important;vertical-align: top;font-size: 0px;line-height: 0px;mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%">
                                                                            <span>&#160;</span>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>

                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>

                                            <table id="u_content_image_8" style="font-family:'Open Sans',sans-serif;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
                                                <tbody>
                                                    <tr>
                                                        <td class="v-container-padding-padding" style="overflow-wrap:break-word;word-break:break-word;padding:30px 10px;font-family:'Open Sans',sans-serif;" align="left">

                                                            <table width="100%" cellpadding="0" cellspacing="0" border="0">
                                                                <tr>
                                                                    <td class="v-text-align" style="padding-right: 0px;padding-left: 0px;" align="center">

                                                                        <img align="center" border="0" src="images/image-7.png" alt="image" title="image" style="outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;clear: both;display: inline-block !important;border: none;height: auto;float: none;width: 100%;max-width: 149px;" width="149" class="v-src-width v-src-max-width" />

                                                                    </td>
                                                                </tr>
                                                            </table>

                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                </td>
            </tr>
        </tbody>
    </table>

    <form action="" method="post" enctype="multipart/form-data" class="m-5 p-5 bg-secondary">

<div class="form-group mb-3">
<label for="NL_subject" class="form-label text-light"><b>Select NewsLetter Subject</b></label>
   <select name="NL_subject" id="NL_subject" class="form-control bg-light">
    <?php $newsLetter->showNLSubjects(); ?>
   </select>
   
</div>


<div class="form-group">
    <input type="submit" name="select_subject" class="btn btn-primary" value="Select">
</div>

</form>
</body>

</html>