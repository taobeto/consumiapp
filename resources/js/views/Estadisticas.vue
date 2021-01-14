<template>
    <div>
        <div class="row">
            <div class="col-6 mt-3">
                <canvas id="vehiculos" width="400" height="100"></canvas>                        
            </div>
            <div class="col-6 mt-3">
		        <canvas id="vatios" width="400" height="100"></canvas>
            </div>
            <div class="col-6 mt-5">
		        <canvas id="horas" width="400" height="100"></canvas>
            </div>
            <div class="col-6 mt-5">
		        <canvas id="ventas" width="400" height="100"></canvas>
            </div>

	    </div>
    </div>
</template>

<script>

var Chart = require('chart.js');
export default {
    name: 'estadisticas',
    data(){
        return{
            'vatios': [],
            'tiempo': [],
            'conteoTiempo': 0,
            'conteoVatios': 0,
            'contadores' : 0
        }
    },
    methods:{
        contador(){
            
            this.contadores++
            if(this.contadores % 7 === 0){
                this.conteoVatios = this.conteoVatios
            }else if(this.contadores % 3 === 0 && this.contadores % 2 === 0){
                this.conteoVatios = this.conteoVatios
            }
            else if(this.contadores % 4 === 0){
                this.conteoVatios += 0.1*this.contadores
            }
            else if(this.contadores % 6 === 0){
                this.conteoVatios += 0.3*this.contadores
            }else{
                this.conteoVatios += 0.2
            }
            
            this.vatios.push(this.conteoVatios)
            var stackedLine = new Chart(ventas, {
                 type: 'line',
                data: {
                        labels: this.tiempo,
                        datasets: [{
                            label: 'Consumo Por estaciones',
                            data: this.vatios,
                            backgroundColor: [
                                'rgba(255, 99, 132, 0.2)',
                                'rgba(54, 162, 235, 0.2)',
                                'rgba(255, 206, 86, 0.2)',

                            ],
                            borderColor: [
                                'rgba(255, 99, 132, 2)',
                                'rgba(54, 162, 235, 2)',
                                'rgba(255, 206, 86, 2)',
                            ],
                            borderWidth: 1
                        }]
                }
            });
        }
    },
    mounted(){
        for (let index = 0; index < 100; index++) {
            this.tiempo.push(index)
        }
      setInterval(this.contador,1000);
      var vehiculo = document.getElementById('vehiculos').getContext('2d');
      var vatios = document.getElementById('vatios').getContext('2d');
      var horas = document.getElementById('horas').getContext('2d');
      
      var vehiculosGrap = new Chart(vehiculo, {
          type: 'bar',
          data: {
              labels: ['Renault', 'nissan', 'bmw', 'tesla', 'mercedes-benz', 'Toyota'],
              datasets: [{
                  label: 'Vehiculos por marca',
                  data: [12, 19, 3, 5, 2, 3],
                  backgroundColor: [
                      'rgba(255, 99, 132, 0.2)',
                      'rgba(54, 162, 235, 0.2)',
                      'rgba(255, 206, 86, 0.2)',
                      'rgba(75, 192, 192, 0.2)',
                      'rgba(153, 102, 255, 0.2)',
                      'rgba(255, 159, 64, 0.2)'
                  ],
                  borderColor: [
                      'rgba(255, 99, 132, 1)',
                      'rgba(54, 162, 235, 1)',
                      'rgba(255, 206, 86, 1)',
                      'rgba(75, 192, 192, 1)',
                      'rgba(153, 102, 255, 1)',
                      'rgba(255, 159, 64, 1)'
                  ],
                  borderWidth: 1
              }]
          },
          options: {
              scales: {
                  yAxes: [{
                      ticks: {
                          beginAtZero: true
                      }
                  }]
              }
          }
      });

       var vatiosGrap = new Chart(vatios, {
          type: 'bar',
          data: {
              labels: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo','Junio', 'Julio','Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre',],
              datasets: [{
                  label: 'Consumo total por mes KWh',
                  data: [1200, 1900, 3000, 5000, 2000, 30000, 30000, 30000, 30000, 30000, 30000, 30000],
                  backgroundColor: [
                      'rgba(255, 99, 132, 0.2)',
                      'rgba(54, 162, 235, 0.2)',
                      'rgba(255, 206, 86, 0.2)',
                      'rgba(75, 192, 192, 0.2)',
                      'rgba(153, 102, 255, 0.2)',
                      'rgba(255, 159, 64, 0.2)',
                      'rgba(255, 99, 132, 0.2)',
                      'rgba(54, 162, 235, 0.2)',
                      'rgba(255, 206, 86, 0.2)',
                      'rgba(75, 192, 192, 0.2)',
                      'rgba(153, 102, 255, 0.2)',
                      'rgba(255, 159, 64, 0.2)'
                  ],
                  borderColor: [
                      'rgba(255, 99, 132, 2)',
                      'rgba(54, 162, 235, 2)',
                      'rgba(255, 206, 86, 2)',
                      'rgba(75, 192, 192, 2)',
                      'rgba(153, 102, 255, 2)',
                      'rgba(255, 159, 64, 2)',
                      'rgba(255, 99, 132, 2)',
                      'rgba(54, 162, 235, 2)',
                      'rgba(255, 206, 86, 2)',
                      'rgba(75, 192, 192, 2)',
                      'rgba(153, 102, 255, 2)',
                      'rgba(255, 159, 64, 2)'
                  ],
                  borderWidth: 1
              }]
          },
          options: {
              scales: {
                  yAxes: [{
                      ticks: {
                          beginAtZero: true
                      }
                  }]
              }
          }
      });

    var estacionesGrap = new Chart(horas, {
        type: 'doughnut',  
        data: {
            labels: ['Mall Plaza', 'Enea', 'EStacion Uribe'],
            datasets: [{
                label: 'Consumo Por estaciones',
                data: [50, 19, 5],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',

                ],
                borderColor: [
                    'rgba(255, 99, 132, 2)',
                    'rgba(54, 162, 235, 2)',
                    'rgba(255, 206, 86, 2)',
                ],
                borderWidth: 1
            }]
        },
         
      });

   
    }
}
</script>

<style>

</style>