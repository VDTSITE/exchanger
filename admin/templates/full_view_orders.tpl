<div class="col-lg-12">
						<!-- Box Start -->
						<div class="inbox box green">

							<!-- Title Bar Start -->
							<div class="box-title gray">
								<span>Список заказов</span>
								<!-- <span class="subtitle">// View Messages</span> -->
							</div>
							<!-- Title Bar End -->

							<!-- Content Start -->
							<div class="content">
								<table class="regular-table">

								{section loop=$order name=i}
								{if $order[i].priznak != $order[i].clients_id}
									<thead>
										<!-- <th><input type="checkbox" name="select-all" id="select-all" class="icheck-blue" /></th> -->

										<th>№</th>
										<th>ФИО</th>
										<th>Email</th>
										<th>Телефон</th>
										
										<th>Коммент</th>
										<th>Дата</th>
										<th>Статус</th>
									
										
									</thead>


									<tbody>

									<!-- Table Row Start -->
										<!-- <td><input type="checkbox" name="select-example" class="icheck-blue" /></td> -->
										<td>
											<p>{$order[i].clients_id}</p>
										</td>
										<td>
											<p>{$order[i].name}</p>
										</td>
										<td>
											<p>{$order[i].email}</p>
										</td>
										<td>
											<p>{$order[i].tel}</p>
										</td>
										
										<td>
											<p>{$order[i].comment}</p>
										</td>
										<td>
											<p>{$order[i].data}</p>
										</td>
										<td>
											<p>{if $mark == 5}<a href="module_zakaz.php?clients_id={$order[i].clients_id}&script=archive">Восстановить</a>{else}<a href="module_zakaz.php?clients_id={$order[i].clients_id}&script=order">Выполнить</a>{/if}</p>
										</td>
									
										
									
									<!-- Table Row End -->
									</tbody>

									<thead>
										<!-- <th><input type="checkbox" name="select-all" id="select-all" class="icheck-blue" /></th> -->
										<th>Фото</th>
										<th>Название</th>
										<th>Цена</th>
										<th>Количество</th>
										<th>Стоимость</th>
									
									
										
									</thead>
								{/if}
									<tbody>

									<!-- Table Row Start -->
										<!-- <td><input type="checkbox" name="select-example" class="icheck-blue" /></td> -->
										<td>
											<p><img src="../images/{$order[i].photo}" width="80px;" alt=""></p>
										</td>
										<td>
											<p>{$order[i].title}</p>
										</td>
										<td>
											<p>{$order[i].price}</p>
										</td>
										<td>
											<p>{$order[i].count_tovarov}</p>
										</td>
										<td>
											<p>{$order[i].total_summ}</p>
										</td>

									<!-- Table Row End -->
									</tbody>


									{if $order[i].count_count == $order[i].count_id}
									<tbody>

									<!-- Table Row Start -->
										<!-- <td><input type="checkbox" name="select-example" class="icheck-blue" /></td> -->
										<th colspan="9">Итого:</th>
										<th >{$order[i].total_res}</th>
									

									<!-- Table Row End -->
									</tbody>
									{/if}
									{/section}



								</table>
							</div>
							<!-- Content End -->

						</div>
						<!-- Box End -->
					</div>