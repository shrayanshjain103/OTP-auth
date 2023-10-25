<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css" />
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>

    <!-- Include DataTables CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css" />

</head>

<body>
    <h1>Hello Admin</h1>
    <div class="container box">
        <div class="table-responsive">
            <br />
            <table id="user_data" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th width="25%">Id</th>
                        <th width="25%">Name</th>
                        <th width="20%">Email</th>
                        <th width="20%">Mobile Number</th>
                        <th width="20%">Notify</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
    <div class="modal" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="exampleModalLabel">Update the Information</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        </button>
                </div>

                <div class="modal-body">
                    <form id="save" action="">
                        <div class="container">
                            <label for="message">Write the Message: </label>
                            <input type="textfield" id="message" user_id="" name="message"></input>
                        </div>
                        <div class="modal-footer pop">
                            <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
                            <button type="submit" id='submit' class="btn btn-primary ">Save changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <button><a href="<?= base_url('Otp_controller/logout'); ?>">Logout</a></button>
</body>
<script>
    $(document).ready(function() {
        // Initialize DataTable
        var dataTable = $('#user_data').DataTable({
            "paging": true,
            "lengthMenu": [
                [5, 2, 3, 4, 25, 50, 75, 100, -1],
                [5 , 2, 3, 4, 25, 50, 75, 100, 'All']
            ],
            "ajax": {
                "url": "<?php echo base_url('Otp_controller/getUsers'); ?>",
                "type": "POST"
            },
            "columns": [{
                    "data": "id"
                },
                {
                    "data": "name"
                },
                {
                    "data": "email",
                },
                {
                    "data": "mobile",
                },
                {
                    "data": null,
                    "render": function(data, type, row) {
                        return '<button class="btn btn-success edit-btn" data-bs-toggle="modal" data-bs-target="#exampleModal" data-id="' + data.id + '">NOTIFY</button>';
                    }
                }
            ]
        });
        $(document).on('click', '.edit-btn', function() {
            var id = $(this).data('id');
            $('#message').attr('user_id', id);

        });
        $('#save').on('submit', function(event) {
            event.preventDefault();
            // alert('hello');
            var message = $('#message').val();
            var id = $('#message').attr('user_id');
            $.ajax({
                type: 'POST',
                url: "<?php echo base_url() ?>Otp_controller/addMessage",
                data: {
                    message: message,
                    id: id
                },
                dataType: 'json',
                success: function(res) {
                    if (res == 1) {
                        alert('Notification Added Successfully');
                        window.location.reload();
                    } else {
                        alert("Notification Not Added");
                        window.location.reload();
                    }
                },
                error: function(){
                    alert('Having some Issue');
                    window.location.reload();
                }
            });
        });
    });
</script>

</html>