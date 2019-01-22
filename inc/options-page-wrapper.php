<div class="wrap">

	<div id="icon-options-general" class="icon32"></div>
	<h1>NY Times Articles</h1>

	<div id="poststuff">

		<div id="post-body" class="metabox-holder columns-2">

			<!-- main content -->
			<div id="post-body-content">

				<div class="meta-box-sortables ui-sortable">

					<?php if (!isset($pgnyt_search) || $pgnyt_search == ''): ?>

					<div class="postbox">

						<div class="handlediv" title="Click to toggle"><br></div>
						<!-- Toggle -->

						<h2 class="hndle"><span>Lets Get started</span>
						</h2>

						<div class="inside">
						<form method ="post" action="">
						
						<input type="hidden" name="pgnyt_form_submitted" value="Y">

						<table class="form-table">
							<tr valign="top">
								<td scope="row"><label for="tablecell">Search String</label></td>
								<td><input name="pgnyt_search" id="pgnyt_search" type="text" value="" class="regular-text" /></td>
							</tr>
							<tr valign="top">
								<td scope="row"><label for="tablecell">API Key</label></td>
								<td><input name="pgnyt_apikey" id="pgnyt_apikey" type="text" value="" class="regular-text" /></td>
							</tr>
						</table>
							<p>
								<input class="button-primary" type="submit" name="pgnyt_form_submit" value="Save" />
							</p>
						</form>
						</div>
						<!-- .inside -->

					</div>

					<?php else: ?>
					<!-- .postbox -->
					<div class="postbox">

						<div class="handlediv" title="Click to toggle"><br></div>
						<!-- Toggle -->

						<h2 class="hndle"><span>Lets Get started</span>
						</h2>

						<div class="inside">
						<p>Below are the 10 articles</p>

							<ul class="pgnyt-articles">

							<?php for( $i = 0; $i < 10; $i++ ):?>									
								<li>
									<ul>
										<?php if( count($pgnyt_results->{'response'}->{'docs'}[$i]->{'multimedia'}) > 0): ?>
										<li>
											<img width="120px" src="<?php echo 'http://www.nytimes.com/' . $pgnyt_results->{'response'}->{'docs'}[$i]->{'multimedia'}[1]->{'url'}?>">				
										</li>
										<?php endif; ?>	

										<li class="pgnyt-articles-name">
											<a href="<?php echo $pgnyt_results->{'response'}->{'docs'}[$i]->{'web_url'}; ?>">
												<?php echo $pgnyt_results->{'response'}->{'docs'}[$i]->{'headline'}->{'main'}; ?>
											</a>
										</li>

										<li class="pgnyt-articles-paragraph">
											<p><?php echo $pgnyt_results->{'response'}->{'docs'}[$i]->{'lead_paragraph'}; ?></p>
										</li>

									</ul>									
								</li>								
								<?php endfor; ?>
							</ul>
						
						</div>
						<!-- .inside -->

					</div>
					<?php endif; ?>
					<!-- .postbox -->
					<div class="postbox">

						<div class="handlediv" title="Click to toggle"><br></div>
						<!-- Toggle -->

						<h2 class="hndle"><span>JSON Feed</h2>

						<div class="inside">
							<p>
								<?php echo $pgnyt_results->{'response'}->{'docs'}[0]->{'web_url'}; ?>
							</p>
							<p>
								<?php echo $pgnyt_results->{'response'}->{'docs'}[0]->{'headline'}->{'main'}; ?>
							</p>
							<p>
								<?php echo $pgnyt_results->{'response'}->{'docs'}[0]->{'multimedia'}[1]->{'url'}; ?>
							</p>
							<p>
								<?php echo $pgnyt_results->{'response'}->{'docs'}[0]->{'lead_paragraph'}; ?>
							</p>


							<pre><code><?php var_dump($pgnyt_results); ?></code></pre>
						</div>
						<!-- .inside -->

					</div>
				</div>
				<!-- .meta-box-sortables .ui-sortable -->

			</div>
			<!-- post-body-content -->

			<!-- sidebar -->
			<div id="postbox-container-1" class="postbox-container">

				<div class="meta-box-sortables">

					<?php if (isset($pgnyt_search) && $pgnyt_search != ''): ?>
					<div class="postbox">

						<div class="handlediv" title="Click to toggle"><br></div>
						<!-- Toggle -->

						<h2 class="hndle"><span>Settings</h2>

						<div class="inside">
						<form method ="post" action="">

						<input type="hidden" name="pgnyt_form_submitted" value="Y">
							<p>
								<input name="pgnyt_search" id="pgnyt_search" type="text" value="<?php echo $pgnyt_search; ?>" class="all-options" />
								<input name="pgnyt_apikey" id="pgnyt_apikey" type="text" value="<?php echo $pgnyt_apikey; ?>" class="all-options" />
							</p>
	
							<p>
								<input class="button-primary" type="submit" name="pgnyt_form_submit" value="Update" />
							</p>
						</form>	
						</div>
						<!-- .inside -->

					</div>
				<?php endif; ?>
					<!-- .postbox -->
				
				</div>
				<!-- .meta-box-sortables -->

			</div>
			<!-- #postbox-container-1 .postbox-container -->

		</div>
		<!-- #post-body .metabox-holder .columns-2 -->

		<br class="clear">
	</div>
	<!-- #poststuff -->

</div> <!-- .wrap -->
