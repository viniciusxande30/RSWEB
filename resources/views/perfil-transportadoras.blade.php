@include('includes.top')
<?php

//echo $json->data[1]->url;

//echo $json_details;

$companies_url  = $companies;
$companies_json = $json->data[1]->url;


$pos = strpos( $companies_url, $companies_json ).'<br>';



//$transp_details = file_get_contents('https://cargas.com.br/api/companies/'.$companies_json);
//$json_details = json_decode($transp_details);

//print_r($json_details->adresses[0]->street);


//$company_name = substr($json->data[1]->url, 0, -15);

?>
@for($i=0;$i<=count($json->data)-1;$i++)
    @if(substr($json->data[$i]->url, 0, -15) == $companies)
        @php
            $companies_json_two = $json->data[$i]->url;
            $transp_details = file_get_contents('https://cargas.com.br/api/companies/'.$json->data[$i]->url);
            $json_details = json_decode($transp_details);
        @endphp

<div class="blog-single-area bg de-padding">


            <div class="container">
                <div class="blog-single-wpr">
                    <div class="row ps g-5">
                    <div class="col-xl-4">
                            <aside class="sidebar">
                                <!-- Search-->

                                 <!-- Category -->
                                 <div class="widget category">
                                    <div class="category-list">
                                        <ul>
                                            <li>
                                                <a href="#">
                                                    
                                                    <img src="{{$json->data[$i]->logo}}" style="display:block;margin-left:auto;margin-right:auto;width:100px;text-align:center; border-radius:50%" alt="{{$json->data[$i]->fantasy_name}}" title="{{$json->data[$i]->fantasy_name}}" >
                                                </a>
                                            </li>
                                            <h5 class="work-title" style="font-size:25px">{{$json->data[$i]->fantasy_name}}</h5>
                                        </ul>
                                    </div>
                                </div>

                                <!-- Recent Post -->
                                <div class="widget recent-post">
									<h5 class="work-title">Localização</h5>
									<div class="recent-post-single">
										<div class="recent-post-pic">
                                        <i class="icofont-ui-map"></i>
										</div>
										<div class="recent-post-bio">
											<h6>
												Endereço 1
											</h6>
											<span>
                                            {{$json_details->adresses[0]->street}}
											</span>
										</div>
									</div>
									
									
								</div>


                                <div class="widget search">
                                    <h5 class="work-title">Cotação de Frete com a {{$json->data[$i]->fantasy_name}}</h5>
                                    <form class="search-form">
                                        

                                        <div class="hero-btn">
											<a href="<?php echo url('/');?>/cotacao-de-frete" target="_blank" class="tm-btn-2">
												<i class="icofont-long-arrow-right"></i>
												Faça sua Cotação
											</a>
										</div>


                                    </form>
                                </div>
								
                            </aside>
                        </div>
                        <div class="col-xl-8">
                            <div class="theme-single blog-single">
                                <div class="theme-info">
                                    <div class="theme-desc">
										<h2 class="about-title">
											Sobre a Empresa {{$json->data[$i]->fantasy_name}}
										</h2>
										<div class="theme-meta">
											
										
										</div>
                                        <p class="mb-30">@if($json->data[$i]->about){{$json->data[$i]->about}} @else Esta empresa não possui descrição. @endif</p>
                                       
										
								
                                    </div>
                                </div>
                            </div>
                            <div class="single-comments-section blg-single">
								<h4 class="single-content-title">Números de Telefone</h4>
								<div class="single-commentor">

									<ul>


									<div class="row">
										<div class="col-md-6">
											<li>
												<div class="col-md-6 single-commentor-user">
													<div class="single-commentor-user-bio">
														<div class="single-commentor-user-bio-head">
														<h5><i class="icofont-ui-cell-phone"></i> Celular </h5>
														</div>
														<p>
														{{$json_details->adresses[0]->phone}}
														</p>
																											
													</div>
												</div>
											</li>
										</div>
										<div class="col-md-6">
												<li>
													<div class="col-md-6 single-commentor-user">
														<div class="single-commentor-user-bio">
															<div class="single-commentor-user-bio-head">
																<h5><i class="icofont-brand-whatsapp"></i>WhatsApp</h5>
															</div>
															<p>
															 {{$json_details->adresses[0]->whatsapp}}
															</p>											
														</div>
													</div>
												</li>
											</div>
										</div>
										<h4 class="single-content-title">Informações de Contato</h4>
										<div class="row">
										<div class="col-md-6">
											<li>
												<div class="col-md-6 single-commentor-user">
													<div class="single-commentor-user-bio">
														<div class="single-commentor-user-bio-head">
															<h5><i class="icofont-email"></i> E-mail </h5>
														</div>
														<p>
														 {{$json_details->adresses[0]->email}}
														</p>
																											
													</div>
												</div>
											</li>
										</div>
										<div class="col-md-6">
												<li>
													<div class="col-md-6 single-commentor-user">
														<div class="single-commentor-user-bio">
															<div class="single-commentor-user-bio-head">
																<h5><i class="icofont-ui-email"></i> Site</h5>
															</div>
															<p>
															<a href="{{$json_details->site}}"> {{$json_details->site}}</a>
															</p>											
														</div>
													</div>
												</li>
											</div>
										</div>


									</ul>
								</div>
								
							</div>

                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
        @endif
@endfor
@include('includes.footer')