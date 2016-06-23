<div class="col-lg-6">

						<!-- Box Start -->
						<div class="box">

							<!-- Title Bar Start -->
							<div class="box-title">
								<span class="gray">Редактирование акции</span>
							</div>
							<!-- Title Bar End -->

							<!-- Content Start -->
							<div class="content">

								<form action="edit_stock.php" method="POST" class="basic-form" enctype="multipart/form-data">

									<label for="type_operation">Введите тип операции</label>
									<div class="radio">
									  <label>
									    <input type="radio" {if $type_operation == 0}checked="checked"{/if} name="type_operation" id="" value="0">
									   	Ввод
									  </label>
									</div>
									<div class="radio">
									  <label>
									    <input type="radio" {if $type_operation == 1}checked="checked"{/if} name="type_operation" id="" value="1">
									   	Вывод
									  </label>
									</div>



									

									<label for="id_currency">Выберите валюту</label>
									<select name="id_currency" id="">
										{section loop=$currency name=i}

										<option value="{$currency[i].id}" {if $id_currency == $currency[i].id}selected="selected"{/if}>{$currency[i].name}</option>

										{/section}
									</select>


									<label for="percent">Введите процент</label>
									<input type="text" name="percent" id="" value="{$percent}">

									<label for="k_oplate">Введите сумму к оплате</label>
									<input type="text" name="k_oplate" id="" value="{$k_oplate}">

									<label for="k_polucheniju">Введите сумму к получению</label>
									<input type="text" name="k_polucheniju" id="" value="{$k_polucheniju}">
									<input type="hidden" name="ids" id="" value="{$ids}">
									<br />
									<input type="submit" name="edit_categorie" value="Изменить">
								</div>


	

									
									

								</form>

							</div>
							<!-- Content End -->

						</div>
						<!-- Box End -->

					</div>