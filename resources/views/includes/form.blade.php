<section class="form_info form_inn">
			<div class="container">
				<h2 class="global_title">Entre em Contato Conosco</h2>
                <form method="POST" action="{{url('/')}}/envio-cotacao">
                    @csrf
				<div class="inner">
					<div class="row">
						<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
							<input type="text" class="form-control" placeholder="Nome Completo" name="name">
							<input type="text" class="form-control" placeholder="Endereço de E-mail" name="email">
						</div>
						<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
							<input type="text" class="form-control" placeholder="Telefone" name="phone">
							<textarea class="form-control field" placeholder="Mensagem" name="msg"></textarea>
						</div>
						<div class="btn-block text-center">
							<button class="buy_btn radial-out">Enviar</button>
						</div>
					</div>
				</div>
</form>
				<div class="map_info">
					<div class="cap_info">
						<ul class="c_info">
							<li>
								<div class="detail">
									<span class="icon">
										<i class="fa fa-map-marker"></i>
									</span> 
									<span class="text">São Paulo - SP para Todo o Brasil
									</span>
								</div>
							</li>
							<li>
								<div class="detail">
									<span class="icon">
										<i class="fa fa-phone"></i></span> 
									<span class="text">(73) 9817-3109
									</span>
							</div></li>
							<li>
								<div class="detail">
									<span class="icon">
										<i class="fa fa-envelope"></i></span> 
									<span class="text"><a href="mailto:Info@halari.com">comercial@rsweb.com.br</a>
									</span>
							</div></li>
						</ul>
					</div>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3658.3665020131925!2d-46.56928198581848!3d-23.51931696592432!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce5f1b9c5dea15%3A0x68537e7244877b18!2sR.%20Terceiro-Sargento%20Jo%C3%A3o%20Soares%20de%20Faria%2C%20470%20-%20Parque%20Novo%20Mundo%2C%20S%C3%A3o%20Paulo%20-%20SP%2C%2002179-010!5e0!3m2!1spt-BR!2sbr!4v1674055029585!5m2!1spt-BR!2sbr" width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
				</div>
			</div>
		</section>