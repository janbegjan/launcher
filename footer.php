
		<div id="fh5co-footer">
			<div class="row">
				<div class="col-md-6">
          <?php
            if(is_active_sidebar( 'sidebar_footer_left' )){
              dynamic_sidebar('sidebar_footer_left');
            }
          ?>
				</div>
				<div class="col-md-6 fh5co-copyright">
          <?php
            if(is_active_sidebar( 'sidebar_footer_right' )){
              dynamic_sidebar('sidebar_footer_right');
            }
          ?>
				</div>
			</div>
		</div>
		
	</div>
	
<?php wp_footer(); ?>
	</body>
</html>

