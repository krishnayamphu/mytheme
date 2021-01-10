
<footer>
	<div class="container">
		<div class="row">
			<div class="col-4">
				 <?php if (is_active_sidebar('quick-links')) : ?>
                    <?php dynamic_sidebar('quick-links'); ?>
                <?php endif; ?>
			</div>
		</div>
	</div>
</footer>

    <?php wp_footer(); ?>
</body>
</html>