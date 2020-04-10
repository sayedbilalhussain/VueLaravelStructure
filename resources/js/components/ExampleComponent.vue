<template>
 <div>
    <v-container>
        <v-alert type="info">I'm Vuetify Alert</v-alert>
        <v-btn link to="/foo">btn foo</v-btn>
        <v-btn link to="/bar">btn bar</v-btn>
    </v-container>
    <v-content>
        <router-view></router-view>
    </v-content>
 </div>
    
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
