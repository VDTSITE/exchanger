

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

								<form method="post" action="add_gallery.php" name="form_gallery" enctype="multipart/form-data">

									<!-- Required -->
									<label for="photo_news1">Выберите фотографию для галереи</label>
									<input type="file" name="photo" id="photo_for_gallery" class="form-control required"  />

									<div class="spacer"></div>

									<div class="row">
										<div class="col-lg-12 text-right">
											<span id="send_gallery_error" style="color: #cc0000;">&nbsp;&nbsp;</span>
											<input type="button" id="add_gall" name="add_gallery" value="Добавить" class="btn btn-success btn-wide"/>
										</div>
									</div>

								</form>

							</div>
							<!-- Content End -->

						</div>
					</div>
					<!-- Form Validation End -->


<script type="text/javascript">

		//
		document.getElementById("add_gall").onclick=function() {
			
			var photo1 = document.getElementById("photo_for_gallery").value;
			if(photo1 != "") {
				/*alert("test");*/
				form_gallery.submit();
			}

			else {

				document.getElementById("send_gallery_error").innerHTML="Выберите фотографию";
			}
		}

</script>