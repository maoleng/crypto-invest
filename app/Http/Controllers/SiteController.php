<?php

namespace App\Http\Controllers;

use App\Services\Balance\CashFund;
use App\Services\Balance\CryptoFund;
use App\Services\Balance\ONUSFund;
use Illuminate\Contracts\View\View;

class SiteController extends Controller
{

    public function index(): View
    {
        $overview = CashFund::getOverview();
        $cash_balance = CashFund::getBalance();
        $onus_balance = ONUSFund::getBalance();
        $crypto_balance = CryptoFund::getBalance();

        $balance = $cash_balance + $crypto_balance + $onus_balance;

        return view('index', [
            'overview' => $overview,
            'balance' => $balance,
            'cash_balance' => $cash_balance,
            'crypto_balance' => $crypto_balance,
            'onus_balance' => $onus_balance,
        ]);
    }

    public function market(): View
    {
        return view('market');
    }

}
