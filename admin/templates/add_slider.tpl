<!-- Form Validation Start -->
					<div class="col-lg-6">
						<div class="box">

							<!-- Title Bar Start -->
							<div class="box-title">
								<span class="gray">Добавление слайда </span>
							</div>
							<!-- Title Bar End -->

							<!-- Content Start -->
							<div class="content">

								<form method="POST" action="add_slider.php" name="form_slider" enctype="multipart/form-data">

									<!-- Required -->
									<label for="email">Добавьте фотографию для слайда</label>
									<input type="file" name="photo_slider1" class="form-control required"  />

									<div class="spacer"></div>


									<label for="title">Введите название для слайда</label>
									<input type="text" name="title" class="form-control required"  />

									<div class="spacer"></div>



									<div class="row">
										<div class="col-lg-12 text-right">
											<span id="send_slider_error" style="color: #cc0000;">&nbsp;&nbsp;</span>
											<input type="submit" name="add_slide1" value="Добавить" class="btn btn-success btn-wide"/>
										</div>
									</div>

								</form>

							</div>
							<!-- Content End -->

						</div>
					</div>
					<!-- Form Validation End -->
