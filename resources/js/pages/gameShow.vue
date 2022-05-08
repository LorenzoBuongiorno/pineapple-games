<template>
  <div>
      <h1>show</h1>
      <router-link class="btn btn-success" :to="{ name:'homepage'}">homepage</router-link>
      <div>{{game.title}}</div>
       <iframe :src="'https://html5.gamedistribution.com/' + game.md5 + '/'" width="800" height="516" frameborder="no" scrolling="no"></iframe>
      
  </div>
</template>

<script>
export default {
  data() {
        return {
            game: {}
        }
    },
  methods: {
      async fetchDoctor() {
        const resp = await axios.get("/api/games/" + this.$route.params.game);
        
      this.game = resp.data;
    },
  },
  mounted() {
    console.log(this.$route.params.game);
    this.fetchDoctor();
  },

}
</script>

<style lang="scss" scoped>

</style>