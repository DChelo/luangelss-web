<x-app title="Usuarios">
    <section class="container">
        <div class="d-flex justify-content-center my-4" >
            <h1>Listado de usuarios</h1>
        </div>

        <the-user-list :users="{{ $users }}"/>

    </section>
</x-app>
