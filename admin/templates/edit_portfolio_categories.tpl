<div class="col-lg-6">

						<!-- Box Start -->
						<div class="box">

							<!-- Title Bar Start -->
							<div class="box-title">
								<span class="gray">Редактирование категории</span>
							</div>
							<!-- Title Bar End -->

							<!-- Content Start -->
							<div class="content">

								<form action="edit_portfolio_categories.php" method="POST" class="basic-form" enctype="multipart/form-data">

									<label for="title">Введите название категории</label>
									<input type="text" name="name" placeholder="Введите название категории" value="{$name}" /><br />

									<img src="../images/{$photo}" alt="" style="width: 200px;">

									<label for="new_photo">Выберите обложку категории</label>
									<input type="file" name="new_photo" placeholder="Выберите обложку категории" /><br />

									<label for="new_photo">Выберите наличие подкатегории</label>
									<input type="radio" name="exist" checked="checked" value="1"> Есть
									<input type="radio" name="exist" value="0"> Нет<br />
									<br />


									<input type="hidden" name="idc" value={$idc}>
									<input type="hidden" name="idc" value={$idc}>
									<input type="hidden" name="old_photo" value={$photo}>
									<input type="submit" name="edit_categorie" value="Редактировать">
									

								</form>

							</div>
							<!-- Content End -->

						</div>
						<!-- Box End -->

					</div>