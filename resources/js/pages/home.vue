<template>
    <div>
        <div class="container-fluid col-12">
          <div class="row d-flex">
            <div class="frame-border col-xl-2 col-lg-1 col-md-1 col-sm-0">
              <div class="frame w-100 h-100"></div>
            </div>

            <!-- centrale container -->
            <div class="container col-xl-8 col-10">
              <div class="central-box row p-4 d-flex justify-content-center flex-wrap">
              <h1 class="show-title fw-bold mb-2">Popular 50 Games</h1>
                <the-game-card v-for="game in games" :key="game.id" :game="game" /> 
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
import axios from "axios";
import TheGameCard from "../components/TheGameCard.vue";

export default {
    components: { 
    TheGameCard
  }, 
  data() {
    return {
      games: [],
    };
  },
  mounted() {
    axios.get("/api/games").then((resp) => {
      this.games = resp.data;
    });
  },
}
</script>

<style lang="sass" scoped>

</style>