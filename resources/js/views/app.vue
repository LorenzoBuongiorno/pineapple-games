<template>
    <div>
        <the-nav/>
        <main>
            <router-view></router-view>
        </main>
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