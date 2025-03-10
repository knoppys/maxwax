
<?php require_once CONFIG['VIEWS']."/header-logo.php"; ?> 
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="content">
                <h3>Your Customer Profile</h3>
                <div class="row">
                    <div class="col-3">
                        <div class="picture">
                            <?php if(isset($data->authUser['picture'])){ ?>
                                <img src="<?php echo $data->authUser['picture'];?>" alt="">
                            <?php } ?>
                        </div>
                    </div>
                    <div class="col-9">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td>Name</td>
                                    <td><?php echo $data->apiUser->name;?></td>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td><?php echo $data->apiUser->email;?></td>
                                </tr>
                                <tr>
                                    <td>Phone</td>
                                    <td><?php echo $data->apiUser->phone;?></td>
                                </tr>
                                <tr>
                                    <td>Address 1</td>
                                    <td><?php echo $data->apiUser->address1;?></td>
                                </tr>
                                <tr>
                                    <td>Address 2</td>
                                    <td><?php echo $data->apiUser->address2;?></td>
                                </tr>
                                <tr>
                                    <td>County</td>
                                    <td><?php echo $data->apiUser->county;?></td>
                                </tr>
                                <tr>
                                    <td>City</td>
                                    <td><?php echo $data->apiUser->city;?></td>
                                </tr>
                                <tr>
                                    <td>Post Code</td>
                                    <td><?php echo $data->apiUser->postcode;?></td>
                            </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
    <?php pre($data); ?>
<?php require_once CONFIG['VIEWS']."/footer.php"; ?> 
