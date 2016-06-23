

<!-- Form Validation Start -->
					<div class="col-lg-12">
						<div class="box">

							<!-- Title Bar Start -->
							<div class="box-title">
								<span class="gray">Добавление новости </span>
							</div>
							<!-- Title Bar End -->

							<!-- Content Start -->
							<div class="content">

								<form method="POST" action="add_news.php" name="form_news" enctype="multipart/form-data">

									<!-- Required -->
									<label for="title_news1">Введите название новости</label>
									<input type="text" name="title_news1" id="title_news" class="form-control required" placeholder="Введите название новости"/>
									<span id="title_news_error" style="color: #cc0000;"></span>

									<div class="spacer"></div>


									<!-- Required -->
									<label for="video_news1">Вставьте html-код видео</label>
									<input type="text" name="video_news1" id="video_news" class="form-control required"  placeholder="Вставьте html-код видео" />

									<div class="spacer"></div>


									<!-- Required -->
									<label for="photo_news1">Выберите фотографию для новости</label>
									<input type="file" name="photo_news1" id="photo_news" class="form-control required"  />

									<div class="spacer"></div>


									<label for="desc_news1">Введите краткое описание новости</label>
									<textarea name="short_desc1" id="short_desc3"></textarea>
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
									{/literal}
									<span id="desc_news_error" style="color: #cc0000;"></span>

									<div class="spacer"></div>




									<label for="desc_news1">Введите полное описание новости</label>
									<textarea name="desc_news1" id="desc_news3"></textarea>
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
										
										var ckeditor1 = CKEDITOR.replace( 'desc_news3' );
										
										AjexFileManager.init({
										
										returnTo: 'ckeditor',
										
										editor: ckeditor1
										
										});
									</script>
									{/literal}
									<span id="desc_news_error" style="color: #cc0000;"></span>

									<div class="spacer"></div>

									<div class="row">
										<div class="col-lg-12 text-right">
											<span id="send_news_error" style="color: #cc0000;">&nbsp;&nbsp;</span>
											<input type="submit" name="add_news1" id="add_news" value="Добавить" class="btn btn-success btn-wide"/>
										</div>
									</div>

								</form>

							</div>
							<!-- Content End -->

						</div>
					</div>
					<!-- Form Validation End -->




<!-- <script type="text/javascript" src="/AjexFileManager/ajex.js"></script> -->


<!-- <script type="text/javascript" src="fckeditor/fckeditor.js"></script> 
<script type="text/javascript">




var sBasePath = document.location.href.substring(0,document.location.href.lastIndexOf("add_news.php")) ; 
var oFCKeditor3 = new FCKeditor("desc_news1","100%", "400" ) ; 
oFCKeditor3.BasePath = sBasePath+"fckeditor/" ; 
oFCKeditor3.Config['CustomConfigurationsPath']=sBasePath+'js/config.js'; 
oFCKeditor3.ToolbarSet="Custom";
oFCKeditor3.ReplaceTextarea() ;




</script> -->




