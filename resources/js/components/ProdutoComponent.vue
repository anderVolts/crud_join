<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card mb-4">
                    <div class="card-header"></div>
                    <div class="card-body">
                        <form>
                            <!-- Form Group (current password)-->
                            <div class="form-group">
                                <label class="small mb-1" >Categorias</label>
                                <select class="form-control form-control-solid" v-model="categoria">
                                    <option v-for="(cat, key) in options_categorias" :key="key" :value="cat.id_categoria_planejamento">{{ cat.nome_categoria }}</option>
                                </select>
                            </div>
                            <!-- Form Group (new password)-->
                            <div class="form-group">
                                <label class="small mb-1">Produto</label>
                                <input class="form-control" type="text" v-model="nome_produto">
                            </div>
                            <!-- Form Group (confirm password)-->
                            <div class="form-group">
                                <label class="small mb-1" >Valor</label>
                                    <money v-model="preco" v-bind="money" class=" form-control form-control-solid"></money> {{price}}
                            </div>
                            <button class="btn btn-primary" type="button" @click="addProduto()">Salvar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import { EditIcon, Trash2Icon, DollarSignIcon} from "vue-feather-icons";
import {Money} from 'v-money'
import axios from "axios";
export default {
    data: () => {
        return {
            options_categorias: [],
            categoria: null,
            nome_produto: null,
            preco: null,
            money: {
                decimal: ',',
                thousands: '.',
                prefix: 'R$ ',
                suffix: ' #',
                precision: 2,
                masked: false
            }
        }
    },
    mounted() {
        this.showCategoria();
    },
    methods:{
        showCategoria(){
            axios.get('http://localhost:8000/api/categorias').then(res => {
                if(res.status == 200){ this.options_categorias = res.data }
            });
        },
        addProduto(){
            const options = {
                url: 'http://localhost:8000/api/produtos',
                method: 'POST',
                headers: {
                    'Accept': 'application/json',
                    'Content-Type': 'application/json;charset=UTF-8'
                },
                data:{
                    id_categoria_produto : this.categoria,
                    nome_produto: this.nome_produto,
                    valor_produto: this.preco
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
                                window.location.href = 'http://localhost:8000/produto/cadastro';
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
    },
    components:{
        EditIcon, Trash2Icon, DollarSignIcon, Money
    }
}
</script>
