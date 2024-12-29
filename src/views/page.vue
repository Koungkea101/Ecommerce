<template>
  <div class="pageContainer">
    <h1>Welcome to Page {{ this.$route.params.nb }}</h1>
    
    <span style="color: black; font-size: 35px;">-------------------------------------------------------------------------------</span>
    <router-view />
    <div v-if="message !== ''" style="color: black; font-size: 30px;" class="messageDiv">
      Message from Page {{messagePageNb}}: {{ message }}
    </div>
    <div style="color: black; font-size: 30px; padding-top: 20px;">
      Input message:
      <input v-model="inputMessage" type="text" style="width: 300px; height: 75px; padding: 10px; font-size: 30px;"/>
      <button @click="sendMessage" style="width: 200px; height: 50px; font-size: large; margin-left: 20px;">Send Message</button>
    </div>
  </div>
</template>


<style>
.pageContainer {
  width: 100%;
  height: 100%;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
}

h1 {
  color: black;
  font-size: 25px;
}
</style>
<script>
import { ref, computed, onMounted } from 'vue'
import { useMessageStore } from '../stores/message'
import { useRoute } from 'vue-router'

export default {
  setup() {
    const store = useMessageStore();

    const route = useRoute()
    const currentpageNb = computed(() => route.params.nb)
    const pageNb = computed(() => route.params.nb)

    const message = computed(() => store.message)
    const messagePageNb = computed(() => store.page)

    console.log(messagePageNb.value)

    
    const inputMessage = ref('');

    const sendMessage = () => {
      store.setMessage(inputMessage.value);
      store.setPage(currentpageNb.value);
      inputMessage.value = '';
    };

    return {
      pageNb,
      message,
      inputMessage,
      sendMessage,
      messagePageNb
    }
  }
};
</script>
