<template>
  <div class="additem-container">

    <v-dialog v-model="dialog" width="700" persistent>
      <template v-slot:activator="{ props }">

        <button type="submit" v-bind="props" class="read_more2" style="width:100%">Add Item</button>
      </template>

      <v-card>

        <v-card-title>
          Add Item
        </v-card-title>

        <v-row class="additem-container">
          <v-col cols="12" sm="4" md="3" class="py-0">
            <v-text-field :rules="[rules.required]" label="Item Type" variant="outlined" density="compact"></v-text-field>
          </v-col>
          <v-col cols="12" sm="8" md="9" class="py-0">
            <v-text-field :rules="[rules.required]" label="Item Name" variant="outlined" density="compact"></v-text-field>
          </v-col>
          <v-col cols="12" sm="12" md="12" class="py-0">
            <v-select :rules="[rules.required]" variant="solo" label="Category" density="compact"></v-select>
          </v-col>
          <v-col cols="12" sm="4" md="3" class="py-0">
            <v-text-field :rules="[rules.required]" label="Item Price" variant="outlined" density="compact" type="number" max="25"></v-text-field>
          </v-col>
          <v-col cols="12" sm="4" md="3" class="py-0">
            <v-text-field :rules="[rules.required,rules.number0TO25]" label="Item Stack" variant="outlined" density="compact" type="number" max="25"></v-text-field>
          </v-col>
          <v-col cols="12" sm="4" md="3" class="py-0">
            <v-text-field :rules="[rules.required,rules.number0TO100]" label="Item Discount" variant="outlined" density="compact" type="number" max="25"></v-text-field>
          </v-col>
          <v-col cols="12">
            <v-textarea :rules="[rules.required]" label="Description" variant="outlined" density="compact"></v-textarea>
          </v-col>

          <v-col cols="12" sm="4" md="3" class="py-0">
            <v-text-field :rules="[rules.required]" label="Item Price" variant="outlined" density="compact" type="number" max="25"></v-text-field>
          </v-col>

        </v-row>

        <v-card-actions>
          <button type="submit" class="read_more2 addbtn">Add</button>
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
      rules: {
        required: (v) => !!v || "Field is required",
        number: (v) => !!v && typeof v === "number",
        number0TO25: (v) =>
          (!!v && Number(v) > 0 && Number(v) <= 25) ||
          "Number must be between 0 and 25",
        number0TO100: (v) =>
          (!!v && Number(v) > 0 && Number(v) <= 25) ||
          "Number must be between 0 and 100",
        number0TO250: (v) =>
          (!!v && Number(v) > 0 && Number(v) <= 25) ||
          "Number must be between 0 and 250",
      },
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
