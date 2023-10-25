<!DOCTYPE html>
<html>
<head>
    <title>OTP Verification</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        form {
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 46px;
            text-align: center;
        }

        label {
            display: block;
            margin-bottom: 10px;
        }

        input {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        button {
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            cursor: pointer;
        }

        .error-message {
            color: red;
            margin-top: 10px;
        }

        h2 {
            margin-bottom: 10px;
        }

        #showOTP {
            margin-top: 35%; 
            padding-right: 2%;
        }
    </style>
</head>
<body>
    <!-- Your OTP Verification Form -->
    <form method="post"  action="<?= base_url('otp_controller/verify') ?>">
        <h2>Enter OTP:</h2>
        <input type="text" name="otp" required><br>
        <button type="submit">Verify OTP</button>
    </form>
    <!-- Display the OTP -->
    <div id="showOTP">
        <h2>Your OTP:</h2>
        <?php echo $otp; ?>
    </div>
</body>
</html>
