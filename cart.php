
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>CSS-Tricks</title>

	<script src="/v/0.6.0/jquery-1.3.2.min.js" type="text/javascript" charset="utf-8"></script>
	<script type="text/javascript" charset="utf-8">
		/* <![CDATA[ */
fc_json = {
	"products":[
	],
	"product_count": 0,
	"total_price": 0,
	"total_weight": 0,
	"session_id": "qarlv2liuclrblt37kpfvj3nc4",
	"custom_fields":{
	},
	"messages":{
		"errors":[],
		"warnings":[],
		"info":[]
	}
};
		/* ]]> */
	</script>
	<script type="text/javascript" charset="utf-8">
		/* <![CDATA[ */
		function fc_PreventCheckout() {
			jQuery("a.fc_link_forward").click(function(){
				return false;
			}).fadeTo("fast", .35).addClass("fc_inactive")
				.css("-ms-filter:", '"Alpha(Opacity=40)"');
			jQuery("a.fc_cart_update").removeClass("fc_inactive").unbind("click").fadeTo("fast", 1)
				.css("-ms-filter:", '"Alpha(Opacity=100)"');
		}
		function fc_AllowCheckout() {
			jQuery("a.fc_link_forward").unbind("click").fadeTo("fast", 1)
				.css("-ms-filter:", '"Alpha(Opacity=100)"').removeClass("fc_inactive");
			jQuery("a.fc_cart_update").click(function(){
				return false;
			}).fadeTo("fast", .35).addClass("fc_inactive")
				.css("-ms-filter:", '"Alpha(Opacity=40)"');
		}
		function fc_TestCheckout(event) {
			if ((typeof(event) != "undefined") && (event.keyCode == 13)) {fc_UpdateCart();}
			fc_cart_current = jQuery.param(jQuery("input.fc_cart_item_quantity, #fc_coupon"));
			if (fc_cart_current != fc_cart_initial) {
				fc_PreventCheckout();
			} else {
				fc_AllowCheckout();
			}
		}
		function fc_RemoveItem(item_count) {
			jQuery("#quantity"+item_count).val(0);
			fc_UpdateCart();
		}
		function fc_UpdateCart() {
			fc_PreventCheckout();
			jQuery("#fc_cart_form").submit();
		}
		function fc_AddCoupon() {
			jQuery("#fc_coupon").toggle();
			if (jQuery("#fc_coupon").is(":visible")) {
				jQuery("#fc_coupon")[0].focus();
			}
		}
		jQuery(document).ready(function($){
			// Set the links to inline-blocks. Necessary for IE8 to use opacity.
			$("a.fc_link_nav").css({
				"display": "-moz-inline-box",
				"display": "inline-block",
				"zoom": "1",
				"*display": "inline"
			});

			// Get initial values
			fc_cart_initial = $.param($("input.fc_cart_item_quantity, #fc_coupon"));

			// Initialize the checkout buttons
			fc_AllowCheckout();

			// Reset focus
			// if ($("a.fc_link_forward")[0]) {
			// 	$("a.fc_link_forward")[0].focus();
			// }

			// Prevent checkout on cart change, coupon entry
			$("input.fc_cart_item_quantity, #fc_coupon")
				.keyup(function(event){fc_TestCheckout(event);})
				.change(function(){fc_TestCheckout();});
		});
		/* ]]> */
	</script>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<link rel="stylesheet" href="https://css-tricks.foxycart.com/themes/standard/styles.css" type="text/css" media="screen" charset="utf-8" />
</head>
<body>
	
<!-- begin cart output -->
<div id="fc_cart_container"><div id="fc_cart_container_inner">
	<noscript>
		<div id="fc_error_noscript" class="fc_error">
			<h3>Warning:</h3>
			<p>Our checkout process requires javascript. Please <a href="http://www.foxycart.com/enabling-javascript" target="_blank">click here to enable javascript</a>. You may then click the checkout button below, or refresh this page to make changes to your cart.</p>
		</div><!-- #fc_errorNoScript -->
	</noscript>
	<form id="fc_cart_form" action="/cart.php" method="post">
		<div id="fc_cart_controls_top" class="fc_cart_controls">
			<input type="hidden" name="cart" value="update" />

				<a class="fc_link_nav fc_cart_update" href="#" onclick="fc_UpdateCart();return false;">Update Cart</a>
			
		</div><!-- #fc_cart_controls_top -->
		<table id="fc_cart_table" cellspacing="0" cellpadding="0">
			<caption>Your Cart</caption>
			<thead>
				<tr id="fc_cart_head">
					<th id="fc_cart_head_item"><span>Item</span></th>
					<th id="fc_cart_head_quantity"><span>Quantity</span></th>
					<th id="fc_cart_head_price"><span>Price</span></th>
				</tr>
			</thead>
			<tfoot>
				<tr id="fc_cart_foot_subtotal">
					<td class="fc_col1" colspan="2" >Subtotal:</td>
					<td class="fc_col2">$0.00</td>
				</tr>
		
				<tr id="fc_cart_foot_total">
					<td class="fc_col1" colspan="2">Order Total:</td>
					<td class="fc_col2">$0.00</td>
				</tr>
			</tfoot>
		
		</table>
		<div id="fc_cart_controls_bottom" class="fc_cart_controls">
			<input type="hidden" name="cart" value="update" />
			<input type="hidden" name="item_count" value="0" />
			<input type="hidden" name="fcsid" value="qarlv2liuclrblt37kpfvj3nc4" />

				<a class="fc_link_nav fc_cart_update" href="#" onclick="fc_UpdateCart();return false;">Update Cart</a>
			

		</div><!-- #fc_cart_controls_bottom -->
	</form>
</div></div><!-- #fc_cart_container_inner, #fc_cart_container -->
<!-- end cart output -->
</body>
</html>
