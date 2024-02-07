<table
    {{ $attributes->merge(['class' => 'table']) }}
>
    <thead>
    <tr>
        {{ $headers ?? '' }}
    </tr>
    </thead>
    <tbody>
        {{ $rows ?? '' }}
    </tbody>
</table>
