<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Tabel dengan Bootstrap</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.3/dist/umd/popper.min.js"
		integrity="sha384-MV7Ptp3qGJZ7vpl+wQghuHdL+RGQ1Wqx7azEGtM+Gt7sTUKT/HWtx47zTj/h31FV"
		crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
	<div class="container">
		<div class="row">
			<a href="{{ route('logout')}}">Log Out</a>
			<a href="{{ route('add')}}">Tambah User</a>
		</div>
	</div>
	<div class="container mt-5">
		<table class="table">
			<thead>
				<tr>
					<th>Nama</th>
					<th>Email</th>
					<th>Password</th>
					<th>Photo</th>
				</tr>
			</thead>
			<tbody>
				@foreach ($data as $item)
				<tr>
					<td>{{ $item->name}}</td>
					<td>{{ $item->email}}</td>
					<td><a href="{{ route('edit',$item->id)}}">edit</a>
						<form action="{{ route('delete',$item->id)}}" method="POST">
							@method('delete')
							@csrf
							<button class="" type="submit">delete</button>
						</form>
					</td>
					<td><img src="{{ asset('file/'.$item->photo) }}" width="100px" alt="" srcset=""></td>
				</tr>
				@endforeach
			
			</tbody>
	
		</table>
	</div>
	<div class="container">
		<nav aria-label="Page navigation example">
			<ul class="pagination">
				<li class="page-item"><a class="page-link" href="{{$data->PreviousPageUrl()}}">Previous</a></li>
				@for ($i = 0; $i < $data->lastPage(); $i++)
				<li class="page-item"><a class="page-link" href="{{ $data->url($i+1) }}">{{ $i+1 }}</a></li>
				@endfor
			  <li class="page-item"><a class="page-link" href="{{$data->nextPageUrl()}}">Next</a></li>
			  
			</ul>
		  </nav>
	</div>
</body>
</html>
