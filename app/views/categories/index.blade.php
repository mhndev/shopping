
<?php
$extra1 = array('class'=>'btn btn-small btn-info',
				'text' =>Lang::get('persian.edit', array(), 'fa'),
				'url'  =>array('first'=>'admin/categories/' , 'second'=>'id' , 'third'=>'/edit'));

$extra2 = array('class' => 'btn btn-small btn-success' ,
				'text'  => Lang::get('persian.cat-products-show', array(), 'fa'),
				'url'   => array('first'=>'admin/','second'=>'id','third'=>'/products') );

$extra3 = array('class' => 'btn btn-small btn-primary' ,
				'text'  => Lang::get('persian.add-product', array(), 'fa'),
				'url'   => array('first'=>'admin/','second'=>'id','third'=>'/products/create'));

$mngt = 'categories-management';
$list = 'category-list';
$dashboard = 'admin-firstpage';

$extras = array($extra1 , $extra2 , $extra3);

?>



<div>
	@include('partials.resource-index' , $extras)
</div>

{{ $items->links() }}

