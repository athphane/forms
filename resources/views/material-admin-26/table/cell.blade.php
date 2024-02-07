@if($heading)
    <th
@else
    <td
@endif

    {{ $attributes->merge([]) }}
>
    {{ $slot }}

@if($heading)
</th>
@else
</td>
@endif
