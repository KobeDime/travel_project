<?php include('header.php'); ?>
<section class="inner-2"> <img src="images/galleries.jpg" alt="galleries">
	<div class="pagination_b">
		<div class="container">
			<ul class="pagi-inner">
				<li><a href="index.php">Discover Our World</a></li>
				<li><a href="#"> Wanderlust Photo Album</a></li>
			</ul>
		</div>
	</div>
</section>
<section class="inner-3">
	<div class="container">
		<div class="fil_list">
			<ul class="nav " role="tablist">
				<li role="presentation" class="active"><a href="#Mountains" aria-controls="Mountains" role="tab" data-toggle="tab">Mountains</a></li>
				<li role="presentation"><a href="#Beaches" aria-controls="Beaches" role="tab" data-toggle="tab">Beaches</a></li>
				<li role="presentation"><a href="#Cities" aria-controls="Cities" role="tab" data-toggle="tab">Cities</a></li>
				<li role="presentation"><a href="#Countryside" aria-controls="Countryside" role="tab" data-toggle="tab">Countryside</a></li>
			</ul>
		</div>
		<div class=" blog_d">
			<div class="tab-content">
				<div role="tabpanel" class="tab-pane active" id="Mountains">
					<ul class="list-unstyled  lightgallery">
						<li data-responsive="images/portfolios/gallery/mountain1.jpg" data-src="images/portfolios/gallery/mountain1.jpg">
							<div class="grid_box"> <img src="images/portfolios/gallery/mountain1.jpg" alt="mountain1"> </div>
						</li>
						<li data-responsive="images/portfolios/gallery/mountain2.jpg" data-src="images/portfolios/gallery/mountain2.jpg">
							<div class="grid_box"> <img src="images/portfolios/gallery/mountain2.jpg" alt="mountain2"> </div>
						</li>
						<li data-responsive="images/portfolios/gallery/mountain3.jpg" data-src="images/portfolios/gallery/mountain3.jpg">
							<div class="grid_box"> <img src="images/portfolios/gallery/mountain3.jpg" alt="mountain3"> </div>
						</li>
					</ul>
				</div>
				<div role="tabpanel" class="tab-pane" id="Beaches">
					<ul class="list-unstyled  lightgallery">
						<li data-responsive="images/portfolios/gallery/beach1.jpg" data-src="images/portfolios/gallery/beach1.jpg">
							<div class="grid_box"> <img src="images/portfolios/gallery/beach1.jpg" alt="beach1"> </div>
						</li>
						<li data-responsive="images/portfolios/gallery/beach2.jpg" data-src="images/portfolios/gallery/beach2.jpg">
							<div class="grid_box"> <img src="images/portfolios/gallery/beach2.jpg" alt="beach2"> </div>
						</li>
						<li data-responsive="images/portfolios/gallery/beach3.jpg" data-src="images/portfolios/gallery/beach3.jpg">
							<div class="grid_box"> <img src="images/portfolios/gallery/beach3.jpg" alt="beach3"> </div>
						</li>
					</ul>
				</div>
				<div role="tabpanel" class="tab-pane" id="Cities">
					<ul class="list-unstyled  lightgallery">
						<li data-responsive="images/portfolios/gallery/city1.jpg" data-src="images/portfolios/gallery/city1.jpg">
							<div class="grid_box"> <img src="images/portfolios/gallery/city1.jpg" alt="city1"> </div>
						</li>
						<li data-responsive="images/portfolios/gallery/city2.jpg" data-src="images/portfolios/gallery/city2.jpg">
							<div class="grid_box"> <img src="images/portfolios/gallery/city2.jpg" alt="city2"> </div>
						</li>
						<li data-responsive="images/portfolios/gallery/city3.jpg" data-src="images/portfolios/gallery/city3.jpg">
							<div class="grid_box"> <img src="images/portfolios/gallery/city3.jpg" alt="city3"> </div>
						</li>
					</ul>
				</div>
				<div role="tabpanel" class="tab-pane" id="Countryside">
					<ul class="list-unstyled  lightgallery">
						<li data-responsive="images/portfolios/gallery/countryside1.jpg" data-src="images/portfolios/gallery/countryside1.jpg">
							<div class="grid_box"> <img src="images/portfolios/gallery/countryside1.jpg" alt="countryside1"> </div>
						</li>
						<li data-responsive="images/portfolios/gallery/countryside2.jpg" data-src="images/portfolios/gallery/countryside2.jpg">
							<div class="grid_box"> <img src="images/portfolios/gallery/countryside2.jpg" alt="countryside2"> </div>
						</li>
						<li data-responsive="images/portfolios/gallery/countryside3.jpg" data-src="images/portfolios/gallery/countryside3.jpg">
							<div class="grid_box"> <img src="images/portfolios/gallery/countryside3.jpg" alt="countryside3"> </div>
						</li>
					</ul>
				</div>
				
				<div role="tabpanel" class="tab-pane" id="Mountains">...</div>
				<div role="tabpanel" class="tab-pane" id="Beaches">...</div>
				<div role="tabpanel" class="tab-pane" id="Cities">...</div>
				<div role="tabpanel" class="tab-pane" id="Zen">...</div>
			</div>
		</div>
	</div>
</section>
<?php include('footer.php'); ?>