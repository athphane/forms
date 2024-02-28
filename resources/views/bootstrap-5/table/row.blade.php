<tr id="{{ $getRowId() }}">
    @if(empty($noCheckbox))
        <td>
            <div class="form-check">
                <input id="{{ $getCheckboxId() }}" data-check="{{ $name ?? '' }}" name="{{ $name ?? '' }}[]" value="{{ $getRowId() ?? '' }}" class="form-check-input" type="checkbox">
                <label for="{{ $getCheckboxId() }}"class="form-check-label"></label>
            </div>
        </td>
    @endif

    {{ $slot }}
</tr>
