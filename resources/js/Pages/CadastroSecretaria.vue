<template>
    <div>
      <header class="bg-gray-900 text-white py-4">
        <div class="container mx-auto flex justify-start items-center px-4">
          <div class="flex items-center">
            <img src="https://img.icons8.com/?size=48&id=4350&format=png&color=228BE6" alt="Logo">
            <h1 class="ml-2 text-xl font-bold"><a href="/">Clínica Mentalis</a></h1>
          </div>
        </div>
      </header>
  
      <main class="container mx-auto mt-10 px-4">
        <h2 class="text-2xl font-bold mb-6">Cadastro de Paciente</h2>
        <form @submit.prevent="submitForm" class="bg-white p-6 rounded-lg shadow-md">
          <div class="mb-4">
            <label for="fullName" class="block text-gray-700 font-bold mb-2">Nome Completo:</label>
            <input type="text" id="fullName" v-model="fullName" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
          </div>
          <div class="mb-4">
            <label for="cep" class="block text-gray-700 font-bold mb-2">CEP:</label>
            <input type="text" id="cep" v-model="cep" @blur="fetchAddress" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
          </div>
          <div class="mb-4">
            <label for="address" class="block text-gray-700 font-bold mb-2">Endereço Residencial:</label>
            <input type="text" id="address" v-model="address" readonly class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
          </div>
          <div class="mb-4">
            <label for="phone" class="block text-gray-700 font-bold mb-2">Número de Celular (Whatsapp):</label>
            <input type="text" id="phone" v-model="phone" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
          </div>
          <div class="mb-4">
            <label for="username" class="block text-gray-700 font-bold mb-2">Usuário:</label>
            <input type="text" id="username" v-model="username" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
          </div>
          <div class="mb-4">
            <label for="password" class="block text-gray-700 font-bold mb-2">Senha:</label>
            <input type="password" id="password" v-model="password" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
          </div>
          <div class="flex items-center justify-center">
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Cadastrar</button>
          </div>
        </form>
      </main>
    </div>
  </template>
  
  <script setup>
  import { ref } from 'vue';
  
  const fullName = ref('');
  const cep = ref('');
  const address = ref('');
  const phone = ref('');
  const username = ref('');
  const password = ref('');
  
  const fetchAddress = async () => {
    if (cep.value) {
      // Substitua pela sua lógica para buscar o endereço pela API de CEP
      // Aqui estamos usando um valor fictício para demonstração
      address.value = 'Endereço fictício';
    }
  };
  
  const submitForm = () => {
    // Lógica para salvar as informações do paciente
    alert('Paciente cadastrado com sucesso!');
  };
  </script>
  
  <style scoped>
  body {
    font-family: 'Arial', sans-serif;
    background-color: #f5f5f5;
    margin: 0;
    padding: 0;
  }
  .container {
    max-width: 800px;
  }
  </style>
  