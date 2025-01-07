<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Welcome to NoorMedicare</title>
    <style>
        .emailmenu {
            padding: 35px;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .emailmenu h1 {
            color: #333333;
            font-size: 28px;
            font-weight: bold;
            text-align: center;
            line-height: 40px;
        }

        .emailmenu p {
            color: #555555;
            font-size: 16px;
            font-weight: normal;
            line-height: 24px;
            margin-bottom: 5px;
        }

        .emailmenu ul li {
            color: #555555;
            font-size: 16px;
            font-weight: normal;
            line-height: 24px;
            margin-bottom: 5px;
        }

        .emailmenu .button {
            margin-top: 20px;
            display: inline-block;
            padding: 10px 20px;
            background-color: #4caf50;
            color: #ffffff;
            text-decoration: none;
            font-weight: bold;
            border-radius: 5px;
        }

        .emailmenu .footer {
            margin-top: 20px;
            text-align: center;
            color: #888888;
        }
    </style>
</head>

<body>
    <div class="emailtemplate">
        <div class="container">
            <div class="col-lg-3"></div>
            <div class="col-lg-6 mx-auto py-5">
                <div class="emailmenu">
                    <div class="text-center">
                        <img src="{{url('/public/Noor.svg')}}" alt="" class="mx-auto" width="250px" srcset="">
                    </div>
                    <h1>Welcome to Our Community!</h1>
                    <p>Dear {{ $mailData['all']['name'] }},</p>
                    <p>We are thrilled to welcome you to our community. Thank you for joining us!</p>
                    <p>Book An Apointment for {{ $mailData['all']['type'] }}:</p>
                    <ul>
                        <li><b>Name.</b> {{ $mailData['all']['name'] }}</li>
                        <li><b>Phone Number.</b> {{ $mailData['all']['phone'] }}</li>
                        <li><b>Email Address.</b> {{ $mailData['all']['email'] }}</li>
                        <li><b>Date.</b> {{ $mailData['all']['date'] }}</li>
                        <li><b>Time.</b> {{ $mailData['all']['time'] }}</li>
                        <li><b>DOB.</b> {{ $mailData['all']['dob'] }}</li>
                        <li><b>Gender.</b> {{ $mailData['all']['gender'] }}</li>
                        <li><b>Hospital.</b> {{ $mailData['all']['hospital'] }}</li>
                        <li><b>Service.</b> {{ $mailData['all']['service'] }}</li>
                        <li><b>Doctor.</b> {{ $mailData['all']['doctor'] }}</li>
                        <li><b>Message.</b> {{ $mailData['all']['message'] }}</li>
                    </ul>
                    <p>Feel free to reach out if you have any questions or need assistance. We're here to help!</p>
                    <a href="{{ $mailData['link'] }}" class="button">Get Started</a>
                    <p class="footer">Best regards,<br>Your NoorMedicare Team</p>
                </div>
            </div>
            <div class="col-lg-3"></div>
        </div>
    </div>



</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</html>