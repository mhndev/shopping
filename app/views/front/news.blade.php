{{ HTML::style('css/yekan.css') }}
<div style="direction:rtl;text-align:right; width:950px; margin:auto;">
	<div style="margin-right:40px; font-family:'yekan'; font-size:18px;">{{ $news->title }}</div>
	<br>
	<div style="background-color:#666699;color:white; font-size:15px; padding:4px; font-family:'yekan';">{{ $news->summary }}</div>
	<br>
	<div style="float:right; margin-left:10px; ">{{ HTML::image($news->image_path2) }}</div>
	<br>
	<div style="font-size:15px; font-family:'yekan'; line-height:25px;">{{ $news->news }}</div>
	<div>{{ $news->image }}</div>
</div>