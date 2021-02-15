<!-- HEADER -->
@include('/includes/header')

<!-- CUERPO -->
<div class="text-center m-3 p-3">
	<h1><strong> Biografia </strong>{{$autor}}</h1>
</div>
<div >
	<section class="container">
		<img src="https://www.eragons.com/wp-content/uploads/2016/11/christopher-paolini-el-legado-spain-300x415.jpg" class="float-right m-4 " style="width:250px">
		<div>
			
		@foreach ($articles as $article)
			<article class="pt-4">
				<h4>{{$article->title}}</h4>ghg
				<p >{{$article->body}}</p>
				<!--$article-> find()-->
			</article>
		@endforeach

		</div>
	</section>
</div>
        
<!-- FOOTER -->
        @include('/includes/footer')
      
