<template>
  <div class="container-fluid">
    <div class="row">
      <nav class=" col-md-2 d-none d-md-block d-md-block bg-light sidebar">
        <div class="sidebar-sticky">
          <ul class="nav">
            <li class="nav-item col-md-12">
              <a class="nav-link" href="#" style="color:black;font-size:16px">
                <b>Dashboard</b>
              </a>
            </li>
              <li class="nav-item col-12" v-for="(menu, index) in menus" :key="index">
                <a class="nav-link" href="#" style="color:black;font-size:15px">
                  <b>
                    <span style="color:#A4A4A4;">
                      <router-link :to="menu.ruta">{{ menu.nombre }}</router-link>
                    </span>
                  </b>
                </a>
              </li>
          </ul>
        </div>
      </nav>
      <main role="main" class="col-md-9 col-12 col-lg-10 px-4">
        <div class="chartjs-size-monitor" style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;">
          <div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
            <div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div>
          </div>
          <div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
            <div style="position:absolute;width:200%;height:200%;left:0; top:0"></div>
          </div>
        </div>
          <div style="background: white; width:100%; height:100%; padding: 20px 10px 10px 10px">
            <transition name="slide-fade" mode="out-in">
              <router-view></router-view>
            </transition>
          </div>
      </main>
    </div>
  </div>
</template>

<script>

export default {
    name: 'admin-component',
    data(){
      return{
        menus:[
          {'nombre':'Electrolineras', 'ruta':'/electrolineras' },
          // {'nombre':'Personal', 'ruta':'/personal' },
          {'nombre':'Mantenimientos', 'ruta':'/mantenimientos' },
          {'nombre':'Estadisticas', 'ruta':'/estadisticas' },
        ]
      }
    }   
}
</script>

<style>
  .router-link-active, a{
    color:black !important
  }
</style>