<style>
.twittext{
	color: #777;

	text-decoration: none;
	font-size: 20px;
}

</style>

<div class="block tags">
<a href="http://twitter.com/{$aConfig->get('module.twitt.siteaccount')}" class="twittext">{$oTwitt->getText()}</a>

	<div class="right"><a href="http://twitter.com/{$aConfig->get('module.twitt.siteaccount')}">{$aLang.block_twitt_url}</a></div>
</div>