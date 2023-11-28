<?php

namespace App\Http\Controllers;

use App\Http\Requests\storeUpdatePost;
use Illuminate\Http\Request;
use App\Uf;

class UfController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $codigoUf = $request->query('codigoUF');        
        $nome = $request->query('nome');
        $sigla = $request->query('sigla');
        $status = $request->query('status');

        if ($codigoUf) {
            $uf = Uf::where('CODIGO_UF', $codigoUf)->first();
            return response()->json($uf, 200);
        }
       
        if ($nome) {
            $nome = Uf::where('NOME', $nome)->get();
            return response()->json($nome, 200);
        }

        if ($sigla) {
            $sigla = Uf::where('SIGLA', $sigla)->first();
            return response()->json($sigla, 200);
        }
        
        if ($status) {
            $status = Uf::where('STATUS', $status)->get();
            return response()->json($status, 200);
        }
        
        $ufs = Uf::all();
        return response()->json($ufs, 200);
    }

    public function store(Request $request)
    {        
        $nome = $request->json('nome');
        $sigla = $request->json('sigla');
        $status = $request->json('status');
        
        Uf::create([            
            'NOME' => $nome,
            'SIGLA' => $sigla,
            'STATUS' => $status
        ]);
        

        return response()->json(Uf::all(), 200);
    }

    public function update(Request $request)
    {
        $codigoUf = $request->json('codigoUF');
        $sigla = $request->json('sigla');
        $nome = $request->json('nome');
        $status = $request->json('status');

        Uf::where('CODIGO_UF', $codigoUf)
            ->update([
                'SIGLA' => $sigla,
                'NOME' => $nome,
                'STATUS' => $status,
            ]);
        return response()->json(Uf::all(), 200);
    }


    public function destroy($codigoUf)
    {
        $bairro = Uf::where('CODIGO_UF', $codigoUf)->first();
        $bairro->delete();
        return response()->json(Uf::all(), 200);
    }
}