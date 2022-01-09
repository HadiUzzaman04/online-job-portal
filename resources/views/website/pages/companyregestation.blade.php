@extends('website.master')

@section('contents')

<link rel="stylesheet" type="text/css" href="{{url('css/login.css')}}"> 

<div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card">
			<div class="card-header">
				<h3>Company Regestation</h3>
				
			</div>
			<div class="card-body">
				<form action="{{route('company.do.regestation')}}" method="post">
					@csrf

					<input hidden value="company" name="company_role">
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"></span>
						</div>
						<input type="text" name="name" class="form-control" placeholder="username">
						
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"></span>
						</div>
						<input type="email" name="email"class="form-control" placeholder="email">
						
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"></span>
						</div>
						<input type="phone" name="phone" class="form-control" placeholder="phone">
						
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"></span>
						</div>
						<input type="password" name="password" class="form-control" placeholder="password">
					</div>
                    <div class="input-group form-group">
						<select name="text" id="">
                            <option value="Goverment">Goverment</option>
                            <option value="Semi Goverment">Semi Goverment</option>
                            <option value="NGO">NGO</option>
                            <option value="Private Firm">Private Firm</option>

                        </select>
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