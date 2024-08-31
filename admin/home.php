<div class="page-wrapper">
    <div class="content">
        <div class="row">
            <div class="col-md-6 col-sm-6 col-lg-6 col-xl-4">
                <div class="dash-widget">
                    <span class="dash-widget-bg1"><i class="fa fa-user" aria-hidden="true"></i></span>
                    <?php
                    $fetch_query = mysqli_query($conn, "select count(*) from tbl_userregistration");
                    $user = mysqli_fetch_row($fetch_query);
                    ?>
                    <div class="dash-widget-info text-right">
                        <h3><?php echo $user[0]; ?></h3>
                        <span class="widget-title1">Registered Users <i class="fa fa-users" aria-hidden="true"></i></span>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-6 col-lg-6 col-xl-4">
                <div class="dash-widget">
                    <span class="dash-widget-bg2"><i class="fa fa-cogs"></i></span>
                    <?php
                    $fetch_query = mysqli_query($conn, "select count(*) from tbl_tourpackage");
                    $package = mysqli_fetch_row($fetch_query);
                    ?>
                    <div class="dash-widget-info text-right">
                        <h3><?php echo $package[0]; ?></h3>
                        <span class="widget-title2">Total Packages <i class="fa fa-cogs" aria-hidden="true"></i></span>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-6 col-lg-6 col-xl-4">
                <div class="dash-widget">
                    <span class="dash-widget-bg3" style="background: #e67e22;"><i class="fa fa-calendar-check" aria-hidden="true"></i></span>
                    <?php
                    $fetch_query = mysqli_query($conn, "select count(*) from tbl_booking");
                    $booking = mysqli_fetch_row($fetch_query);
                    ?>
                    <div class="dash-widget-info text-right">
                        <h3><?php echo $booking[0]; ?></h3>
                        <span class="widget-title3" style="background: #e67e22;">Total Bookings <i class="fa fa-calendar-check" aria-hidden="true"></i></span>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-6 col-lg-6 col-xl-4">
                <div class="dash-widget">
                    <span class="dash-widget-bg4"><i class="fa fa-calendar-plus" aria-hidden="true"></i></span>
                    <?php
                    $fetch_query = mysqli_query($conn, "select count(*) from tbl_booking where status=0");
                    $newbooking = mysqli_fetch_row($fetch_query);
                    ?>
                    <div class="dash-widget-info text-right">
                        <h3><?php echo $newbooking[0]; ?></h3>
                        <span class="widget-title4">New Bookings <i class="fa fa-calendar-plus" aria-hidden="true"></i></span>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-6 col-lg-6 col-xl-4">
                <div class="dash-widget">
                    <span class="dash-widget-bg2" style="background: #9b59b6;"><i class="fa fa-calendar-day" aria-hidden="true"></i></span>
                    <?php
                    $fetch_query = mysqli_query($conn, "select count(*) from tbl_booking where status=1");
                    $cbooking = mysqli_fetch_row($fetch_query);
                    ?>
                    <div class="dash-widget-info text-right">
                        <h3><?php echo $cbooking[0]; ?></h3>
                        <span class="widget-title2" style="background: #9b59b6;">Confirmed Bookings <i class="fa fa-calendar-day" aria-hidden="true"></i></span>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-6 col-lg-6 col-xl-4">
                <div class="dash-widget">
                    <span class="dash-widget-bg1" style="background: #e74c3c;"><i class="fa fa-calendar-times" aria-hidden="true"></i></span>
                    <?php
                    $fetch_query = mysqli_query($conn, "select count(*) from tbl_booking where status=2");
                    $canbooking = mysqli_fetch_row($fetch_query);
                    ?>
                    <div class="dash-widget-info text-right">
                        <h3><?php echo $canbooking[0]; ?></h3>
                        <span class="widget-title1" style="background: #e74c3c;">Cancelled Bookings <i class="fa fa-calendar-times" aria-hidden="true"></i></span>
                    </div>
                </div>
            </div>
        </div>
    </div>