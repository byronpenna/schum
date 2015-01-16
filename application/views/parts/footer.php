<div id="footer_container" class="container-fluid">

	<footer class="site-footer row" role="contentinfo">

		<div class="inner">

			<div class="navigation">

				<nav class="main-navigation" role="navigation">
					<div class="menu-footer-menu-container">
						<ul id="menu-footer-menu" class="nav-menu">
							<li id="menu-item-1411" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-152 current_page_item menu-item-1411">
								<a href=<?php echo "'".site_url("ourteam")."'" ?> > Meet our team</a>
							</li>
							<li id="menu-item-1409" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1409">
								<a href=<?php echo "'".site_url("news")."'" ?> > News</a>
							</li>
							<li id="menu-item-1414" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1414">
								<a href=<?php echo "'".site_url("our_story")."'" ?> > Our Story</a>
							</li>
							<li id="menu-item-1412" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1412">
								<a href=<?php echo "'".site_url("contact_us")."'" ?> > Contact</a>
							</li>
						</ul>
					</div>				
				</nav>

			</div>

				<div class="sidebars">
					<div class="col col-md-12">
						<div class="widget-area" role="complementary">

							<!-- inicia post -->
							<aside id="recent-posts-2" class="widget widget_recent_entries col col-md-4">
							<h3 class="widget-title tituloFooter">
								Alina&#8217;s Posts
							</h3>		
							<ul>
								<?php echo $homeData->blogsAlina; ?>
							</ul>
						</aside>	

						<!-- finaliza post								</div> -->
					</div>
					<div class="col col-md-4">
						<div class="widget-area" role="complementary">
							<aside id="simple_tweet_widget-2" class="widget simple_tweet_widget">
								<h3 class="widget-title tituloFooter">
									Latest Tweet
								</h3>

								<!-- INICIA TWEET -->
								<ul class="tweets">
										<!-- <li><p><a href="http://twitter.com/Alina_SR/statuses/554670746065068032">Information becomes <a href="http://twitter.com/search?q=%23Revelation">#Revelation</a> through <a href="http://twitter.com/search?q=%23Meditation">#Meditation</a>. 
											<a href="http://twitter.com/search?q=%23breakthrough">#breakthrough</a> <a href="http://twitter.com/search?q=%23wisdom">#wisdom</a> <a href="http://t.co/QBS9bl1Uuy">http://t.co/QBS9bl1Uuy</a></a></p><p class='time'><span class="0_tweet_date"></span></p></li> -->
									<?php echo $homeData->tweets ?>
								</ul>

<!-- finaliza tweet -->
<div class="tweets-meta col col-md-12">

	<img class="alignleft" src="http://pbs.twimg.com/profile_images/2639578145/037ceec6e86c795ebc5edddcae07faf8_normal.jpeg">
		<strong class="real-name" style="vertical-align:top;">Alina Schumacher</strong>
			<a href="https://www.twitter.com/Alina_SR">@Alina_SR</a>



	<p class="twitget-user-description" > <br>Child of God, Wife, #HomeschoolMom, #WorshipLeader, #RealEstate Broker & Coach, Certified #JohnMaxwell Speaker, Visionary, #Entrepreneur</p>
</div>
<script type="text/javascript">
	jQuery(document).ready(function() { 
		moment.lang('en');
		var date_val_0 = 1421078785;
		var date_0 = moment.unix(date_val_0).fromNow();
		jQuery(".0_tweet_date").html(date_0);
	});
</script>
</aside>									</div>
</div>
<div class="col col-md-4">
	<div class="widget-area" role="complementary">
		<aside id="text-4" class="widget widget_text">
			<h3 class="widget-title connectFooter">Connect With Us</h3>		
			<div class="textwidget"><div style="padding-top:10px;"></div>
				<span style="float:right;">
					<a class="foot-social-ico" id='fbFooter' href=<?php echo "'".$homeData->facebook."'" ?> target="_blank">
						<i class="fa fa-facebook"></i>
					</a>
					<a class="foot-social-ico" id='inFooter' href=<?php echo "'".$homeData->linkedIn."'" ?> target="_blank">
						<i class="fa fa-linkedin-square"></i>
					</a>
					<a class="foot-social-ico" id='twitterFooter' href=<?php echo "'".$homeData->twitter."'" ?> target="_blank">
						<i class="fa fa-twitter"></i>
					</a>
					<a class="foot-social-ico" id='youtubeFooter' href=<?php echo "'".$homeData->youtube."'" ?> target="_blank">
						<i class="fa fa-youtube"></i>
					</a>
					<a class="foot-social-ico" id='pinterestFooter' href=<?php echo "'".$homeData->pinterest."'" ?> target="_blank">
						<i class="fa fa-pinterest"></i>
					</a>
				</span>
			</div>
		</aside>									
	</div>
</div>
	</div><!-- /.sidebars -->

</div><!-- /.inner -->

</footer><!-- /.site-footer.row -->

<div class="credits row">
	<address>© 2015 Schumacher Realty Ltd.</address>
	<!-- <address><a class="terms" title="Terms" href="http://alina.peacefulmediadev.com/terms/">Terms of Use &amp; Privacy Policy</a></address> -->
</div><!-- /.credits -->
</div>