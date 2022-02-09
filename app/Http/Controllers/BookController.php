<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Model\Pessoa;

class BookController extends Controller
{
    private $objPessoa;

    public function __construct()
    {
        $this->objPessoa = new Pessoa();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return $this->objPessoa->get();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $objPessoas = $this->objPessoa->get();
        $lastId = 0;
        if (sizeof($objPessoas) != 0) {
            $lastId = ($objPessoas[sizeof($objPessoas) - 1])->id;
        }
        return $this->objPessoa->create([
            'id' => $lastId + 1,
            'NOME' => $request->NOME,
            'SOBRENOME' => $request->SOBRENOME,
            'DATA_DE_NASCIMENTO' => $request->DATA_DE_NASCIMENTO,
            'NATURALIDADE' => $request->NATURALIDADE,
            'HOBBY' => $request->HOBBY,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        $objPessoas = $this->objPessoa->get();
        $pessoa = $objPessoas->find($id);
        $pessoa->NOME = $request->NOME;
        $pessoa->SOBRENOME = $request->SOBRENOME;
        $pessoa->DATA_DE_NASCIMENTO = $request->DATA_DE_NASCIMENTO;
        $pessoa->NATURALIDADE = $request->NATURALIDADE;
        $pessoa->HOBBY = $request->HOBBY;
        $pessoa->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pessoa = $this->objPessoa->find($id);
        return $pessoa->delete() ? "Deleted: $pessoa" : "Fail";
    }
}
