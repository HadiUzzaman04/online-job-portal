@extends('website.master')
@section('contents')



<h4>Title:
  <pre>{{$job-> job_title}}</pre>
</h4>

<h6>Vacancy:
  <pre>{{$job-> vacancy}}</pre>
</h6>

<!-- <h4>{{$job-> category}}</h4> -->

<h6>Years Of Experience:
  <pre>{{$job-> years_of_experience}}</pre>
</h6>

<h6>Job Type:
  <pre>{{$job-> type}}</pre>
</h6>

<h6>Job Description:
  <pre>{{$job-> description}}</pre>
</h6>




@endsection