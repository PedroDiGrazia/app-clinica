<script setup>
import Header from '@/Components/Header.vue';
import Checkbox from '@/Components/Checkbox.vue';
import GuestLayout from '@/Layouts/GuestLayout.vue';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';
import { Head, useForm } from '@inertiajs/inertia-vue3';

defineProps({
    canResetPassword: Boolean,
    status: String,
});

const form = useForm({
    rp: '',
    password: '',
    remember: false
});

const submit = () => {
    form.post(route('psicologo'), {
        onFinish: () => form.reset('password'),
    });
};
</script>

<template>
    <Header/>
    <GuestLayout>
        <Head title="Log in Psicologo" />

        <div v-if="status" class="mb-4 font-medium text-sm text-green-600">
            {{ status }}
        </div>

        <form @submit.prevent="submit" class="space-y-6">
            <div>
                <InputLabel for="Rp" value="Rp" />
                <TextInput id="Rp" type="Rp" class="mt-1 block w-full" v-model="form.RPsic" required autofocus autocomplete="username" />
                <InputError class="mt-2" :message="form.errors.RPsic" />
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

            <div class="flex justify-center mt-4">
                <PrimaryButton class="btn btn-primary" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                    Log in
                </PrimaryButton>
            </div>

        </form>
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
.btn-professional:hover {
  background-color: #2d995b;
}
</style>
