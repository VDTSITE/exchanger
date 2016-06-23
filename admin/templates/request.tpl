<!-- Content Start -->

	<div class="content">
		<div class="main-container1">

			<div class="container">
				<div class="row">

					<div class="col-lg-12 col-md-12">
						<!-- Box Start -->
						<div class="inbox box green">

							<!-- Title Bar Start -->
							<div class="box-title red">
								<span>Заявки на пополнение</span>
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
										<th>Статус</th>										
										<th>Подробнее</th>
										<th>Дата</th>																		
										<th>Удаление</th>
									</thead>
									<tbody>

									<!-- Table Row Start -->
									{section loop=$mail name=i}
									<tr>
										<!-- <td><input type="checkbox" name="select-example" class="icheck-blue" /></td> -->
										<td>
											<p>{$mail[i].tel}</p>
										</td>
										
										<td>
											<p class="subtitle">{$mail[i].last_name}</p>
										</td>

										<td>
											<p class="subtitle">{$mail[i].first_name}</p>
										</td>
										{if $mail[i].status == 0}
										<td>
											<form id="status_in1{$mail[i].id}" action="request.php" name="status_in" method="post">
											<select name="select_in{$mail[i].id}" id="select_in1">
												<option value="0" {if $mail[i].status2 == 0}selected="selected"{/if}>Новая</option>
												<option value="1" {if $mail[i].status2 == 1}selected="selected"{/if}>В обработке</option>
											</select>

											<input type="hidden" name="id_in" value="{$mail[i].id}">
											</form>
										</td>

										{else}
										<td>
											<form id="status_in1{$mail[i].id}" action="request_archive.php" name="status_in" method="post">
											<select name="select_in{$mail[i].id}" id="select_in1">
												<option value="2" {if $mail[i].status2 == 2}selected="selected"{/if}>Завершенная</option>
												<option value="3" {if $mail[i].status2 == 3}selected="selected"{/if}>Отмененная</option>
											</select>

											<input type="hidden" name="id_in" value="{$mail[i].id}">
											</form>
										</td>


										{/if}
										
										<td>
											<p class="subtitle"><a href="full_in.php?idi={$mail[i].id}">Подробнее</a></p>
										</td>
																			
										<td>{$mail[i].data}</td>

										<td class="actions">
											<!-- <a href="#"><i class="fa fa-file-text-o"></i></a> -->
											<a href="delete_request_in.php?idi={$mail[i].id}"><i class="fa fa-trash-o"></i></a>
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
					<!-- /////////////////////////////////////////////// -->
				





				<div class="row">
					<div class="col-lg-12 col-md-12">
						<!-- Box Start -->
						<div class="inbox box green">

							<!-- Title Bar Start -->
							<div class="box-title green">
								<span>Заявки на вывод</span>
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
										<th>Статус</th>
										<th>Подробнее</th>
										<th>Дата</th>																		
										<th>Удаление</th>
									</thead>
									<tbody>

									<!-- Table Row Start -->
									{section loop=$mail1 name=i}
									<tr>
										<!-- <td><input type="checkbox" name="select-example" class="icheck-blue" /></td> -->
										<td>
											<p>{$mail1[i].tel}</p>
										</td>
										
										<td>
											<p class="subtitle">{$mail1[i].last_name}</p>
										</td>

										<td>
											<p class="subtitle">{$mail1[i].first_name}</p>
										</td>

										{if $mail1[i].status == 0}
										<td>
											<form id="status_out1{$mail1[i].id}" name="status_out" action="request.php" method="post">
											<select name="select_out{$mail1[i].id}" id="select_out1">
												<option value="0" {if $mail1[i].status2 == 0}selected="selected"{/if}>Новая</option>
												<option value="1" {if $mail1[i].status2 == 1}selected="selected"{/if}>В обработке</option>
											</select>

											<input type="hidden" name="id_out" value="{$mail1[i].id}">
											</form>
										</td>


										{else}

										<td>
											<form id="status_out1{$mail1[i].id}" name="status_out" action="request_archive.php" method="post">
											<select name="select_out{$mail1[i].id}" id="select_out1">
												<option value="2" {if $mail1[i].status2 == 2}selected="selected"{/if}>Завершенная</option>
												<option value="3" {if $mail1[i].status2 == 3}selected="selected"{/if}>Отмененная</option>
											</select>

											<input type="hidden" name="id_out" value="{$mail1[i].id}">
											</form>
										</td>

										{/if}
										
										<td>
											<p class="subtitle"><a href="full_out.php?ido={$mail1[i].id}">Подробнее</a></p>
										</td>
																			
										<td>{$mail1[i].data}</td>

										<td class="actions">
											<!-- <a href="#"><i class="fa fa-file-text-o"></i></a> -->
											<a href="delete_request_out.php?ido={$mail1[i].id}"><i class="fa fa-trash-o"></i></a>
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




					



				<div class="row">
					<div class="col-lg-12 col-md-12">
						<!-- Box Start -->
						<div class="inbox box green">

							<!-- Title Bar Start -->
							<div class="box-title gray">
								<span>Акционные заявки</span>
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
										<th>Статус</th>
										<th>Подробнее</th>
										<th>Дата</th>																		
										<th>Удаление</th>
									</thead>
									<tbody>

									<!-- Table Row Start -->
									{section loop=$mail2 name=i}
									<tr>
										<!-- <td><input type="checkbox" name="select-example" class="icheck-blue" /></td> -->
										<td>
											<p>{$mail2[i].tel}</p>
										</td>
										
										<td>
											<p class="subtitle">{$mail2[i].last_name}</p>
										</td>

										<td>
											<p class="subtitle">{$mail2[i].first_name}</p>
										</td>
										{if $mail2[i].status == 0}
										<td>
											<form id="status_stock1{$mail2[i].id}" name="status_stock" action="request.php" method="post">
											<select name="select_stock{$mail2[i].id}" id="select_stock1">
												<option value="0" {if $mail2[i].status2 == 0}selected="selected"{/if}>Новая</option>
												<option value="1" {if $mail2[i].status2 == 1}selected="selected"{/if}>В обработке</option>
											</select>

											<input type="hidden" name="id_stock" value="{$mail2[i].id}">
											</form>
										</td>


										{else}

										<td>
											<form id="status_stock1{$mail2[i].id}" name="status_stock" action="request_archive.php" method="post">
											<select name="select_stock{$mail2[i].id}" id="select_stock1">
												<option value="2" {if $mail2[i].status2 == 2}selected="selected"{/if}>Завершенная</option>
												<option value="3" {if $mail2[i].status2 == 3}selected="selected"{/if}>Отмененная</option>
											</select>

											<input type="hidden" name="id_stock" value="{$mail2[i].id}">
											</form>
										</td>

										{/if}
										<td>
											<p class="subtitle"><a href="full_stock.php?ids={$mail2[i].id}">Подробнее</a></p>
										</td>
																			
										<td>{$mail2[i].data}</td>

										<td class="actions">
											<!-- <a href="#"><i class="fa fa-file-text-o"></i></a> -->
											<a href="delete_request_stock.php?ids={$mail2[i].id}"><i class="fa fa-trash-o"></i></a>
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



{literal}
<script>



{/literal}
{section loop=$mail name=i}
{literal}
var change_in = document.getElementsByName("{/literal}select_in{$mail[i].id}{literal}");
	for(var i = 0; i < change_in.length; i++) {
		//alert("in");
		change_in[i].onchange=function() {
			//alert("1");
			document.getElementById("{/literal}status_in1{$mail[i].id}{literal}").submit();
			//alert("2");
		}
}
{/literal}
{/section}

{section loop=$mail1 name=i}
{literal}
var change_out = document.getElementsByName("{/literal}select_out{$mail1[i].id}{literal}");
//alert(change_out.length);
	for(var i = 0; i < change_out.length; i++) {
		//alert("out");
		change_out[i].onchange=function() {
			document.getElementById("{/literal}status_out1{$mail1[i].id}{literal}").submit();
		}
	
}

/*document.getElementById("select_stock1").onchange=function() {
	status_stock.submit();

}*/
{/literal}
{/section}






{section loop=$mail2 name=i}
{literal}
var change_stock = document.getElementsByName("{/literal}select_stock{$mail2[i].id}{literal}");
//alert(change_out.length);
	for(var i = 0; i < change_stock.length; i++) {
		//alert("out");
		change_stock[i].onchange=function() {
			document.getElementById("{/literal}status_stock1{$mail2[i].id}{literal}").submit();
			//alert("sussecc");
		}
	
}

/*document.getElementById("select_stock1").onchange=function() {
	status_stock.submit();

}*/
{/literal}
{/section}






{literal}
</script>
{/literal}