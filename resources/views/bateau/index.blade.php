@extends("template")
@section("barre-additionnelle")
    <a class="bouton btn btn-primary" href="{{ route("accueil") }}">Retour à l'accueil</a>
@endsection
@section('contenu')
<div class="section-principale">

<h1>Nos ferries</h1>
<div class="d-flex justify-content-between">
    {!! $bateaux->links() !!}

    <div>
        <a class="btn btn-info" href="#">Exporter la liste en PDF</a>
        <a class="btn btn-success" href="{{ route('bateaux.create') }}">Ajouter un bateau</a>
    </div>
</div>
<table id="tableau-bateaux">
    <thead>
        <tr>
            <td><b>Image</b></td>
            <td><b>Nom</b></td>
            <td colspan="2"><b>Actions</b></td>
        </tr>
    </thead>
    <tbody>
        <?php
        $pair=true;
        ?>
        @foreach ($bateaux as $bat)
        <tr class="{{ $pair ? "ligne-paire" : "ligne-impaire" }}">
            <td>
                <img class="inline-image" src="images/{{ $bat->url_image }}" alt="Une image du bateau nommé {{ $bat->nom }}">
            </td>
            <td>
                <p>{{$bat->nom}}</p>
            </td>
            <td>
                <a class="bouton btn btn-primary" href="{{ route("bateaux.show", $bat->id) }}">
                    Voir
                </a>
            </td>
            <td>
                <form action="{{ route("bateaux.destroy", $bat->id) }}" method="POST">
                @csrf
                @method ("DELETE")
                    <button class="bouton btn btn-danger" type="submit">
                    Supprimer
                    </button>
                </form>
            </td>
        </tr>
        <?php
        $pair = !$pair;
        ?>
        @endforeach

    </tbody>
</table>
</div>
@endsection
