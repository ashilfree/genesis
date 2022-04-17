@if ( is_a($items, \Illuminate\Support\Collection::class) )
    @foreach( $items as $item )
        {{ $item }}
    @endforeach
@else
    {{ $items }}
@endif
