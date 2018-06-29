@extends('layouts.master')

@section('content')
	<div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-6">



			<!-- Star FORM -->
			<form action="/post" method="POST" enctype="multipart/form-data">
				{{ csrf_field() }}

				<div class="form-group">
					<label for="upload-photo">Upload Poza ...</label>
					<div class="card">
						<input class="list-group-item" type="file" id="upload-photo" name="post_img">
					</div>
				</div>

				<div class="form-group">
					<label for="title">Title</label>
					<input type="text" class="form-control" id="title" name="title" required>
				</div>

				<div class="form-group">
					<label for="body">Body</label>
					<input type="textarea" class="form-control" id="body" name="body" required>
				</div>

				<div class="form-group">
					<button type="submit" class="btn btn-default">Publish</button>
				</div>
			</form>
		   <!-- End FORM -->

		</div>
	</div>

	<script type="text/javascript" src="{{ asset('js/file.js') }}"></script>
@endsection

