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
								


								<thead>
										<!-- <th><input type="checkbox" name="select-all" id="select-all" class="icheck-blue" /></th> -->

										<th>№</th>
										<th>ФИО</th>
										<th>Email</th>
										<th>Телефон</th>
										<!-- <th>Новая почта</th>
										<th>Комментарий</th> -->
										
										<th>Дата</th>
										<th>Статус</th>
										<th>Подробнее</th>
										<th>Удаление</th>
									
										
									</thead>


								{section loop=$order name=i}
								{if $order[i].priznak != $order[i].clients_id}
									


									<tbody>

									<!-- Table Row Start -->
										<!-- <td><input type="checkbox" name="select-example" class="icheck-blue" /></td> -->
										<td>
											<p>{$schetchik++}</p>
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
										<!-- <td>
											<p>{$order[i].np_near}</p>
										</td>
										<td>
											<p>{$order[i].comment}</p>
										</td> -->
										
										<td>
											<p>{$order[i].data}</p>
										</td>
										<td>
											<p>{if $mark == 5}<a href="module_zakaz.php?clients_id={$order[i].clients_id}&script=archive">Восстановить</a>{else}<a href="module_zakaz.php?clients_id={$order[i].clients_id}&script=order">Выполнить</a>{/if}</p>
										</td>
										<td>
											<p><a href="full_view_orders.php?clients_id={$order[i].clients_id}">Подробнее</a></p>
										</td>
										<td class="actions">
											<!-- <a href="#"><i class="fa fa-file-text-o"></i></a> -->
											<a href="delete_orders.php?clients_id={$order[i].clients_id}&name={$order[i].name}&products_id={$order[i].products_id}&count_tovarov={$order[i].count_tovarov} "><i class="fa fa-trash-o"></i></a>
										</td>
									
										
									
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