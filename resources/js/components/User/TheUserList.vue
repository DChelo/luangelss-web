<template>
    <section>
        <div class="card">
            <div class="card-header d-flex justify-content-end">
                <button class="btn btn-primary">Crear usuario</button>
            </div>
            <div class="card-body">
                <div class="table-responsive my-4 mx-2">
                    <table class="table table-bordered" id="book_table">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Apellido</th>
                                <th>Correo</th>
                                <th class="d-flex justify-content-center">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr v-for="(user, index) in users" :key="index">
                                <td>{{ user.name }}</td>
                                <td>{{ user.last_name }}</td>
                                <td>{{ user.email }}</td>
                                <td>
                                    <div class="d-flex justify-content-center">
                                        <button class="btn btn-warning">Editar</button>
                                        <button class="ms-2 btn btn-danger">Eliminar</button>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </section>
</template>

<script>
export default {
    name: '',
    props: ['users'],

    data() {
        return {
            user: {}
        }
    },
    mounted() {
        this.index()
    },
    methods: {
        async index() {
            $('#book_table').DataTable()
        }
    }
}
</script>

