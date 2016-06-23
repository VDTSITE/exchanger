<!-- Content Start -->
	<div class="content">
		<div class="main-container1">

			<div class="container">
				<div class="row">

					<!-- <div class="col-lg-3">
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
					</div> -->

					<div class="col-lg-6">
						<!-- Box Start -->
						<div class="inbox box green">

							<!-- Title Bar Start -->
							<div class="box-title gray">
								<span>Голосование</span>
								<!-- <span class="subtitle">// View Messages</span> -->
							</div>
							<!-- Title Bar End -->

							<!-- Content Start -->
							<div class="content">
								<table class="regular-table">
									<thead>
										<!-- <th><input type="checkbox" name="select-all" id="select-all" class="icheck-blue" /></th> -->
										<th>Имя</th>
										<th>Телефон</th>
										<th>Группа</th>
										
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
												{$mail[i].tel}
											</p>
										</td>
										<td>
											<p>
												{if $mail[i].group1 == 1}
													Группа 1
												{else if $mail[i].group1 == 2}
													Группа 2
												{else}
													Группа 3
												{/if}
											</p>
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

