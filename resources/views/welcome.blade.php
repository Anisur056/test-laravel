@extends('layout.main')

@section('page-title')
    Laravel- Welcome
@endsection

@section('body-content')

    <h2>This is comming from `welcome.blade.php` page</h2>

@endsection

@section('sidebar')
    @parent
    <p>Massage from home page.</p>
@endsection