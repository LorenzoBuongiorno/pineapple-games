<template>

    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-10 text-center p-2">
        <div class="position-relative">
            <router-link :to="{ name:'games.show', params: { game: game.id } }" class="position-absolute w-100 h-100 d-block"></router-link>
            <div class="card-game overflow-hidden">
                <img :src="game.assets" class="img-fluid" :alt="game.title">
            </div>
            <div class="p-2">
                <div class="">{{game.title}}</div>
                <div class="">{{game.company}}</div>
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