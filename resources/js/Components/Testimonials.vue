<template>
  <div class="swiper-container testimonial-carousel mt-8 overflow-x-hidden text-center">
    <div class="swiper-wrapper">
      <div class="swiper-slide" v-for="(testimonial, index) in testimonials" :key="index">
        <p class="text-lg font-medium">{{ testimonial.text }} - {{ testimonial.author }}</p>
      </div>
    </div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
  </div>
</template>

<script setup>
import { ref } from 'vue';

const testimonials = ref([
  { text: 'Estou muito satisfeito com o atendimento que recebi na Clínica Mentalis. Os médicos são extremamente competentes e atenciosos.', author: 'João Silva' },
  { text: 'Recomendo a Clínica Mentalis a todos que buscam um serviço médico de qualidade e confiança.', author: 'Maria Santos' }
]);
</script>

<style scoped>
</style>