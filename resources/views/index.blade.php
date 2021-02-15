<!-- HEADER -->
@include('/includes/header')

<!-- CUERPO -->
<div class="container">

	<section class="container">
		<div class="text-center m-3 p-3">
			<h1><strong>Publicaciones</strong></h1>
		</div>
	</section>
	
	<section class="container ">

		<div>	
			@foreach ($articles as $article)
				<article class="p-3 m-4 border border-dark rounded">
					<h4>{{$article->title}}</h4>
					<p >{{$article->body}}</p>
				
				</article>
			@endforeach
		</div>
	</section>
	@auth
	@if (auth()-> user()->name == "admin")
		<section >
			<form action="" method="post" class="p-4 mb-4 rounded" style="background-color:rgb(162, 162, 162)">
				<h3>Nueva Publicacion</h3>
				{{csrf_field()}}
				<!-- TITULO -->
				<div class="form-group pt-3">
					<input type="text" class="form-control " placeholder="Titulo Publicacion" name="titulo" required>
				</div>
				<!-- CUERPO -->
				<div class="form-group">
					<textarea class="form-control" rows="7" placeholder="Cuerpo Publicacion..." name="cuerpo" required></textarea>
				</div>
				<!-- BOTON -->
				<div class="form-group d-flex justify-content-center">
					<button type="submit" class="btn btn-primary">Enviar</button>
				</div>
			</form>
		</section>
	@endif
@endauth
</div>
<!-- FOOTER -->
@include('/includes/footer')


