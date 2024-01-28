import { defineStore } from 'pinia'

export const useGlobalStore = defineStore('global', {
  state: () => ({
    name: 's',
    number: 1,
  }),

  actions: {
    crisNumber() {
      this.number++
    },
  },

  getters: {
    count(state) {
      return state.number * 2
    },
  },
})
