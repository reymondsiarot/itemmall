<template>
  <div class="itemmall-container">
    <div class="itemmall-header">
      <AddItem></AddItem>
    </div>
  </div>
</template>

<script>
import AppLayoutVue from "../../Layouts/AppLayout.vue";
import AddItem from "../../Components/AddItem.vue";
export default {
  layout: AppLayoutVue,
  components: {
    AddItem,
  },
};
</script>

<style scoped>
.itemmall-container {
  height: 100vh;
}
.itemmall-header {
  display: flex;
}
</style>
