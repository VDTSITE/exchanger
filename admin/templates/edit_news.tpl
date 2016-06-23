<div class="col-lg-12">

						<!-- Box Start -->
						<div class="box">

							<!-- Title Bar Start -->
							<div class="box-title">
								<span class="gray">Редактирование новости</span>
							</div>
							<!-- Title Bar End -->

							<!-- Content Start -->
							<div class="content">

								<form action="edit_news.php" method="POST" class="basic-form" enctype="multipart/form-data">

									<label for="title1">Введите название новости</label>
									<input type="text" name="title1" id="title" placeholder="Введите название новости" value="{$title}" /><br />
									

									
									<label for="video">Введите ссылку на видео</label>
									<input type="text" name="video" placeholder="Введите новую ссылку на видео" value="{$video_html}" />
									<br />


									<img src="../images/{$photo}" alt="" width="470px;">

									<label for="photo">Заменить фотографию:</label>
									<input type="file" name="new_photo" placeholder="Выберите фотографию" /><br />

										
									
									<label for="description1">Введите краткое описание новости</label>
									<textarea name="short_desc1" id="short_desc3" placeholder="Введите описание новости">{$short_desc}</textarea>



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
										
										var ckeditor3 = CKEDITOR.replace( 'short_desc3' );
										
										AjexFileManager.init({
										
										returnTo: 'ckeditor',
										
										editor: ckeditor3
										
										});
									</script>
									{/literal}





									<label for="description1">Введите полное описание новости</label>
									<textarea name="description1" id="description3" placeholder="Введите описание новости">{$description}</textarea>


									{literal}
									<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
									
									<script type="text/javascript" src="AjexFileManager/ajex.js"></script>

									
									
									<script type="text/javascript" src="js/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
									
									<link rel="stylesheet" href="js/fancybox/jquery.fancybox-1.3.4.css" type="text/css" media="screen" />

									

									<script type="text/javascript">
										
										var ckeditor4 = CKEDITOR.replace( 'description3' );
										
										AjexFileManager.init({
										
										returnTo: 'ckeditor',
										
										editor: ckeditor4
										
										});
									</script>
									{/literal}

									

									<br />


									<br />

									<input type="hidden" name="idn" value="{$idn}">
									<input type="hidden" name="old_photo" value="{$photo}">
									<input type="submit" name="edit_news" value="Отредактировать">
									

								</form>

							</div>
							<!-- Content End -->

						</div>
						<!-- Box End -->

					</div>

<!-- 
{literal}

<script type="text/javascript" src="fckeditor/fckeditor.js"></script> 
<script type="text/javascript">




var sBasePath = document.location.href.substring(0,document.location.href.lastIndexOf("edit_news.php")) ; 
var oFCKeditor3 = new FCKeditor("description1","100%", "400" ) ; 
oFCKeditor3.BasePath = sBasePath+"fckeditor/" ; 
oFCKeditor3.Config['CustomConfigurationsPath']=sBasePath+'js/config.js'; 
oFCKeditor3.ToolbarSet="Custom";
oFCKeditor3.ReplaceTextarea() ;




</script> 



{/literal} -->
