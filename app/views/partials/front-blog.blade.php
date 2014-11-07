<div class="col-lg-3 col-md-3 col-sm-3">
	<div class="blog-item">					
		<div class="blog-body">
			<div class="image">

				{{ HTML::image($blog['image'] , $blog['title'] , array('title'=>$blog['title'] , 'class'=>'img-responsive')) }}
			</div>
			<div class="create-date pull-left">
				<div class="created">
					<span class="day">{{ $blog['date']->day }}</span><hr/>
					<span class="month">{{ $blog['date']->month }}</span> 								
				</div>
			</div>

			<div class="create-info pull-left">
				<div class="inner">
					<div class="blog-header" style="direction:rtl;text-align:right">
						<h4 class="blog-title">
						{{ HTML::link('/news/'.$blog['link'] , $blog['title'], 'Headphone');  }}
						</h4>
					</div>
					<div class="description" style="direction:rtl;text-align:right">
						{{ $blog['summary'] }}
					</div>
				</div>							
			</div>
		</div>						
	</div>
</div><!--blog-item-->