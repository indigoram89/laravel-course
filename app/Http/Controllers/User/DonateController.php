<?php

namespace App\Http\Controllers\User;

use App\Models\Donate;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DonateController extends Controller
{
    public function __invoke()
    {
        // $stats = [
        //     'total_count' => Donate::query()->count(),
        //     'total_amount' => Donate::query()->sum('amount'),
        //     'avg_amount' => Donate::query()->avg('amount'),
        //     'min_amount' => Donate::query()->min('amount'),
        //     'max_amount' => Donate::query()->max('amount'),
        // ];

        // ->where('created_at', '>=', now()->subMonth()->startOfMonth())
        // ->where('created_at', '<=', now()->subMonth()->endOfMonth())

        $statistics = Donate::query()
            ->select(['currency_id'])
            ->selectRaw('count(*) as total_count')
            ->selectRaw('sum(amount) as total_amount')
            ->selectRaw('avg(amount) as avg_amount')
            ->selectRaw('min(amount) as min_amount')
            ->selectRaw('max(amount) as max_amount')
            ->groupBy('currency_id')
            ->get();

        return view('user.donates.index', compact('statistics'));
    }
}
