                <div class="left" style="width:650px;">
                    <div class="left-top">
                        <h1>{{ $product->name }}</h1>
                        <h3 style="width:auto; float:right">{{ $product->persianName }}</h3>
                    </div>
                    <span class="border"></span>
                    <div>
                        <table class="content-all">
                                <tr >
                                    <th class="content1">
                                        {{ Lang::get('persian.status' , array() , 'fa') }}:
                                    </th>
                                    <td class="content2">
                                        {{ HTML::image('images/1.jpg') }}
                                    </td>
                                </tr>
                                <tr>
                                    <th class="content1">
                                    {{ Lang::get('persian.guarantee' , array() , 'fa') }}
                                    :</th>
                                    <td class="content2">
                                        <span>{{ $product->guarantee }}</span>
                                    </td>
                                </tr>
                                <tr>
                                    <th class="content1">
                                    {{ Lang::get('persian.price' , array() , 'fa') }}
                                        :</th>
                                    <td class="content2">{{ $product->price }} 
                                    {{ Lang::get('persian.toman' , array() , 'fa') }}
                                    </td>
                                </tr>

                                <tr>
                                    <th class="border"><td></td></th>
                                </tr>
                                <tr>
                                    <th class="content1"></th>
                                    <td class="content2">
                                <a href="javascript:void(0)" onclick="addtocart({{ $product->id }})">
                                    {{ HTML::image('images/2.jpg') }}
                                </a>
                                    </td>
                                </tr>

                <tr>
                    <td>
                      <ul class="two-col">
                        <li>{{ Lang::get('persian.tehranSpecPay' , array() ,'fa') }}</li>
                        <li>{{ Lang::get('persian.cardAtPlacePay' , array() ,'fa') }}</li>
                        <li>{{ Lang::get('persian.sendAllIran' , array() ,'fa') }}</li>
                        <li>{{ Lang::get('persian.expressTehran' , array() ,'fa') }}</li>
                      </ul>
                    </td>
                </tr>


                        </table>
                    </div>

                </div>




<script>
    function addtocart(id){
        $.ajax({
          url: "{{ URL::to('addtocart/') }}/"+id,
          context: document.body
        }).done(function() {
          //$( this ).addClass( "done" );
          console.log('done');
        });
    }
</script>                