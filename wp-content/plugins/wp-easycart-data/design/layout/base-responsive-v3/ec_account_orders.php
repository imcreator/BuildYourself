<div id="ec_account_orders">
	
    <div class="ec_account_left">

		<div class="ec_cart_header ec_top"><?php echo $GLOBALS['language']->get_text( 'account_orders', 'account_orders_title' )?></div>

			<div class="ec_account_orders_holder">

				<div class="ec_account_order_line_header">

					<div class="ec_account_order_line_column1_header"><?php echo $GLOBALS['language']->get_text( 'account_orders', 'account_orders_header_1' )?></div>

					<div class="ec_account_order_line_column2_header"><?php echo $GLOBALS['language']->get_text( 'account_orders', 'account_orders_header_2' )?></div>

					<div class="ec_account_order_line_column3_header"><?php echo $GLOBALS['language']->get_text( 'account_orders', 'account_orders_header_3' )?></div>

					<div class="ec_account_order_line_column4_header"><?php echo $GLOBALS['language']->get_text( 'account_orders', 'account_orders_header_4' )?></div>

					<div class="ec_account_order_line_column5_header"></div>

				</div>

				<div class="ec_account_orders_row" id="ec_orders_list">

					<?php $this->orders->display_order_list( ); //prints out a list of orders of type ec_account_order_line.php ?>

            </div>

        </div>
    
    </div>

	<div class="ec_account_right">

		<div class="ec_cart_header ec_top"><?php echo $GLOBALS['language']->get_text( 'account_navigation', 'account_navigation_title' )?></div>

		<div class="ec_cart_input_row">

			<?php $this->display_billing_information_link( $GLOBALS['language']->get_text( 'account_navigation', 'account_navigation_billing_information' ) ); ?>

		</div>

        <div class="ec_cart_input_row">

			<?php $this->display_shipping_information_link( $GLOBALS['language']->get_text( 'account_navigation', 'account_navigation_shipping_information' ) ); ?>

		</div>

        <div class="ec_cart_input_row">

			<?php $this->display_personal_information_link( $GLOBALS['language']->get_text( 'account_navigation', 'account_navigation_basic_inforamtion' ) ); ?>

		</div>

       <div class="ec_cart_input_row">

          <?php $this->display_password_link( $GLOBALS['language']->get_text( 'account_navigation', 'account_navigation_password' ) ); ?>

        </div>

		<?php if( $this->using_subscriptions( ) ){ ?>

        <div class="ec_cart_input_row">

          <?php $this->display_subscriptions_link( $GLOBALS['language']->get_text( 'account_navigation', 'account_navigation_subscriptions' )); ?>

        </div>

        <?php }?>

        <div class="ec_cart_input_row">

          <?php $this->display_logout_link( $GLOBALS['language']->get_text( 'account_navigation', 'account_navigation_sign_out' )); ?>

        </div>

	</div>
    
</div>