<!-- HEADER -->
@include('/includes/header')

<!-- CUERPO -->

	<section class="container">

		<div class="row media">

			<img  class="col-4 pt-5 "  src="/img/{{$book->id}}.jpg">

			<div class="col">
				<div class="text-center pt-5">
					<h1><strong> {{$book->title}}</strong></h1>
				</div>
				<br>
				<article class="ml-4">
					<h4>Sinopsis:</h4>
					<p >{{$book->summary}}</p>
				</article>
			</div>

		</div>
		<a href="{{ url('/libros') }}" class="btn btn-dark mt-5"> << Volver </a>
	</section>

	<div class="container pt-4 mt-4">
		<section id="formulario " >
			<h1><strong> ENVIAR MAIL: </strong></h1>

			<form action="" method="post" class="p-4 mb-4 rounded" style="background-color:rgb(162, 162, 162)">
				{{csrf_field()}}
				<!-- TITULO -->
				<div class="form-group pt-3">
					<input type="email" class="form-control " placeholder="Indica aqui tu email" name="email" required>
				</div>
				<!-- CUERPO -->
				<div class="form-group">
					<textarea class="form-control" rows="7" placeholder="Escribe aqui tu mensaje" name="cuerpo" required></textarea>
				</div>
				<!-- BOTON -->
				<div class="form-group d-flex justify-content-center">
					<button type="submit" class="btn btn-primary">Enviar</button>
				</div>
			</form>
		</section>
	</div>
        
<!-- FOOTER -->
        @include('/includes/footer')
      
