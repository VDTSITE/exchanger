<div class="col-lg-6">

						<!-- Box Start -->
						<div class="box">

							<!-- Title Bar Start -->
							<div class="box-title">
								<span class="gray">Редактирование контакта</span>
							</div>
							<!-- Title Bar End -->

							<!-- Content Start -->
							<div class="content">

								<form action="edit_buy.php" method="POST" class="basic-form" enctype="multipart/form-data">

									<label for="first_name">Введите имя</label>
									<input type="text" name="first_name" placeholder="Введите имя" value="{$first_name}" /><br />

									<label for="last_name">Введите фамилию</label>
									<input type="text" name="last_name" placeholder="Введите фамилию" value="{$last_name}" /><br />

									<label for="seria_passport">Введите серию паспорта</label>
									<input type="text" name="seria_passport" placeholder="Введите серию паспорта" value="{$seria_passport}" /><br />

									<label for="number_passport">Введите номер паспорта</label>
									<input type="text" name="number_passport" placeholder="Введите номер паспорта" value="{$number_passport}" /><br />
									
									<label for="tel">Введите телефон</label>
									<input type="text" name="tel" placeholder="Введите телефон" value="{$tel}" /><br />

									<label for="skan">Наличие сканкопии</label>
									<input type="checkbox" {if $skan == 1}checked="checked"{/if} name="skan" value="1" /> Есть <br />
									<br />
									
									<label for="comment">Введите комментарий</label>
									<textarea name="comment" id="" cols="30" rows="10">{$comment}</textarea>


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