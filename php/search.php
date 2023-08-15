<?php

session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Know Your Books || Search</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-2.2.4.min.js"
        integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <link rel="stylesheet" href="../css/search.css">

</head>

<body>
    <header class="header">

        <div class="header-1">
            <a href="../index.php" class="logo"> <i class="fas fa-book"></i> Know Your Books </a>
            <div class="icons">
                <?php
                if (isset($_SESSION['username'])) {
                    echo "<a href='logout.php'>Logout</a>";
                }

                ?>
            </div>
        </div>

        <div class="header-2">
            <nav class="navbar d-flex justify-content-center">
                <a href="../index.php">Home</a>
                <a href="../index.php">Genre</a>
                <a href="viewbooks.php">Books</a>
                <a href="search.php">Search</a>
                <a href="request.php">Request</a>

            </nav>
        </div>
    </header>


    <div class="container">
        <br />
        <br />
        <br />
        <h2 align="center">Search Book</h2><br />
        <div class="form-group">
            <div class="row">
                <div class="col-md-10">
                    <input type="text" id="tags" class="form-control" data-role="tagsinput" />
                </div>
                <div class="col-md-2">
                    <button type="button" name="search" class="btn btn-primary" id="search">Search</button>
                </div>
            </div>
        </div>
        <br />
        <div class="table-responsive">
            <div align="right">
                <p><b>Total Books Shown - <span id="total_records"></span></b></p>
            </div>
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Book Name</th>
                        <th>Publisher</th>
                        <th>ISBN No.</th>
                        <th>Genre</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
    </div>
    <div style="clear:both"></div>
    <br />
    <br />
    <br />
    <br />
</body>

</html>




<script>
$(document).ready(function() {

    load_data();

    function load_data(query) {
        $.ajax({
            url: "fetch.php",
            method: "POST",
            data: {
                query: query
            },
            dataType: "json",
            success: function(data) {
                $('#total_records').text(data.length);
                var html = '';
                if (data.length > 0) {
                    for (var count = 0; count < data.length; count++) {
                        html += '<tr>';
                        html += '<td>' + data[count].name + '</td>';
                        html += '<td>' + data[count].publishername + '</td>';
                        html += '<td>' + data[count].isbn + '</td>';
                        html += '<td>' + data[count].genre + '</td>';
                        html += '<td>' +
                            ' <button><a class="btn" href="showreview.php?id=' + data[count]
                            .bookId + '">View</a></button> ' +
                            '</td></tr>';
                    }
                } else {
                    html = '<tr><td colspan="5">No Data Found</td></tr>';
                }
                $('tbody').html(html);
            }
        })
    }

    $('#search').click(function() {
        var query = $('#tags').val();
        load_data(query);
    });

});
</script>