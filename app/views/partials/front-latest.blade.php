<div class="box latest blue no-box">
	<div class="box-heading">
		<span style="margin-left:75%">
			{{ Lang::get('persian.newestProducts' , array() , 'fa') }}
		</span>
		<em class="shapes right"></em>	
		<em class="line"></em>
	</div>  

	<div class="box-content">		
		<div class="row product-items">

			<?php

			$latest = array(
				'title' => 'sale' , 
				'id'    => $var['lastProducts'][0]->id , 
				'text'  => $var['lastProducts'][0]->name , 
				'price' => $var['lastProducts'][0]->price , 
				'offed' => $var['lastProducts'][0]->price - $var['lastProducts'][0]->deals , 
				'rank'  => $var['lastProducts'][0]->rank , 
				'link'  => $var['lastProducts'][0]->name,
				'image' => $var['lastProducts'][0]->image_products,
				'deals' => $var['lastProducts'][0]->deals
				);
			?>
			@include('partials.front-product' , $latest)

			<?php
			$latest = array(
				'title' => 'sale' ,
				'id'    => $var['lastProducts'][1]->id , 
				'text'  => $var['lastProducts'][1]->name , 
				'price' => $var['lastProducts'][1]->price , 
				'offed' => $var['lastProducts'][1]->price - $var['lastProducts'][1]->deals , 
				'rank'  => $var['lastProducts'][1]->rank , 
				'link'  => $var['lastProducts'][1]->name ,
				'image' => $var['lastProducts'][1]->image_products,
				'deals' => $var['lastProducts'][1]->deals
				);
			?>
			@include('partials.front-product' , $latest)

			<?php
			$latest = array(
				'title' => 'sale' , 
				'id'    => $var['lastProducts'][2]->id , 
				'text'  => $var['lastProducts'][2]->name , 
				'price' => $var['lastProducts'][2]->price , 
				'offed' => $var['lastProducts'][2]->price - $var['lastProducts'][2]->deals , 
				'rank'  => $var['lastProducts'][2]->rank , 
				'link'  => $var['lastProducts'][2]->name ,
				'image' => $var['lastProducts'][2]->image_products,
				'deals' => $var['lastProducts'][2]->deals
				);
			?>
			@include('partials.front-product' , $latest)
			
			<?php
			$latest = array(
				'title' => 'sale' , 
				'id'    => $var['lastProducts'][3]->id , 
				'text'  => $var['lastProducts'][3]->name , 
				'price' => $var['lastProducts'][3]->price , 
				'offed' => $var['lastProducts'][3]->price - $var['lastProducts'][3]->deals , 
				'rank'  => $var['lastProducts'][3]->rank , 
				'link'  => $var['lastProducts'][3]->name ,
				'image' => $var['lastProducts'][3]->image_products,
				'deals' => $var['lastProducts'][3]->deals
				);
			?>
			@include('partials.front-product' , $latest)		
		</div>



		<div class="row product-items">

			<?php

			$latest = array(
				'title' => 'sale' , 
				'id'    => $var['lastProducts'][4]->id , 
				'text'  => $var['lastProducts'][4]->name , 
				'price' => $var['lastProducts'][4]->price , 
				'offed' => $var['lastProducts'][4]->price - $var['lastProducts'][4]->deals , 
				'rank'  => $var['lastProducts'][4]->rank , 
				'link'  => $var['lastProducts'][4]->name ,
				'image' => $var['lastProducts'][4]->image_products,
				'deals' => $var['lastProducts'][4]->deals
				);
			?>
			@include('partials.front-product' , $latest)

			<?php
			$latest = array(
				'title' => 'sale' , 
				'id'    => $var['lastProducts'][5]->id , 
				'text'  => $var['lastProducts'][5]->name , 
				'price' => $var['lastProducts'][5]->price , 
				'offed' => $var['lastProducts'][5]->price - $var['lastProducts'][5]->deals , 
				'rank'  => $var['lastProducts'][5]->rank , 
				'link'  => $var['lastProducts'][5]->name ,
				'image' => $var['lastProducts'][5]->image_products,
				'deals' => $var['lastProducts'][5]->deals
				);
			?>
			@include('partials.front-product' , $latest)

			<?php
			$latest = array(
				'title' => 'sale' , 
				'id'    => $var['lastProducts'][6]->id ,
				'text'  => $var['lastProducts'][6]->name , 
				'price' => $var['lastProducts'][6]->price , 
				'offed' => $var['lastProducts'][6]->price - $var['lastProducts'][6]->deals , 
				'rank'  => $var['lastProducts'][6]->rank , 
				'link'  => $var['lastProducts'][6]->name ,
				'image' => $var['lastProducts'][6]->image_products,
				'deals' => $var['lastProducts'][6]->deals
				);
			?>
			@include('partials.front-product' , $latest)
			
			<?php
			$latest = array(
				'title' => 'sale' ,
				'id'    => $var['lastProducts'][7]->id , 
				'text'  => $var['lastProducts'][7]->name , 
				'price' => $var['lastProducts'][7]->price , 
				'offed' => $var['lastProducts'][7]->price - $var['lastProducts'][7]->deals , 
				'rank'  => $var['lastProducts'][7]->rank , 
				'link'  => $var['lastProducts'][7]->name ,
				'image' => $var['lastProducts'][7]->image_products,
				'deals' => $var['lastProducts'][7]->deals
				);
			?>
			@include('partials.front-product' , $latest)		
		</div>
	</div><!--latest content-->
</div><!--latest-->