@include('inc.header')
	<div class="container">
		<div class="row">
			<legend>Laravel CRUD Application</legend>
			@if(session('info'))
				<div class="alert alert-dismissible alert-success col-md-12">
				  <button type="button" class="close" data-dismiss="alert">&times;</button>
				  <strong>Info !</strong> {{session('info')}}</a>.
				</div>
			@endif
			<table class="table table-hover">
			  <thead class="table-primary">
			    <tr>
			      <th width="20px">ID</th>
			      <th>Title</th>
			      <th>Description</th>
			      <th width="200px">Action</th>
			    </tr>
			  </thead>
			  <tbody>
			  	@if(count($articles) > 0)
			  		@foreach($articles->all() as $article)
				    <tr>
				      <th scope="row">{{ $article->id }}</th>
				      <td>{{ $article->title }}</td>
				      <td>{{ $article->description }}</td>
				      <td>
				      	<a href='{{ url("/read/{$article->id}") }}' class="badge badge-primary">Read</a> |
				      	<a href='{{ url("/update/{$article->id}") }}' class="badge badge-info">Update</a> |
				      	<a href='{{ url("/delete/{$article->id}") }}' class="badge badge-danger">Delete</a>
				      </td>
				    </tr>
			  		@endforeach
			  	@endif
			  </tbody>
			</table> 
		</div>
	</div>

@include('inc.footer')