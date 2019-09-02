<template>
 <div>
    <v-toolbar>
      <v-toolbar-title>Title</v-toolbar-title>

      <div class="flex-grow-1"></div>

      <div>
        <router-link to="/forum"><v-btn text>Forum</v-btn></router-link>
        <router-link to="/login"><v-btn text>Ask Question</v-btn></router-link>
        <router-link to="/login"><v-btn text>Category</v-btn></router-link>
        <router-link to="/login"><v-btn text>Login</v-btn></router-link>
      </div>
     
    </v-toolbar>

  </div>

</template>

<script>
    export default{
        
    }
</script>

<style>

</style>