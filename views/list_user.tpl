{extends file="views/structure.tpl"}

{block name="head_infos" append}
	<link rel="stylesheet" href="assets/css/jquery.dataTables.min.css" />	
	
	<script src="assets/javascript/jquery-3.5.1.js"></script>
	<script src="assets/javascript/jquery.dataTables.min.js"></script>
{/block}

{block name="content"}
	<h2>Liste des utilisateurs</h2>
	<table id="list" class="table table-striped" style="width:100%">
		<thead>
			<tr>
				<th>Nom</th>
				<th>Prénom</th>
				<th>Mail</th>
				<th>Actions</th>
			</tr>
		</thead>
		
		<tbody>
			{foreach from=$arrUsersToDisplay item=objUser} 
			<tr>
				<td>{$objUser->getNom()|unescape}</td>
				<td>{$objUser->getPrenom()|unescape}</td>
				<td>{$objUser->getMail()|unescape}</td>
				<td>
					<a href="index.php?ctrl=utilisateur&action=modifier_compte&id={$objUser->getId()}" >Modifier</a>
					<a href="index.php?ctrl=utilisateur&action=supprimer_compte&id={$objUser->getId()}" >Supprimer</a>
				</td>
			</tr>
			{/foreach}
		</tbody>
		<tfoot>
		</tfoot>
	</table>

{/block}

{block name='js_foot' append}
	{literal}
	<script>
		$(document).ready(function () {
			$('#list').DataTable( {
				"language": {
					"url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/French.json"
				}
			} );
		});
	</script>
	{/literal}

{/block}
