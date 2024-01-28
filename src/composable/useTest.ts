import { useGlobalStore } from '#/stores/global.store'

function useTest() {
  const globalStore = useGlobalStore()

  return { globalStore }
}

export { useTest }
