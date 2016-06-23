<!-- Content Start -->
	<div class="content">
		<div class="main-container1">

			<div class="container">
				<div class="row">

					<div class="col-lg-12">
						<!-- Box Start -->
						<div class="inbox box green">

							<!-- Title Bar Start -->
							<div class="box-title green">
								<span>Заявка на вывод</span>
								<!-- <span class="subtitle">// View Messages</span> -->
							</div>
							<!-- Title Bar End -->

							<!-- Content Start -->
							<div class="content">
								<table class="regular-table">
									<thead>
										<!-- <th><input type="checkbox" name="select-all" id="select-all" class="icheck-blue" /></th> -->
										<th>Телефон</th>
										<th>Фамилия</th>
										<th>Имя</th>
										<th>Вывод с</th>
										<th>Сумма вывода</th>
										<th>Оплата в</th>
										<th>К оплате</th>
										<th>Комиссия</th>
										<th>Дата</th>
										<th>Выполнить</th>															
										<th>Удаление</th>
									</thead>
									<tbody>

									<!-- Table Row Start -->
								
									<tr>
										<!-- <td><input type="checkbox" name="select-example" class="icheck-blue" /></td> -->
										<td>
											<p>{$tel}</p>
										</td>
										
										<td>
											<p class="subtitle">{$last_name}</p>
										</td>

										<td>
											<p class="subtitle">{$first_name}</p>
										</td>
										
										<td>
											<p class="subtitle">{$s_wm}</p>
										</td>

										<td>
											<p class="subtitle">{$summ}</p>
										</td>

										<td>
											<p class="subtitle">{$v_currency}</p>
										</td>

										<td>
											<p class="subtitle">{$k_oplate}</p>
										</td>

										<td>
											<p class="subtitle">{$komisija}</p>
										</td>
																	
										<td>{$data}</td>

										<td>
											<p class="subtitle"><a href="{if $status == 0}module_zakaz.php?ido={$ido}&script=request{else}module_zakaz.php?ido={$ido}&script=request_archive{/if}">{if $status == 0}Выполнить{else}Вернуть{/if}</a></p>
										</td>

										<td class="actions">
											<!-- <a href="#"><i class="fa fa-file-text-o"></i></a> -->
											<a href="delete_request_out.php?ido={$ido}"><i class="fa fa-trash-o"></i></a>
										</td>
									</tr>
									
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

