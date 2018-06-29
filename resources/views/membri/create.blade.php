@extends('layouts.master')

@section('content')
				<!-- Star FORM -->
		<form action="/membrii" method="POST" enctype="multipart/form-data">
				{{ csrf_field() }}

				<div class="form-group">
					<label for="upload-photo-membru">Upload Poza Membru</label>
					<div class="card">
						<input class="list-group-item" type="file" id="upload-photo-membru" name="foto">
					</div>
				</div>

				<div class="form-group">
					<label for="nume">Nume</label>
					<input type="text" class="form-control" id="nume" name="nume" required>
				</div>
				<div class="form-group">
					<label for="prenume">Prenume</label>
					<input type="text" class="form-control" id="prenume" name="prenume" required>
				</div>

				<div class="form-group">
					<label for="descriere">Descriere</label>
					<input type="textarea" class="form-control" id="descriere" name="descriere" required>
				</div>

				<div class="form-group">
					<button type="submit" class="btn btn-default">Add</button>
				</div>
		</form>
		   <!-- End FORM -->

@endsection
