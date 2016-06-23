<div class="col-lg-6">
<div class="box">




		<!--	<div class="row">

				<div class="col-lg-12 text-center">
			
					<div class="box">
						
						<div class="content">
							<h1 style="color:#ff503f;font-weight: bold;">Добро пожаловать в администраторскую часть</h1>
							<h3>Здесь Вы сможете с легкостью управлять страницами Вашего сайта!</h3>
						</div>
					</div>
				</div>

			</div> -->

	<!-- Title Bar Start -->
	<div class="box-title red">
		<span>Управление страницами</span>
	</div>
	<!-- Title Bar End -->

	<!-- Content Start -->
	<div class="content">
		<div class="row">
			<div class="col-lg-12">
				<table class="regular-table non-stripped bordered hoverable">
					<thead>

					<th>Название страницы</th>
					<th>Управление</th>

					</thead>

					<tbody>

					<!-- Table Row Start -->
				{section loop=$pages name=i}
					<tr>

						<td><a href="{$pages[i].id}.php">{$pages[i].name}</a></td>
						<td><a href="edit_pages.php?idp={$pages[i].id}">Редактировать</a></td>

					</tr>
				{/section}
					<!-- Table Row End -->
					</tbody>
				</table>
			</div>
		</div>
	</div>
	<!-- Content End -->

</div>

</div>