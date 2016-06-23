<div class="col-lg-10">
	<div class="row">
		Привет
		{section loop=$photos name=i}
			<div class="col-lg-3">
				<img src="../images/{$photos[i].photo}" alt="">
			</div>
			<div class="col-lg-3">
				<img src="../images/{$photos[i].photo}" alt="">
			</div>
			<div class="col-lg-3">
				<img src="../images/{$photos[i].photo}" alt="">
			</div>
		{/section}
	</div>
</div>