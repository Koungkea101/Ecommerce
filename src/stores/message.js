import { ref, computed } from 'vue'
import { defineStore } from 'pinia'

export const useCounterStore = defineStore('counter', () => {
  const count = ref(0)
  const doubleCount = computed(() => count.value * 2)
  function increment() {
    count.value++
  }

  return { count, doubleCount, increment }
})
export const useMessageStore = defineStore('message', () => {
  const message = ref('')
  const page = ref()

  function setMessage(newMessage) {
    message.value = newMessage
  }
  
  function setPage(newPage) {
    page.value = newPage
  }
  function getPage() {
    return page.value
  }

  return {
    message,
    page,
    setMessage,
    setPage,
    getPage
  }
})
