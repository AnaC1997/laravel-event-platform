@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-6 bg-white">
                @if ($event->img)
                    <img src="{{ $event->img }}" class="card-img-top" alt="{{ $event->name }}">
                @else
                    <img src="https://spotme.com/wp-content/uploads/2020/07/Hero-1.jpg" class="card-img-top"
                        alt="{{ $event->name }}">
                @endif
            </div>
            <div class="col-6">
                <h2>{{ $event->name }}</h2>
                <p>{{ $pasta->description }}</p>
                <p>{{ $pasta->date }}</p>
            </div>
        </div>
    </div>
@endsection