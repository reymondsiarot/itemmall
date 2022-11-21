<template>
  <table cellpadding="0" cellspacing="0" width="100%">
    <tbody>
      <tr>

        <!-- Left wrapper Start -->
        <td valign="top" id="left_wrapper" style="width:100%;background: none;">

          <div class="header">
            <h2>
              <div style="margin-top:3px">REGISTER</div>
            </h2>
          </div>

          <form class="login-wrapper" @submit.prevent="onRegister">
            <div class="login-container">
              <div class="input-container">
                <label for="username">Username:</label>
                <v-text-field width="100%" density="compact" variant="solo" single-line hide-details type="text" v-model="register.username" />
              </div>
              <div class="input-container">
                <label for="password">Password:</label>
                <v-text-field density="compact" variant="solo" single-line hide-details type="password" v-model="register.password" />
              </div>

              <div class="input-container">
                <label for="password">Confirm Password:</label>
                <v-text-field density="compact" variant="solo" single-line hide-details type="password" v-model="register.password_confirmation" />
              </div>

              <div class="input-container">
                <button type="submit" class="read_more2" style="width:100%">Register</button>
              </div>

              <div class="input-container">
                <span class="register-label"> Already have an account? <a href="/login">Login</a></span>
              </div>

            </div>
          </form>

        </td>
        <!-- Left wrapper end -->

      </tr>
    </tbody>
  </table>
</template>

  <script>
import AppLayoutVue from "../../Layouts/AppLayout.vue";
export default {
  layout: AppLayoutVue,
  data() {
    return {
      register: {
        username: "",
        password: "",
        password_confirmation: "",
      },
    };
  },
  methods: {
    async onRegister() {
      try {
        const response = await axios.post("/register", this.register);
        if (response.data && response.data.success) {
          return location.reload();
        }
      } catch (err) {
        console.log(err);
      }
    },
  },
};
</script>


  <style scoped >
.flex label {
  display: flex;
  align-items: center;
}
.login-wrapper {
  height: 400px;
}
.login-container {
  max-width: 300px;
  margin-left: auto;
  margin-right: auto;
  margin-bottom: 40px;
  margin-top: 20px;
}

.login-container label {
  color: #ddd;
}
.input-container .register-label a {
  color: #ff4927;
}
.input-container .register-label {
  color: #ddd;
}
.login-container > * + * {
  margin-top: 20px;
}

.read_more2 {
  color: white;
}
</style>
