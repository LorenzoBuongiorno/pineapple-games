<template>
    <div>
        <h1>vue home</h1>
        <div class="container col-11">
          <div class="row d-flex justify-content-center flex-wrap">
            <the-game-card v-for="game in games" :key="game.id" :game="game" /> 
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