
	<footer class="footer component-margin" role="contentinfo">
		<div class="container">
			<ul class="list-unstyled social">
				<li class="social-item"><a href="https://www.facebook.com/webcodingnet/" title="Like WebCoding's page on Facebook" target="_blank" rel="noreferrer"><img class="img-fluid" src="<?php bloginfo('template_directory'); ?>/images/fbsocial.png" alt="Facebook icon"></a></li>
				<li class="social-item"><a href="https://www.linkedin.com/in/andrei-teodorescu-324224b7/" title="Andrei Teodorescu on LinkedIn" target="_blank" rel="noreferrer"><img class="img-fluid" src="<?php bloginfo('template_directory'); ?>/images/linkedinsocial_dark.png" alt="LinkedIn icon"></a></li>
			</ul>
		</div>
	</footer>


<?php wp_footer(); ?>

<script src="<?php bloginfo('template_directory'); ?>/js/standalone/jquery1.12.4.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/dist/js/all.min.js"></script>

    <script>
        if ('serviceWorker' in navigator) {
            navigator.serviceWorker.register('/sw.js').then(function(registration) {
                //console.log('Service worker registered successfully', registration);
                console.log('Service worker registered successfully');
            }).catch(function(err) {
                //console.log('Service worker registration failed: ', err);
                console.log('Service worker registration failed');
            });
        };
    </script>

</body>
</html>
