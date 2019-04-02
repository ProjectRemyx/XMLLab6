<footer id="footer">
    <div class="pageWrapper">
        <h2 class="hidden">Footer</h2>
		<div id="footerContent" class="flexContainer">
			<div id="footerNavigation">
				<nav>
					<!-- Display Navigation-->
					<ul class="menu">
						<!-- <a href="index.php" id="footerLogo"><img id="siteLogo" src="img/be-strong-preview.png" alt="Tollo Logo" /></a> -->
						<?php
						$menu = [
							'Home'=> ROOTPATH . 'index.php', 'About Us' => VIEWPATH . 'aboutus.php', 'Accounts' => VIEWPATH . 'login.php',
							'Contact' => VIEWPATH . 'contact.php', 'Workouts' => VIEWPATH . 'workouts.php'
						];
						foreach ($menu as $label => $file) {
							echo "<li><a href='$file'>$label</a></li>";
						}
						?>
					</ul>
				</nav>
			</div>

			<div id="socialMediaLinks">
					<ul class="menu">
						<!-- Note to self: add links before/if we using as template-->
						<li><a href="#"><img class="socialMediaLogo" src="<?= IMGPATH ?>linkedin.png" alt="Open FlexFit LinkedIn Page" /></a></li>
						<li><a href="#"><img class="socialMediaLogo" src="<?= IMGPATH ?>instagram.png" alt="Open FlexFit Instagram Page" /></a></li>
						<li><a href="#"><img class="socialMediaLogo" src="<?= IMGPATH ?>facebook.png" alt="Open FlexFit Facebook Page" /></a></li>
					</ul>
			</div>
		</div>
    </div>
</footer>
</body>

</html>
