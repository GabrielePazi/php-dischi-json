"use strict"

const app = Vue.createApp({
  data() {
    return {
      albums: []
    }
  },
  mounted() {
    axios.get("./api/posts.php").then((response) => {
      this.albums = response.data;
      console.log("Ho trovato: ", this.albums);
    })
  }
}).mount('#app')
