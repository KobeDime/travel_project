<?php include('header.php'); ?>
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
        <li data-target="#carousel-example-generic" data-slide-to="3"></li>
        <li data-target="#carousel-example-generic" data-slide-to="4"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
        <div class="item active">
            <img src="images/background.jpg" alt="background1">
        </div>
        <div class="item">
            <img src="images/background2.jpg" alt="background2">
        </div>
        <div class="item">
            <img src="images/background3.jpg" alt="background3">
        </div>
        <div class="item">
            <img src="images/background4.jpg" alt="background4">
        </div>
        <div class="item">
            <img src="images/background5.jpg" alt="background5">
        </div>
    </div>

    <!-- Controls -->
    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>


<section class="trips text-center">
    <div class="container">
        <h1 class="title-head">Featured <span>Packages</span></h1>
        <p>Step into a world brimming with adventure and personal discovery. We’ve handpicked a selection of travel experiences that are as unique as you are, 
        designed to spark your curiosity and fuel your passion for exploration. From exhilarating treks through stunning landscapes to immersive cultural escapades, 
        each journey is crafted with care to offer you unforgettable moments. Dive into our collection of top-rated adventures and let’s make your travel dreams a reality:</p>
        <ul class="nav nav-tabs" role="tablist">
            <li role="presentation" class="active"><a href="#Corporates" aria-controls="Corporates" role="tab" data-toggle="tab">Corporates</a></li>
            <li role="presentation"><a href="#Family" aria-controls="Family" role="tab" data-toggle="tab">Family</a></li>
            <li role="presentation"><a href="#School" aria-controls="School" role="tab" data-toggle="tab">School/Colleges</a></li>
            <li role="presentation"><a href="#Couple" aria-controls="Couple" role="tab" data-toggle="tab">Couple</a></li>
        </ul>

        <!-- Tab panes -->
        <div class="tab-content">
            <div role="tabpanel" class="tab-pane active" id="Corporates">
                <div class="owl-carousel owl-theme ">
                    <?php
                    include '_dbconnect.php';
                    $sql_package = "SELECT * from  tbl_tourpackage where package_type=1";
                    $result_package = mysqli_query($conn, $sql_package);

                    if (mysqli_num_rows($result_package) > 0) {

                        while ($row_package = mysqli_fetch_assoc($result_package)) { ?>
                            <div class="item">
                                <div class="pop_p"> <a href="#0"><img src="admin/uploads/<?php echo $row_package['package_image']; ?>" alt="">
                                        <h3><span><?php echo $row_package['package_name']; ?></span></h3>
                                    </a> </div>
                            </div>
                    <?php
                        }
                    }
                    ?>
                </div>
                <a href="popular-package.php?type=1" class="btn-view">View All Packages</a>
            </div>
            <div role="Family" class="tab-pane" id="Family">
                <div class="owl-carousel owl-theme ">
                    <?php
                    include '_dbconnect.php';
                    $sql_package = "SELECT * from  tbl_tourpackage where package_type=2";
                    $result_package = mysqli_query($conn, $sql_package);

                    if (mysqli_num_rows($result_package) > 0) {

                        while ($row_package = mysqli_fetch_assoc($result_package)) { ?>
                            <div class="item">
                                <div class="pop_p"> <a href="#0"><img src="admin/uploads/<?php echo $row_package['package_image']; ?>" alt="">
                                        <h3><span><?php echo $row_package['package_name']; ?></span></h3>
                                    </a> </div>
                            </div>
                    <?php
                        }
                    }
                    ?>
                </div>
                <a href="popular-package.php?type=2" class="btn-view">View All Packages</a>
            </div>
            <div role="tabpanel" class="tab-pane" id="School">
                <div class="owl-carousel owl-theme ">
                    <?php
                    include '_dbconnect.php';
                    $sql_package = "SELECT * from  tbl_tourpackage where package_type=3";
                    $result_package = mysqli_query($conn, $sql_package);

                    if (mysqli_num_rows($result_package) > 0) {

                        while ($row_package = mysqli_fetch_assoc($result_package)) { ?>
                            <div class="item">
                                <div class="pop_p"> <a href="#0"><img src="admin/uploads/<?php echo $row_package['package_image']; ?>" alt="">
                                        <h3><span><?php echo $row_package['package_name']; ?></span></h3>
                                    </a> </div>
                            </div>
                    <?php
                        }
                    }
                    ?>
                </div>
                <a href="popular-package.php?type=3" class="btn-view">View All Packages</a>
            </div>
            <div role="tabpanel" class="tab-pane" id="Couple">
                <div class="owl-carousel owl-theme ">
                    <?php
                    include '_dbconnect.php';
                    $sql_package = "SELECT * from  tbl_tourpackage where package_type=4";
                    $result_package = mysqli_query($conn, $sql_package);

                    if (mysqli_num_rows($result_package) > 0) {

                        while ($row_package = mysqli_fetch_assoc($result_package)) { ?>
                            <div class="item">
                                <div class="pop_p"> <a href="#0"><img src="admin/uploads/<?php echo $row_package['package_image']; ?>" alt="">
                                        <h3><span><?php echo $row_package['package_name']; ?></span></h3>
                                    </a> </div>
                            </div>
                    <?php
                        }
                    }
                    ?>
                </div>
                <a href="popular-package.php?type=4" class="btn-view">View All Packages</a>
            </div>
        </div>
    </div>
</section>
<section class="gallery text-center">
    <div class="container">
        <h1 class="title-head"><span>Trip </span> Photo Gallery</h1>
        <?php
        include '_dbconnect.php';
        $sql_locations = "SELECT DISTINCT location FROM tbl_gallery";
        $result_locations = mysqli_query($conn, $sql_locations);

        if (mysqli_num_rows($result_locations) > 0) {
            echo '<ul id="filters" class="clearfix">';
            while ($row_location = mysqli_fetch_assoc($result_locations)) {
                $location = $row_location['location'];
                echo '<li><span class="filter" data-filter=".' . $location . '">' . $location . '</span></li>';
            }
            echo '</ul>';
        } ?>
        <div id="gallerylist">
            <?php
            include '_dbconnect.php';
            $sql = "Select * from tbl_gallery";
            $result = mysqli_query($conn, $sql);
            $num = mysqli_num_rows($result);
            if ($num > 1) {
                while ($row = mysqli_fetch_assoc($result)) {
                    $location = $row['location'];
                    $images = explode(', ', $row['images']);
                    foreach ($images as $image) {
                        echo '<div class="gallery_frame ' . $location . '" data-cat="' . $location . '">';
                        echo '<div class="gallery_frame-wrapper">';
                        echo '<img src="admin/uploads/' . $image . '" alt="" />';
                        echo '</div>';
                        echo '</div>';
                    }
                }
            }
            ?>
        </div>
        <a href="gallery.php" class="btn-view">View Gallery</a>
    </div>
</section>

<section class="contact">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h1 class="title-head"> How <span> It Works</span> </h1>
                <ul class="flow">
                    <li> <img src="images/icon1.png" alt="">
                        <h3>Select Your Package</h3>
                        <p>& tell us your preferences</p>
                    </li>
                    <li><img src="images/arrow-down.png" alt=""></li>
                    <li> <img src="images/icon2.png" alt="">
                        <h3>Get Quotes</h3>
                        <p>from the travel expert</p>
                    </li>
                    <li><img src="images/arrow-down.png" alt=""></li>
                    <li> <img src="images/icon3.png" alt="">
                        <h3>Customize & book</h3>
                        <p>from the travel expert</p>
                    </li>
                </ul>
            </div>
            <div class="col-md-6">
                <h1 class="title-head"> Ask <span> A Query</span> </h1>
                <form class="form-horizontal" method="post" action="_contact.php">
                    <fieldset>

                        <!-- Name input-->
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="name">Name</label>
                            <div class="col-md-9">
                                <input id="name" name="name" type="text" placeholder="Enter Your Name" class="form-control" required>
                            </div>
                        </div>

                        <!-- Email input-->
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="email"> E-mail</label>
                            <div class="col-md-9">
                                <input id="email" name="email" type="email" placeholder="Enter Your Email" class="form-control" required>
                            </div>
                        </div>
                        <!-- Mobile input-->
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="mobile">Phone No</label>
                            <div class="col-md-9">
                                <input id="phone" name="phone" type="text" placeholder="Enter Your Phone No" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="subject">Subject</label>
                            <div class="col-md-9">
                                <input id="subject" name="subject" type="text" placeholder="Enter Your Subject" class="form-control" required>
                            </div>
                        </div>
                        <!-- Message body -->
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="message">Message</label>
                            <div class="col-md-9">
                                <textarea class="form-control" id="message" name="message" placeholder="Ask a Query" rows="8"></textarea>
                            </div>
                        </div>

                        <!-- Form actions -->
                        <div class="form-group">
                            <div class="col-md-12 text-right">
                                <button type="submit" class="btn-view">Submit</button>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</section>
<section class="subscribe">
    <div class="container">
        <h2>Stay Informed with Our Newsletter</h2>
        <p>Get the latest updates and exclusive offers delivered straight to your inbox—subscribe for free today!</p>
        <div id="mc_embed_signup">
            <form method="post" action="_subscribe.php">
                <div class="input-group">
                    <input type="email" placeholder="Enter your E-mail" name="email" class="required email form-control" id="mce-EMAIL" required>
                    <span class="input-group-btn">
                        <input type="submit" class="button btn btn-default" value="Subscribe" name="subscribe" id="mc-embedded-subscribe">
                    </span>
                </div>
            </form>
        </div>
    </div>
</section>
<?php include('footer.php'); ?>