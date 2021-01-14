<template>
  <div class="container">
      <div class="card">
        <div class="card-header">
            Control de Mantenimientos
        </div>
        <div class="card-body">
            <button class="btn btn-outline-success" @click="crear = !crear">Crear</button>
            <button class="btn btn-outline-info" @click="crear = !crear">Descargar historico</button>
            <div class="row justify-content-center">
                <div class="col-8 " v-show="crear">
                    <form class="mt-3">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Tipo de mantenimiento</label>
                            <input type="text" class="form-control"  v-model="mantenimiento.tipo" aria-describedby="emailHelp">
                            <small id="emailHelp" class="form-text text-muted">dirección física del la electrolinera.</small>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Electrolinera</label>
                            <input type="text" class="form-control"  v-model="mantenimiento.electrolinera" aria-describedby="emailHelp">
                            <small id="emailHelp" class="form-text text-muted">Coordenadas ejemplo: 5.0686966,-75.5187484.</small>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Fecha</label>
                            <input type="date" class="form-control"  v-model="mantenimiento.fecha" aria-describedby="emailHelp">
                            <small id="emailHelp" class="form-text text-muted">dirección física del la electrolinera.</small>
                        </div>
                        <button @click="crearMantenimiento()" class="btn btn-outline-primary btn-block">Enviar</button>
                    </form>
                </div>
                <div class="col-12 mt-5">
                    <h3>Mantenimientos pendientes</h3>
                    <table class="table mt-3">
                        <thead>
                            <th class="text-center">Id</th>
                            <th class="text-center">Electrolinera</th>
                            <th class="text-center">Coordenadas</th>
                            <th class="text-center">Fecha Programada</th>
                            <th class="text-center">Reporte</th>
                            <th class="text-center">Tipo de mantenimiento</th>
                        </thead>
                        <tbody>
                            <tr v-for="(item, index) in mantenimientos" :key="index">
                                <td class="text-center">{{item.id}}</td>
                                <td class="text-center">{{item.nombre}}</td>
                                <td class="text-center">{{item.coordenadas}}</td>
                                <td class="text-center">{{item.fecha}}</td>
                                <td class="text-center">{{item.reporte}}</td>
                                <td class="text-center">{{item.tipo}}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
        </div>
  </div>
</template>

<script>
export default {
    name: 'mantenimientos',
    data(){
      return{
        'crear': false,
        'mantenimientos': [
          {
            'id' : 1,
            'nombre' : 'Mall plaza',
            'coordenadas' : '65000, -755200',
            'fecha' : '21-12-2020',
            'reporte' : 'mantenimiento anual',
            'tipo' : 'Preventivo'
          }
        ],
        'mantenimiento' : {
          'fecha':'',
          'electrolinera':'',
          'tipo':'',
        }
      }
    },
    methods: {
      crearMantenimiento(){

      }
    }
}
</script>

<style>

</style>