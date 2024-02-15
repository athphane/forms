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
    <x-forms::table>
        <x-slot:headers>
            <x-forms::table.cell heading>No</x-forms::table.cell>
            <x-forms::table.cell heading>First Name</x-forms::table.cell>
            <x-forms::table.cell heading>Last Name</x-forms::table.cell>
            <x-forms::table.cell heading>Username</x-forms::table.cell>
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



