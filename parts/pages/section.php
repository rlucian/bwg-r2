<?php
$dd = [
	'id' => '5027952011316',
	'Name' => 'Glenn\'s Vodka',
	'Rank' => '12',
	'RSP' => '12.99',
	'Margin' => '21%',
	'Pack/Case' => '280g/12',
	'Price' => [
		'old' => '€20.50',
	    'new' => '16.50'
	],
    'Details' => [
    	'image' => '/assets/image/product.jpg',
        'Description' => 'Lorem ipsum dolor sit amet, albucius salutatus an pri, ei reque impetus fabellas sea. Ad sit congue ocurreret constituto, quaestio similique id vel. Quidam platonem intellegebat qui an. Quod repudiandae ne vel.',
        'EAN' => '5027952011316',
        'TUC' => '5027952011316',
        'On order' => '13',
        'Start date' => '12/2/2016',
        'Price increase' => '14/11/2016',
        'Pallet Qty.' => '14/11/2016',
        'VAT' => '13.5%',
        'Supplier' => '14/11/2016',
    ]
];
$filters = [
	[
		'name' => 'Top Sellers',
	    'icon' => 'fa fa-circle-thin'
	],[
		'name' => 'Plus Top Sellers',
	    'icon' => 'fa fa-circle-thin'
	],[
		'name' => 'Group Top',
	    'icon' => 'fa fa-circle-thin'
	],[
		'name' => 'My Top Sellers',
	    'icon' => 'fa fa-circle-thin'
	],[
		'name' => 'My products',
	    'icon' => 'fa fa-circle-thin',
	],[
		'name' => 'Category Man.',
	    'icon' => 'fa fa-circle-thin'
	],[
		'name' => 'Trade show',
	    'icon' => 'fa fa-circle-thin'
	],[
		'name' => 'Back in stock',
	    'icon' => 'fa fa-circle-thin'
	],[
		'name' => 'Promotions',
	    'icon' => 'fa fa-tag'
	],[
		'name' => 'Own Brand',
	    'icon' => 'fa fa-circle-thin'
	],[
		'name' => 'Clearance',
	    'icon' => 'fa fa-circle-thin'
	],[
		'name' => 'Handbill',
	    'icon' => 'fa fa-file'
	],[
		'name' => 'Top FoodM/Conv.',
	    'icon' => 'fa fa-circle-thin'
	],[
		'name' => 'New Product',
		'icon' => "fa fa-circle-thin"
	],[
		'name' => 'New Listing',
		'icon' => 'fa fa-circle-thin'
	],[
		'name' => 'Core',
		'icon' => 'fa fa-dot-circle-o'
	],[
		'name' => 'Cycle',
		'icon' => 'fa fa-circle-thin'
	],[
		'name' => 'Multibuy',
		'icon' => 'fa fa-circle-thin'
	],[
		'name' => 'Recommended',
		'icon' => 'fa fa-thumbs-up'
	],[
		'name' => 'All Products',
		'icon' => 'fa fa-circle-thin'
	],[
		'name' => 'Small Case',
		'icon' => 'fa fa-circle-thin'
	],[
		'name' => 'Mixed Case',
		'icon' => 'fa fa-circle-thin'
	],[
		'name' => "Mix and Match",
		'icon' => 'fa fa-circle-thin'
	],[
		'name' => 'Value Line',
		'icon' => 'fa fa-eur'
	],[
		'name' => 'Monday Madness',
		'icon' => 'fa fa-calendar-o'
	],[
		'name' => 'All Products',
		'icon' => 'fa fa-circle-thin'
	]
];
$category = isset($_GET['category']) ? $_GET['category'] : 'alcohol';

function makeSlug($name) {

	$rule = 'NFD; [:Nonspacing Mark:] Remove; NFC';
	$myTrans = \Transliterator::create($rule);
	$name = $myTrans->transliterate($name);
	$name = strtolower($name);

	preg_match_all('([a-z0-9]+)', $name, $matches);
	if (is_array($matches) && isset($matches[0]) && count($matches[0])) {
		return implode('-', $matches[0]);
	}
	else
		return null;
}

?>
<div style="background: #eee url('../../assets/image/banner.jpg') no-repeat 50% 50% /cover;" class="parallax-scroller">
	<div class="scene container">
		<h3>New Season Offers</h3>
		<div class="subtitle">2 Cases for the price of 1</div>
		<a href="#" class="btn btn-success">Buy Now</a>
	</div>
</div>
<div class="submenu <?= $_GET['category']; ?>">
	<div class="container">
		<nav class="navbar">
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-secondary" aria-expanded="false" aria-controls="navbar">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<span class="navbar-brand"><?= $category;?></span>
				</div>
				<div id="navbar-secondary" class="navbar-collapse collapse">
					<ul class="nav navbar-nav">
						<li><a href="#promotions" class="btn btn-default btn-sm">Promotions</a></li>
						<li><a href="#favorites" class="btn btn-default btn-sm active">Favorites</a></li>
						<li><a href="#program" class="btn btn-default btn-sm">Program</a></li>
					</ul>
					<ul class="nav navbar-nav navbar-right">
						<li>
							<div class="dropdown filtersDd">
								<a href="#" id="dropdownFilters" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
									<span class="sr-only">Filters</span><i class="fa fa-chevron-down fa-2x"></i>
								</a>
								<div class="megaMenu dropdown-menu" aria-labelledby="dropdownFilters">
									<div class="container">
										<div class="filtersList">
											<?php
											foreach ($filters as $f) {
												$slug = makeSlug($f['name']);
												?>
												<span>
													<input type="checkbox" id="filters[<?= $slug; ?>]" name="filters[<?= $slug; ?>]" />
													<span class="fake"></span>
													<label for="filters[<?= $slug; ?>]">
														<i class="<?= $f['icon']; ?>"></i><?= $f['name']; ?>
													</label>
												</span>
											<?php } ?>
										</div>
									</div>
								</div>
							</div>
						</li>
						<li>
							<div class="dropdown iconsDd">
								<button class="btn btn-default dropdown-toggle btn-sm" type="button" id="dropdownIcons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
									<i class="fa fa-info-circle"></i>
									Icons guide
									<span class="caret"></span>
								</button>
								<ul class="dropdown-menu" aria-labelledby="dropdownIcons">
									<?php
										foreach ($filters as $f) { ?>
										<li><i class="<?= $f['icon']; ?>"></i><?= $f["name"]; ?></li>
									<?php } ?>
								</ul>
							</div>
						</li>
					</ul>
				</div><!--/.nav-collapse -->
			</div><!--/.container-fluid -->
		</nav>
	</div>
</div>

<div class="container dull">
	<div class="row">
		<div class="col-md-9 col-sm-12 col-main">
			<div class="card transparent">
				<div class="cardTitle">
					<span class="filters">Filter by:</span>
					<div class="btn-group dropdown">
						<a href="#" onclick="javascript:void(0)" class="btn btn-secondary btn-sm dropdown-toggle" role="button" id="ddDepartment" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Department
							<span class="caret"></span>
						</a>
						<ul class="dropdown-menu" aria-labelledby="ddDepartment">
							<li><a class="dropdown-item" href="#">Department 1</a></li>
							<li><a class="dropdown-item" href="#">Department 2</a></li>
							<li><a class="dropdown-item" href="#">Department 3</a></li>
						</ul>
					</div>
					<div class="btn-group dropdown">
						<a href="#" onclick="javascript:void(0)" class="btn btn-secondary btn-sm dropdown-toggle" role="button" id="ddGroup" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Group
							<span class="caret"></span>
						</a>
						<ul class="dropdown-menu" aria-labelledby="ddGroup">
							<li><a class="dropdown-item" href="#">Group 1</a></li>
							<li><a class="dropdown-item" href="#">Group 2</a></li>
							<li><a class="dropdown-item" href="#">Group 3</a></li>
						</ul>
					</div>
					<div class="btn-group dropdown">
						<a href="#" onclick="javascript:void(0)" class="btn btn-secondary btn-sm dropdown-toggle" role="button" id="ddCategory" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Category
							<span class="caret"></span>
						</a>
						<ul class="dropdown-menu" aria-labelledby="ddCategory">
							<li><a class="dropdown-item" href="#">Category 1</a></li>
							<li><a class="dropdown-item" href="#">Category 2</a></li>
							<li><a class="dropdown-item" href="#">Category 3</a></li>
						</ul>
					</div>
					<span class="pull-right filters">
						View as:
						<a class="btn btn-clear active" href="#"><i class="fa fa-list"></i></a>
						<a class="btn btn-clear" href="#"><i class="fa fa-th"></i></a>
					</span>
				</div>
				<table class="table products flex-table">
					<thead>
					<tr>
						<?php
						foreach ( $dd as $k => $v ) {
							if (in_array($k, ['id','Price','Details']))
								continue;
							echo '<th>'.$k.'<a href="#"><i class="fa fa-sort"></i></a></th>';
						}
						echo '<th>Price</th><th></th>'
						?>
					</tr>
					</thead>
					<?php
					for ($i = 0; $i < 12; $i++) { ?>
						<tr data-toggle="collapse" data-target="#tr-<?=$dd['id'] ;?>" class="accordion-toggle">
							<?php
							foreach ($dd as $k => $v) {
								if (in_array($k, ['id','Price','Details']))
									continue;
								echo '<td>'.$v.'</td>';
							}
							?>
							<td class="price">
								<span class="old"><?= $dd['Price']['old'];?></span> <?= $dd['Price']['new'];?>
							<td >
								<span class="placer">
									<i class="fa fa-heart-o fa-2x"></i>
									<i class="fa fa-heart fa-2x"></i>
								</span></td>
							<td class="no-grow hide-x">
								<div class="input-group">
									<span class="input-group-addon">
										<i class="fa fa-plus"></i>
									</span>
									<input type="text" class="form-control" value="1" name="qty-<?= $dd['id'] ;?>" />
									<span class="input-group-addon">
										<i class="fa fa-minus"></i>
									</span>
								</div>
							</td>
							<td class="no-grow hide-x">
								<a href="#add-to-cart?id=<?= $dd['id'] ;?>" onclick="javascript:void(0)" class="btn btn-cart btn-sm btn-success">
									<i class="fa fa-2x bwg-i-cart"></i>
								</a>
							</td>
						</tr>
						<tr class="hiddenRow">
							<td colspan="10">
								<?php
								$rand = (float)rand()/(float)getrandmax();
								if ($rand < 0.33) { ?>
									<div class="offerWrap">
										<div class="offerTag">
											<span class="tagTitle">30% OFF</span>
											<span class="tagDtail">End date</span>
											<span class="tagDate">1/2/17</span>
										</div>
									</div>
								<?php } ?>
								<div class="collapse" id="tr-<?= $dd['id'] ;?>" style="overflow: hidden; clear: both;">
									<div class="tdWrapper">
										<div class="imageWrap"><img class="img-responsive" src="<?= $dd['Details']['image'] ;?>" /></div>
										<div class="main-col">
											<div>
												<div class="p-Title"><?= $dd['Name'] ;?></div>
												<p class="p-Description"><?= $dd['Details']['Description'] ;?></p>
											</div>
											<div class="p-Details">
												<?php
												foreach ($dd['Details'] as $k => $value) {
													if (in_array($k, ['image', 'Description']))
														continue;
													?>
													<div>
														<span class="key"><?= $k ;?></span>
														<span class="value"><?= $value ;?></span>
													</div>
												<?php } ?>
											</div>
										</div>
										<div class="right-col">
											<div class="iconBar">
												<i class="fa fa-2x fa-star"></i>
												<i class="fa fa-2x fa-exclamation-circle"></i>
												<i class="fa fa-2x fa-file"></i>
												<i class="fa fa-2x fa-tag"></i>
											</div>
											<div class="rltv">

												<div class="input-group">
													<span class="input-group-addon">
														<i class="fa fa-plus"></i>
													</span>
													<input type="text" class="form-control" value="1" name="qty-<?= $dd['id'] ;?>" />
													<span class="input-group-addon">
														<i class="fa fa-minus"></i>
													</span>
												</div>
												<a href="#add-to-cart?id=<?= $dd['id'] ;?>" onclick="javascript:void(0)" class="btn btn-cart btn-success btn-block">Add to cart</a>
												<a href="#" class="btn btn-default btn-stock btn-block btn-outline">View Stock Card</a>

											</div>
										</div>
									</div>
								</div>
								<div class="collapse" id="stock-<?= $dd['id'] ;?>">
									<div><!--Don't remove this wrapper, it's needed for smooth animation !-->
										Stock card here
									</div>
								</div>

							</td>
						</tr>

					<?php
						$string = substr($dd['id'], 0, strlen($dd['id']) -7 ) . strval(intval(substr($dd['id'], -7)) + 1);
						$dd['id'] = $string;
					} ?>
				</table>
			</div>
			<div class="pagination">
				<span class="count">
					Items 56 of 4694
				</span>
				<div class="btn-group">
					<a class="btn btn-white" href="#">Previous</a>
					<a class="btn btn-white" href="#">1</a>
					<a class="btn btn-white" href="#">2</a>
					<a class="btn btn-white" href="#">3</a>
					<a class="btn btn-white" href="#">4</a>
					<a class="btn btn-disabled" href="#">5</a>
					<a class="btn btn-white" href="#">6</a>
					<a class="btn btn-white" href="#">Next</a>
				</div>
			</div>
		</div>
		<div class="col-md-3 col-sm-12 aside">
			<?php include dirname(dirname(__FILE__)).DIRECTORY_SEPARATOR."sidebar.php"; ?>
		</div>
	</div>
</div>
