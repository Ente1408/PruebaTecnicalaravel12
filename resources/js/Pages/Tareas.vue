<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
import descripcionformulario from '@/Pages/Formulario_tareas.vue'
</script>
<template>
    <Head title="Tareas" />

    <AuthenticatedLayout>
        <template #header>
            <h2
                class="text-xl font-semibold leading-tight text-gray-800"
            >
                Tareas
            </h2>
        </template>

            <descripcionformulario />
    </AuthenticatedLayout>
</template>
