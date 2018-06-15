@extends('layouts.app')

@section('content')
    <h1>Have ランキング</h1>
    @include('items.items', ['items' => $items])
@endsection