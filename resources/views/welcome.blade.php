<x-layout>
    Hello world
<div class="container">
    <div class="row">
        <div class="col-4 text-center">
            <livewire:users.create/>
        </div>

        <div class="col-4 text-center">
            <livewire:users.index/>
        </div>

        <div class="col-4 text-center">
            <livewire:users.edit  />
            {{-- devo aggiungere nel tag riga sopra  :user="$user" per passargli la variabile $user della classe EDIT--}}
        </div>
    </div>
    <div class="row">
        <div class="col-4 text-center">
            <livewire:users.edit/>
        </div>

        <div class="col-4 text-center">
        </div>

        <div class="col-4 text-center">
        </div>
    </div>

</div>

</x-layout>
