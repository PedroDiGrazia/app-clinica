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
  
      <!-- Welcome Text and Buttons -->
      <section class="container mx-auto mt-10 px-4 text-center">
        <h2 class="text-2xl font-bold mb-4">Bem-vindo, {{ userName }}</h2>
        <div class="flex justify-center space-x-4">
          <router-link to="/cadastro">
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Cadastro de Paciente</button>
          </router-link>
          <router-link to="/anunciar">
            <button class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Anunciar Chegada</button>
          </router-link>
        </div>
      </section>
  
      <!-- Router View -->
      <router-view></router-view>
    </div>
  </template>
  
  <script setup>
  import { ref } from 'vue';
  
  const userName = ref('Jeremias Cu Largo'); // Substitua pelo nome real do usuário
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
  a {
    color: inherit;
    text-decoration: none;
  }
  a:hover {
    text-decoration: underline;
  }
  button {
    transition: background-color 0.3s ease;
  }
  </style>
  