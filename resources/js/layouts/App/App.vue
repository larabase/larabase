<template>
  <main id="main-wrapper" class="main-wrapper">
    <Header />

    <Sidebar />

    <div id="app-content">
      <slot />
    </div>
  </main>
</template>

<script setup lang="ts">
import Sidebar from "./Sidebar.vue";
import Header from "./Header.vue";
</script>
