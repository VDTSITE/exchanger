<div class="col-lg-6">

						<!-- Box Start -->
						<div class="box">

							<!-- Title Bar Start -->
							<div class="box-title">
								<span class="gray">Редактирование Адреса</span>
							</div>
							<!-- Title Bar End -->

							<!-- Content Start -->
							<div class="content">

								<form action="edit_rent.php" method="POST" class="basic-form" enctype="multipart/form-data">

									<label for="title">Введите адрес</label>
									<input type="text" name="adress" placeholder="Введите адрес" value="{$adress}" /><br />

									<input type="text" name="tel" placeholder="Введите телефон" value="{$tel}" /><br />
									<br />


									<input type="hidden" name="idc" value={$idc}>
									<input type="hidden" name="idc" value={$idc}>
									
									<input type="submit" name="edit_categorie" value="Редактировать">
									

								</form>

							</div>
							<!-- Content End -->

						</div>
						<!-- Box End -->

					</div>