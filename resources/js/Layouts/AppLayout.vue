<template>

  <!--********************************************* Main wrapper Start *********************************************-->
  <div id="footer_image">
    <div id="main_wrapper">

      <!--********************************************* Logo Start *********************************************-->
      <div id="logo"> <a href="#"><img alt="alt_example" src="images/logo.png" /></a>
        <div id="social_ctn"> <a href="#" id="facebook"><img alt="alt_example" src="images/blank.gif" width="100%" height="27px" /></a> <a href="#" id="rss"><img alt="alt_example" src="images/blank.gif" width="100%" height="27px" /></a> <a href="#" id="twitter"><img alt="alt_example" src="images/blank.gif" width="100%" height="27px" /></a> </div>
      </div>
      <!--********************************************* Logo end *********************************************-->

      <!--********************************************* Main_in Start *********************************************-->
      <div id="main_in">

        <!--********************************************* Mainmenu Start *********************************************-->
        <div id="menu_wrapper">
          <div id="menu_left"></div>
          <ul id="menu" style="position:relative">
            <li><a href="/">Home</a></li>
            <li><a href="/itemmall">Item Mall</a></li>
            <li v-if="user && user.grade == 250"> <a href="/user/management">User Management</a></li>
            <li class="sign-up-tab" v-if="!user">
              <a href="/login">Login</a>
              <a href="/register">Register</a>
            </li>
            <li v-else class="sign-up-tab">

              <v-menu>
                <template v-slot:activator="{ props }">

                  <a href="#" v-bind="props">{{ user.login_id }}</a>

                </template>
                <div class="menu-container">
                  <div>
                    <div class="menu-item" @click="logout">Logout</div>
                  </div>
                </div>
              </v-menu>

            </li>

          </ul>
          <div id="menu_right">

          </div>
        </div>

        <!--********************************************* Mainmenu end *********************************************-->

        <slot></slot>
        <div class="top_shadow"></div>

        <div id="hot_news">
          <div class="header">
          </div>
        </div>

      </div>
      <!--********************************************* Main_in end *********************************************-->

    </div>
  </div>

</template>

<script>
export default {
  computed: {
    user() {
      return this.$page.props.auth.user;
    },
  },
  methods: {
    async logout() {
      try {
        const response = await axios.post("logout");
        if (response.data.success) {
          location.reload();
        }
      } catch (er) {}
    },
  },
};
</script>
<style scoped>
#menu_wrapper {
  display: flex;
}
#menu {
  display: flex;
  float: none;
}
.sign-up-tab {
  position: absolute;
  display: flex;
  right: 0;
}
ul#menu li a {
  height: 56px;
}
.menu-container {
  background: #2f2e2c;
  border-radius: 8px;
  overflow: hidden;
  padding-top: 5px;
  padding-bottom: 5px;
  margin-left: -20px;
  margin-top: 5px;
}
.menu-container .menu-item {
  padding: 10px 30px;
  color: #fff;
  font-size: 14px;
}
.menu-container .menu-item:hover {
  background: #605e59;
  color: #fff;
  cursor: pointer;
}
</style>

<style>
input:hover,
textarea:hover,
select:active {
  border: transparent;
}
</style>
