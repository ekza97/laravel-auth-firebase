@include('inc.header')
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<form method="post" action="{{url('/edit',array($articles->id))}}">
				{{csrf_field()}}
				  <fieldset>
				    <legend>Laravel CRUD Application</legend>
				    @if(count($errors) >0)
				    	@foreach($errors->all() as $error)
				    		<div class="alert alert-danger">
				    			{{$error}}
				    		</div>
				    	@endforeach
				    @endif
				    <div class="form-group">
				      <label for="exampleInputEmail1">Title</label>
				      <input type="text" class="form-control" name="title" placeholder="Title Post" value="<?php echo $articles->title; ?>">
				      <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
				    </div>
				    <div class="form-group">
				      <label for="exampleTextarea">Description</label>
				      <textarea class="form-control" name="description" rows="3" placeholder="Description Post"><?php echo $articles->description; ?></textarea>
				    </div>
				    <!-- <button type="reset" class="btn btn-warning" name="save">Cancel</button> -->
				    <button type="submit" class="btn btn-primary" name="save">Update</button>
				    <a href="{{ url('/') }}" class="btn btn-warning">Back</a>
				  </fieldset>
				</form>
			</div>
		</div>
	</div>
@include('inc.footer')