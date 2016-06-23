<h2>Вы действительно хотите удалить заявку от {$name}?</h2>
<form class="basic-form"  action="delete_request_stock.php" method="post">
	<div>
		<label for="columned-radios" class="icheck-label">Да</label>
		<input type="radio" class="icheck-blue" value="yes" name="del" checked="checked" />

	</div>
	<div>
		<label class="icheck-label">Нет</label>
		<input type="radio" class="icheck-blue" value="no" name="del" />

	</div>

	<input type="hidden" name="ids" value="{$ids}">

	<input type="submit" name="delete" value="Удалить">
</form>








<script src="http://creativico.com/admin-templates/PixProV2/assets/icheck/icheck.js" type="text/javascript"></script>
<script src="http://creativico.com/admin-templates/PixProV2/_demo/icheck.js" type="text/javascript"></script>
<script src="http://creativico.com/admin-templates/PixProV2/_demo/all-pages.js" type="text/javascript"></script>