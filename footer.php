	</div> <!-- /.row -->
</div> <!-- /.container -->
	<footer>
		<div class="container">
			<div class="row">
				<!-- Viser 3 widget, slet alt ned til footer og restat med eget hvis der ikke ønskes widget -->
				<div class="col-md-4">
					<?php if( dynamic_sidebar( 'footer_1' )): ?>
					<?php else: ?>
					<h5>Footer 1</h5>
					<p>Der mangler indhold i Footer 1 widget</p>
					<?php endif; ?>
				</div>
				
				<div class="col-md-4">
					<?php if( dynamic_sidebar( 'footer_2' )): ?>
					<?php else: ?>
					<h5>Footer 2</h5>
					<p>Der mangler indhold i Footer 2 widget</p>
					<?php endif; ?>
				</div>

				<div class="col-md-4">
					<?php if( dynamic_sidebar( 'footer_3' )): ?>
					<?php else: ?>
					<h5>Footer 3</h5>
					<p>Der mangler indhold i Footer 3 widget</p>
					<?php endif; ?>
				</div>
			</div> <!-- /.row -->
			<div class="row">
				<div class="col-md-12">
					<p>website af atriumWeb ApS - <a href="http://atriumweb.dk/online-markedsforing" target="_blank">online markedsføring</a></p>
				</div>
			</div>
			</div>
		</div> <!-- /.container -->
	</footer>
</div> <!-- / #wrap -->

<?php wp_footer(); ?>
</body>
</html>