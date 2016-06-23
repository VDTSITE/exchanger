<h2>Вы действительно хотите удалить адрес {$first_name}?</h2>
<form action="delete_buy.php" method="post">
	<input type="radio" name="del" checked="checked" value="yes"> ДА
	<input type="radio" name="del" value="no"> НЕТ<br />

	<input type="hidden" name="idc" value="{$idc}">
	<input type="hidden" name="name" value="{$first_name}">
	<input type="submit" name="delete_categorie" value="Удалить">
</form>