<script setup lang="ts">
const route = useRoute()

const stores = setupStore(['holiday'])
stores.holiday.fetchHoliday(`${route.params.id}`)
</script>

<template>
  <section>
    {{ stores.holiday.holiday?.id }}
  </section>
</template>

<style scoped lang="scss">
</style>
