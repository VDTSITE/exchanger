<h2>Вы действительно хотите удалить категорию {$name}?</h2>
<form action="delete_portfolio_categories.php" method="post">
	<input type="radio" name="del" checked="checked" value="yes"> ДА
	<input type="radio" name="del" value="no"> НЕТ<br />

	<input type="hidden" name="idc" value="{$idc}">
	<input type="hidden" name="name" value="{$name}">
	<input type="submit" name="delete_categorie" value="Удалить">
</form>