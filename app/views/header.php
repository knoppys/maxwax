<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="<?php echo CONFIG['SITEURL']; ?>/css/main.min.css" />
    <script type="text/javascript" src="<?php echo CONFIG['SITEURL']; ?>/js/main.min.js"></script>


    <title>Max Wax Car Valeting</title>
</head>

<body>


    <div class="header-nav">
        <div class="container-fluid">
            <div class="row">
                <div class="col-6 click-nav-link">
                    <i class="fa fa-solid fa-info-circle me-3 pa-text-fa pa-text-30 pa-text-secondary"></i>
                    <span>Menu</span>
                </div>
                <div class="col-6 click-nav-link text-right">
                    <?php
                    if (!empty($data->authUser)) { ?>
                        <a href="<?php echo CONFIG['SITEURL']; ?>/logout">
                            <i class="fa fa-user-times"></i>
                            <span>Logout</span>
                        </a>
                    <?php } else { ?>
                        <a href="<?php echo CONFIG['SITEURL']; ?>/login">
                            <i class="fa fa-user"></i>
                            <span>Login</span>
                        </a>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>

    <?php require_once CONFIG['VIEWS'] . "/nav.php"; ?>