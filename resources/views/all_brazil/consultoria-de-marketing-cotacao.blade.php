@include('includes.top')

<section class="inner_banner">
			<div class="container">
				<h1>Consultoria de Marketing em <span>{{ucwords(str_replace("-", " " , $origin));}}</span></h1>
				<ul class="breadcrum">
					<li><a href="{{url('/')}}">Página Inicial</a></li>
					<li>Consultoria de Marketing</li>
                    <li>{{ucwords(str_replace("-", " " , $origin));}}</li>
				</ul>
			</div>
		</section>


@include('includes.form')
@include('includes.footer')