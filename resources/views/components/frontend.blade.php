<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Untree.co">
    <link rel="shortcut icon" href="favicon.png">

    <meta name="description" content="" />
    <meta name="keywords" content="bootstrap, bootstrap4" />

    <!-- Bootstrap CSS -->
    <link href="{{url('/')}}/admin-assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="{{url('/')}}/admin-assets/css/tiny-slider.css" rel="stylesheet">
    <link href="{{url('/')}}/admin-assets/css/style.css" rel="stylesheet">
    <title>Furni Free Bootstrap 5 Template for Furniture and Interior Design Websites by Untree.co </title>
</head>

<body>

    <!-- Start Header/Navigation -->
    <x-template.frontend.header/>
    <!-- End Header/Navigation -->

    <!-- Start Hero Section -->
    <x-template.frontend.banner/>
    <!-- End Hero Section -->

    {!! $slot !!}

    <!-- Start Footer Section -->
    <x-template.frontend.footer/>>
    <!-- End Footer Section -->


    <script src="{{url('/')}}/admin-assets/js/bootstrap.bundle.min.js"></script>
    <script src="{{url('/')}}/admin-assets/js/tiny-slider.js"></script>
    <script src="{{url('/')}}/admin-assets/js/custom.js"></script>
</body>

</html>