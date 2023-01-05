@include('includes.top')



<?php
$iphone = strpos($_SERVER['HTTP_USER_AGENT'],"iPhone");
$ipad = strpos($_SERVER['HTTP_USER_AGENT'],"iPad");
$android = strpos($_SERVER['HTTP_USER_AGENT'],"Android");
$palmpre = strpos($_SERVER['HTTP_USER_AGENT'],"webOS");
$berry = strpos($_SERVER['HTTP_USER_AGENT'],"BlackBerry");
$ipod = strpos($_SERVER['HTTP_USER_AGENT'],"iPod");
$symbian =  strpos($_SERVER['HTTP_USER_AGENT'],"Symbian");

?>




<div class="site-breadcrumb" style="<?php if ($iphone || $ipad || $android || $palmpre || $ipod || $berry || $symbian == false) { echo 'background: url(assets/img/header/header-bg.png)';} ?>">
			<div class="container">
			<h2 class="breadcrumb-title">Cotação de Frete</h2>
				<ul class="breadcrumb-menu clearfix">
					<li><a href="<?php echo url('/'); ?>">Página Inicial</a></li>
					<li class="active">Cotação de Frete</li>
				</ul>
			</div>
		</div>
<?php if ($iphone || $ipad || $android || $palmpre || $ipod || $berry || $symbian == true) {
echo '<div class="row g-5" style="margin:35px 5px 0 5px">';
}else{
	echo '<div class="row g-5" style="margin:100px">';
}
?>

  <div class="row">
            <div class="col-xl-6 offset-xl-3">
              <div class="text-center">
                <h2>Entre em Contato</h2>
                <p class="mb-0">
                  Faça sua cotação de frete totalmente gratuita e receba respostas de transportadoras diretamente por E-mail.
				  {{session('quotation')}}
                </p>
              </div>
            </div>
          </div>
<form class="" method="post" action="{{route('quotationApi')}}">
@csrf

<div class="row">
									
								
								<div class="col-12">
										<div class="form-group">
											<select type="text" class="form-control input-style-2" placeholder="Origem" name="type" style="height:6rem;margin-bottom:25px">
												<!-- <option>Selecione o Tipo de Transporte</option> -->
												<option value="1">Transporte de Carga</option>
												<!-- <option>Mudanças</option>
												<option>Transporte de Veículos</option> -->
											</select>
										</div>
										</div>
										

									<div class="col-6">
										<div class="form-group">
											<input type="text" id="origin" class="form-control input-style-2" name="origin" placeholder="Cidade de Origem">
											<input type="hidden" id="origin_id" name="origin_id">
											<span class="alert alert-error"></span>
										</div>
									</div>

									<div class="col-6">
										<div class="form-group">
											<input type="text" id="destination" class="form-control input-style-2" name="destination" placeholder="Cidade de Destino">
											<input type="hidden" id="destination_id" name="destination_id">
											<span class="alert alert-error"></span>
										</div>
									</div>


									<div class="col-4">
										<div class="form-group">
											<input type="text" class="form-control input-style-2" name="note_cost"  placeholder="VL. Nota em R$" onKeyPress="return(moeda(this,'.',',',event))">
											<span class="alert alert-error"></span>
										</div>
									</div>
									<div class="col-4">
										<div class="form-group">
											<input type="number" class="form-control input-style-2" name="quantity" placeholder="Quantidade">
											<span class="alert alert-error"></span>
										</div>
									</div>
									<div class="col-4">
										<div class="form-group">
											<input type="text" class="form-control input-style-2" name="weight" placeholder="Peso (KG)"onKeyPress="return(moeda(this,'.',',',event))">
											<span class="alert alert-error"></span>
										</div>
									</div>



									<div class="col-12">
										<div class="form-group">
											<input type="text" class="form-control input-style-2" name="name" placeholder="Nome">
											<span class="alert alert-error"></span>
										</div>
									</div>
									<div class="col-12">
										<div class="form-group">
											<input type="text" class="form-control input-style-2" name="phone" placeholder="Telefone">
											<span class="alert alert-error"></span>
										</div>
									</div>
									<div class="col-12">
										<div class="form-group">
											<input type="email" class="form-control input-style-2" name="email" placeholder="E-mail">
											<span class="alert alert-error"></span>
										</div>
									</div>

									<div class="col-12">
										<textarea class="form-control input-style-2" name="description" placeholder="Observações (Peso, quantidade de volumes, medidas, valor NF. Caso seja mudança favor enviar a relação dos móveis a serem transportados.)
"></textarea>
										<div class="contact-sub-btn text-center">
											<button type="submit" name="submit" id="submit" class="btn-4" style="margin:25px 0 25px 0">
                        Enviar Cotação
												<i class="fas fa-chevron-right"></i>
											</button>

											<!-- <input type="submit" value="Submit"> -->
										</div>
										<!-- Alert Message -->
							</form>
							</div>
						</div>
					</div>

@include('includes.footer')