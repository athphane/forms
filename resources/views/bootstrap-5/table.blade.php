<table
    {{ $attributes->merge(['class' => 'table' . ($striped ? ' striped' : null)]) }}
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
