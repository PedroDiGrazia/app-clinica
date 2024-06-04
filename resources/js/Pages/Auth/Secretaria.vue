<script setup>
import Checkbox from '@/Components/Checkbox.vue';
import GuestLayout from '@/Layouts/GuestLayout.vue';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';
import { Head, Link, useForm } from '@inertiajs/inertia-vue3';
<<<<<<< Updated upstream
=======
import Header from '@/Components/Header.vue';
>>>>>>> Stashed changes

defineProps({
    canResetPassword: Boolean,
    status: String,
});

const form = useForm({
<<<<<<< Updated upstream
    email: '',
=======
    registrosec: '',
>>>>>>> Stashed changes
    password: '',
    remember: false
});

const submit = () => {
<<<<<<< Updated upstream
    form.post(route('login'), {
=======
    form.post(route('secretaria'), {
>>>>>>> Stashed changes
        onFinish: () => form.reset('password'),
    });
};
</script>

<template>
<<<<<<< Updated upstream
=======
<Header />
>>>>>>> Stashed changes
    <GuestLayout>
        <Head title="Log in" />

        <div v-if="status" class="mb-4 font-medium text-sm text-green-600">
            {{ status }}
        </div>

        <form @submit.prevent="submit" class="space-y-6">
            <div>
<<<<<<< Updated upstream
                <InputLabel for="email" value="RS" />
                <TextInput id="email" type="email" class="mt-1 block w-full" v-model="form.email" required autofocus autocomplete="username" />
                <InputError class="mt-2" :message="form.errors.email" />
=======
                <InputLabel for="registrosec" value="RS" />
                <TextInput id="registrosec" type="text" class="mt-1 block w-full" v-model="form.registrosec" required autofocus autocomplete="username" />
                <InputError class="mt-2" :message="form.errors.registrosec" />
>>>>>>> Stashed changes
            </div>

            <div>
                <InputLabel for="password" value="Password" />
                <TextInput id="password" type="password" class="mt-1 block w-full" v-model="form.password" required autocomplete="current-password" />
                <InputError class="mt-2" :message="form.errors.password" />
            </div>

            <div class="flex items-center">
                <Checkbox name="remember" v-model:checked="form.remember" />
                <span class="ml-2 text-sm text-gray-600">Remember me</span>
            </div>

            <div class="flex items-center justify-between">

<<<<<<< Updated upstream
                <a href="./register" class="underline text-sm text-blue-600 hover:text-gray-900">Não possui um cadastro ainda? Clique aqui.</a>
=======
                <a href="./secretariaregister" class="underline text-sm text-blue-600 hover:text-gray-900">Não possui um cadastro ainda? Clique aqui.</a>
>>>>>>> Stashed changes
            </div>
            <div class="flex justify-center mt-4">
                <PrimaryButton class="btn btn-primary" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                    Log in
                </PrimaryButton>
            </div>
        </form>
<<<<<<< Updated upstream
        <div class="flex justify-center mt-4">
            <a href="./secretaria" class="btn btn-professional">Secretaria</a>
        </div>
=======
>>>>>>> Stashed changes
    </GuestLayout>
</template>

<style scoped>
.btn {
  background-color: #3490dc;
  color: white;
  padding: 10px 20px;
  border-radius: 5px;
  text-decoration: none;
  font-weight: bold;
  display: inline-block;
}
.btn:hover {
  background-color: #2779bd;
}

.btn-professional {
  background-color: #38c172;
}

.btn-professional:hover {
  background-color: #2d995b;
}
</style>
