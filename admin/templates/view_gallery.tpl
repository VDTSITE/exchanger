<section id ="speakers" class="fw-main-row  ">
                           <div class="fw-main-row-bg"  ></div>
                           <div class="fw-main-row-overlay has-color" ></div>
                           <div style="" class="fw-container ">
                              <div class="fw-row">
						 
								  
	<ul class="cd-gallery">
	{section loop=$strings name=i}
		<li>
			<a href="#">
			
				<ul class="cd-item-wrapper">
				{section loop=$gallery name=i}
					<li class="selected" style="display: inline-block; margin-right: 10px; margin-bottom: 10px;">
						<img src="../images/{$gallery[i].photo}" alt="" style="width: 300px; height: 250px;">
					</li>
				{/section}
				</ul>
				
			</a>

		</li>
		{/section}
	</ul>
								  
								                    </div>
                           </div>
                        </section>