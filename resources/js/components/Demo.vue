<template>
    <main class="main-content">
        <div class="content-left">
            <p class="paragraph-one">
                <strong class="highlight">
                    ¿Quieres ver cómo Levely <br>
                    puede revolucionar la <br> gestión del conocimiento <br>
                    en tu organización?
                </strong>
            </p>
            <p class="paragraph-padding">
                Somos un software que transforma la gestión del <br> conocimiento en las organizaciones
            </p>
            <p class="paragraph-padding">
                Ofrecemos una plataforma intuitiva que empodera a <br> colegios, universidades y empresas
                con herramientas <br> avanzadas para la personalización, flexibilidad y <br> estandarización
                del aprendizaje.
            </p>
        </div>
        <div class="content-right">
            <!-- Formulario -->
            <div class="card shadow-sm p-4 rounded">
                <div class="text-center mb-4">
                    <h2 class="text-primary">Agenda un demo</h2>
                    <p>Completa el formulario y uno de nuestros expertos se pondrá en contacto contigo para programar una demostración adaptada a tus necesidades.</p>
                </div>
                <Form @submit="guardar" :validation-schema="schema">
                    <div class="row mb-3">
                        <!-- Nombre -->
                        <div class="col">
                            <label for="nombre" class="form-label">Nombre</label>
                            <Field name="nombre" v-slot="{ errorMessage, field }" v-model="formData.nombre">
                                <input type="text" id="nombre" :class="`form-control ${errorMessage ? 'is-invalid' : ''}`" v-bind="field">
                                <span class="invalid-feedback">{{ errorMessage }}</span>
                            </Field>
                        </div>
                        <!-- Apellidos -->
                        <div class="col">
                            <label for="apellidos" class="form-label">Apellidos</label>
                            <Field name="apellidos" v-slot="{ errorMessage, field }" v-model="formData.apellidos">
                                <input type="text" id="apellidos" :class="`form-control ${errorMessage ? 'is-invalid' : ''}`" v-bind="field">
                                <span class="invalid-feedback">{{ errorMessage }}</span>
                            </Field>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <!-- Email -->
                        <div class="col">
                            <label for="email" class="form-label">Email</label>
                            <Field name="email" v-slot="{ errorMessage, field }" v-model="formData.email">
                                <input type="email" id="email" :class="`form-control ${errorMessage ? 'is-invalid' : ''}`" v-bind="field">
                                <span class="invalid-feedback">{{ errorMessage }}</span>
                            </Field>
                        </div>
                        <!-- País -->
                        <div class="col">
                            <label for="pais" class="form-label">País</label>
                            <Field name="pais" v-slot="{ errorMessage, field }" v-model="formData.pais">
                                <input type="text" id="pais" :class="`form-control ${errorMessage ? 'is-invalid' : ''}`" v-bind="field">
                                <span class="invalid-feedback">{{ errorMessage }}</span>
                            </Field>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <!-- Nombre de la organización -->
                        <div class="col">
                            <label for="organizacion" class="form-label">Nombre de la organización *</label>
                            <Field name="organizacion" v-slot="{ errorMessage, field }" v-model="formData.organizacion">
                                <input type="text" id="organizacion" :class="`form-control ${errorMessage ? 'is-invalid' : ''}`" v-bind="field">
                                <span class="invalid-feedback">{{ errorMessage }}</span>
                            </Field>
                        </div>
                        <!-- Posición de trabajo -->
                        <div class="col">
                            <label for="posicion" class="form-label">Posición de trabajo *</label>
                            <Field name="posicion" v-slot="{ errorMessage, field }" v-model="formData.posicion">
                                <input type="text" id="posicion" :class="`form-control ${errorMessage ? 'is-invalid' : ''}`" v-bind="field">
                                <span class="invalid-feedback">{{ errorMessage }}</span>
                            </Field>
                        </div>
                    </div>
                    <!-- Botón de enviar -->
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary btn-lg btn-block">Agendar demo</button>
                    </div>
                </Form>
            </div>
        </div>
    </main>
</template>

<script setup>
import { ref } from 'vue';
import axios from 'axios';
import { Field, Form } from 'vee-validate';
import * as yup from 'yup';

const formData = ref({
    nombre: '',
    apellidos: '',
    email: '',
    pais: '',
    organizacion: '',
    posicion: ''
});

const schema = yup.object({
    nombre: yup.string().required('El nombre es requerido'),
    apellidos: yup.string().required('Los apellidos son requeridos'),
    email: yup.string().email('Debe ser un email válido').required('El email es requerido'),
    pais: yup.string().required('El país es requerido'),
    organizacion: yup.string().required('El nombre de la organización es requerido'),
    posicion: yup.string().required('La posición de trabajo es requerida')
});

function guardar() {
    axios.post('/demo', formData.value)
        .then(response => {
            // Alerta al guardar
            Swal.fire({
                icon: 'success',
                title: 'Se agendó correctamente',
                text: response.data.success,
                timer: 1500, // Tiempo en milisegundos para mantener la alerta abierta (opcional)
                timerProgressBar: true, // Mostrar una barra de progreso del temporizador (opcional)
                showConfirmButton: false // No mostrar el botón de confirmación
            });
            setTimeout(function() {
                window.location.reload();
            }, 1500);
        })
        .catch(error => {
            // Manejar errores de solicitud
            console.error('Error al enviar el formulario:', error);
        });
}
</script>
