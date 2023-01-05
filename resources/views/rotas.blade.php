@include('includes.top')
<?php 

// foreach($json as $routes){
//   echo $routes->origin->value.'<br>'; 
// }
?>
<div class="review-area bg de-padding">
<div class="container">
  <div class="row">
    <div class="row">
              <div class="col-xl-6 offset-xl-3">
                <div class="site-title text-center">
                  <h2>Rotas para Transporte mais Buscadas</h2>
                  <p class="mb-0">
                    Entre em Contato com as Melhores Transportadoras do Mundo
                  </p>
                </div>
              </div>
            </div>
@foreach($json as $routes)
            <div class="col-md-3" style="margin-bottom:20px">
              <div style="background-color:white; padding:20px">
              <a href="<?php echo url('/').'/transportadoras/'.$routes->origin->url.'/'.$routes->destination->url ?>">
                <div class="review-content text-center">
                  <h4 style="font-size:20px;">{{$routes->origin->value}} para {{$routes->destination->value}}</h4>
                </div>
              </a>
              </div>
            </div>
@endforeach
      </div>
</div>
</div>

@include('includes.footer')