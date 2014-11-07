

<!--footer-->
<footer id="footer" style="text-align:right;direction:rtl;">
    <div class="footer-center">
        <div class="container" style="width:980px;">
            <div class="row">
                <ul style="height:150px; width:550px; float:right">
                    @foreach($menus as $menu)
                        <li style="float:right; margin-right:40px;">
                            
                            {{ HTML::link('menu/'.$menu->name , $menu->faname) }}
                        </li>
                    @endforeach
                </ul>



                <div class="column col-xs-12 col-sm-12 col-lg-3 col-md-3" style="margin-left:30px;">
                    <div class="box about-us">                  
                        <div class="box-content">
                            <p>
                {{ HTML::image('front/image/logo-store.png' , 'logo store' ) }}
                            </p>
                            <p>{{ $footer->body }}</p>
                        </div>
                    </div>
                </div><!--col-->


            </div> 
        </div>
    </div>

    <!--Copy right-->
    <div id="powered">
        <div class="container">
            <div class="copyright">
                Powered By <a href="http://www.misaghsoft.com">Misaghsoft</a><br /> Khaneye Kala &copy; 2014. 
            </div>	
        </div>
    </div>

</footer>             