<div class="col-lg-6">

						<!-- Box Start -->
						<div class="box">

							<!-- Title Bar Start -->
							<div class="box-title">
								<span class="gray">Добавление товара</span>
							</div>
							<!-- Title Bar End -->

							<!-- Content Start -->
							<div class="content">

								<form action="add_products.php" method="POST" class="basic-form" enctype="multipart/form-data">

									<label for="title">Введите название товара</label>
									<input type="text" name="title" placeholder="Введите название товара" />

									<label for="photo">Выберите фотографию</label>
									<input type="file" name="photo" placeholder="Выберите фотографию" />

									<label for="short_desc">Введите краткое описание</label>
									<textarea name="short_desc" id="textarea" placeholder="Введите краткое описание"></textarea>

									<label for="full_desc">Введите полное описание</label>
									<textarea name="full_desc" id="textarea" placeholder="Введите полное описание"></textarea>


									<label for="photo_ex[]">Выберите фотографии для описания</label>
									<input type="file" multiple name="photo_ex[]" placeholder="Выберите фотографии" />


									<label for="price">Введите цену</label>
									<input type="text" name="price" placeholder="Введите цену" />
									
									<label for="old_price">Введите старую цену</label>
									<input type="text" name="old_price" placeholder="Введите цену" />

									
									<br />

									<label for="count">Введите количество</label>
									<input type="number" name="count" placeholder="Введите количество" value="0" maxlength="3" /> 
									<br />


									

									
									

									
									<br />

									<label for="id_cat">Выберите категорию:</label>
									<select id="dropdown" name="id_cat">
										{section loop=$categories name=i}
										<option value="{$categories[i].id_cat}">{$categories[i].name_cat}</option>
										{/section}
										
									</select><br />



									<label for="id_sub_cat">Выберите подкатегорию:</label>
									<select id="dropdown" name="id_sub_cat">
										{section loop=$sub_categories name=i}
										<option value="{$sub_categories[i].id_sub_cat}">{$sub_categories[i].name_sub_cat}</option>
										{/section}
										
									</select><br />


									<input type="submit" name="add" value="Добавить">
									

								</form>

							</div>
							<!-- Content End -->

						</div>
						<!-- Box End -->

					</div>
