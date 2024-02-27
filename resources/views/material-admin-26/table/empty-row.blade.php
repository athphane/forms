<tr>
    <td
        @if ($colspan !== null)
            colspan="{{ (!$noCheckbox) ? $colspan : ($colspan + 1) }}"
        @endif
    >
        {{ $slot }}
    </td>
</tr>
