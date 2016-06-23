<div class="col-lg-12">

						<!-- Box Start -->
						<div class="box">

							<!-- Title Bar Start -->
							<div class="box-title">
								<span class="gray">Редактирование товара</span>
							</div>
							<!-- Title Bar End -->

							<!-- Content Start -->
							<div class="content">

								<form action="edit_products.php" method="POST" class="basic-form" enctype="multipart/form-data">

									<label for="title">Введите название товара</label>
									<input type="text" name="title" placeholder="Введите название товара" value="{$title}" />

									<label for="short_desc">Введите краткое описание</label>
									<textarea name="short_desc" id="textarea" placeholder="Введите краткое описание">{$short_desc}</textarea>

									<label for="full_desc">Введите полное описание</label>
									<textarea name="full_desc" id="textarea" placeholder="Введите полное описание">{$full_desc}</textarea>

									<label for="price">Введите цену</label>
									<input type="text" name="price" placeholder="Введите цену" value="{$price}"/>
									
									<label for="old_price">Введите старую цену</label>
									<input type="text" name="old_price" placeholder="Введите цену" value="{$old_price}"/>
									

									<label for="count">Введите количество товара</label>
									<input type="number" name="count" placeholder="Количество" value="{$count}" maxlength="3" /> 
									<br />

									<img src="../images/{$photo}" alt="" width="80px;">

									<label for="photo">Заменить фотографию:</label>
									<input type="file" name="new_photo" placeholder="Выберите фотографию" />

									<label for="id_cat">Категория:</label>
									<select id="dropdown" name="id_cat">

									{section loop=$categories name=i}
									
										{if $id_cat == $categories[i].id}
										<option value="{$categories[i].id}" selected="selected">{$categories[i].name}</option>
										{else}
										<option value="{$categories[i].id}">{$categories[i].name}</option>

										{/if}

									{/section}
									</select><br />


									<label for="id_sub_cat">Подкатегория:</label>
									<select id="dropdown" name="id_sub_cat">

									{section loop=$sub_categories name=i}
									
										{if $id_sub_cat == $sub_categories[i].id}
										<option value="{$sub_categories[i].id}" selected="selected">{$sub_categories[i].name}</option>
										{else}
										<option value="{$sub_categories[i].id}">{$sub_categories[i].name}</option>

										{/if}

									{/section}
									</select><br />

									<input type="hidden" name="idp" value="{$idp}">
									<input type="hidden" name="old_photo" value="{$photo}">
									<input type="submit" name="edit_product" value="Изменить">
									

								</form>

							</div>
							<!-- Content End -->

						</div>
						<!-- Box End -->

					</div>
