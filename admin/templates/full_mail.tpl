<!-- Content Start -->
	<div class="content">
		<div class="main-container1">

			<div class="container">
				<div class="row">

					<div class="col-lg-12">
						<!-- Box Start -->
						<div class="inbox box green">

							<!-- Title Bar Start -->
							<div class="box-title gray">
								<span>Входящие сообщения</span>
								<!-- <span class="subtitle">// View Messages</span> -->
							</div>
							<!-- Title Bar End -->

							<!-- Content Start -->
							<div class="content">
								<table class="regular-table">
									<thead>
										<!-- <th><input type="checkbox" name="select-all" id="select-all" class="icheck-blue" /></th> -->
										<th>От кого:</th>
										<th>Email</th>
										<th>Телефон</th>
										<th>Тип BOX'a</th>
										<th>Размер BOX'a</th>
										<th>Способ доставки</th>
										<th>Способ оплаты</th>
										<th>Адрес доставки</th>
										<th>Комментарий</th>
										<th>Дата</th>
										<th>Удаление</th>
									</thead>
									<tbody>

									<!-- Table Row Start -->
									{section loop=$full_mail name=i}
									<tr>
										<!-- <td><input type="checkbox" name="select-example" class="icheck-blue" /></td> -->
										<td>
											<p>{$full_mail[i].name}</p>
										</td>
										<td>
											<p>{$full_mail[i].email}</p>
										</td>
										<td>
											<p>{$full_mail[i].tel}</p>
										</td>
										<td>
											<p>
												{if $full_mail[i].box_country == 0}
													Европейский
												{else if $full_mail[i].box_country == 1}
													Американский
												{else $full_mail[i].box_country == 2}
													Японский
												{/if}
											</p>
										</td>
										<td>
											<p>
												{if $full_mail[i].box_size == 0}
													Маленький BOX
												{else if $full_mail[i].box_size == 1}
													Средний BOX
												{else $full_mail[i].box_size == 2}
													Большой BOX
												{/if}
											</p>
										</td>
										<td>
											<p>
												{if $full_mail[i].sposob_dostavki == 0}
													Новая Почта
												{else if $full_mail[i].sposob_dostavki == 1}
													Курьером по Киеву
												{else $full_mail[i].sposob_dostavki == 2}
													Самовывоз
												{/if}
											</p>
										</td>
										<td>
											<p>
												{if $full_mail[i].sposob_oplati == 0}
													Безналичный рассчёт
												{else if $full_mail[i].sposob_oplati == 1}
													Наличными курьеру
												{else if $full_mail[i].sposob_oplati == 2}
													Наложенный платёж
												{else if $full_mail[i].sposob_oplati == 3}
													WebMoney
												{else $full_mail[i].sposob_oplati == 4}
													PayPal
												{/if}
											</p>
										</td>
										<td>
											<p>{$full_mail[i].adress_dostavki}</p>
										</td>
										<td>
											<p class="subtitle">{$full_mail[i].comment}</p>
										</td>
										
										<td>{$full_mail[i].date}</td>

										<td class="actions">
											<!-- <a href="#"><i class="fa fa-file-text-o"></i></a> -->
											<a href="delete_mail_idc.php?idc={$full_mail[i].id}"><i class="fa fa-trash-o"></i></a>
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


				</div>
			</div>

		</div>
	</div>
	<!-- Content End -->