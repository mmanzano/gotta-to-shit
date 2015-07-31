@extends('layout.layout')

@section('content')

    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="forms">
        <form method="POST" action="/place">
            {!! csrf_field() !!}
            <input name="_method" type="hidden" value="">
            @include('place/partials/form')
        </form>
    </div>
@endsection


@section('javascript')
    @include('js/place_field')
@endsection