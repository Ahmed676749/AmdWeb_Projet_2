{if count($arrError) > 0}
	<div>
	{foreach from=$arrError item=strError}
		<p>{$strError}</p>
	{/foreach}
	</div>
{/if}
