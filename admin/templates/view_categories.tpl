<div class="col-lg-8">
						<!-- Box Start -->
						<div class="inbox box green">

							<!-- Title Bar Start -->
							<div class="box-title gray">
								<span>Список категорий</span>
								<!-- <span class="subtitle">// View Messages</span> -->
							</div>
							<!-- Title Bar End -->

							<!-- Content Start -->
							<div class="content">
								<table class="regular-table">
									<thead>
										<!-- <th><input type="checkbox" name="select-all" id="select-all" class="icheck-blue" /></th> -->
										<th>№</th>
										<th>Обложка категории</th>
										<th>Название</th>
										<th>Наличие подкатегории</th>
									</thead>
									<tbody>

									<!-- Table Row Start -->
									{section loop=$categories name=i}
									<tr>
										<!-- <td><input type="checkbox" name="select-example" class="icheck-blue" /></td> -->
										<td>
											<p>{$count++}</p>
										</td>
										<td>
											<p><img src="../images/{$categories[i].photo}" style="width: 100px;" alt=""></p>
										</td>
										<td>
											<p>{$categories[i].name}</p>
										</td>
										<td>
											<p>{if $categories[i].exist == 0}Нет{else}Есть{/if}</p>
										</td>
										<td class="actions">
											<a href="edit_categories.php?idc={$categories[i].id}"><i class="fa fa-file-text-o" title="Редактировать"></i></a>
											<a href="delete_categories.php?idc={$categories[i].id}&categorie={$categories[i].name}"><i class="fa fa-trash-o" title="Удалить"></i></a>
										</td>
										
									</tr>
									{/section}
									<!-- Table Row End -->

									

									</tbody>
								</table>
							</div>
							<!-- Content End -->

						</div>
						<!-- Box End -->
					</div>