@include('includes.top')

<section class="inner_banner">
			<div class="container">
				<h1>Criação de Sites em <span>{{ucwords(str_replace("-", " " , $origin));}}</span></h1>
				<ul class="breadcrum">
					<li><a href="{{url('/')}}">Página Inicial</a></li>
                    <li><a href="{{url('/')}}">Criação de Sites</a></li>
					<li>Criação de Sites em {{ucwords(str_replace("-", " " , $origin));}}</li>
				</ul>
			</div>
		</section>


@include('includes.form')



@include('includes.footer')