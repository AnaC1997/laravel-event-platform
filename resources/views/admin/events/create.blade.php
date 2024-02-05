@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row row-cols-1 row-cols-md-3 g-4 py-4">
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        </div>

        <div class="row">
            <h2 class="mt-3 text-center">Inserisci un evento</h2>
            <form action="{{ route('admin.events.store') }}" method="POST">
                @csrf <!--Token-->
                <div class="mb-3">
                    <label for="name" class="form-label">Nome evento</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name"
                        name="name" placeholder="Inserisci il nome dell'evento" value="{{ old('name') }}">
                        @error('name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                </div>
                <div class="mb-3">
                    <label for="date" class="form-label">Data</label>
                    <input type="date" class="form-control @error('date') is-invalid @enderror" id="date"
                        name="date" placeholder="Inserisci la data dell'evento" value="{{ old('date') }}">
                    @error('date')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="available_tickets" class="form-label">Tickets disponibili</label>
                    <input type="number" class="form-control @error('available_tickets') is-invalid @enderror"
                        id="available_tickets" name="available_tickets"
                        placeholder="Inserisci la quantita di tickets disponibili" value="{{ old('available_tickets') }}">
                    @error('available_tickets')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Descrizione evento</label>
                    <input type="text" class="form-control @error('description') is-invalid @enderror" id="description"
                        name="description" placeholder="Inserisci una description dell'evento"
                        value="{{ old('description') }}">
                    @error('description')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="img" class="form-label">Imagen del evento</label>
                    <input type="text" class="form-control @error('img') is-invalid @enderror" id="img"
                        name="img" placeholder="Inserisci l'immagine dell'evento" value="{{ old('img') }}">
                    @error('img')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Inserisci</button>
            </form>

        </div>
    </div>
@endsection