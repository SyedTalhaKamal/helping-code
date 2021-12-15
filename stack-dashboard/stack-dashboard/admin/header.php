<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title> IOT | <?php echo ((isset($title))?$title:'Dashboard'); ?> </title>
    <link rel="shortcut icon" href="./images/favicon.ico"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <!-- BEGIN VENDOR CSS-->
    <link rel="stylesheet" href="app-assets/css/vendors.css">
    <!-- END VENDOR CSS-->
    <!-- BEGIN STACK CSS-->
    <link rel="stylesheet" href="app-assets/css/app.css">
    <!-- END STACK CSS-->
    <!-- BEGIN Page Level CSS-->
    <link rel="stylesheet" href="app-assets/css/core/menu/menu-types/vertical-menu.css">
    <!-- END Page Level CSS-->
    <link rel="stylesheet" href="app-assets/css/plugins/calendars/fullcalendar.css">
    <link rel="stylesheet" href="app-assets/vendors/css/calendars/fullcalendar.min.css">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
    <!-- BEGIN Custom CSS-->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <link rel="stylesheet" href="assets/css/jquery.mCustomScrollbar.css">
    <link rel="stylesheet" href="assets/css/CustomScrollbar.css">
  <!-- END Custom CSS-->
</head>

<body class="vertical-layout vertical-menu 2-columns menu-expanded fixed-navbar <?php if ($title=="Login" || $title=="Register" || $title=="Error404" )  {echo "pt-0";} else {echo "";}?>"data-open="click" data-menu="vertical-menu" data-col="2-columns">
