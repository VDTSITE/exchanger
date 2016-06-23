<!-- Form Validation Start -->
					<div class="col-lg-6">
						<div class="box">

							<!-- Title Bar Start -->
							<div class="box-title">
								<span class="gray">Редактирование страницы </span>
							</div>
							<!-- Title Bar End -->

							<!-- Content Start -->
							<div class="content">

								<form method="POST" action="edit_pages.php">

									<!-- Required -->
									<label for="name">Отредактируйте meta_title</label>
									<input type="text" name="meta_title" id="name" class="form-control required" value="{$meta_title}" />

									<div class="spacer"></div>

									<!-- Required -->
									<label for="email">Отредактируйте meta_keyword</label>
									<input type="text" name="meta_keyword" id="email" class="form-control required" value="{$meta_keyword}" placeholder="Введите meta_keyword" />

									<div class="spacer"></div>

									<!-- Required -->
									<label for="url">Отредактируйте meta_description</label>
									<input type="text" name="meta_description" id="url" class="form-control" value="{$meta_description}" placeholder="Введите meta_description" />

									<div class="spacer"></div>

									<!-- Required -->
									<label for="url">Отредактируйте title</label>
									<input type="text" name="title" id="url" class="form-control" value="{$title}" placeholder="Введите title" />

									<div class="spacer"></div>

									<!-- Required -->
									<label for="comment">Отредактируйте content</label>
									<textarea name="content" id="email" class="form-control required" placeholder="Введите content" rows="10">{$content}</textarea>

									<div class="spacer"></div>

									<!-- Required -->
									<input type="hidden" name="idp" value="{$idp}">

									<div class="row">
										<div class="col-lg-12 text-right">
											<input type="submit" name="edit" value="Редактировать" class="btn btn-success btn-wide"/>
										</div>
									</div>

								</form>

							</div>
							<!-- Content End -->

						</div>
					</div>
					<!-- Form Validation End -->
