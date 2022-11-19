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

          <div class="login-wrapper">
            <div class="login-container">
              <div class="input-container">
                <label for="username">Username:</label>
                <input type="text" />
              </div>
              <div class="input-container">
                <label for="password">Password:</label>
                <input type="password" />
              </div>

              <div class="input-container">
                <label for="password">Confirm Password:</label>
                <input type="password" />
              </div>

              <div class="input-container">
                <input type="submit" value="Register" class="read_more2" style="width:100%">
              </div>

              <div class="input-container">
                <span class="register-label"> Already have an account? <a href="/login">Login</a></span>
              </div>

            </div>
          </div>

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
};
</script>


  <style scoped >
.flex label {
  display: flex;
  align-items: center;
}
.login-wrapper {
  display: flex;
  justify-content: center;
}
.login-container {
  max-width: 500px;
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
</style>
