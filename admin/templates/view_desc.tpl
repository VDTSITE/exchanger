<div class="col-lg-12">
						<!-- Box Start -->
						<div class="box">

							<!-- Title Bar Start -->
							<div class="box-title">
								<span class="gray">Добавление описания</span>
							</div>
							<!-- Title Bar End -->

							<!-- Content Start -->
							<div class="content">

								<form action="view_desc.php" method="POST" class="basic-form" enctype="multipart/form-data">

									<label for="title">Введите название</label>
									<input type="text" name="title" placeholder="Введите название описания" value="{$title}" /><br />

								
									<label for="desc">Введите описание</label>
									<textarea name="desc" id="short_desc3">{$content}</textarea>
									{literal}
									<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
									
									<script type="text/javascript" src="AjexFileManager/ajex.js"></script>

									<script type="text/javascript" src="js/jquery-1.7.min.js"></script>
									
									<script type="text/javascript" src="js/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
									
									<link rel="stylesheet" href="js/fancybox/jquery.fancybox-1.3.4.css" type="text/css" media="screen" />

									<script type="text/javascript">
										
											$('a.fb').fancybox();
										
									</script>

									<script type="text/javascript">
										
										var ckeditor2 = CKEDITOR.replace( 'short_desc3' );
										
										AjexFileManager.init({
										
										returnTo: 'ckeditor',
										
										editor: ckeditor2
										
										});
									</script>
									{/literal}<br />


									<input type="submit" name="add" value="Добавить">
									

								</form>

							</div>
							<!-- Content End -->

						</div>
						<!-- Box End -->

					</div>
