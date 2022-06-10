<template>
  <div class="fixed-top">
    <nav>
      <div class="d-flex align-items-center justify-content-between ms-3 me-3">
        <router-link :to="{ name:'homepage'}">
          <div class="d-flex">
            <img src="img/pineapple-games.svg" alt="">
            <div class="logo-title">Pineapple Games</div>
          </div>
        </router-link>
        <div>
            <router-link class="home-button me-3" :to="{ name:'welcome'}">HOME</router-link>
            <router-link class="home-button me-3" :to="{ name:'games'}">GAMES</router-link>
        </div>
        </div>
    </nav>
  </div>
</template>

<script>
export default {

}
</script>

<style>

</style>