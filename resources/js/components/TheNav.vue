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
          <router-link class="home-button" :to="{ name:'homepage'}">HOME</router-link>
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