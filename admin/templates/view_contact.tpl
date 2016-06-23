<!-- Content Start -->
	<div class="content">
		<div class="main-container1">

			<div class="container">
				<div class="row">

					<div class="col-lg-9">
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
										<th>Тема</th>
										<th>Сообщение</th>
										<th>Дата</th>
										<th>Удаление</th>
									</thead>
									<tbody>

									<!-- Table Row Start -->
									{section loop=$mail name=i}
									<tr>
										<!-- <td><input type="checkbox" name="select-example" class="icheck-blue" /></td> -->
										<td>
											<p>{$mail[i].name}</p>
										</td>
										
										<td>
											<p class="subtitle">{$mail[i].email}</p>
										</td>

										<td>
											<p class="subtitle">{$mail[i].subject}</p>
										</td>

										<td>
											<p class="subtitle">{$mail[i].message}</p>
										</td>
										
										<td>{$mail[i].data}</td>

										<td class="actions">
											<!-- <a href="#"><i class="fa fa-file-text-o"></i></a> -->
											<a href="delete_contact.php?idc={$mail[i].id}"><i class="fa fa-trash-o"></i></a>
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

