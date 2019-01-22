<?php 

	echo $before_widget;
	echo $before_title . $title . $after_title;


?>
<ul class="pgnyt-articles frontend">

	<?php 

		$total_articles = count( $pgnyt_results->{'response'}->{'docs'} );

		for( $i = $total_articles - 1; $i >= $total_articles - $num_articles; $i-- ):		

	;?>

	<li class="pgnyt-articles">

			<div class="pgnyt-articles-info">
				<?php if( $display_image == '1' ): ?>

					<?php if( count($pgnyt_results->{'response'}->{'docs'}[$i]->{'multimedia'}) > 0): ?>
				
					<img width="120px" src="<?php echo "http://www.nytimes.com/" . $pgnyt_results->{'response'}->{'docs'}[$i]->{'multimedia'}[1]->{'url'}; ?>">	

					<?php endif; ?>	
				
				<?php endif; ?>														
				
				<p class="pgnyt-articles-name">			
					<a href="<?php echo $pgnyt_results->{'response'}->{'docs'}[$i]->{'web_url'}; ?>">
						<?php echo $pgnyt_results->{'response'}->{'docs'}[$i]->{'headline'}->{'main'}; ?>
					</a>								
				</p>							
				
				<p>
					<?php echo $pgnyt_results->{'response'}->{'docs'}[$i]->{'lead_paragraph'}; ?>
				</p>							

			</div>

	</li>


	<?php endfor; ?>

</ul>

<?php 
	echo $after_widget;
?>