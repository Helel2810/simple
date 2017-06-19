<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script src="http://getbootstrap.com/dist/js/bootstrap.min.js"></script>
</head>



<body>

	<div class="container">
		<table class="table table-bordred table-striped">
			<thead>
				<tr>
					<td>first</td>
					<td>last</td>
					<td>email</td>
					<td>address</td>
					<td>phone</td>
					<td>edit</td>
					<td>delete</td>
				</tr>
			</thead>

				<?php foreach($identity as $key =>$value): ?>
				<tr>
					<td>{{$value->first}}</td>
					<td>{{$value->last}}</td>
					<td>{{$value->email}}</td>
					<td>{{$value->address}}</td>
					<td>{{$value->phone}}</td>
					<td>
						<a class="btn btn-success" data-toggle="modal" data-target="#editmodal" role="button"><span class="glyphicon glyphicon-pencil"></span></a>
					</td>
					<td>
						<a class="btn btn-sm btn-success" data-toggle="modal" data-target="#deletemodal" role="button"><span class="glyphicon glyphicon-trash"></span></a>
					</td>
				</tr>
				<?php endforeach?>
		</table>
	</div>
	<div class="container">
		<a class="btn btn-sm btn-success" data-toggle="modal" data-target="#myModal" role="button">create new</a>
	</div>
</body>

<div id="myModal" class="modal fade" role="dialog">
	<div class="modal-dialog">

		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">New Identity</h4>
			</div>
			<div class="modal-body">
				@include('identity.create')
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
		</div>

	</div>
</div>

<div class="modal fade" id="deletemodal" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
				<h4 class="modal-title custom_align" id="Heading">Delete this entry</h4>
			</div>
			<div class="modal-body">

				<div class="alert alert-danger"><span class="glyphicon glyphicon-warning-sign"></span> Are you sure you want to delete this Record?</div>

			</div>


			<div class="modal-footer ">
				<form action="/identities/{{ $value->id }}" method="POST">
					{{ csrf_field() }}
					<input type="hidden" name="_method" value="DELETE">
					<button type="submit" class="btn btn-success" value=""><span class="glyphicon glyphicon-ok-sign"></span> Yes</button>
				</form>
				<button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> No</button>
			</div>
		</div>
		</div>
</div>


<div id="editmodal" class="modal fade" role="dialog">
	<div class="modal-dialog">

		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Edit</h4>
			</div>
			<div class="modal-body">
				@include('identity.edit')
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
		</div>

	</div>
</div>