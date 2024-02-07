<div id="normal">
    <x-table>
        <x-slot:headers>
            <x-table-cell>No</x-table-cell>
            <x-table-cell>First Name</x-table-cell>
            <x-table-cell>Last Name</x-table-cell>
            <x-table-cell>Username</x-table-cell>
        </x-slot:headers>

        <x-slot:rows>
            <x-table-row>
                <x-table-cell>1</x-table-cell>
                <x-table-cell>Mark</x-table-cell>
                <x-table-cell>Otto</x-table-cell>
                <x-table-cell>@mdo</x-table-cell>
            </x-table-row>
            <x-table-row>
                <x-table-cell>2</x-table-cell>
                <x-table-cell>Jacob</x-table-cell>
                <x-table-cell>Thornton</x-table-cell>
                <x-table-cell>@fat</x-table-cell>
            </x-table-row>
            <x-table-row>
                <x-table-cell>3</x-table-cell>
                <x-table-cell colspan="2">Larry the Bird</x-table-cell>
                <x-table-cell>@twitter</x-table-cell>
            </x-table-row>
        </x-slot:rows>
    </x-table>
</div>

<div id="striped">
    <x-table striped>
        <x-slot:headers>
            <x-table-cell>No</x-table-cell>
            <x-table-cell>First Name</x-table-cell>
            <x-table-cell>Last Name</x-table-cell>
            <x-table-cell>Username</x-table-cell>
        </x-slot:headers>

        <x-slot:rows>
            <x-table-row>
                <x-table-cell>1</x-table-cell>
                <x-table-cell>Mark</x-table-cell>
                <x-table-cell>Otto</x-table-cell>
                <x-table-cell>@mdo</x-table-cell>
            </x-table-row>
        </x-slot:rows>
    </x-table>
</div>



