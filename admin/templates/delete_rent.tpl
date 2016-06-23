<h2>Вы действительно хотите удалить адрес {$adress}?</h2>
<form action="delete_rent.php" method="post">
	<input type="radio" name="del" checked="checked" value="yes"> ДА
	<input type="radio" name="del" value="no"> НЕТ<br />

	<input type="hidden" name="idc" value="{$idc}">
	<input type="hidden" name="name" value="{$adress}">
	<input type="submit" name="delete_categorie" value="Удалить">
</form>