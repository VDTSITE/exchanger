<!-- Content Start -->
	<div class="content">
		<div class="main-container1">

			<div class="container">
				<div class="row">

					<div class="col-lg-9">
						<!-- Box Start -->
						<div class="inbox box green">

							<!-- Title Bar Start -->
							<div class="box-title red">
								<span>Курс валют</span>
								<!-- <span class="subtitle">// View Messages</span> -->
							</div>
							<!-- Title Bar End -->

							<!-- Content Start -->
							<div class="content">
								<form action="currency.php" method="post">
									<table class="regular-table">
										<thead>
											<!-- <th><input type="checkbox" name="select-all" id="select-all" class="icheck-blue" /></th> -->
											<th>Название</th>
											<th>Покупка</th>
											<th>Продажа</th>
											<th>Редактирование</th>
											<th>Удаление</th>

										</thead>
										<tbody>

										<!-- Table Row Start -->
										{section loop=$currency name=i}
										<tr {if $currency[i].act == 1}style="background: rgba(210, 210, 210, 0.8) none repeat scroll 0% 0%; text-decoration: line-through; color: rgb(136, 136, 136);"{/if}>
											<!-- <td><input type="checkbox" name="select-example" class="icheck-blue" /></td> -->
											<td>
												<p>{$currency[i].name}</p>
											</td>
											<td>
												<p><input type="text" name="buy{$currency[i].id}" value="{$currency[i].buy}"></p>
											</td>
											<td>
												<p><input type="text" name="sell{$currency[i].id}" value="{$currency[i].sell}"></p>
											</td>
											
											

											<td class="actions">
												
												<a href="{if $currency[i].act == 0}currency.php?act_currency=1&ida={$currency[i].id}{else}currency.php?act_currency=0&ida={$currency[i].id}{/if}">{if $currency[i].act == 0}Скрыть{else}Показать{/if}</a>
											</td>
											<td class="actions">
												<!-- <a href="#"><i class="fa fa-file-text-o"></i></a> -->
												<a href="delete_currency.php?idc={$currency[i].id}"><i class="fa fa-trash-o"></i></a>
											</td>
										</tr>
										<input type="hidden" name="param" value="{$currency[i].id}">
										<input type="hidden" name="active_buy" value="{$active_buy}">
										<input type="hidden" name="active_sell" value="{$active_sell}">
										{/section}
										<!-- Table Row End -->

										

										</tbody>
									</table>
									<input type="submit" name="recount" value="Сохранить">
								</form>
							</div>
							<!-- Content End -->

						</div>
						<!-- Box End -->
					</div>
					<div class="col-lg-3">
					<form name="change_currency" action="currency.php" method="post">
						<label for="select_currency">Выберите основную валюту</label>
						<select name="select_currency" id="select_currency1">
						{section loop=$currency name=i}
							<option value="{$currency[i].id}" {if $currency[i].status == 1}selected="selected"{/if}>{$currency[i].name}</option>
						{/section}
						</select>
					</form>
					</div>


				</div>
			</div>

		</div>
	</div>
	<!-- Content End -->

