<?php
?>
<!doctype html>
<html lang="en">
<!-- HTML HEADER -->
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.0/css/all.css" integrity="sha384-aOkxzJ5uQz7WBObEZcHvV5JvRW3TUc2rNPA7pe3AwnsUohiw1Vj2Rgx2KSOkF5+h" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Bootstrap CDN Datatables CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap4.min.css" crossorigin="anonymous">

    <!-- Font Awesome CDN CSS -->
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">


    <title>Manage Documents</title>

    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="../../Master/custom_bootstrap.css">
</head>
<body>
<?php include "../../Master/top_navigation.php"; ?>
<div class="container">
    <div class="row">
        <div class="col">
            <!-- Put Page Contents Here -->
            <h1 class="text-center">Manage Documents</h1>
            <hr>
            <table id="dtable" class="table table-striped table-bordered" width="100%" cellspacing="0" data-page-length='20'>
                <thead>
                <tr>
                    <th></th>
                    <th>Page Type</th>
                    <th>Library Index</th>
                    <th>Book Title</th>
                    <th>Page Number</th>
                    <th>Needs Review</th>
                    <th></th>
                </tr>
                </thead>
                <tfoot>
                <tr>
                    <th></th>
                    <th>Page Type</th>
                    <th>Library Index</th>
                    <th>Book Title</th>
                    <th>Page Number</th>
                    <th>Needs Review</th>
                    <th></th>
                </tr>
                </tfoot>
            </table>
        </div> <!-- col -->
    </div> <!-- row -->
</div><!-- Container -->


<!-- Complete JavaScript Bundle -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<!-- JQuery UI cdn -->
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js" integrity="sha256-T0Vest3yCU7pafRw9r+settMBX6JkKN06dqBnpQ8d30=" crossorigin="anonymous"></script>

<!-- Datatables CDN -->
<script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>

<!-- Bootstrap JS files for datatables CDN -->
<script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>

<!-- Our custom javascript file -->
<script type="text/javascript" src="../../Master/master.js"></script>

<!-- This Script Needs to Be added to Every Page, If the Sizing is off from dynamic content loading, then this will need to be taken away or adjusted -->
<script>
    $(document).ready(function() {

        var docHeight = $(window).height() - $('#megaMenu').height();
        console.log(docHeight);
        var footerHeight = $('#footer').height();
        var footerTop = $('#footer').position().top + footerHeight;

        if (footerTop < docHeight)
            $('#footer').css('margin-top', 0 + (docHeight - footerTop) + 'px');
    });

    $( window ).resize(function() {
        var docHeight = $(window).height() - $('#megaMenu').height();
        var footerHeight = $('#footer').height();
        var footerTop = $('#footer').position().top + footerHeight;

        if (footerTop < docHeight)
        {
            $('#footer').css('margin-top', 0 + (docHeight - footerTop) + 'px');
        }
    });
</script>
</body>
</html>