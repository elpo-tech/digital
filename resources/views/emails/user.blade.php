<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>{{ $subject ?? 'Digital Care Week User Info' }}</title>
</head>

<body style="margin: 0; padding: 0; font-family: Arial, sans-serif; background-color: #f4f4f4;">

    <table width="100%" cellpadding="0" cellspacing="0">
        <tr>
            <td align="center" style="padding: 20px 0;">
                <!-- Card container -->
                <table width="600" cellpadding="0" cellspacing="0"
                    style="background-color: #ffffff; border-radius: 8px; overflow: hidden; box-shadow: 0 0 5px rgba(0,0,0,0.1);">

                    <!-- Header with logo -->
                    <tr>
                        <td align="center" style="background-color:rgb(229, 177, 223); padding: 10px;">
                            <img src="https://admission.tharakawomen.org/assets/img/logo.png"
                                alt="Logo" style="max-height: 100px;">
                        </td>
                    </tr>

                    <!-- Body Content -->
                    <tr>
                        <td style="padding: 30px;">
                            <h3 style="color: #333;">
                                Dear {{ $user['fname']}},
                            </h3>

                            <p style="color: #555; font-size: 14px; line-height: 1.5;">
                                An account with your email has been created on <strong>DIGITAL CARE WEEK APP</strong>. <br>
                                Here are your login details:
                            </p>

                            <p style="color: #333; font-size: 14px;"><strong>Username:</strong> {{ $user['name'] }}</p>
                            <p style="color: #333; font-size: 14px;"><strong>Email:</strong> {{ $user['email'] }}</p>
                            <p style="color: #333; font-size: 14px;"><strong>Password:</strong> {{ $password }}</p>

                            <p style="color: #555; font-size: 14px;">You can use either <strong>Username</strong> or <strong>Email</strong> to login.</p>

                            <p style="color: #555; font-size: 14px;">You can now login at: <a href="{{ url('/') }}" style="color: #0a4b78;">{{ url('/') }}</a></p>

                        </td>
                    </tr>

                    <!-- Footer -->
                    <!-- Footer -->
                    <tr>
                        <td align="center"
                            style="background-color:rgb(255, 255, 255); color: #999; padding: 15px; font-size: 13px;">
                            <hr>
                            &copy; {{ date('Y') }} {{ config('app.name') }}. All rights reserved.
                            <br>
                            Gatunga Community Library & IT Center (GCLIT)<br>
                            Powered by Tharaka Women Welfare Program (TWWP)
                            <br><br>

                            <span style="font-size:12px; color:#b0b0b0;">
                                System designed by
                                <a href="https://elpotechcompany.com"
                                    style="color:#0a4b78; text-decoration:none;"
                                    target="_blank">
                                    <strong>ELPO-TECH COMPANY</strong>
                                </a>
                            </span>

                            <br><br>
                            Please do not reply to this email.
                        </td>
                    </tr>


                </table>
            </td>
        </tr>
    </table>

</body>

</html>