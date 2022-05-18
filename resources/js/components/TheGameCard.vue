<template>

    <div class="text-center p-2 col-xxl-3 col-xl-3 col-lg-4 col-md-10 col-10">
        <div class="position-relative game-card-bg h-100 p-2">
            <router-link :to="{ name:'games.show', params: { game: game.id } }" class="position-absolute w-100 h-100 d-block"></router-link>
            <div class="overflow-hidden game-card-image">
                <img :src="game.assets" class="w-100" :alt="game.title">
            </div>
            <div class="p-2">
                <div class="game-title fw-bolder fs-5">{{game.title}}</div>
                <div class="game-company fs-6">{{game.company}}</div>
            </div>
        </div>
  </div>
</template>

<script>
export default {
    props: {
    game: Object,
  },
  methods: {
      
  }

}
</script>

<style lang="scss" scoped>
    a{
        z-index: 5;
        cursor: pointer;
    }
    .card-game{
        height: 120px;
    }
</style>