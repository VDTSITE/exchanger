<div class="col-lg-6">

						<!-- Box Start -->
						<div class="box">

							<!-- Title Bar Start -->
							<div class="box-title">
								<span class="gray">Добавление контакта</span>
							</div>
							<!-- Title Bar End -->

							<!-- Content Start -->
							<div class="content">

								<form action="add_buy.php" method="POST" class="basic-form" enctype="multipart/form-data">

									<label for="first_name">Имя</label>
									<input type="text" name="first_name" placeholder="Введите имя" /><br />
									
									<label for="last_name">Фамилия</label>
									<input type="text" name="last_name" placeholder="Введите фамилию" /><br />

									<label for="seria_passport">Серия паспорта</label>
									<input type="text" name="seria_passport" placeholder="Введите серию паспорта" /><br />

									<label for="number_passport">Номер паспорта</label>
									<input type="text" name="number_passport" placeholder="Введите номер паспорта" /><br />

									<label for="tel">Введите телефон</label>
									<input type="text" name="tel" placeholder="Введите телефон" /><br />

									<label for="skan">Наличие сканкопии</label>
									<input type="checkbox" name="skan" value="1" /> Есть <br />
									<br />

									<label for="comment">Введите комментарий</label>
									<textarea name="comment" id="" cols="30" rows="10"></textarea><br />
	

									<input type="submit" name="add_categorie" value="Добавить">
									

								</form>

							</div>
							<!-- Content End -->

						</div>
						<!-- Box End -->

					</div>