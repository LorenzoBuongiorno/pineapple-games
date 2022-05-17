<template>
    <div>
        <the-nav/>
        <router-view></router-view>
    </div>
</template>

<script>
import TheNav from "../components/TheNav.vue"
export default {
    components:{
        TheNav
    }
    
}
</script>

<style lang="scss" scoped>

</style>