@extends('layouts.app')

@section('content')
<h1>Dashboard</h1>
<form action="/addpost" method='post'>
{{ csrf_field() }}
    <input type="text" name='body'>
    <button type='submit'>Submit</button>
</form>
@endsection
