<div class="table-responsive">
    @if(empty($no_bulk))
        @if($bulkForm->hasActualContent())
            <div class="p-4">
                <x-forms::form :action="$bulkForm->attributes->get('action')" >
                    {{ $bulkForm }}
        @endif
    @endif
    {{ $before_table ?? '' }}
    <div class="dataTables_wrapper mt-0">
        @if(empty($no_checkbox))
            <div class="p-4 hidden-lg-up bg-light">
                <div class="checkbox">
                    <input id="{{ ($model ?? '').'-select-all-resp' }}" data-all="{{ $model ?? '' }}" value="1" type="checkbox" />
                    <label for="{{ ($model ?? '').'-select-all-resp' }}" class="checkbox__label font-weight-bold">{{ __('Select All') }}</label>
                </div>
            </div>
        @endif
        <table class="table dataTable mt-0 {{ $table_class ?? '' }}" data-form-sortable="#{{ $filter_id ?? 'filter' }}">
            <thead class="thead-default">
                <tr>
                    @if(empty($no_checkbox))
                        <th class="td-checkbox">
                            <div class="checkbox">
                                <input id="{{ ($model ?? '').'-select-all' }}" data-all="{{ $model ?? '' }}" value="1" type="checkbox" />
                                <label for="{{ ($model ?? '').'-select-all' }}" class="checkbox__label"></label>
                            </div>
                        </th>
                    @endif
                    {{ $headers ?? '' }}
                </tr>
            </thead>

            @if(empty($tbody_open))
            <tbody>
            @else
            {{ $tbody_open }}
            @endif

                {{ $rows ?? '' }}

            </tbody>
        </table>
    </div>

    @if( empty($no_bulk) )
        </x-forms::form>
    @endif
</div>

@if( empty($no_pagination) )
    {{ $pagination ?? '' }}
@endif
