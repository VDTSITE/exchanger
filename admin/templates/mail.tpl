<!-- Content Start -->
	<div class="content">
		<div class="main-container1">

			<div class="container">
				<div class="row">

					<div class="col-lg-3">
						<div class="content-sidebar">
							<div class="inner">

								<a href="#" class="btn btn-orange btn-full">Compose</a>

								<ul class="inbox-list">
									<li><a href="#"><i class="fa fa-inbox"></i> Inbox <span class="notification green">12</span></a></li>
									<li><a href="#"><i class="fa fa-star-half-full"></i> Starred <span class="notification blue">12</span></a></li>
									<li><a href="#"><i class="fa fa-exclamation-circle"></i> Important <span class="notification gray">12</span></a></li>
									<li><a href="#"><i class="fa fa-location-arrow"></i> Sent Mail <span class="notification yellow">12</span></a></li>
									<li><a href="#"><i class="fa fa-pencil-square-o"></i> Drafts <span class="notification yellow">12</span></a></li>
									<li><a href="#"><i class="fa fa-trash-o"></i> Trash <span class="notification yellow">12</span></a></li>
								</ul>

								<ul class="list inbox-quota">

									<li>
										<div class="progress-bar-container">
											<span>Inbox Quota</span>
											<div class="progress-bar">
												<div class="progress" style="width: 60%;"></div>
											</div>
											<span>60% Full</span>
										</div>
									</li>

									<li>
										<div class="progress-bar-container">
											<span>Outbox Quota</span>
											<div class="progress-bar">
												<div class="progress" style="width: 23%;"></div>
											</div>
											<span>23% Complete</span>
										</div>
									</li>

								</ul>

							</div>
						</div>
					</div>

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
										<th>Тип BOX'a</th>
										<th>Вид BOX'a</th>
										<th>Комментарий</th>
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
											<p>{$mail[i].name}</p>
										</td>
										<td>
											<p>
												{if $mail[i].box_country == 0}
													Европейский
												{else if $mail[i].box_country == 1}
													Американский
												{else $mail[i].box_country == 2}
													Японский
												{/if}
											</p>
										</td>
										<td>
											<p>
												{if $mail[i].box_size == 0}
													Маленький BOX
												{else if $mail[i].box_size == 1}
													Средний BOX
												{else $mail[i].box_size == 2}
													Большой BOX
												{/if}
											</p>
										</td>
										<td>
											<p class="subtitle">{$mail[i].comment}</p>
										</td>
										<td><a href="full_mail.php?idc={$mail[i].id}">Подробнее</a></td>
										<td>{$mail[i].date}</td>

										<td class="actions">
											<a href="#"><i class="fa fa-file-text-o"></i></a>
											<a href="delete_mail_idc.php?idc={$mail[i].id}"><i class="fa fa-trash-o"></i></a>
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

