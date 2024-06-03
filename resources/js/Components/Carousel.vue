<template>
  <div class="swiper-container image-carousel overflow-x-hidden">
    <div class="swiper-wrapper">
      <div class="swiper-slide" v-for="(slide, index) in slides" :key="index">
        <img :src="slide.image" class="block w-full h-80 object-cover" :alt="'Slide ' + (index + 1)">
      </div>
    </div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
  </div>
</template>

<script setup>
import { ref } from 'vue';

const slides = ref([
  { image: 'https://cpage.sfsu.edu/sites/default/files/images/schoolpsych-1920x800.jpg' },
  { image: 'https://whitmanjobs.com/wp-content/uploads/2023/07/informational-interview-request-1920x600.jpg' },
  { image: 'https://cdn.phenompeople.com/CareerConnectResources/UNHEUS/images/InterviewTips-Hero-1653046719251.jpg' }
]);
</script>

<style scoped>
</style>