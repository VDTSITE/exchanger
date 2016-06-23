<div class="col-lg-6">

						<!-- Box Start -->
						<div class="box">

							<!-- Title Bar Start -->
							<div class="box-title">
								<span class="gray">Редактирование подкатегории</span>
							</div>
							<!-- Title Bar End -->

							<!-- Content Start -->
							<div class="content">

								<form action="edit_sub_categories.php" method="POST" class="basic-form" enctype="multipart/form-data">

									<label for="title">Введите название подкатегории</label>
									<input type="text" name="name" placeholder="Введите название подкатегории" value="{$name}" /><br />

									<label for="photo">Выберите обложку подкатегории</label>
									<input type="file" name="new_photo" placeholder="Выберите обложку подкатегории" /><br />


									<label for="id_cat">Выберите категорию:</label>
									<select id="dropdown" name="id_cat">
										{section loop=$cat name=i}
										<option value="{$cat[i].id}">{$cat[i].name}</option>
										{/section}
										
									</select><br />

									<input type="hidden" name="idc" value={$idc}>
									<input type="submit" name="edit_sub_categorie" value="Редактировать">
									

								</form>

							</div>
							<!-- Content End -->

						</div>
						<!-- Box End -->

					</div>