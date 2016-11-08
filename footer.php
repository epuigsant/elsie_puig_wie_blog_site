<!---CALL TO ACTION--->
	
	<div class="cta">
		<p>Want to stay up to date on the latest? Subscribe!</p>
		<form method="post" action="mailto:epuigsant@gmail.com">
			<input type="email" id="mail" name="user_mail" placeholder="Your Email" />
			<input class="button" type="submit" value="Submit now"/>
		</form>
	</div>
	
	<!---FOOTER--->
	
	<footer>
		<div class="three-column">
			<?php dynamic_sidebar('footer-one'); ?>
		</div>
		
		<div class="three-column">
			<?php dynamic_sidebar('footer-two'); ?>
		</div>
		
		<div class="three-column">
			<?php dynamic_sidebar('footer-three'); ?>
		</div>
	
	</footer>
	<?php wp_footer(); ?>
</body>
</html>