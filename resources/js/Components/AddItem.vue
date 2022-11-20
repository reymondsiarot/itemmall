<template>
  <div class="additem-container">
    <v-dialog v-model="dialog" width="700">
      <template v-slot:activator="{ props }">

        <button type="submit" v-bind="props" class="read_more2" style="width:100%">Add Item</button>
      </template>

      <v-card dark>

        <v-card-title>
          Add Item
        </v-card-title>
        <v-card-actions>
          <button type="submit" v-bind="props" class="read_more2 addbtn">Add</button>
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
.addbtn {
  width: 100px;
  color: white;
}
</style>
