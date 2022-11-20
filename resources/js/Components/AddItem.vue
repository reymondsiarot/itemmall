<template>
  <div class="additem-container">
    <v-dialog v-model="dialog" width="700">
      <template v-slot:activator="{ props }">

        <button type="submit" v-bind="props" class="read_more2" style="width:100%">Add Item</button>
      </template>

      <v-card>
        <v-card-text>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
        </v-card-text>
        <v-card-actions>
          <v-btn color="primary" block @click="dialog = false">Close Dialog</v-btn>
        </v-card-actions>
      </v-card>
    </v-dialog>
  </div>
</template>

<script>
export default {
  data() {
    return {
      dialog: false,
    };
  },
};
</script>

<style scoped>
.additem-container {
  margin: 10px;
}
.additem-container .read_more2 {
  color: white;
  padding: 10px 20px;
}
</style>
