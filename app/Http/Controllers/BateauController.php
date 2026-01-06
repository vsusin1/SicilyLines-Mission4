<?php

namespace App\Http\Controllers; 

use App\Models\{Bateau, Equipement};
use App\Http\Requests\BateauRequest;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

use Symfony\Component\HttpFoundation\RedirectResponse;

class BateauController extends Controller
{
    public function index(): View
    {
        $bateaux = Bateau::paginate(5);
        return view("bateau.index", compact("bateaux"));
    }

    public function create()
    {
        $equipements = Equipement::all();
        return view("bateau.create", compact("equipements"));
    }

    public function show(string $id)
    {
        
        $bateaux = Bateau::with('equipements')->get();
        $bateau = $bateaux->where('id', '=', $id)->values()[0];

        return view("bateau.show", compact("bateau"));
    }

    public function store(BateauRequest $batRequest): RedirectResponse
    {
        $bateau = $batRequest->validated();

        /*
        $bateau->nom = $batRequest->input("nom");
        $bateau->annee = $batRequest->input("annee");
        $bateau->longueur = $batRequest->input("longueur");
        $bateau->largeur = $batRequest->input("largeur");
        $bateau->vitesse = $batRequest->input('vitesse');

        
*/
        var_dump($bateau);
        if ($batRequest->hasFile('url_image'))
        {
            $batRequest->file('url_image')->getPathname();

            $imageName = time() . '.' . $batRequest->url_image->extension();

            $batRequest->image->move(public_path('images'), $imageName);
            $bateau->url_image = $imageName;
        }

        Bateau::create($bateau);
        return redirect()->route('bateaux.index')->with('info', "Le bateau a bien été ajouté.");

    }

    public function destroy(string $id)
    {
        $bateau = Bateau::findOrFail($id);
        $bateau->delete();
        return back()->with("info", "Le bateau a été supprimé.");
    }
}