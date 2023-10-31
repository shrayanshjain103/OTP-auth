
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
</body>
</html>
