<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
import tablaTareas from '@/Pages/Tablatareas.vue'
</script>
<template>
    <Head title="Tareas" />

    <AuthenticatedLayout>
        <template #header>
            <h2
                class="text-xl font-semibold leading-tight text-gray-800"
            >
                Listado de Tareas
            </h2>
        </template>

            <tablaTareas />
    </AuthenticatedLayout>
</template>
