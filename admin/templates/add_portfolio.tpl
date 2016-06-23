<div class="col-lg-6">

						<!-- Box Start -->
						<div class="box">

							<!-- Title Bar Start -->
							<div class="box-title">
								<span class="gray">Добавление портфолио</span>
							</div>
							<!-- Title Bar End -->

							<!-- Content Start -->
							<div class="content">

								<form action="add_portfolio.php" method="POST" class="basic-form" enctype="multipart/form-data">


									<label for="photo">Выберите фотографию для портфолио</label>
									<input type="file" name="photo" placeholder="Выберите обложку для категории" /><br />


									<label for="id_cat">Выберите категорию для портфолио:</label>
									<select id="dropdown" name="id_cat">
										{section loop=$categories name=i}
										<option value="{$categories[i].id_cat}">{$categories[i].name_cat}</option>
										{/section}
										
									</select><br />


									<input type="submit" name="add_categorie" value="Добавить">
									

								</form>

							</div>
							<!-- Content End -->

						</div>
						<!-- Box End -->

					</div>