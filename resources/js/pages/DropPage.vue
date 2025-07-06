<template>
  <form class="p-4 space-y-2" @submit.prevent="submit">
    <input v-model="title" type="text" placeholder="Titre" class="w-full border" />
    <textarea v-model="message" placeholder="Message" class="w-full border"></textarea>
    <select v-model="mood" class="w-full border">
      <option value="1">😊 Joyeux</option>
      <option value="2">😢 Triste</option>
    </select>
    <button class="bg-blue-600 text-white px-4 py-2">Déposer</button>
  </form>
</template>

<script setup>
import { ref } from 'vue';
import axios from 'axios';

const title = ref('');
const message = ref('');
const mood = ref('1');

const submit = async () => {
  await axios.post('/api/drops', {
    title: title.value,
    message: message.value,
    mood_id: mood.value,
  });
  window.location.href = '/map';
};
</script>
