@extends('layouts.app')

@section('title', 'Панель рекламодателя')
@section('content')


    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif






@endsection
