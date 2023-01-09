<!-- <?php?>


namespace App\Http\Controllers;


use App\Models\Phase;
use Illuminate\Http\Request;


class PhaseController extends Controller
{

    /**
     * Affiche la liste des phases
     */
    public function index()
    {

        $phases = Phase::all();
        return view('phase.index', compact('phases'));

    }


    /**
     * return le formulaire de création d'un phase
     */
    public function create()
    {

        return view('phase.create');

    }


    /**
     * Enregistre un nouveau phase dans la base de données
     */
    public function store(Request $request)
    {

        $request->validate([
            'nomPhase'=>'required',
            'duree'=> 'required',
            'priorite' => 'required',
        ]);


        $phase = new Phase([
            'nomPhase' => $request->get('nomPhase'),
            'duree' => $request->get('duree'),
            'priorite' => $request->get('priorite'),
        ]);


        $phase->save();
        return redirect('/')->with('success', 'Phase Ajouté avec succès');

    }


    /**
     * Affiche les détails d'un phase spécifique
     */

    // public function show($id)
    // {

    //     $phase = phase::findOrFail($id);
    //     return view('phase.show', compact('phase'));

    // }


    /**
     * Return le formulaire de modification
     */

    public function edit($idPhase)
    {

        $phase = phase::findOrFail($idPhase);

        return view('phase.edit', compact('phase'));

    }


    /**
     * Enregistre la modification dans la base de données
     */
    public function update(Request $request, $idPhase)
    {

        $request->validate([

            'nomPhase'=>'required',
            'duree'=> 'required',
            'priorite' => 'required',
        ]);




        $phase = phase::findOrFail($idPhase);
        $phase->nomPhase = $request->get('nomPhase');
        $phase->duree = $request->get('duree');
        $phase->priorite = $request->get('priorite');


        $phase->update();

        return redirect('/')->with('success', 'phase Modifié avec succès');

    }




    /**
     * Supprime le phase dans la base de données
     */
    public function destroy($idPhase)
    {

        $phase = phase::findOrFail($idPhase);
        $phase->delete();

        return redirect('/')->with('success', 'phase Supprime avec succès');

    }

} -->