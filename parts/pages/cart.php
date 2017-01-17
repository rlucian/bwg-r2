<?php
$dd = [
	'id' => '5027952011316',
	'Name' => ['Glenn\'s Vodka','Spaghetti Sauce', 'Sugar for my honey','This is a very long product name ready to help us style'],
	'Rank' => '12',
	'RSP' => '12.99',
	'Margin' => '21%',
	'Pack<br />/Case' => '280g/12',
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

$modal = isset($modal) ? $modal : '';
ob_start();
?>

<div class="modal fade" tabindex="-1" role="dialog" id="updateCartModal">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header bg-success">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title">Modal example</h4>
			</div>
			<div class="modal-body">
				<p>One fine body&hellip;</p>
				<p>To change header bckground color, change <code>bg-success</code> to <code>bg-warning</code>,
					<code>bg-primary</code>, <code>bg-danger</code>, <code>bg-info</code> or remove it (for white background).</p>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-outline btn-primary" data-dismiss="modal">Close</button>
				<button type="button" class="btn btn-primary">Save changes</button>
			</div>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div class="modal fade" tabindex="-1" role="dialog" id="deleteCartModal">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header bg-danger">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title">Are you sure?</h4>
			</div>
			<div class="modal-footer text-center">
				<button type="button" class="btn btn-outline btn-primary" data-dismiss="modal">No</button>
				<button type="button" class="btn btn-danger">Yes</button>
			</div>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<?php
$modal .= ob_get_clean();

/**
 * You can use this method to collect modals from all over the app
 * (all you need is take care not to duplicate ids).
 *
 * I usually place modals at the end of '<body>'.
 * Alternatively, you can just output them anywhere in DOM and run this one-liner on $(window).load() :
 *
 *   $('.modal').appendTo('body');
 *
 */

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

$empty = isset($_GET['empty']);

?>
<div class="container first dull">
	<div class="row">
		<div class="col-md-9 col-sm-12 col-main">
<?php if ($empty): ?>
				<div class="card padding">
					<div class="empty-cart">Your cart is empty.</div>
				</div>
<?php else: ?>
			<div class="card transparent">
				<table class="table products flex-table">
					<thead>
					<tr>
						<?php
						foreach ( $dd as $k => $v ) {
							if (in_array($k, ['id','Price','Details']))
								continue;
							echo '<th>'.$k.'<a href="#"><i class="fa fa-sort"></i></a></th>';
						}
						echo '<th>Price</th><th colspan="3"></th>'
						?>
					</tr>
					</thead>
					<?php

					for ($i = 0; $i < 7; $i++) {
						include dirname(dirname(__FILE__)).DIRECTORY_SEPARATOR."product-row.php";
					}

					?>
				</table>
			</div>
			<div class="afterFlexTable card">
					<div class="flexRow">
						<div class="flexCol">
							<h4>Promotions</h4>
							<dl class="dl-horizontal push">
								<dt>Percentage Saving</dt>
								<dd>14%</dd>
								<dt>Cash Saving</dt>
								<dd>€2.56</dd>
							</dl>

							<div class="btn-group clear separate">
								<a href="#" class="btn btn-success">Continue Shopping</a>
								<a href="#" class="btn btn-danger"  data-toggle="modal" data-target="#deleteCartModal">Erase Cart</a>
								<a href="#modal-example" class="btn btn-default btn-outline" data-toggle="modal" data-target="#updateCartModal">Update Cart</a>
							</div>
						</div>
						<div class="flexCol well">
							<h4>Total <span class="pull-right">€45.50</span></h4>
							<dl class="dl-horizontal push">
								<dt>Order reference</dt>
								<dd>09876</dd>
								<dt>Estimated delivery</dt>
								<dd>26/04/17</dd>
								<dt>Estimated delivery</dt>
								<dd>26/04/17</dd>
							</dl>
							<a href="#checkout" class="btn btn-primary">Send order</a>
						</div>
					</div>
				</div>
<?php endif; ?>
			<div class="card padding">
					<h4 class="heading">Options</h4>

					<div class="alert alert-success" role="alert">
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
						<p>This is a default success alert. You can display it anywhere in the project
					and it will stretch the full width of its parent.</p>
						<p><strong>Note</strong> If you don't want it to be dismissible, remove the top button.</p>
					</div>
				<div class="alert alert-danger" role="alert">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					<p>This is a default danger alert. You can use <code>alert-danger</code>, <code>alert-danger</code>, <code>alert-info</code>, <code>alert-primary</code> and  <code>alert-default</code>.</p>
					<p>I might change their default look, entering and exiting animations, but the markup will remain.</p>
				</div>
					<p class="select-line">Or
						<span class="toggle-btn" onclick="toggleCartButton(this)">
							<input type="hidden" name="cartAction" id="cartAction" value="replace" />
							<span class="option" data-value="replace">replace</span>
							<span class="toggle"></span>
							<span class="option hideMe" data-value="addTo">add to</span>
						</span> cart from a previous order.
						<select class="selectpicker dropup" data-style="btn-outline btn-white">
							<option value="" class="default">select order</option>
							<option value="1">Order 1</option>
							<option value="2">Order 2</option>
							<option value="3">Order 3</option>
							<option value="4">Order 4</option>
							<option value="5">Order 5</option>
							<option value="6">Order 6</option>
						</select>

						<input type="button" class="btn btn-success" onclick="javascript: void(0);" value="Select"></p>
					</p>
				</div>

		</div>
		<div class="col-md-3 col-sm-12 aside">
			<?php include dirname(dirname(__FILE__)).DIRECTORY_SEPARATOR."sidebar.php"; ?>
		</div>
	</div>
</div>

<?= $modal ;?>