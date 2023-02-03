{extends file="structure.tpl"}

{block name="head_infos" append}
		
{/block}

{block name="content"}
	
	{foreach from=$arrOffresToDisplay item=objOffre}
		{include file="offre.tpl"}
	{/foreach}
{/block}