@php
    $activities = \Javaabu\Forms\Tests\Feature\models\Activity::factory(10)->create();

    $activities = \Javaabu\Forms\Tests\Feature\models\Activity::query()->paginate(2);
@endphp
<div id="normal">
    <x-forms::table>
        <x-slot:headers>
            <x-forms::table.cell>No</x-forms::table.cell>
            <x-forms::table.cell>First Name</x-forms::table.cell>
            <x-forms::table.cell>Last Name</x-forms::table.cell>
            <x-forms::table.cell>Username</x-forms::table.cell>
        </x-slot:headers>

        <x-slot:rows>
            <x-forms::table.row>
                <x-forms::table.cell>1</x-forms::table.cell>
                <x-forms::table.cell>Mark</x-forms::table.cell>
                <x-forms::table.cell>Otto</x-forms::table.cell>
                <x-forms::table.cell>@mdo</x-forms::table.cell>
            </x-forms::table.row>
            <x-forms::table.row>
                <x-forms::table.cell>2</x-forms::table.cell>
                <x-forms::table.cell>Jacob</x-forms::table.cell>
                <x-forms::table.cell>Thornton</x-forms::table.cell>
                <x-forms::table.cell>@fat</x-forms::table.cell>
            </x-forms::table.row>
            <x-forms::table.row>
                <x-forms::table.cell>3</x-forms::table.cell>
                <x-forms::table.cell colspan="2">Larry the Bird</x-forms::table.cell>
                <x-forms::table.cell>@twitter</x-forms::table.cell>
            </x-forms::table.row>
        </x-slot:rows>
    </x-forms::table>
</div>

<div id="striped">
    <x-forms::table striped>
        <x-slot:headers>
            <x-forms::table.cell>No</x-forms::table.cell>
            <x-forms::table.cell>First Name</x-forms::table.cell>
            <x-forms::table.cell>Last Name</x-forms::table.cell>
            <x-forms::table.cell>Username</x-forms::table.cell>
        </x-slot:headers>

        <x-slot:rows>
            <x-forms::table.row>
                <x-forms::table.cell>1</x-forms::table.cell>
                <x-forms::table.cell>Mark</x-forms::table.cell>
                <x-forms::table.cell>Otto</x-forms::table.cell>
                <x-forms::table.cell>@mdo</x-forms::table.cell>
            </x-forms::table.row>
        </x-slot:rows>
    </x-forms::table>
</div>

<div id="material">
    <x-forms::table
        model="users"
        :no-bulk="!empty($no_bulk)"
        :no-checkbox="!empty($no_checkbox)"
        :no-pagination="!empty($no_pagination)"
    >
        <x-slot:bulk-form
            action="/users"
            method="PUT"
        >
            @include('form-input')
        </x-slot:bulk-form>

        <x-slot:headers>
            <x-forms::table.heading label="No"/>
            <x-forms::table.heading label="Date A"/>
            <x-forms::table.heading label="Date B"/>
            <x-forms::table.heading label="Date C"/>
            <x-forms::table.heading label="Date D"/>
            <x-forms::table.heading label="Date E"/>
        </x-slot:headers>

        {{--        <x-slot:rows>--}}
        {{--            <x-forms::table.empty-row--}}
        {{--                columns="4"--}}
        {{--                :no-checkbox="!empty($no_checkbox)"--}}
        {{--            >--}}
        {{--                No matching things--}}
        {{--            </x-forms::table.empty-row>--}}
        {{--        </x-slot:rows>--}}
        <x-slot:rows>
            @foreach($activities as $activity)
                <x-forms::table.row
                    model="activities"
                    :model-id="$activity->id"
                    :no-checkbox="!empty($no_checkbox)"
                >
                    <x-forms::table.cell label="Index">
                        {{ $activity->id }}
                    </x-forms::table.cell>
                    <x-forms::table.cell label="Date A">
                        {{ $activity->date_a->diffForHumans() }}
                    </x-forms::table.cell>
                    <x-forms::table.cell label="Date B">
                        {{ $activity->date_b->diffForHumans() }}
                    </x-forms::table.cell>
                    <x-forms::table.cell label="Date C">
                        {{ $activity->date_c->diffForHumans() }}
                    </x-forms::table.cell>
                    <x-forms::table.cell label="Date D">
                        {{ $activity->date_d->diffForHumans() }}
                    </x-forms::table.cell>
                    <x-forms::table.cell label="Date E">
                        {{ $activity->date_e->diffForHumans() }}
                    </x-forms::table.cell>
                </x-forms::table.row>
            @endforeach
        </x-slot:rows>

        <x-slot:pagination>
            {{ $activities->links('pagination')}}
        </x-slot:pagination>
    </x-forms::table>
</div>

<div id="material-empty">
    <x-forms::table
        model="users"
        :no-bulk="!empty($no_bulk)"
        :no-checkbox="!empty($no_checkbox)"
        :no-pagination="!empty($no_pagination)"
    >
        <x-slot:bulk-form
            action="/users"
            method="PUT"
        >
            @include('form-input')
        </x-slot:bulk-form>

        <x-slot:headers>
            <x-forms::table.heading label="No"/>
            <x-forms::table.heading label="Date A"/>
            <x-forms::table.heading label="Date B"/>
            <x-forms::table.heading label="Date C"/>
            <x-forms::table.heading label="Date D"/>
            <x-forms::table.heading label="Date E"/>
        </x-slot:headers>

        <x-slot:rows>
            <x-forms::table.empty-row
                columns="4"
                :no-checkbox="!empty($no_checkbox)"
            >
                No matching things
            </x-forms::table.empty-row>
        </x-slot:rows>
    </x-forms::table>
</div>



