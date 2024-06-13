<script setup>
<<<<<<< Updated upstream
import axios from 'axios';
import { ref } from 'vue';
import AuthenticatedLayout from '@/layouts/AuthenticatedLayout.vue'; // Import the authenticated layout
import Header from '@/Components/Header.vue';

// Define props for user and appointments
const props = defineProps(['user', 'appointments']);

const appointments = ref(props.appointments);
const newAppointment = ref({
    date: ''
});

const fetchAppointments = async () => {
    try {
        const response = await axios.get('/api/appointments');
        appointments.value = response.data;
    } catch (error) {
        console.error('Failed to fetch appointments:', error);
    }
};

const createAppointment = async () => {
    try {
        const appointmentData = { date: newAppointment.value.date, user_id: props.user.id };
        await axios.post('/api/appointments', appointmentData);
        await fetchAppointments();
        newAppointment.value.date = ''; // Clear the date after creating the appointment
    } catch (error) {
        console.error('Failed to create appointment:', error);
    }
};
=======
import { route } from '@inertiajs/inertia-vue3';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';

>>>>>>> Stashed changes
</script>

<template>
    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Dashboard 
            </h2>
        </template>
<<<<<<< Updated upstream

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <h3 class="text-lg font-semibold mb-4">New Appointment:</h3>
                        <form @submit.prevent="createAppointment">
                            <div class="mb-4">
                                <label for="date" class="block text-sm font-medium text-gray-700">Date:</label>
                                <input v-model="newAppointment.date" type="date" name="date" id="date" class="mt-1 p-2 border rounded-md w-full">
                            </div>
                            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600">Schedule</button>
                        </form>
                    </div>
                    <div class="p-6 bg-white border-b border-gray-200">
                        <h3 class="text-lg font-semibold mb-4">Upcoming Appointments:</h3>
                        <ul>
                            <li v-for="appointment in appointments" :key="appointment.id">
                                {{ appointment.date }} - {{ appointment.user_id }}
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
=======
        <div v-if="$page.props.auth.user.permissao !== 2" class="flex flex-col items-center space-y-4">
            <h1 class="text-3xl mt-4 font-semibold text-blue-800">Bem Vindo a Clínica Mentalis</h1>
            <h2 class="text-2xl font-semibold text-gray-800">Clique aqui para ver os seus agendamentos</h2>
            <a href="/agendamentos" class="nav-button bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 transition duration-300" v-if="$page.props.auth.user.permissao !== 2" style="float: right;">Agendamentos</a>
>>>>>>> Stashed changes
        </div>
        <div v-if="$page.props.auth.user.permissao === 2" class="flex flex-col items-center space-y-4">
            <h1 class="text-3xl mt-4 font-semibold text-blue-800">Bem Vindo a página da Secretaria</h1>
            <h2 class="text-2xl font-semibold text-gray-800">Clique aqui para realizar o cadastro de novos usuários</h2>
            <a href="/register" class="nav-button bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 transition duration-300">
                Cadastro
            </a>
        </div>

    </AuthenticatedLayout>
</template>