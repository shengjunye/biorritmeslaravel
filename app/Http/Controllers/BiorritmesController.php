<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BiorritmesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('BIO.form');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (empty($request->input('dataNaixement'))) {
            return view('bio.error', ['error' => 'ERROR! Introdueix la teva data de naixement!']);
        } else if (empty($request->input('usuari'))) {
            return view('bio.error', ['error' => 'ERROR! Introdueix El teu nom!']);
        } else {
            $diesDiferencia = $this->calculDies(time(), strtotime($request->input('dataNaixement')));
            $fisic = $this->calculBiorritme($diesDiferencia, 23);
            $emocional = $this->calculBiorritme($diesDiferencia, 28);
            $intelectual = $this->calculBiorritme($diesDiferencia, 33);

            $percentatgeFisic = round($fisic, 0);
            $percentatgeEmocional = round($emocional, 0);
            $percentatgeIntelectual = round($intelectual, 0);

            $dataNaixement = date("d/m/Y", strtotime($request->input('dataNaixement')));

            return view('bio.result', [
                'usuari' => $request->input('usuari'),
                'dataNaixement' => $dataNaixement,
                'fisic' => $fisic,
                'percentatgeFisic' => $percentatgeFisic,
                'emocional' => $emocional,
                'percentatgeEmocional' => $percentatgeEmocional,
                'intelectual' => $intelectual,
                'percentatgeIntelectual' => $percentatgeIntelectual
            ]);
        }
        
    }
    
    public function calculBiorritme($diesDiferencia, $cicle)
    {
        try {
            
            return ($diesDiferencia % $cicle) / $cicle * 100;
        } catch (Exception $e) {
            return view('bio.error', ['error' => 'ERROR! Error en el càlcul del biorritme!']);
        }
    }
    
    public function calculDies($data1, $data2)
    {
        try {
            return round(($data1 - $data2) / (60 * 60 * 24)); // Diferència de dies
        } catch (Exception $e) {
            return view('bio.error', ['error' => 'ERROR! Error en el càlcul del biorritme!']);
        }
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
