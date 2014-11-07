<div class="box white latest_blog">
	<div class="box-heading">
		<span style="margin-left:130px;">
		{{ Lang::get('persian.LatestBlog' , array() , 'fa') }}
		</span>
		<em class="shapes right"></em>	
		<em class="line"></em>
	</div>

	<div class="box-content" >
		<div class="pavblog-latest row">

			@foreach($var['lastNews'] as $blog)
				<div class="col-lg-3 col-md-3 col-sm-3">
					<div class="blog-item">					
						<div class="blog-body">
							<div class="image">
								<a href="{{ URL::to('/news/'.$blog->id) }}">
								{{ HTML::image($blog->image_path1 , $blog->title , array('title'=>$blog->title , 'class'=>'img-responsive')) }}
								</a>
							</div>
							<div class="create-date pull-left">
								<div class="created">
									<span class="day">{{ $blog->created_at->day }}</span><hr/>
									<span class="month">{{ $blog->created_at->month }}</span> 								
								</div>
							</div>

							<div class="create-info pull-left">
								<div class="inner">
									<div class="blog-header" style="direction:rtl;text-align:right">
										<h4 class="blog-title">
										{{ HTML::link('/news/'.$blog->id , $blog->title, 'Headphone');  }}
										</h4>
									</div>
									<div class="description" style="direction:rtl;text-align:right">
										{{ $blog->summary }}
									</div>
								</div>							
							</div>
						</div>						
					</div>
				</div><!--blog-item-->
			@endforeach

		</div>
	</div>
</div>