@extends('layouts.default')

@section('content')

@foreach ($companies as $company)
{{$company['id'];}}
@endforeach
@endsection
