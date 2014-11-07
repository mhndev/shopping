<div class="technicalspecs">
  <div class="title">
    {{ HTML::image('images/technicalspecs.gif') }}
  </div>
    <div class="specs" id="specs">
    </div>



<script>
    $specs = JSON.parse('{{ $product->tecdec }}');
    console.log($specs);
    specsDiv = document.getElementById('specs');
    i=0;
    for(spec in $specs)
    {
      i++;
      div = document.createElement('div');

      span = document.createElement('span');
      span.style.clear = 'both';
      span.className = 'title';
      span.innerHTML = spec+':';
      span.style.float = 'right';

      innerDiv = document.createElement('div');
      innerDiv.innerHTML = $specs[spec];
      innerDiv.style.float = 'right';

      div.appendChild(span);
      div.appendChild(innerDiv);
      specsDiv.appendChild(div);
    }

    height = i * 40;

    console.log(height);
    specsDiv.style.height = height+'px';
</script>
</div>