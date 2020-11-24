<template>
  <div id="app">
    <div>
    <navigation></navigation>

    <div class="main">
      <router-view />
    </div>

    <custom-footer></custom-footer>
    </div>
  </div>
</template>

<script>
import navigation from './main/navigation';
import customFooter from './main/customFooter';
export default {
  name: 'Index',
    components: {
      navigation,
      customFooter
    }
  }
</script>

<style type="text/css">

</style>