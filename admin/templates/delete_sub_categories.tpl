<h2>Вы действительно хотите удалить подкатегорию {$name}?</h2>
<form action="delete_sub_categories.php" method="post">
	<input type="radio" name="del" checked="checked" value="yes"> ДА
	<input type="radio" name="del" value="no"> НЕТ<br />

	<input type="hidden" name="idc" value="{$idc}">
	<input type="hidden" name="name" value="{$name}">
	<input type="submit" name="delete_sub_categorie" value="Удалить">
</form>