<template>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css" rel="stylesheet">
<link href="https://cdn.datatables.net/buttons/1.7.1/css/buttons.bootstrap4.min.css" rel="stylesheet">

    <div class="table">
        <table  id="demostable">
            <thead class="table-dark">
                <tr>
                    <th>Nombre</th>
                    <th>Apellidos</th>
                    <th>Email</th>
                    <th>País</th>
                    <th>Nombre de la organización</th>
                    <th>Posición de trabajo</th>
                </tr>
            </thead>
        </table>
    </div>
</template>

<script setup>
import { onMounted } from 'vue';
import axios from 'axios';

onMounted(() => {
    $('#demostable').DataTable({
        destroy: true,
        processing: true,
        serverSide: true,
        scrollX: true,
        order: [[0, 'asc']],
        autoWidth: false,
        dom: 'Bfrtip',
        buttons: ['pageLength', 'excel', 'pdf', 'copy'],
        ajax: {
            url: '/demo/all',
            type: 'GET'
        },
        columns: [
            { data: 'nombre', name: 'nombre', orderable: true, searchable: true },
            { data: 'apellidos', name: 'apellidos', orderable: true, searchable: true },
            { data: 'email', name: 'email', orderable: true, searchable: true },
            { data: 'pais', name: 'pais', orderable: true, searchable: true },
            { data: 'organizacion', name: 'organizacion', orderable: true, searchable: true },
            { data: 'posicion', name: 'posicion', orderable: true, searchable: true }
        ]
    });
});
</script>


