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
								<span>Новости</span>
								<!-- <span class="subtitle">// View Messages</span> -->
							</div>
							<!-- Title Bar End -->

							<!-- Content Start -->
							<div class="content">
								<table class="regular-table">
									<thead>
										<!-- <th><input type="checkbox" name="select-all" id="select-all" class="icheck-blue" /></th> -->
										<th>Название</th>
										<th>Видео</th>
										<th>Фото</th>
										<!-- <th>Описание</th> -->
										<th>Дата</th>
										<th>Редактировать</th>
										<th>Удалить</th>
										
									</thead>
									<tbody>

									<!-- Table Row Start -->
									{section loop=$mail1 name=i}
									<tr>
										<!-- <td><input type="checkbox" name="select-example" class="icheck-blue" /></td> -->
										<td>
											<p>{$mail1[i].title}</p>
										</td>
										<td>
											<p>{$mail1[i].video}</p>
										</td>
										<td>
											<p>
												<img src="../images/{$mail1[i].photo}" alt="" style="width: 100px;">
											</p>
										</td>
										<!-- <td>
											<p>{$mail1[i].desc}</p>
										</td>
										 -->
										<td>{$mail1[i].data}</td>

										<td class="actions">
											<a href="edit_news.php?idn={$mail1[i].id}"><i class="fa fa-file-text-o"></i></a>
										</td>
										<td class="actions">
											<a href="delete_news.php?idn={$mail1[i].id}&news_title={$mail1[i].title}"><i class="fa fa-trash-o"></i></a>
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

