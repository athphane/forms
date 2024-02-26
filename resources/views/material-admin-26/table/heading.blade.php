<th
    @if ($colspan !== null)
        colspan="{{ $colspan }}"
    @endif

    @if ($sortable)
        data-sort-field="{{ $sortable }}"
    @endif

    class="{{ $sortable ? $addSortClass() : '' }}"
>
    {{ $label }}
</th>
