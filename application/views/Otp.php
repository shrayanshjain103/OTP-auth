<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        form {
            text-align: center;
            padding: 52px;
            border: 1px solid #ccc;
            border-radius: 5px;
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
    </style>
<body>
    <form method="post" action="<?= base_url('otp_controller/submit') ?>">
        <label for="email">Email:</label>
        <input type="email" name="email" required><br>

        <label for="name">Name:</label>
        <input type="text" name="name" required><br>

        <label for="password">Password:</label>
        <input type="password" name="password" required><br>

        <label for="mobile">Mobile Number:</label>
        <input type="tel" name="mobile" required><br>

        <button type="submit">Submit</button>
    </form>

</body>

</html> -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        form {
            text-align: center;
            padding: 52px;
            border: 1px solid #ccc;
            border-radius: 5px;
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
    </style>
</head>

<body>
    <form method="post" action="<?= base_url('otp_controller/submit') ?>">
        <label for="email">Email:</label>
        <input type="email" name="email" required><br>

        <label for="name">Name:</label>
        <input type="text" name="name" required><br>

        <label for="password">Password:</label>
        <input type="password" name="password" required><br>

        <label for="mobile">Mobile Number:</label>
        <input type="tel" name="mobile" required><br>

        <button type="submit">Submit</button>
    </form>
</body>

</html>
