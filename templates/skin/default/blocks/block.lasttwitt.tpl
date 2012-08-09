<style>
.twittext {
	color: #a7abb4;
	text-decoration: none;
	font-size: 18px;
}

</style>

	<section class="block">
		<div class="block-content">
			<a href="http://twitter.com/{$oConfig->get('module.twitt.siteaccount')}" class="twittext">{$oTwitt->getText()}</a>	
		</div>	
	<footer>
			<a href="http://twitter.com/{$oConfig->get('module.twitt.siteaccount')}" class="fl-r">{$aLang.plugin.twitt.block_twitt_url}</a>
	</footer>
	</section>
