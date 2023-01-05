@include('includes.top')
<?php
        // $transp = file_get_contents("https://cargas.com.br/api/companies?page=".request()->get('page'));
        // $json = json_decode($transp);
        // $json_count = count($json->data).'<br>';



        //echo $json->data[0]->url;
        //https://cargas.com.br/api/companies?page=1
?>

<?php
//for($json->data[0]->url <= $json_count; $i++){
  //echo "teste";
//}
//echo $companies;
//echo $json_test->data;
?>
<div class="review-area bg de-padding">
<div class="container">
  <div class="row">
    <div class="row">
              <div class="col-xl-6 offset-xl-3">
                <div class="site-title text-center">
                  <h2>Transportadoras</h2>
                  <p class="mb-0">
                    Entre em Contato com as Melhores Transportadoras do Mundo
                  </p>
                </div>
              </div>
            </div>

<?php for($i=0; $i < count($json->data);$i++){ ?>
  <div class="col-md-6" style="padding-top:20px">
      <div class="review-box"  style="background-color:white">
        <div class="review-pic">
          <img src="<?php echo $json->data[$i]->logo; ?>" style="width:100px;height:100px" alt="thumb">
        </div>
        <div class="review-content">
          <h4><a href="{{url('/')}}/transportadoras/{{substr($json->data[$i]->url, 0, -15)}}">{{$json->data[$i]->fantasy_name}}</a></h4>
          <blockquote>
            <?php if($json->data[$i]->about){echo substr($json->data[$i]->about,0,25).'...';}else{echo "Esta Empresa Não Possui Informações.";} ?>
          </blockquote>
        </div>
      </div>
    </div>
<?php } ?>

</div>
</div>

<?php ?>

<div class="pagination" style="padding-top:20px">
  @foreach($json->meta->links as $pag)
  @if($pag->label == 'pagination.previous')
  <a class="page-value" href="{{($json->meta->current_page > 1) ? url('/').'/transportadoras?page='.($json->meta->current_page - 1) : '#'}}">
    <i class="ti ti-arrow-left"></i>
  </a>
  @endif

  @if($pag->label >= 1 && $pag->label!='pagination.previous' && $pag->label!='pagination.next')
  <a class="page-value {{($pag->active == true) ? 'current' : ''}}" href="{{url('/').'/transportadoras?page='.$pag->label}}">{{$pag->label}}</a>
  @endif

  @if($pag->label == 'pagination.next')
  <a class="page-value" href="{{($json->meta->current_page == $json->meta->last_page)?'#' : url('/').'/transportadoraspage='.($json->meta->current_page + 1)}}">
    <i class="ti ti-arrow-right"></i>
  </a>
  @endif

  @endforeach
</div>





























</div>

@include('includes.footer')
