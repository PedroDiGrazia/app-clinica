<template>
  <div class="flex justify-center items-center h-screen bg-gray-100">
    <div class="max-w-xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="bg-white rounded-lg shadow-lg overflow-hidden">
        <div class="px-4 py-5 sm:px-6">
          <h2 class="text-lg font-semibold text-gray-900 text-center">Login {{ isProfissional ? 'Profissional' : 'Secretária' }}</h2>
        </div>
        <div class="border-t border-gray-200">
          <div class="p-12">
            <div v-if="isProfissional">
              <div class="mb-4">
                <label for="profissionalRP" class="block text-sm font-medium text-gray-700">RP</label>
                <input type="text" id="profissionalRP" v-model="profissionalData.RP" class="mt-1 block w-full shadow-sm sm:text-sm focus:ring-indigo-500 focus:border-indigo-500 border-gray-300 rounded-md">
              </div>
              <div class="mb-4">
                <label for="profissionalSenha" class="block text-sm font-medium text-gray-700">Senha</label>
                <input type="password" id="profissionalSenha" v-model="profissionalData.senha" class="mt-1 block w-full shadow-sm sm:text-sm focus:ring-indigo-500 focus:border-indigo-500 border-gray-300 rounded-md">
              </div>
            </div>
            <div v-else>
              <div class="mb-4">
                <label for="secretariaRS" class="block text-sm font-medium text-gray-700">RS</label>
                <input type="text" id="secretariaRS" v-model="secretariaData.RS" class="mt-1 block w-full shadow-sm sm:text-sm focus:ring-indigo-500 focus:border-indigo-500 border-gray-300 rounded-md">
              </div>
              <div class="mb-4">
                <label for="secretariaSenha" class="block text-sm font-medium text-gray-700">Senha</label>
                <input type="password" id="secretariaSenha" v-model="secretariaData.Senha" class="mt-1 block w-full shadow-sm sm:text-sm focus:ring-indigo-500 focus:border-indigo-500 border-gray-300 rounded-md">
              </div>
            </div>
            <div class="mt-6 flex justify-center">
              <label class="flex items-center">
                <input type="checkbox" class="appearance-none w-12 h-6 rounded-full bg-gray-300 focus:outline-none" v-model="isProfissional">
                <span class="sr-only">Toggle Profissional/Secretária</span>
                <span class="ml-3 text-sm font-medium text-gray-700">{{ isProfissional ? 'Profissional' : 'Secretária' }}</span>
              </label>
            </div>
            <div class="mt-6 flex justify-center">
              <button @click="submitForm" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                Enviar
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      isProfissional: true,
      profissionalData: {
        RP: '',
        senha: ''
      },
      secretariaData: {
        RS: '',
        Senha: ''
      }
    };
  },
  methods: {
    submitForm() {
      // Aqui você pode adicionar a lógica para enviar os dados do formulário
      console.log('Formulário enviado!');
    }
  }
};
</script>
