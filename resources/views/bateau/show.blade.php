@extends("template")

@section("barre-additionnelle")
<div>
    <a class="btn btn-secondary bouton" href="{{ route("bateaux.index") }}">Retour à la flotte</a>
    <a class="btn btn-primary bouton" href="{{ route("accueil") }}">Retour à l'accueil</a>
</div>
@endsection

@section('contenu')
<div class="card mb-3">
    <div class="row g-0">
        <div class="col-md-4">
            <img class="image-card-bateau img-fluid rounded-start" src="../images/{{ $bateau->url_image }}" alt="Une photo du bateau {{ $bateau->nom }} de notre flotte."> 
        </div>
        <div class="col-md-8">
            <div class="card-body">
                <h5 class="card-title">Le {{ $bateau->nom  }}</h5>
                <p style="font-size: larger;">Caractéristiques:</p>
                <table id="tableau-caracteristiques">
                    <tbody>
                        <tr class="ligne-impaire">
                            <td>
                                <b>Année</b>
                            </td>
                            <td>
                                {{ $bateau->annee }}
                            </td>
                        </tr>
                        <tr class="ligne-paire">
                            <td>
                                <b>Longueur</b>
                            </td>
                            <td>
                                {{ $bateau->longueur }} mètres
                            </td>
                        </tr>
                        <tr class="ligne-impaire">
                            <td>
                                <b>Largeur</b>
                            </td>
                            <td>
                                {{ $bateau->largeur }} mètres
                            </td>
                        </tr>
                        <tr class="ligne-paire">
                            <td>
                                <b>Vitesse maximale</b>
                            </td>
                            <td>
                                {{ $bateau->vitesse }} noeuds
                            </td>
                        </tr>
                    </tbody>
                </table>
                <br>

                <p style="font-size: larger;">Équipements disponibles:</p>
                <table id="tableau-equipements">
                    <tbody>
                        <?php $pair = true; ?>
                        @foreach($bateau["equipements"] as $eq)
                        <tr class="{{ $pair ? "ligne-paire" : "ligne-impaire" }}">
                        <td>
                            <img src="../images/{{ $eq->url_icone }}" width="24" height="24"/>
                        </td>
                        <td>
                            {{$eq->libelle}}
                        </td>
                        </tr>
                        <?php $pair = !$pair; ?>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    </div>
@endsection
