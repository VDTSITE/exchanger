<div class="col-lg-12">
						<!-- Box Start -->
						<div class="box">

							<!-- Title Bar Start -->
							<div class="box-title">
								<span class="gray">График работы</span>
							</div>
							<!-- Title Bar End -->

							<!-- Content Start -->
							<div class="content">

								<form action="schedule.php" method="POST" class="basic-form" enctype="multipart/form-data">

									<label for="mon">Понедельник</label>
									<input type="text" name="mon" value="{$mon}" /><br />

									<label for="tue">Вторник</label>
									<input type="text" name="tue" value="{$tue}" /><br />

									<label for="wed">Среда</label>
									<input type="text" name="wed" value="{$wed}" /><br />

									<label for="thu">Четверг</label>
									<input type="text" name="thu" value="{$thu}" /><br />

									<label for="fri">Пятница</label>
									<input type="text" name="fri" value="{$fri}" /><br />

									<label for="sat">Суббота</label>
									<input type="text" name="sat" value="{$sat}" /><br />

									<label for="sun">Воскресенье</label>
									<input type="text" name="sun" value="{$sun}" /><br />

								
									<br />


									<input type="submit" name="add" value="Сохранить">
									

								</form>

							</div>
							<!-- Content End -->

						</div>
						<!-- Box End -->

					</div>
