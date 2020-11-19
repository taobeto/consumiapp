<template>
  <div class="container">
      <div class="card">
        <div class="card-header">
            Administrar Electrolineras
        </div>
        <div class="card-body">
            <button class="btn btn-outline-success" @click="administrar('crear')">Crear</button>
            <button class="btn btn-outline-primary" @click="administrar('listar')">Listar</button>
            <div class="row">
                <div class="col-8 " v-show="crear">
                    <form class="mt-3">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Direccion</label>
                            <input type="text" class="form-control"  v-model="electrolinera.direccion" aria-describedby="emailHelp">
                            <small id="emailHelp" class="form-text text-muted">dirección física del la electrolinera.</small>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">cordenadas</label>
                            <input type="text" class="form-control"  v-model="electrolinera.cordenadas" aria-describedby="emailHelp">
                            <small id="emailHelp" class="form-text text-muted">Coodenadas ejemplo: 5.0686966,-75.5187484.</small>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Capacidad</label>
                            <input type="text" class="form-control"  v-model="electrolinera.capacidad" aria-describedby="emailHelp">
                            <small id="emailHelp" class="form-text text-muted">dirección física del la electrolinera.</small>
                        </div>
                        <button type="submit" class="btn btn-outline-primary btn-block">Enviar</button>
                    </form>
                </div>
                <div class="col-12" v-show="ver">
                    <table class="table mt-3">
                        <thead>
                            <th>nombre</th>
                        </thead>
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
            electrolinera:{
                direccion: '',
                ip: '',
            }
        }
    },
    methods:{
        administrar(data){
            if(data === 'crear'){
                this.crear = true
                this.ver = false
            }else{
                this.crear = false
                this.ver = true 
            }
        }
    }
}
</script>

<style>

</style>