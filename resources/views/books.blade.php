<!-- HEADER -->
@include('/includes/header')

<!-- CUERPO -->

<section class="container ">

		<div class="text-center m-3 p-3">
			<h1><strong> Libros Publicados</strong></h1>
		</div>

		<div class="border border-info p-5 mb-5">
			<!-- Libros -->
			@foreach ($books as $book)
				<div class="media">
					<div class="media-left">
						<img src="/img/{{$book->id}}.jpg" class="media-object  mr-3" style="width:70px">
					</div>
					<div class="media-body">
						<h4 class="media-heading text-info text-uppercase"><a href="{{ url('/libros') }}/{{$book->id}}">{{$book->title}}</a></h4>
						<p>{{$book->description}}</p>
					</div>
				</div>
				<hr>
			@endforeach
		</div>

</section>
        
<!-- FOOTER -->
        @include('/includes/footer')
      
