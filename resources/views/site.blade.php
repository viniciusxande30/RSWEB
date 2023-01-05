@include('includes.top')
<style>
@media only screen and (min-width: 600px) {
  .form-left{
    margin-left:100px;
  }
}
</style>


@php
 $useragent=$_SERVER['HTTP_USER_AGENT'];
 $is_mobile = preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i',$useragent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($useragent,0,4))
@endphp



	<main class="main">

		<!-- Start Slider
		============================================= -->
		<div class="hero-section pos-rel" style="background-image: url(..assets/img/header/header-bg.png)">
			<div class="hero-shape">
				<img src="assets/img/shape/shape-7.png" class="hero-2" alt="thumb">
				<img src="assets/img/shape/shape-5.png" class="hero-3" alt="thumb">
				<img src="assets/img/shape/shape-6.png" class="hero-4 round-move" alt="thumb">
			</div>
			<div class="hero-section-content hero-sld owl-theme">
				<div class="hero-single">
					<div class="container g-0">
						<div class="row">
							<div class="col-xl-6">
								<div class="hero-content">
									<div class="hero-desc">
										<h2 class="hero-title"  style="padding-top:100px; color:black">
											Portal de Transportadoras
										</h2>
										<p style="color:black">
											Faça sua Cotação para as Melhores Transportadoras Mundo
										</p>
										<div class="hero-btn">
											<a href="{{url('/')}}/cotacao-de-frete" class="tm-btn-2">
												<i class="icofont-long-arrow-right"></i>
												Faça sua Cotação
											</a>
										</div>
									</div>
								</div>
							</div>

							@if(!$is_mobile)

							<div class="col-xl-6">
                <div class="login-form form-left" style="margin-top:100px;background-color:#ffc107;box-shadow: 10px 10px black;">
                                        <h4 class="register-title mb-10">Faça sua Cotação de Frete</h4>
                                        <form class="row g-3" method="post" action="{{route('quotationApi')}}">
											@csrf
											<div class="col-xs-12">
												<select type="text" class="form-control input-style-1" name="type" placeholder="Origem"  style="height:6rem">
													<!-- <option>Selecione o Tipo da Sua Carga</option> -->
													<option value="1">Transporte de Cargas</option>
													<!-- <option value="3">Transporte de Mudanças</option> -->
													<!-- <option value="4">Transporte de Veículos</option> -->
												</select>
										</div>
											<div class="col-sm-6">
                                                <input type="text" id="origin" name="origin" class="form-control input-style-1" placeholder="Origem">
												<input type="hidden" id="origin_id" name="origin_id">
                                            </div>
                                            <div class="col-sm-6">
                                                <input type="text" id="destination" name="destination" class="form-control input-style-1" placeholder="Destino">
												<input type="hidden" id="destination_id" name="destination_id">
												
                                            </div>
                                          <!-- <div class="col-md-4">
                                              <input type="text" class="form-control input-style-2" placeholder="V. Nota">
                                          </div>
                                          <div class="col-md-4">
                                              <input type="text" class="form-control input-style-2" placeholder="QTD">
                                          </div>
                                          <div class="col-md-4">
                                              <input type="text" class="form-control input-style-2" placeholder="Peso">
                                          </div> -->

                                          <div class="col-md-6">
                                              <input type="text" class="form-control input-style-1" name="name" placeholder="Nome">
                                          </div>

                                          <div class="col-md-6">
                                              <input type="text" class="form-control input-style-1" name="phone" placeholder="Telefone">
                                          </div>
                                          <div class="col-md-12">
                                              <input type="text" class="form-control input-style-1" name="email" placeholder="E-mail">
                                          </div>
										  

										  <div class="col-md-4">
                                              <input type="text" class="form-control input-style-1 " name="note_cost" placeholder="Val. Nota" onKeyPress="return(moeda(this,'.',',',event))">
                                          </div>

                                          <div class="col-md-4">
                                              <input type="text" class="form-control input-style-1" name="quantity" placeholder="Quantidade">
                                          </div>
                                          <div class="col-md-4">
                                              <input type="text" class="form-control input-style-1" name="weight" placeholder="Peso" onKeyPress="return(moeda(this,'.',',',event))">
                                          </div>

                                            <div class="col-md-12">
                                                <textarea class="form-control input-style-1" name="description" placeholder="Observações do frete" style="height: 10rem !important"></textarea>
                                            </div>


                                            <div class="col-12">
                                                <div class="login-btns">
                                                    <input type="submit" class="btn-6 login-btn">
                                                    

                                                </div>
                                            </div>
                                        </form>
                                    </div>



							</div>
							@endif
						</div>
					</div>
				</div>

			</div>
		</div>
		<!-- End Slider -->

		<!-- Start Fature
		============================================= -->
		<div class="feature-2-area bg de-pb" style="margin-top:100px;background-image: url(assets/img/bg/map-bg.png)">
			<div class="container">
				<div class="feature-2-wpr grid-3">
					<div class="feature-2-box">
						<div class="feature-2-icon">
							<i class="icofont-truck"></i>
						</div>
						<span>Transporte Mundial de Forma Simples</span>
					</div>
					<div class="feature-2-box">
						<div class="feature-2-icon">
							<i class="icofont-people"></i>
						</div>
						<span>Faça sua Cotação de Forma Fácil</span>
					</div>
					<div class="feature-2-box">
						<div class="feature-2-icon">
							<i class="icofont-map"></i>
						</div>
						<span>Transporte de Cargas para todo o Mundo</span>
					</div>
				</div>
				<div class="year-text grid-2">
					<div class="year">
						<div class="year-outline">
							<h2 class="year-value">30</h2>
						</div>
						<h3 class="mb-0">+ de 30 Anos de Experiência</h3>
					</div>
					<h2 class="hero-title mb-0">
					Faça sua Cotação de Frete em Qualquer Lugar do Mundo!
					</h2>
				</div>
			</div>
		</div>
		<!-- End Fature -->

		<!-- Start About
		============================================= -->
		<div class="about-2-area pos-rel de-padding">
			<div class="vector-dozer">
				<img src="assets/img/about/vector-dozer.png" class="dozer-1" alt="thumb">
			</div>
			<div class="container">
				<div class="about-wpr">
					<div class="row g-5">
						<div class="col-xl-7">
							<div class="about-2-left">
								<div class="about-2-left-txt">
									<h2 class="hero-title">
										Cadastre sua Empresa em Qualquer Lugar do Mundo.
									</h2>
									<p class="about-txt mb-40">
									  Faça o cadastro da sua empresa de transporte em qualquer lugar do mundo e receba cotações de frete diretamente por E-mail.
									</p>
								</div>
								<ul class="about-list colmn-2">
									<li>
										<i class="icofont-check"></i>
										Cadastre-se em nosso portal
									</li>
									<li>
										<i class="icofont-check"></i>
										Receba cotações de frete por E-mail
									</li>
									<li>
										<i class="icofont-check"></i>
										Saiba sobre notíciasdo transporte em todo o mundo
									</li>
									<li>
										<i class="icofont-check"></i>
										Fique por dentro de nossas novidades
									</li>

								</ul>
							</div>
						</div>
						@if(!$is_mobile)

						<div class="col-xl-5">
							<div class="about-2-right">
								<div class="about-left-2-pic v2-1">
									<img src="assets/img/about/590x735.png" class="about-pic-2" alt="thumb">
								</div>
							</div>
						</div>
						@endif
					</div>
				</div>
			</div>
		</div>
		<!-- End About -->



		<!-- Start Credential
		============================================= -->
		<div class="creden-area creden-2 de-pt">
			<div class="container">
				<div class="creden-wpr pos-rel">
					<div class="creden-shape">
						<img src="assets/img/header/shape-line.png" alt="thumb">
					</div>
					<div class="row g-5">
						<div class="col-xl-5">
							<div class="creden-2-left">
								<img src="assets/img/bg/600x800-1.png" alt="thumb">
							</div>
						</div>
						<div class="col-xl-7">
							<div class="creden-right">
								<div class="creden-right-info">
									<div class="creden-right-text">
										<h2>Faça sua Cotação de Frete em Nosso Portal</h2>
										<p class="mb-0">
                      Faça sua cotação de frete totalmente gratuita. Preencha nosso formulário de cotação e tenha suas respostas diretamente por E-mail
										</p>
									</div>
									<div class="creden-content grid-2">
										<div class="creden-box">
											<div class="creden-icon">
												<i class="icofont-truck"></i>
											</div>
											<div class="creden-desc">
												<h4>Cotação Rápida</h4>
												<p class="mb-0">
													Faça sua Cotação para diversas transportadoras em menos de 3 minutos
												</p>
											</div>
										</div>
										<div class="creden-box">
											<div class="creden-icon">
												<i class="icofont-email"></i>
											</div>
											<div class="creden-desc">
												<h4>Respostas por E-mail</h4>
												<p class="mb-0">
													Receba as propostas diretamente por E-mail
												</p>
											</div>
										</div>
										<div class="creden-box">
											<div class="creden-icon">
												<i class="icofont-people"></i>
											</div>
											<div class="creden-desc">
												<h4>Simples</h4>
												<p class="mb-0">
													Receba todo o suporte necessário para realizar sua cotação de frete
												</p>
											</div>
										</div>
										<div class="creden-box">
											<div class="creden-icon">
												<i class="icofont-building-alt"></i>
											</div>
											<div class="creden-desc">
												<h4>Melhores Transportadoras</h4>
												<p class="mb-0">
													Tenha acesso as melhores transportadoras do mundo, acesse!
												</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Credential -->

		<!-- Start Review
		============================================= -->
		<div class="review-area de-padding">
			<div class="container">
        <div class="site-title text-center">
          <h2>Recomendações de Empresas Parceiras</h2>
        </div>
				<div class="review-wpr rev-sldr owl-carousel owl-theme">
					<div class="review-box">
						<div class="quote">
							<i class="icofont-quote-right quote-right"></i>
							<i class="icofont-quote-left quote-left"></i>
						</div>
						<div class="review-pic">
							<img src="assets/img/single/100x100.png" alt="thumb">
						</div>
						<div class="review-content">
							<h4>Positivo Log Cargas e Encomendas</h4>
							<span>CEO</span>
							<blockquote>
"Ótimo representante comercial excelente serviço" - Guia do Transporte
</blockquote>
							<div class="sh-de-rating">
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
							</div>
						</div>
					</div>
					<div class="review-box">
						<div class="quote">
							<i class="icofont-quote-right quote-right"></i>
							<i class="icofont-quote-left quote-left"></i>
						</div>
						<div class="review-pic">
							<img src="assets/img/single/100x100.png" alt="thumb">
						</div>
						<div class="review-content">
							<h4>Rodrigo dos Santos</h4>
							<span>Assitente Comercial</span>
							<blockquote>
	"Ajuda muito na minha distribuição" - Guia do Transporte					</blockquote>
							<div class="sh-de-rating">
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
							</div>
						</div>
					</div>
					<div class="review-box">
						<div class="quote">
							<i class="icofont-quote-right quote-right"></i>
							<i class="icofont-quote-left quote-left"></i>
						</div>
						<div class="review-pic">
							<img src="assets/img/single/100x100.png" alt="thumb">
						</div>
						<div class="review-content">
							<h4>Grupo Votorantim</h4>
							<span>Assistente Comercial</span>
							<blockquote>
Sóu  gerente de logística este guia ajuda muito  tem muita empresa boa e so colocar o DDD do local da entrega  vc já descobre empresa  com  filial  na região todos os uso  o guia do transporte -  - Guia do Transporte</blockquote>
							<div class="sh-de-rating">
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Review -->

		<!-- Start Faq
		============================================= -->
		<div class="faq-area pos-rel bg de-padding">
			<div class="faq-shape">
				<img src="assets/img/gallery/gallery-bg.jpg" alt="thumb">
			</div>
			<div class="container">
				<div class="row">
					<div class="col-xl-6 offset-xl-3">
						<div class="site-title text-center">
							<h2>Faq de Dúvidas</h2>
							<p class="mb-0">
								Saiba mais sobre as principais dúvidas de nosso portal em nossa FAQ de dúvidas.
							</p>
						</div>
					</div>
				</div>
				<div class="faq-wpr grid-2">
					<div class="course-accordion">
						<div class="accordion" id="accordionExample">
							<div class="accordion-item">
								<h2 class="accordion-header" id="headingOne">
									<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
										Quais são as melhores transportadoras?
									</button>
								</h2>
								<div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
									<div class="accordion-body">
										<p class="mb-0">
                      <!-- ... -->
										</p>
									</div>
								</div>
							</div>
							<div class="accordion-item">
								<h2 class="accordion-header" id="headingTwo">
									<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    Quais as 20 maiores transportadoras do Brasil?
									</button>
								</h2>
								<div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
									<div class="accordion-body">
										<p class="mb-0">
											<!-- In business, time is money. So, when you have a problem that is putting your business on hold, a quick response rate is critical. It’s actually one of the main criteria when it comes to IT support, if not the deal-breaker. It’s better to know what to expect upfront than to find out in the middle of an IT crisis. -->
										</p>
									</div>
								</div>
							</div>
							<div class="accordion-item">
								<h2 class="accordion-header" id="headingThree">
									<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
									O que são os modais de transporte?
									</button>
								</h2>
								<div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
									<div class="accordion-body">
										<p class="mb-0">
											<!-- In business, time is money. So, when you have a problem that is putting your business on hold, a quick response rate is critical. It’s actually one of the main criteria when it comes to IT support, if not the deal-breaker. It’s better to know what to expect upfront than to find out in the middle of an IT crisis. -->
										</p>
									</div>
								</div>
							</div>
							<div class="accordion-item">
								<h2 class="accordion-header" id="headingFour">
									<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
									Onde reclamar sobre transportadoras?
									</button>
								</h2>
								<div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
									<div class="accordion-body">
										<p class="mb-0">
											<!-- In business, time is money. So, when you have a problem that is putting your business on hold, a quick response rate is critical. It’s actually one of the main criteria when it comes to IT support, if not the deal-breaker. It’s better to know what to expect upfront than to find out in the middle of an IT crisis. -->
										</p>
									</div>
								</div>
							</div>
							<div class="accordion-item">
								<h2 class="accordion-header" id="headingFive">
									<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
								Como fazer o Transporte de cargas perigosas
									</button>
								</h2>
								<div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
									<div class="accordion-body">
										<p class="mb-0">
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="faq-right">
						<div class="faq-pic">
							<img src="assets/img/bg/600x700.png" alt="thumb">
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Faq -->

		<!-- Start Blog
		============================================= -->
		<div class="blog-area de-padding">
			<div class="container">
				<div class="row">
					<div class="col-xl-6 offset-xl-3">
						<div class="site-title text-center">
							<h2>Notícias Mais Relevantes do Blog</h2>
							<p class="mb-0">
								Saiba mais sobre o transporte internacional de cargas. Faça sua cotação de todo o local do Brasil.
							</p>
						</div>
					</div>
				</div>
				<div class="blog-wpr grid-3">
					<div class="blog-box">
						<div class="blog-box-shape">
							<img src="assets/img/shape/shape-12.png" alt="thumb">
						</div>
						<div class="blog-pic">
							<img src="assets/img/blog/800x600-1.png" alt="thumb">
						</div>
						<div class="blog-desc">

							<div class="blog-content">
								<a href="single.html" target="_blank">
									<h4>
										Transporte Sustentável – Tendência em 2022
									</h4>
								</a>
								<p>
									No Brasil, o setor de transporte é responsável por 47% das emissões de CO². Trazer empresas para o transporte sustentável está sendo um grande
								</p>
								<a href="https://blog.guiadotransporte.com.br/transporte-sustentavel-tendencia-em-2022/" class="btn-2" target="_blank">Leia Mais</a>
							</div>
						</div>
					</div>
					<div class="blog-box">
						<div class="blog-box-shape">
							<img src="assets/img/shape/shape-12.png" alt="thumb">
						</div>
						<div class="blog-pic">
							<img src="assets/img/blog/800x600-2.png" alt="thumb">
						</div>
						<div class="blog-desc">
							<div class="blog-content">
								<a href="single.html" target="_blank">
									<h4>
                    As 10 maiores empresas de transporte do Brasil
									</h4>
								</a>
								<p>
Hoje iremos conhecer quais são as 10 maiores empresas de transporte do Brasil, mas, antes disso, precisamos entender mais sobre o assunto...								</p>
								<a href="https://blog.guiadotransporte.com.br/as-10-maiores-empresas-de-transporte-do-brasil/" class="btn-2" target="_blank">Leia Mais</a>
							</div>
						</div>
					</div>
					<div class="blog-box">
						<div class="blog-box-shape">
							<img src="assets/img/shape/shape-12.png" alt="thumb">
						</div>
						<div class="blog-pic">
							<img src="assets/img/blog/800x600-3.png" alt="thumb">
						</div>
						<div class="blog-desc">

							<div class="blog-content">
								<a href="single.html" target="_blank">
									<h4>
										As 10 melhores empresas de logística
									</h4>
								</a>
								<p>
Primeiramente precisamos entender o que é uma empresa de logística, para que ela serve e o que elas fazem....								</p>
								<a href="https://blog.guiadotransporte.com.br/empresas-de-logistica/" class="btn-2" target="_blank">Leia Mais</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Blog -->

	</main>

	<div class="clearfix"></div>
  @include('includes.footer')