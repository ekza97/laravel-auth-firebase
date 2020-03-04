@include('inc.header')
	<div class="jumbotron">
			<legend>Read Article</legend>
	  <h3 class="display-4">{{ $articles->title }}</h3>
	  <hr class="my-4">
	  <p>{{ $articles->description }}</p>
	</div>
@include('inc.footer')