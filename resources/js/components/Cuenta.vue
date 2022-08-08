<template>
  <h1>Cuenta: {{ cuenta }}</h1>
  <h2>Saldo: {{ saldo }}</h2>
  <h2>Estado: {{ estado ? 'Activa' : 'Desactivada' }}</h2>
  <div v-for="(servicio, index) in servicios" :key="index">
   {{ index + 1 }} {{ servicio }}
  </div>
  <AccionSaldo 
    texto="Aumenta Saldo (100)" 
    @accion="aumentar"
   />
  <AccionSaldo 
    texto="Disminuye Saldo (100)" 
    @accion="disminuir"
    :desactivar="desactivar"
   />
</template>

<script>
import AccionSaldo from './AccionSaldo.vue'

export default {
    components: {
        AccionSaldo
    },
    data() {
        return {
            saldo: 1000,
            cuenta: 'cta. corriente',
            estado: true,
            servicios: ['giro', 'cargo', 'abono', 'transferencia'],
            desactivar: false
        }
    },
    methods: {
        aumentar() {
            this.saldo += 100
            this.desactivar = false
        },
        disminuir() {
            if (this.saldo === 0) {
                this.desactivar = true
                alert('Ya no hay más saldo')                
            }else {
            this.saldo -= 100
        }
      }
    }
}

</script>

<style>

</style>