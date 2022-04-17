<?php


namespace App\Http\ViewComposers;


use App\Models\Service;
use App\Services\Counter;
use Illuminate\Support\Facades\Cache;
use Illuminate\View\View;

class ActivityComposer
{
    public function compose(View $view)
    {
        $counter = resolve(Counter::class);
        $view->with('count', $counter->increment("counter"));
    }
}
