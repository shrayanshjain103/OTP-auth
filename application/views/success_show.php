
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Successful</title>
    <style>
        @import url('https://fonts.googleapis.com/css?family=Raleway:400,700');

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: Raleway, sans-serif;
        }

        body {
            background: linear-gradient(90deg, #C7C5F4, #776BCC);
        }

        h1, p {
            text-align: center;
            color: #fff;
        }

        a {
            text-align: center;
            display: block;
            color: #fff;
            text-decoration: none;
            font-weight: 700;
            margin-top: 20px;
            padding: 10px 20px;
            background: #007bff;
            border: none;
            border-radius: 5px;
        }

        a:hover {
            background: #0056b3;
        }
    </style>
</head>
<body>
    <h1>Registration Successful</h1>
    <p>Your registration has been successfully completed.</p>
    
    <a href="<?= base_url('OTP_controller/logout'); ?>">Back to Registration</a>
    <br>
    <p><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3502.0863843101474!2d77.37416567550059!3d28.627172975667694!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cefbeb13d521b%3A0x72571192ed100920!2sAppSquadz%20Software%20Pvt.%20Ltd.!5e0!3m2!1sen!2sin!4v1700027140526!5m2!1sen!2sin" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></p>
</body>
</html>
