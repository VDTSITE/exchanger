<div class="col-lg-12">
						<!-- Box Start -->
						<div class="inbox box green">

							<!-- Title Bar Start -->
							<div class="box-title gray">
								<span>Список товаров</span>
								<!-- <span class="subtitle">// View Messages</span> -->
							</div>
							<!-- Title Bar End -->

							<!-- Content Start -->
							<div class="content">
								<table class="regular-table">
									<thead>
										<!-- <th><input type="checkbox" name="select-all" id="select-all" class="icheck-blue" /></th> -->
										<th>№</th>
										<th>Фото</th>
										<th>Название</th>
										<th>Краткое описание</th>
										<th>Полное описание</th>
										<th>Цена</th>
										<th>Старая цена</th>
										<th>Количество</th>
										<th>Категория</th>
										<th>Подкатегория</th>
										<th>Управление</th>
										
									</thead>
									<tbody>

									<!-- Table Row Start -->
									{section loop=$products_list name=i}
									<tr>
										<!-- <td><input type="checkbox" name="select-example" class="icheck-blue" /></td> -->
										<td>
											<p>{$products_list[i].skip+1}</p>
										</td>
										<td>
											<p><img src="../images/{$products_list[i].photo}" alt="" width="80px;"></p>
										</td>
										<td>
											<p>{$products_list[i].title}</p>
										</td>
										<td>
											<p>{$products_list[i].short_desc}...</p>
										</td>
										<td>
											<p>{$products_list[i].full_desc}...</p>
										</td>
										<td>
											<p>{$products_list[i].price}</p>
										</td>
										<td>
											<p>{$products_list[i].old_price}</p>
										</td>
										<td>
											<p>{$products_list[i].count}</p>
										</td>
										<td>
											<p>{if $products_list[i].id_cat == 1}Мужская{else if $products_list[i].id_cat == 2}Женская{else}Нет категории{/if}</p>
										</td>
										<td>
											<p>{if $products_list[i].id_sub_cat == 1}Платья{else if $products_list[i].id_sub_cat == 2}Юбки{else if $products_list[i].id_sub_cat == 3}Футболки{else if $products_list[i].id_sub_cat == 4}Толстовки{else if $products_list[i].id_sub_cat == 5}Шорты{else if $products_list[i].id_sub_cat == 6}Тенниски{else}Нет подкатегории{/if}</p>
										</td>
										<td class="actions">
											<a href="edit_products.php?idp={$products_list[i].id}"><i class="fa fa-file-text-o" title="Редактировать"></i></a>
											<a href="delete_products.php?idp={$products_list[i].id}&product={$products_list[i].title}"><i class="fa fa-trash-o" title="Удалить"></i></a>
										</td>
										
									</tr>
									{/section}
									<!-- Table Row End -->
									

									</tbody>
								</table>




						<table border='1' style="width: 5%; text-align: center; margin-left: auto; margin-right: auto; margin-top: 25px;">
							<tr>

								<td>
									{if $active_page != 1} 
										<a href='view_products.php?page={$active_page - 1}'> << </a>
									{else}
										<<
									{/if}
								</td>

							{section loop=$array_page name=i}
								
								<td>
								{if $active_page != $array_page[i].p}
									<a href="view_products.php?page={$array_page[i].p}">{$array_page[i].p}</a>
								{else}
									{$array_page[i].p}
								{/if}
								</td>


							{/section}
							
								<td>
								{if $active_page != $pages} 
									<a href='view_products.php?page={$active_page + 1}'> >> </a> 
								{else}
									>>
								{/if}
								</td>


							</tr>
						</table>
							</div>
							<!-- Content End -->

						</div>
						<!-- Box End -->
					</div>