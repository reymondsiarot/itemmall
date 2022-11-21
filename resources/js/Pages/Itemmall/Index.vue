<template>
  <div class="itemmall-container">
    <div class="itemmall-header">
      <AddItem v-if="user.grade == 250"></AddItem>
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
  computed: {
    user() {
      return this.$page.props.auth.user;
    },
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
