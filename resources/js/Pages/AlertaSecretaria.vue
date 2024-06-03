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
        <h2 class="text-2xl font-bold mb-6">Anunciar Chegada</h2>
        <form @submit.prevent="announceArrival" class="bg-white p-6 rounded-lg shadow-md">
          <div class="mb-4">
            <label for="patientName" class="block text-gray-700 font-bold mb-2">Nome do Paciente:</label>
            <input type="text" id="patientName" v-model="patientName" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
          </div>
          <div class="flex items-center justify-center">
            <button type="submit" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Anunciar Chegada</button>
          </div>
        </form>
      </main>
    </div>
  </template>
  
  <script setup>
  import { ref } from 'vue';
  
  const patientName = ref('');
  
  const announceArrival = () => {
    // Lógica para anunciar a chegada do paciente ao psicólogo
    alert(`Paciente ${patientName.value} anunciou sua chegada.`);
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
  