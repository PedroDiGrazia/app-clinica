<script setup>
<<<<<<< Updated upstream
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/inertia-vue3';
=======
import axios from 'axios';
import { usePage } from '@inertiajs/inertia-vue3';
import { ref, onMounted } from 'vue';
import AuthenticatedLayout from '@/layouts/AuthenticatedLayout.vue'; // Importe o layout autenticado
import Header from '@/Components/Header.vue';

const { user } = usePage().props;
const appointments = ref([]);
const newAppointment = ref({
    date: ''
});

const fetchAppointments = async () => {
    try {
        const response = await axios.get('/api/appointments');
        appointments.value = response.data;
    } catch (error) {
        console.error('Falha ao buscar os agendamentos:', error);
    }
};

const createAppointment = async () => {
    try {
        const appointmentData = { date: newAppointment.value.date, user_id: user.id };
        await axios.post('/api/appointments', appointmentData);
        await fetchAppointments();
        newAppointment.value.date = ''; // Limpa a data após a criação do agendamento
    } catch (error) {
        console.error('Falha ao criar o agendamento:', error);
    }
};

onMounted(fetchAppointments);
>>>>>>> Stashed changes
</script>

<template>
    <Head title="Dashboard" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Dashboard
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <h3 class="text-lg font-semibold mb-4">Nova Consulta:</h3>
                        <form @submit.prevent="createAppointment">
                            <div class="mb-4">
                                <label for="date" class="block text-sm font-medium text-gray-700">Data:</label>
                                <input v-model="newAppointment.date" type="date" name="date" id="date" class="mt-1 p-2 border rounded-md w-full">
                            </div>
                            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600">Agendar</button>
                        </form>
                    </div>
                    <div class="p-6 bg-white border-b border-gray-200">
                        <h3 class="text-lg font-semibold mb-4">Próximas Consultas:</h3>
                        <ul>
                            <li v-for="appointment in appointments" :key="appointment.id">
                                {{ appointment.date }} - {{ appointment.user_id }}
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
