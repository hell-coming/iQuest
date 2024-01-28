<script setup lang="ts">
import { useTest } from '#/composable/useTest'

const { globalStore } = useTest()
</script>

<template>
  <h1>Первая страница</h1>
  <div>{{ globalStore.name }}</div>
  <div>{{ globalStore.number }}</div>
  <div>{{ globalStore.count }}</div>
  <button @click="globalStore.crisNumber">
    Click
  </button>
</template>

<style scoped lang="scss">

</style>
