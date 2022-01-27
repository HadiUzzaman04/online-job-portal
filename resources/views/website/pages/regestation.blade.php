@extends('website.master')

@section('contents')

<link rel="stylesheet" type="text/css" href="{{url('css/login.css')}}"> 

<div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card">
			<div class="card-header">
				<h3>Regestation</h3>
				
			</div>
			<div class="card-body">
				<form action="{{route('applicant.registation.done')}}" method="post">
					@csrf
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"></span>
						</div>
						<input type="text" name="name" class="form-control" placeholder="username" required>
						
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"></span>
						</div>
						<input type="email" name="email"class="form-control" placeholder="email" required>
						
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"></span>
						</div>
						<input type="phone" name="phone" class="form-control" placeholder="phone" required>
						
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"></span>
						</div>
						<input type="password" name="password" class="form-control" placeholder="password" required>
					</div>
					<div class="form-group">
						<input type="submit" value="Regester" class="btn float-right regester_btn">
					</div>
				</form>
			</div>
			</div>
		</div>
	</div>
</div>

@endsection