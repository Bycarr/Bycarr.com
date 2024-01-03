<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Customer</title>

    <style>
        body {
            margin: 0;
            padding: 0;
            color: #333333;
            font-family: Arial, Helvetica, sans-serif;
            font-size: 16px;
            line-height: 26px;
        }

        table {
            width: 100%;
        }

        table tr,
        td {
            vertical-align: middle;
        }

        ul,
        ol {
            padding: 0;
            margin: 0;
            list-style: none;
        }

        .table-style {
            width: 100%;
            color: #111111;
        }

        .table-style td {
            border-top: 1px dashed #bbb8b8;
            padding: 10px 0;
        }

        .dr-text,
        .dr-img {
            width: 50%;
        }

        /* Inline--CSS---END */


        @media (max-width: 645px) {
            .table-style td {
                padding: 8px 0;
            }
        }

        @media (max-width: 575px) {
            .dr-img {
                width: 40%;
            }

            .dr-text {
                width: 60%;
                top: 6px;
            }
        }

        @media (max-width: 535px) {
            .logo {
                padding-bottom: 20px !important;
            }

            .dr-text {
                font-size: 23px !important;
                line-height: 40px !important;
            }

            .brand-logo {
                width: 40% !important;
            }

            .partner-logo {
                width: 40% !important;
            }

            .blank {
                width: 20% !important;
            }
        }

        /* Responsive--End----*/
    </style>

</head>

<body>

    <div style="background: #DFDFDF; width: 100%; padding: 30px 0; margin: auto;">
        <div style="background: #fff; max-width: 640px; margin: auto;">
            <div class="logo" style="padding: 30px 30px 20px;">
                <table>
                    <tr>
                        <td class="brand-logo" style="width: 33%;">
                            <a href="#!">
                                <img style="width: 100%;" src="{{ asset('website/img/logo1.jpeg') }}" alt="Logo">
                            </a>
                        </td>
                        <td class="blank" style="width: 33%;">
                        </td>
                    </tr>
                </table>
            </div>
            <div style="padding:30px; background-color:#ed264f;">
                <table>
                    <tr>
                        <td class="dr-text"
                            style="font-size:30px; line-height:48px; font-weight: 700; color:#fff; text-transform:uppercase;">
                            {!! $subject !!}
                        </td>
                        {{-- <td style="position: relative;"  class="dr-img" >
              <a href="#!">
                <img  style="width: 100%; padding:0px; position: absolute; top:6px;" src="images/costumer2.png" alt="doctor">
              </a>
            </td> --}}
                    </tr>
                </table>
            </div>
            <div style="font-size:18px; line-height:23px; padding:30px 0px 20px 30px; font-weight: 700; color:#040404;">
                {!! $salutation !!},
            </div>
            <div class="dr-note" style="padding:0px 30px 20px;">{!! $content !!}
            </div>
            {{-- <div class="" style="padding:0px 30px;">Thank you for your continued support of our small business! We
                wouldn’t be where we are today without you.</div> --}}
            <div style="padding: 0px 30px 0px;">
            </div>
            <div>
                <div style="padding:30px 30px 50px;">
                    If you need any help, don’t hesitate to reach out to us at
                    <a href="#!" style="color:#642C8F;"> {!! config('settings.email') !!}
                    </a>
                </div>
            </div>
            <div style="background-color:#F4F4F4; border-top: 1px dashed #bbb8b8;">
                <div style="text-align: center; padding:30px 0 35px;">
                    <a href="#!">
                        <img style="width:100px;" src="{{ asset('website/img/logo1.jpeg') }}" alt="Logo">
                    </a>
                    <div style="font-size:14px; font-weight: 600;">{!! config('settings.site_name') !!}
                    </div>
                    <div style="font-size:14px;"> {!! config('settings.address') !!}
                    </div>
                    <ul style="display:flex; justify-content:center;">
                        <li>
                            <a href="tel : +977-1-5446140"
                                style="text-decoration: none; color:#333333; font-size:14px;"> {!! config('settings.contact') !!}
                            </a>
                        </li>
                        <li style="padding:0 12px;">
                            |
                        </li>
                        <li style="color:333333">
                            <a href="E-mail : {!! config('settings.email') !!}"
                                style="text-decoration: none; color:#333333; font-size:14px;"> {!! config('settings.email') !!}
                            </a>
                        </li>
                    </ul>
                    <ul style="display:flex; justify-content:center; padding:20px;">
                        <li>
                            <a class="facebook-icon" href="#!">
                                <img style="padding-right:6px; width:40px;"
                                    src="{{ asset('website/img/facebook-icon.jpg') }}" alt="Facebook-Logo">
                            </a>
                        </li>
                        <li>
                            <a href="#!">
                                <img style="padding-right:6px; width:40px"
                                    src="{{ asset('website/img/twitter-icon.jpg') }}" alt="Twitter-Logo">
                            </a>
                        </li>
                        <li>
                            <a href="#!">
                                <img style="padding-right:6px; width:40px"
                                    src="{{ asset('website/img/linkedin-icon.jpg') }}" alt="LinkedinLogo">
                            </a>
                        </li>
                        <li>
                            <a href="#!">
                                <img style="padding-right:6px;width:40px"
                                    src="{{ asset('website/img/youtube-icon.jpg') }}" alt="Youtube-Logo">
                            </a>
                        </li>
                    </ul>
                    <div style="font-size:14px;">© {{ date('Y') }},
                        <a href="#!" style="color:#333333;">{!! config('settings.site_name') !!}
                        </a>. All Rights Reserved.
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
