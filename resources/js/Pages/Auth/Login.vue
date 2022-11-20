<template>
  <table cellpadding="0" cellspacing="0" width="100%">
    <tbody>
      <tr>

        <!-- Left wrapper Start -->
        <td id="left_wrapper" style="width:100%;background: none;">

          <div class="header">
            <h2>
              <div style="margin-top:3px">LOGIN</div>
            </h2>
          </div>

          <form class="login-wrapper" @submit.prevent="onLogin">
            <div class="login-container">
              <div class="input-container">
                <label for="username">Username:</label>
                <v-text-field width="100%" density="compact" variant="solo" single-line hide-details type="text" v-model="login.username" />
              </div>
              <div class="input-container">
                <label for="password">Password:</label>
                <v-text-field width="100%" density="compact" variant="solo" single-line hide-details type="password" v-model="login.password" />
              </div>

              <div class="input-container flex">
                <label for="rememberme">
                  <input type="checkbox" v-model="login.remember" id="rememberme" style="width: 20px; margin-top:;" />
                  <div> Remember me</div>
                </label>

              </div>

              <div class="input-container">
                <button type="submit" class="read_more2" style="width:100%">Login</button>
              </div>

              <div class="input-container">
                <span class="register-label"> Don't have an account? <a href="/register">Register</a></span>
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
      login: {
        username: "",
        password: "",
        remember: "",
      },
    };
  },
  methods: {
    async onLogin() {
      try {
        const { data } = await axios.post("/login", this.login);
        if (data.success) {
          location.reload();
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
