<template>
    <div>
      <main>
        <div class="container-fluid col-12">
          <div class="row d-flex">
            <div class="frame-border col-2">
              <div class="frame w-100 h-100"></div>
            </div>

            <!-- centrale container -->
            <div class="container col-8">
              <div class="central-box row p-4 d-flex justify-content-center flex-wrap">
                <the-game-card v-for="game in games" :key="game.id" :game="game" /> 
              </div>
            </div>

            <div class="frame-border col-2">
              <div class="frame w-100 h-100"></div>
            </div>
            
          </div>
        </div>
      </main>
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