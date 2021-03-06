@extends('layouts.app')

@section('content')
<form>
    <div class="form-field">
        <input type="text" id="search" name="search" class="form-control rounded-1" placeholder="Recherche...." />
        <button type="submit" class="btn btn-primary">
            Rechercher
        </button>
    </div>
</form>
    <div class="row justify-content-center">
                <div class="col-md-8">
                        <div class="card-body">
                            <div class="row row-cols-1 row-cols-md-3 g-4">
                                @foreach($games as $game)
                                <div class="col" style="margin-top: 35px;">
                                    <div class="card" style="width: 18rem;">
                                        <img style="height: 150px;" src="{{ asset('storage/image/' . $game->image) }}" class="card-img-top" alt="{{$game->image}}">
                                        <div class="card-body">
                                            <h5 class="card-title"><strong>Nom :</strong> {{ $game->name }}</h5>
                                            <p class="card-text"><strong>Description :</strong> {{ $game->description }}</p>
                                            <p class="card-text"><strong>Quantité :</strong> {{ $game->quantity }}</p>
                                            <p class="card-text"><strong>Prix :</strong> {{ $game->price }}</p>
                                            <p class="card-text"><strong>Plateform :</strong> {{ $game->platform }}</p>
                                            <a class="btn btn-primary" href="{{ route('member.game.show',$game->id) }}" role="button">Détails</a>           
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                
                                {{ $games->links() }}

                            </div>
                        </div>
                </div>
    </div>
@endsection