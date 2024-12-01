<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Produto;

class ProdutoController extends Controller {

    public function lista(){
        $produtos = DB::select('select * from produtos');

        return view('listagem', ['produtos' => $produtos]);
    }
}
