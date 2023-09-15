<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Contracts\View\View;

class SiteController extends Controller
{

    public function index(): View
    {
        $overview = Transaction::query()->selectRaw('
            SUM(CASE WHEN reasons.type = 0 THEN price * quantity ELSE 0 END) AS total_spend,
            SUM(CASE WHEN reasons.type = 1 THEN price * quantity ELSE 0 END) AS total_earn,
            SUM(CASE WHEN reasons.type = 0 AND DATE(created_at) = CURDATE() THEN price * quantity ELSE 0 END) AS spend_today,
            SUM(CASE WHEN reasons.type = 1 AND DATE(created_at) = CURDATE() THEN price * quantity ELSE 0 END) AS earn_today,
            SUM(CASE WHEN reasons.type = 0 AND YEARWEEK(DATE_ADD(created_at, INTERVAL 1 DAY)) = YEARWEEK(CURDATE()) THEN price * quantity ELSE 0 END) AS spend_week,
            SUM(CASE WHEN reasons.type = 1 AND YEARWEEK(DATE_ADD(created_at, INTERVAL 1 DAY)) = YEARWEEK(CURDATE()) THEN price * quantity ELSE 0 END) AS earn_week,
            SUM(CASE WHEN reasons.type = 0 AND MONTH(created_at) = MONTH(CURDATE()) THEN price * quantity ELSE 0 END) AS spend_month,
            SUM(CASE WHEN reasons.type = 1 AND MONTH(created_at) = MONTH(CURDATE()) THEN price * quantity ELSE 0 END) AS earn_month,
            SUM(CASE WHEN reasons.type = 0 AND YEAR(created_at) = YEAR(CURDATE()) THEN price * quantity ELSE 0 END) AS spend_year,
            SUM(CASE WHEN reasons.type = 1 AND YEAR(created_at) = YEAR(CURDATE()) THEN price * quantity ELSE 0 END) AS earn_year,
            SUM(CASE WHEN reasons.type = 0 THEN price * quantity ELSE 0 END) AS total_spend,
            SUM(CASE WHEN reasons.type = 1 THEN price * quantity ELSE 0 END) AS total_earn
        ')->join('reasons', 'transactions.reason_id', '=', 'reasons.id')->first();

        $cash_balance = Transaction::query()
            ->selectRaw('SUM(CASE WHEN reasons.type = 0 THEN -price * quantity ELSE price * quantity END) AS cash_balance')
            ->join('reasons', 'transactions.reason_id', '=', 'reasons.id')->first()->cash_balance;
        $stock = (new BalanceController())->getStockBalance();
        $stock_balance = $stock['profit'] + $stock['invest'];
        $percent_stock_balance = $stock_balance * 100 / ($cash_balance + $stock['profit'] + $stock['invest']);

        return view('index', [
            'overview' => $overview,
            'cash_balance' => $cash_balance,
            'stock_balance' => $stock_balance,
            'stock_profit' => $stock['profit'],
            'percent_stock_balance' => $percent_stock_balance,
        ]);
    }

    public function market(): View
    {
        return view('market');
    }

}
