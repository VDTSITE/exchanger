<h2>Вы действительно хотите удалить данную акцию?</h2>
<form action="delete_stock.php" method="post">
	<input type="radio" name="del" checked="checked" value="yes"> ДА
	<input type="radio" name="del" value="no"> НЕТ<br />

	<input type="hidden" name="ids" value="{$ids}">
	<input type="submit" name="delete_categorie" value="Удалить">
</form>