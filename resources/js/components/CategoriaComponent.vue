<template>
    <div class="container mt-n5">
        <div class="card mb-4">
            <div class="card-header">Formulário</div>
            <div class="card-body">
                <form>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label class="small mb-1" >Nome</label>
                            <input class="form-control form-control-solid" v-model="categoria" type="text"  />
                        </div>
                    </div>
                    <!-- Save changes button-->
                    <button class="btn btn-primary" @click="submitCategoria()" type="button">Salvar</button>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
import axios from 'axios';
import swal from 'sweetalert2';
window.Swal = swal;
export default {
    data: () => {
        return {
            categoria: ''
        }
    },
    mounted() {
        console.log('Component mounted.')
    },
    submitCategoria(){
        const options = {
            url: 'http://localhost:8000/api/categorias',
            method: 'POST',
            headers: {
                'Accept': 'application/json',
                'Content-Type': 'application/json;charset=UTF-8'
            },
            data:{
                nome_categoria : this.categoria
            }
        };
        axios(options)
            .then(response => {
                if(response.status == 200 || response.status == 201){
                    Swal.fire({
                        icon: 'success',
                        title: 'Wow',
                        text: 'Adicionado com sucesso!',
                        showConfirmButton: true
                    }).then((result) => {
                        if (result.isConfirmed) {
                            window.location.href = 'http://localhost:8000/categoria/cadastro';
                        }
                    })
                }else{
                    Swal.fire("Ops!", "Retorno: "+response.statusText, "warning");
                }
            })
            .catch(error => {
                Swal.fire("Ops!", " " + error, "error" );
            });
    }
}
</script>
