<template>
  <div>
    <div class="container-fluid col-12">
          <div class="row d-flex">
            <div class="frame-border col-xl-2 col-lg-1 col-md-1 col-sm-0">
              <div class="frame w-100 h-100"></div>
            </div>

            <!-- centrale container -->
            <div class="container col-xl-8 col-10">
              <div class="central-box row p-4 d-flex justify-content-center flex-column">
              
                <h1 class="show-title fw-bold mb-2">{{game.title}}</h1>
                <div class="centrale-frame-external p-2">
                  <iframe class="centrale-frame-internal m-0 col-12" :src="'https://html5.gamedistribution.com/' + game.md5 + '/'" height="900" frameborder="no" scrolling="no"></iframe>
                </div>
                
              </div>
            </div>

            <div class="frame-border col-xl-2 col-lg-1 col-md-1 col-sm-0">
              <div class="frame w-100 h-100"></div>
            </div>

          </div>
        </div>

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