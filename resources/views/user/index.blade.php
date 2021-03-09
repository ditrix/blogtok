@extends('layout.site')

@section('content')
<h1>user cabinet</h1>
<p>user: {{auth()->user()->name}} </p>
<p>user: {{auth()->user()->email}} </p>
@endsection