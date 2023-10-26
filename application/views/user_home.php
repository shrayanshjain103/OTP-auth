<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <!-- Add these links to your <head> section -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

    <title>Document</title>
</head>
<style>
    .navbar {
        display: flex;
        justify-content: space-between;
        align-items: center;
        background-color: #333;
        color: #fff;
        padding: 10px 20px;
    }

    .navbar ul {
        list-style: none;
        margin: 0;
        padding: 0;
    }

    .navbar ul li {
        display: inline;
        margin-right: 15px;
    }

    .navbar ul li a {
        text-decoration: none;
        color: #fff;
    }

    .notification-icon {
        position: relative;
    }

    .notification-icon span {
        position: absolute;
        top: -10px;
        right: -10px;
        background-color: red;
        color: #fff;
        border-radius: 50%;
        padding: 5px 10px;
        font-size: 14px;
    }

    .notification-icon i {
        font-size: 20px;
    }

    .user-info {
        color: #fff;
    }
</style>

<body>
    <nav>
        <div class="navbar">
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="<?= base_url('OTP_controller/logout'); ?>">Logout</a></li>
            </ul>
            <button type="button" class="btn btn-link" data-toggle="modal" data-target="#notificationModal">
                <i class="fa fa-bell"></i>
                <span id="notification-count">0</span>
            </button>
        </div>
    </nav>

    <div class="modal fade" id="notificationModal" tabindex="-1" role="dialog" aria-labelledby="notificationModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="notificationModalLabel">Notifications</h5>
                    
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                <ol id="notify">
                        <!-- <li><p id="notification"></p></li> -->
                    </ol>

                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            $.ajax({
                url: "<?php echo base_url() ?>Otp_controller/getNotification",
                dataType: "json",
                method: 'GET',
                success: function(res) {
                    if (res) {
                        var html = "";
                        $.each(res, function(key, value) {
                            html += "<li><a href='#'>"+value+"</a></li>";
                        });
                        $('#notify').html(html);

                    }
                },
            });
        });
    </script>

</body>


</html>