<template>
    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h2 class="text-xl font-semibold mb-4">Nueva descripción</h2>
                    <form @submit.prevent="submit">
                        <div class="mb-4">
                            <label class="block text-sm font-medium text-gray-700">Descripción</label>
                            <textarea
                                v-model="form.Descripcion"
                                rows="4"
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500"
                                required
                            ></textarea>
                        </div>

                        <div class="flex justify-end">
                            <button
                                type="submit"
                            >
                                Guardar
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</template>
<script setup>
import { reactive } from 'vue'
import { router } from '@inertiajs/vue3'

const form = reactive({
    descripcion: '',
})


const submit = () => {
    router.post('/tareas', form, {
        onSuccess: (page) => {
            console.log('Formulario enviado correctamente.')
            console.log('Respuesta:', page)
        },
        onError: (errors) => {
            
            console.log('Hubo un error al enviar el formulario.')
            console.error('Errores:', errors)
        },
    })
}
</script>s