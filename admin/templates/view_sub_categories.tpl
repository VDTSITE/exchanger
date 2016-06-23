<div class="col-lg-8">
						<!-- Box Start -->
						<div class="inbox box green">

							<!-- Title Bar Start -->
							<div class="box-title gray">
								<span>Список подкатегорий</span>
								<!-- <span class="subtitle">// View Messages</span> -->
							</div>
							<!-- Title Bar End -->

							<!-- Content Start -->
							<div class="content">
								<table class="regular-table">
									<thead>
										<!-- <th><input type="checkbox" name="select-all" id="select-all" class="icheck-blue" /></th> -->
										<th>№</th>
										<th>Обложка подкатегории</th>
										<th>Название</th>
										<th>Категория</th>
									</thead>
									<tbody>

									<!-- Table Row Start -->
									{section loop=$sub_categories name=i}
									<tr>
										<!-- <td><input type="checkbox" name="select-example" class="icheck-blue" /></td> -->
										<td>
											<p>{$count++}</p>
										</td>
										<td>
											<p><img src="../images/{$sub_categories[i].photo}" style="width: 100px;" alt=""></p>
										</td>
										
										<td>
											<p>{$sub_categories[i].name}</p>
										</td>
										<td>
											<p>{if $sub_categories[i].id_cat == 1}Кухни{else if $sub_categories[i].id_cat == 2}Столы и стулья{else if $sub_categories[i].id_cat == 3}Кухонные уголки{else if $sub_categories[i].id_cat == 4}Шкафы-купе{else if $sub_categories[i].id_cat == 5}Гостинные{else if $sub_categories[i].id_cat == 6}Прихожие{else if $sub_categories[i].id_cat == 7}Диваны и кресла{else if $sub_categories[i].id_cat == 8}Спальни{else if $sub_categories[i].id_cat == 9}Детские комнаты{else if $sub_categories[i].id_cat == 10}Фотообои и фрески{else if $sub_categories[i].id_cat == 11}Офисная мебель{else if $sub_categories[i].id_cat == 12}Кресла и стулья{else if $sub_categories[i].id_cat == 13}Мебель для гостиниц{else if $sub_categories[i].id_cat == 14}Бытовая техника{else if $sub_categories[i].id_cat == 15}Кровати{/if}</p>
										</td>
										<td class="actions">
											<a href="edit_sub_categories.php?idc={$sub_categories[i].id}"><i class="fa fa-file-text-o" title="Редактировать"></i></a>
											<a href="delete_sub_categories.php?idc={$sub_categories[i].id}&sub_categories={$sub_categories[i].name}"><i class="fa fa-trash-o" title="Удалить"></i></a>
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