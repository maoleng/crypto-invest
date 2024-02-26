<?php

namespace App\Livewire\Transaction;

use App\Enums\ReasonType;
use App\Livewire\Forms\CashTransactionForm;
use App\Models\Reason;
use App\Models\Transaction;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Str;
use Livewire\Component;

class CashComponent extends BaseComponent
{

    public Collection $reasons;
    public CashTransactionForm $form;

    public function render(): View
    {
        return view('livewire.transaction.cash-component');
    }

    public function mount(): void
    {
        $this->loadMore();
        $this->reasons = Reason::query()->orderBy('name')->get();
    }

    protected function getMoreTransactions($p): array
    {
        return Transaction::query()
            ->whereNull('transaction_id')
            ->with(['reason', 'transactions.reason'])
            ->whereHas('reason', function ($q) {
                $q->whereIn('type', array_merge(ReasonType::getCashReasonTypes(), [ReasonType::GROUP, ReasonType::CREDIT_SETTLEMENT]));
            })
            ->orderByDesc('created_at')
            ->limit(10 * $p)
            ->get()
            ->groupBy(function ($transaction) {
                return $transaction->created_at->isToday() ? 'Hôm nay' : Str::ucfirst($transaction->created_at->isoFormat('dddd')).', '.$transaction->created_at->format('d-m-Y');
            })->each(fn($transactions) => $transactions->each(fn($transaction) => $transaction->appendCashData()))->toArray();
    }

}
