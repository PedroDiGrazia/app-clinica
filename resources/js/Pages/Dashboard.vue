<script setup>
<<<<<<< Updated upstream
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import Header from '../Components/Header.vue';
import { Head } from '@inertiajs/inertia-vue3';
=======
import { ref, onMounted } from 'vue';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import Header from '@/Components/Header.vue';
import { Head } from '@inertiajs/inertia-vue3';
import { usePage, router } from '@inertiajs/inertia-vue3';

// Define props for user and appointments
const { props } = usePage();

const appointments = ref(props.appointments || []);
const newAppointment = ref({
    date: ''
});

const fetchAppointments = async () => {
    try {
        const response = await fetch('/api/appointments');
        if (!response.ok) {
            throw new Error('Failed to fetch appointments');
        }
        const data = await response.json();
        appointments.value = data;
    } catch (error) {
        console.error('Failed to fetch appointments:', error);
    }
};

const createAppointment = async () => {
    try {
        if (!props.user) {
            throw new Error('User data not available');
        }
        const appointmentData = { date: newAppointment.value.date, user_id: props.user.id };
        const response = await fetch('/api/appointments', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify(appointmentData)
        });
        if (!response.ok) {
            throw new Error('Failed to create appointment');
        }
        await fetchAppointments();
        newAppointment.value.date = ''; // Clear the date after creating the appointment
    } catch (error) {
        console.error('Failed to create appointment:', error);
    }
};

onMounted(fetchAppointments);
>>>>>>> Stashed changes
</script>

<template>
    <Header />
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
<<<<<<< Updated upstream
                        You're logged in!
=======
                        <h3 class="text-lg font-semibold mb-4">Nova consulta:</h3>
                        <form @submit.prevent="createAppointment">
                            <div class="mb-4">
                                <label for="date" class="block text-sm font-medium text-gray-700">Date:</label>
                                <input v-model="newAppointment.date" type="date" name="date" id="date" class="mt-1 p-2 border rounded-md w-full">
                            </div>
                            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600">Agendar</button>
                        </form>
                    </div>
                    <div class="p-6 bg-white border-b border-gray-200">
                        <h3 class="text-lg font-semibold mb-4">Proximas consultas:</h3>
                        <ul>
                            <li v-for="appointment in appointments" :key="appointment.id">
                                {{ appointment.date }} - User ID: {{ appointment.user_id }}
                            </li>
                        </ul>
>>>>>>> Stashed changes
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
