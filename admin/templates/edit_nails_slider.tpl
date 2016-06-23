<div class="col-lg-6">

						<!-- Box Start -->
						<div class="box">

							<!-- Title Bar Start -->
							<div class="box-title">
								<span class="gray">Редактирование слайда</span>
							</div>
							<!-- Title Bar End -->

							<!-- Content Start -->
							<div class="content">

								<form action="edit_nails_slider.php" method="POST" class="basic-form" enctype="multipart/form-data">

									

									<img src="../images/{$photo}" alt="" style="width: 100px;">

									<label for="new_photo">Выберите новый слайд</label>
									<input type="file" name="new_photo" placeholder="Выберите обложку категории" /><br />

									

									
									<input type="hidden" name="idc" value={$idc}>
									<input type="hidden" name="old_photo" value={$photo}>
									<input type="submit" name="edit_categorie" value="Редактировать">
									

								</form>

							</div>
							<!-- Content End -->

						</div>
						<!-- Box End -->

					</div>