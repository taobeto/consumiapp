<template>
  <div class="container">
      <div class="card">
        <div class="card-header">
            Administrar Electrolineras
        </div>
        <div class="card-body">
            <button class="btn btn-outline-success" @click="administrar('crear')">Crear</button>
            <div class="row justify-content-center">
                <div class="col-8 " v-show="crear">
                    <form class="mt-3">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nombre</label>
                            <input type="text" class="form-control"  v-model="electrolinera.nombre" aria-describedby="emailHelp">
                            <small id="emailHelp" class="form-text text-muted">dirección física del la electrolinera.</small>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Coordenadas geográficas</label>
                            <input type="text" class="form-control"  v-model="electrolinera.coordenadas" aria-describedby="emailHelp">
                            <small id="emailHelp" class="form-text text-muted">Coordenadas ejemplo: 5.0686966,-75.5187484.</small>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Capacidad</label>
                            <input type="text" class="form-control"  v-model="electrolinera.capacidad" aria-describedby="emailHelp">
                            <small id="emailHelp" class="form-text text-muted">dirección física del la electrolinera.</small>
                        </div>
                        <button @click="crearElectrolinera()" class="btn btn-outline-primary btn-block">Enviar</button>
                    </form>
                </div>
                <div class="col-12">
                    <table class="table mt-3">
                        <thead>
                            <th class="text-center">Id</th>
                            <th class="text-center">Nombre</th>
                            <th class="text-center">Coordenadas</th>
                            <th class="text-center">Capacidad vehículos</th>
                            <th class="text-center">Estado</th>
                            <th class="text-center">Editar</th>
                            <th class="text-center">Eliminar</th>
                        </thead>
                        <tbody>
                            <tr v-for="(electrolinera, index) in electrolineras" :key="index">
                                <td class="text-center">{{electrolinera.id}}</td>
                                <td class="text-center">{{electrolinera.nombre}}</td>
                                <td class="text-center">{{electrolinera.coordenadas}}</td>
                                <td class="text-center">{{electrolinera.capacidad}}</td>
                                <td class="text-center">{{electrolinera.estado_id}}</td>
                                <td class="text-center">
                                    <button class="btn btn-outline-info">Editar</button>
                                </td>
                                <td class="text-center">
                                    <button class="btn btn-outline-danger">Eliminar</button>
                                </td>
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
    name: 'electrolineras',
    data(){
        return{
            crear: false,
            ver: false,
            electrolineras: [],
            electrolinera:{
                nombre: '',
                cooredanasa: '',
                capacidad: '',
            }
        }
    },
    mounted(){
        axios.get('/listar-electrolineras')
        .then( resp => {
            this.ver = true
            if( resp.status === 200){
                this.electrolineras = resp.data
            }
        })
    },
    methods:{
        administrar(data){
            if(data === 'crear'){
                this.crear = true
                this.ver = false
            }else{
                this.crear = false
                this.ver = true
                this.listar()
            }
        },
        crearElectrolinera(){
            axios.post('/crear-electrolinera', this.electrolinera)
            .then( resp => {
                if( resp.status === 200){
                    alert('electrolinera creada')
                    this.crear = false
                    this.listar()
                }
            })
        },
    }
}
</script>

<style>

</style>