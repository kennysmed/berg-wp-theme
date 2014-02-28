<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Berg
 * @since Berg 1.0
 */
?>

		</div><!-- .container -->

<?php /* START HTML copied from bergcloud.com footer.erb */ ?>
<footer class="page-footer links-alt shade-light">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-6">
        <div class="row">
          <div class="col-xs-6">
            <ul class="list-unstyled">
				<li><a href="<?php echo berg_get_domain(); ?>contact/">Contact</a></li>
				<li><a href="<?php echo berg_get_domain(); ?>about/">About</a></li>
				<li><a href="<?php echo berg_get_domain(); ?>media/">Media</a></li>
				<li><a href="<?php echo berg_get_domain(); ?>terms-and-conditions/">Legal</a></li>
            </ul>
          </div>
          <div class="col-xs-6 text-small">
            <p>Making connected products easy, with web APIs and useful services. For hardware innovators. From Berg a.k.a. the British Experimental Rocket&nbsp;Group.</p>
          </div>
        </div> <!-- .row -->
        <div class="row">
          <div class="col-xs-12" id="mc_signup">
            <h2 class="h4 h-first">Subscribe to the Newsletter</h2>
            <p class="text-small">Get the latest news by email, approximately twice a month. (<a href="http://us1.campaign-archive1.com/?u=996151d8df697b586fb7f916f&id=7a97124719&e=56bc2bba15">See&nbsp;sample</a>)</p>
            <!-- Begin MailChimp Signup Form -->
            <div id="mc_embed_signup">
              <form action="http://berglondon.us1.list-manage1.com/subscribe/post?u=996151d8df697b586fb7f916f&amp;id=041c0d4316" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate form-inline" target="_blank" novalidate role="form">
                <label class="sr-only" for="subscribe-email">Email address</label>
                <input type="email" id="subscribe-email" class="form-control input-sm" placeholder="Enter email address" name="EMAIL">
                <button type="submit" class="btn btn-default btn-sm">Subscribe</button>
                <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups -->
                <div style="position: absolute; left: -5000px;"><input type="text" name="b_996151d8df697b586fb7f916f_041c0d4316" value=""></div>
              </form>
            </div>
          </div>
        </div> <!-- .row -->
      </div> <!-- .col-xs-6 -->
      <div class="clearfix visible-xs"></div>
      <div class="col-xs-6 col-sm-3 text-small">
        <p>
          <strong>Berg</strong><br>
          5th Floor, Epworth House,<br>
          25 City Road, London,<br>
          EC1Y 1AA, UK
        </p>
        <p>
          Registered in England &amp;&nbsp;Wales<br>
          No. 8655161. VAT: 168&nbsp;61&nbsp;10&nbsp;04<br>
          &copy;&nbsp;2014 Berg Cloud Limited
        </p>
      </div>
      <div class="col-xs-6 col-sm-3 text-small">
        <h2 class="h4 h-first">Email us</h2>
        <p><a href="mailto:info@bergcloud.com">info@bergcloud.com</a></p>
        <h2 class="h4">Elsewhere</h2>
        <ul class="list-unstyled">
          <li><a href="https://twitter.com/bergcloud">Twitter</a></li>
          <li><a href="https://instagram.com/bergcloud">Instagram</a></li>
        </ul>
      </div>
    </div>
  </div>
</footer>
<?php /* END HTML copied from bergcloud.com  footer.erb */ ?>


<?php /* START HTML copied from bergcloud.com  modal_shop.erb */ ?>
<div class="modal fade inverted" id="shop-modal" tabindex="-1" role="dialog" aria-labelledby="shop-modal-label" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h1 class="modal-title" id="shop-modal-label">Buy from the Berg store</h1>
      </div>
      <div class="modal-body">

	  <form class="form-inline" role="form" action="<?php echo berg_get_domain(); ?>store/" method="post">
  <div class="form-group">
    <label for="shop-country">Where are you buying from?*</label>
    <select name="country" class="form-control" id="shop-country">
        <option value="au">Australia</option>
        <option value="at">Austria</option>
        <option value="be">Belgium</option>
        <option value="br">Brazil</option>
        <option value="bg">Bulgaria</option>
        <option value="ca">Canada</option>
        <option value="hr">Croatia</option>
        <option value="cy">Cyprus</option>
        <option value="cs">Czech Republic</option>
        <option value="dk">Denmark</option>
        <option value="ee">Estonia</option>
        <option value="fi">Finland</option>
        <option value="fr">France</option>
        <option value="de">Germany</option>
        <option value="gr">Greece</option>
        <option value="hk">Hong Kong</option>
        <option value="hu">Hungary</option>
        <option value="ie">Ireland</option>
        <option value="it">Italy</option>
        <option value="jp">Japan</option>
        <option value="lv">Latvia</option>
        <option value="lt">Lithuania</option>
        <option value="lu">Luxembourg</option>
        <option value="mt">Malta</option>
        <option value="mc">Monaco</option>
        <option value="nl">Netherlands</option>
        <option value="nz">New Zealand</option>
        <option value="no">Norway</option>
        <option value="pl">Poland</option>
        <option value="pt">Portugal</option>
        <option value="ro">Romania</option>
        <option value="sg">Singapore</option>
        <option value="sk">Slovakia</option>
        <option value="si">Slovenia</option>
        <option value="kr">South Korea</option>
        <option value="es">Spain</option>
        <option value="se">Sweden</option>
        <option value="ch">Switzerland</option>
        <option value="tr">Turkey</option>
        <option value="uk" selected="selected">United Kingdom</option>
        <option value="us">USA</option>
    </select>
    <button type="submit" class="btn btn-default btn-bordered">GO</button>
  </div>

</form>
<hr>
<div class="text-small">
  <p>*Our products are based in, and ship from, the UK.</p>
  <p>We have one store for customers in UK and within the EU, and another for US, Canada, Norway, Switzerland, Australia, New Zealand, Japan, Hong Kong, South Korea, Singapore and Brazil. We ask where you're buying from to direct you to the correct store.</p>
</div>

      </div> <!-- .modal-body -->
    </div> <!-- .modal-content -->
  </div> <!-- .modal-dialog -->
</div> <!-- .modal -->
<?php /* END HTML copied from bergcloud.com  modal_shop.erb */ ?>


<!-- This bit is a little differenty to that on bergcloud.com because WordPress uses jQuery in noConflict mode. -->
<script>
  jQuery(document).ready(function () {
	$ = jQuery.noConflict(true);
    bergcloud.init();
  });
</script>

	<?php wp_footer(); ?>
</body>
</html>
