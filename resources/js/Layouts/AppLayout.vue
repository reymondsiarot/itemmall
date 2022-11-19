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
            <li class="sign-up-tab">
              <a href="/login">Login</a>
              <a href="/register">Register</a>
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
</style>
