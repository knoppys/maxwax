<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="http://mwapp.test/public/css/main.min.css" />
    

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
                        <a href="/public/logout"><span>Logout</span></a>
                    <?php } else { ?>
                        <a href="/public/login"><span>Login</span></a>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
    <div class="click-nav">
        <ul>
            <li><span class="parent-nav-title">Mobile Car Valeting</span>
                <hr><span class="nav-guide">Choose a package</span>
                <ul>
                    <li><a title="Maintenance Valet" href="/packages/?package=maintenance-valet/" class="dropdown-item">Maintenance Valet</a></li>
                    <li><a title="Maintenance WAX" href="/packages/?package=maintenance-wax/" class="dropdown-item">Maintenance WAX</a></li>
                    <li><a title="Interior MAX" href="/packages/?package=interior-max/" class="dropdown-item">Interior MAX</a></li>
                    <li><a title="Exterior WAX" href="/packages/?package=exterior-wax/" class="dropdown-item">Exterior WAX</a></li>
                    <li><a title="MAX WAX" href="/packages/?package=max-wax/" class="dropdown-item">MAX WAX</a></li>
                    <li><a title="MAX WAX Plus" href="/packages/?package=max-wax-plus/" class="dropdown-item">MAX WAX Plus</a></li>
                    <li><a title="MAX WAX Prestige" href="/packages/?package=max-wax-prestige/" class="dropdown-item">MAX WAX Prestige</a></li>
                    <li><a title="Williams Ceramic Coat 8H" href="/packages/?package=williams-ceramic-8h/" class="dropdown-item">Williams Ceramic 8H</a></li>
                    <li><a title="Williams Ceramic Coat Plus 10H" href="/packages/?package=williams-ceramic-plus-10h-2/" class="dropdown-item">Williams Ceramic + 10H</a></li>

                </ul>
            </li>
            <li><a href="/auto-care"><span class="parent-nav-title">Auto Care</span></a>
            <li><a href="/careers"><span class="parent-nav-title">Careers</span></a>
            <li><a href="/media"><span class="parent-nav-title">Media</span></a>
        </ul>
    </div>

    <!-- Background video -->
    <div class="video-background-holder">
        <div class="video-background-overlay"></div>
        <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
            <source src="http://mwapp.test/public/maxwaxconverted.mp4" type="video/mp4">
        </video><!-- end video source-->
        <div class="video-background-content container h-100">
            <div class="d-flex h-100 text-center align-items-center">
                <div class="w-100 text-white">
                    <img src="https://max-wax.co.uk/wp-content/uploads/2024/02/20-Years-Logo-white.png" alt="">
                    <h1 class="display-4">Complete mobile car valet service throughout Sussex, Surrey and Hampshire.
                    </h1>
                    <a href="packages" class="btn btn-primary">Book a mobile valet</a>
                </div>
            </div><!-- end text/button area -->
        </div>
    </div><!-- end video-background-overlay-->
    </div>