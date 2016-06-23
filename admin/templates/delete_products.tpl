<h2>Вы действительно хотите удалить товар {$title}?</h2>
<form action="delete_products.php" method="POST">
	<input type="radio" name="del" checked="checked" value="yes"> ДА
	<input type="radio" name="del" value="no"> НЕТ<br />

	<input type="hidden" name="idp" value="{$id}">
	<input type="hidden" name="title" value="{$title}">
	<input type="submit" name="delete_product" value="Удалить">
</form>