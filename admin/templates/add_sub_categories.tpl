<div class="col-lg-6">

						<!-- Box Start -->
						<div class="box">

							<!-- Title Bar Start -->
							<div class="box-title">
								<span class="gray">Добавление подкатегории</span>
							</div>
							<!-- Title Bar End -->

							<!-- Content Start -->
							<div class="content">

								<form action="add_sub_categories.php" method="POST" class="basic-form" enctype="multipart/form-data">

									<label for="title">Введите название подкатегории</label>
									<input type="text" name="name" placeholder="Введите название подкатегории" /><br />

									<label for="photo">Выберите обложку для подкатегории</label>
									<input type="file" name="photo" placeholder="Выберите обложку для подкатегории" /><br />

									<label for="id_cat">Выберите категорию:</label>
									<select id="dropdown" name="id_cat">
										{section loop=$cat name=i}
										<option value="{$cat[i].id}">{$cat[i].name}</option>
										{/section}
										
									</select><br />


									<input type="submit" name="add_sub_categorie" value="Добавить">
									

								</form>

							</div>
							<!-- Content End -->

						</div>
						<!-- Box End -->

					</div>