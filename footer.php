<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h4>About <span style="color:#ffcc33;">Kobe</span> <span>Voyage Nexus</span></h4>
                <p>
                    Welcome to Kobe Voyage Nexus, your gateway to a new era of travel. Our cutting-edge platform merges advanced technology with unparalleled travel experiences, offering a seamless and futuristic approach to exploring the world. Whether you’re planning a cosmic adventure or a local escape, Kobe Voyage Nexus provides innovative tools and insights to enhance your journey. Discover personalized itineraries, immersive virtual experiences, and real-time travel updates—all designed to make your voyages as extraordinary as possible. With Kobe Voyage Nexus, the future of travel is now at your fingertips.
                </p>
            </div>
            <div class="col-md-4">
                <h4>Essential <span>Links</span></h4>
                <ul class="foot-menu">
                    <li><a href="index.php">Discover Our World</a></li>
                    <li><a href="about-us.php">Meet the Travel Expert</a></li>
                    <li><a href="gallery.php">Wanderlust Photo Album</a></li>
                    <li><a href="contact-us.php">Get in Touch with Us</a></li>
                </ul>
            </div>
            <div class="col-md-4">
                <h4>Upcoming <span>Trips</span></h4>
                <div class="row">
                    <div class="col-md-3 col-xs-3">
                        <img src="images/japan.jpg" class="img-rounded" alt="Cultural Wonders of Japan">
                    </div>
                    <div class="col-md-9 col-xs-9">
                        <h6>Cultural Wonders of Japan</h6>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-3 col-xs-3">
                        <img src="images/amazon.jpg" class="img-rounded" alt="Amazon Rainforest Adventure">
                    </div>
                    <div class="col-md-9 col-xs-9">
                        <h6>Amazon Rainforest Adventure</h6>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-3 col-xs-3">
                        <img src="images/tropical.jpg" class="img-rounded" alt="Tropical Island Getaway">
                    </div>
                    <div class="col-md-9 col-xs-9">
                        <h6>Tropical Island Getaway</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright">
        Designed and Developed By: <?php echo date('Y'); ?> Sean Kobe R. Dime
    </div>
</footer>

<!-- jQuery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.2/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/custom.js"></script>
<script src="js/owl.carousel.js"></script>
<script type="text/javascript" src="js/jquery.mixitup.min.js"></script>
<script type="text/javascript">
    jQuery(function() {
        var filterList = {
            init: function() {
                $('#gallerylist').mixItUp({
                    selectors: {
                        target: '.gallery_frame',
                        filter: '.filter'
                    },
                    load: {
                        filter: '.Leh-Ladakh'
                    }
                });
            }
        };

        // Run the show!
        filterList.init();
    });
</script>
</body>

</html>