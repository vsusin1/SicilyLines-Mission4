@extends("template")

@section("barre-additionnelle")
@endsection

@section("contenu")
<div class="section-principale">

    <h1>Ajouter un bateau</h1>
    <form action="{{ route('bateaux.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3 form-creation">
            <div class="row">
                <div class="col-2">
                    <label for="nom" class="form-label">Nom:</label>
                </div>
                <div class="col-md">
                    <input type="text" class="form-control @error('nom') is invalid @enderror" name="nom" id="nom" placeholder="Le nom du bateau" value="{{ old('nom') }}">
                    @error('nom')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="row">
                <div class="col-2">
                    <label for="annee" class="form-label">Année:</label>
                </div>
                <div class="col-md">
                    <input type="text" pattern="[0-9]*" class="form-control @error('annee') is invalid @enderror" name="annee" id="annee" placeholder="L'année du bateau" value="{{ old('annee') }}">
                    @error('annee')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="row">
                <div class="col-2">
                    <label for="longueur" class="form-label">Longueur:</label>
                </div>
                <div class="col-md">
                    <input type="text" pattern="[0-9]*" class="form-control @error('longueur') is invalid @enderror" name="longueur" id="longueur" placeholder="La longueur du bateau" value="{{ old('longueur') }}">
                    @error('longueur')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="row">
                <div class="col-2">
                    <label for="largeur" class="form-label">Largeur:</label>
                </div>
                <div class="col-md">
                    <input type="text" pattern="[0-9]*" class="form-control @error('largeur') is invalid @enderror" name="largeur" id="largeur" placeholder="La largeur du bateau" value="{{ old('largeur') }}">
                    @error('largeur')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="row">
                <div class="col-2">
                    <label for="url_image" class="form-label">Image:</label>
                </div>
                <div class="col-md">
                    <input type="file" class="form-control @error('url_image') is invalid @enderror" name="url_image" id="url_image" value="{{ old('url_image') }}">
                    @error('url_image')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="row">
                <div class="col-2">
                    <label for="equipements" class="form-label">Équipements à bord:</label>
                </div>
                <div class="col-md">
                    <div class="container">
                        @foreach ($equipements as $eq)
                        <div class="row">
                            <div class="col-md-4">
                                <p class="image-label"> 
                                    <img src="../images/{{ $eq->url_icone }}" width="24" height="24"/>
                                    {{ $eq->libelle }}
                                </p>
                            </div>
                            <div class="col">
                                <input type="checkbox" name="equipements" value="{{ $eq->id }}">
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <div class="control">
            <button class="btn btn-primary">Envoyer</button>
        </div>
    </form>
</div>
@endsection