<?php

namespace App\Http\Controllers;

use App\Models\Maestro;
use App\Models\Pokemon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Exception;


class MaestroController extends Controller
{

    /**
     * Metodo para el registro de un maestro pokemon
     * 
     */
    public function register(Request $request)
    {

        $nickname = $request->input('nickname');
        $pokemones = $request->input('pokemones');

        try {

            DB::beginTransaction();

            // Registramos al maestro pokemon
            $maestro = Maestro::create([
                'nickname' => $nickname
            ]);

            foreach ($pokemones as $key => $value) {

                Pokemon::create([
                    'pokemon' => $value,
                    'id_maestro' => $maestro->id
                ]);
            }

            DB::commit();
            $respuesta = 'exito';
        } catch (\Exception $e) {

            DB::rollback();
            $respuesta = $e->getMessage();
        }

        return response()->json(['result' => $respuesta]);
    }

    /**
     * Metodo para el obtener el listado de maestros pokemon
     * 
     */
    public function index()
    {

        // Consulta para obtener todos los usuarios activos
        $maestro = Maestro::select('id', 'nickname')
            ->get();

        $pokemon = Pokemon::select('id', 'pokemon', 'id_maestro')
            ->get();

        return response()->json(['maestro' => $maestro, 'pokemon' => $pokemon]);
    }
}
