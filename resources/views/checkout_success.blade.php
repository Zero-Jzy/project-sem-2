@extends('layouts.master', ['title' => 'checkout'])
@section('content')

<div class="container h-75" style="position: relative; top: 100px">
    <div class="alert alert-success" role="alert">
        {{$mes}}
    </div>
</div>

@endsection
