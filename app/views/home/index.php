
    <?php require_once CONFIG['VIEWS']."/header.php"; ?> 

    <!-- Background video -->
    <div class="video-background-holder">
        <div class="video-background-overlay"></div>
        <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
            <source src="<?php echo CONFIG['SITEURL']; ?>/maxwaxconverted.mp4" type="video/mp4">
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

<?php require_once CONFIG['VIEWS']."/footer.php"; ?> 
