<div style="max-width: 300px; max-height: 200px; overflow: hidden;">
    @if ($getState())
        {!! $getState() !!}
    @else
        <p class="text-sm text-gray-500">{{ __('No map embedded yet.') }}</p>
    @endif
</div>