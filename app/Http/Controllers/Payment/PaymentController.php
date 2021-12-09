<?php

namespace App\Http\Controllers\Payment;

use App\Http\Controllers\Controller;
use App\Models\Table;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function index()
    {
        return view('payment.index');
    }

    public function getTables()
    {
        $tables = Table::all();
        $html = '';
        foreach ($tables as $table) {
            $html .= '<div class="col-md-2">';
            $html .= '<button class="btn btn-secondary">
                <img class="img-fluid" src="'.url('/img/table.png').'" alt="">
                <br>
                <span class="badge badge-primary">'.$table->name.'</span>
            </button>';
            $html .= '</div>';
        }
        return $html;
    }
}
