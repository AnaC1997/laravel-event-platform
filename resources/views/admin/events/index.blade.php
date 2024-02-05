@extends('layouts.admin')

@section('content')
    <div class="content">
        <div class="container">
            <div class="row row-cols-1 row-cols-md-3 g-4 py-4">
                @foreach ($events as $event)
                    <div class="col">
                        <div class="card" style="width: 18rem;">
                            <img src="{{$event->img}}" class="card-img-top" alt="{{$event->name}}">
                            <div class="card-body">
                                <h5 class="card-title"><strong>{{$event->name}}</strong> </h5>
                                <p class="card-text">{{$event->description}}</p>
                                <div class="card-footer mb-3">
                                    <small class="text-body-secondary">Data: {{$event->date}}</small>
                                  </div>
                                 
                            </div>
                            <a href="{{ route('admin.events.show', $event->id) }}" class="btn btn-primary">Dettagli</a>
                            <a href="{{ route('admin.events.edit', $event->id) }}" class="btn btn-warning">Modifica</a>
                            <form action="{{ route('admin.events.destroy',$event->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <input type="submit" value="Cancella" class="btn btn-danger">
                            </form>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

@endsection
