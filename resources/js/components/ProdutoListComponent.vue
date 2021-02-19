<template>
    <div class="container mt-n10">
        <div class="card mb-4">
            <div class="card-header">Produtos</div>
            <div class="card-body">
                <div class="datatable">
                    <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Categoria</th>
                            <th>Produto</th>
                            <th>Preço</th>
                            <th>Data</th>
                            <th>Ações</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr v-for="prod in produtos" :key="prod.id_produto">
                            <td>{{ prod.id_produto }}</td>
                            <td>{{ prod.categoria }}</td>
                            <td>{{ prod.nome_produto}}</td>
                            <td>{{ prod.valor_produto}}</td>
                            <td>{{ prod.created_at | formatDate}}</td>
                            <td>
                                <button class="btn btn-yellow btn-icon" type="button" @click="editarProduto(prod.id_produto)"  data-toggle="modal" data-target="#exampleModalist">
                                    <EditIcon/>
                                </button>
                                <button class="btn btn-red btn-icon" type="button" @click="excluirProduto(prod.id_produto)">
                                    <Trash2Icon/>
                                </button>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="card card-icon mb-4">
            <div class="row no-gutters">
                <div class="col-auto card-icon-aside bg-primary"><i class="mr-1 text-white-50" data-feather="alert-triangle"></i></div>
                <div class="col">
                    <div class="card-body py-5">
                        <h5 class="card-title">Third-Party Documentation Available</h5>
                        <p class="card-text">DataTables is a third party plugin that is used to generate the demo table above. For more information about how to use DataTables with your project, please visit the official DataTables documentation.</p>
                        <a class="btn btn-primary btn-sm" href="https://datatables.net/" target="_blank">
                            <i class="mr-1" data-feather="external-link"></i>
                            Visit DataTables Docs
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="exampleModalist" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitleList" aria-hidden="true">
            <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content" v-for="prod in produtos_id" :key="produtos_id.id_produto">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitleList">Produto</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    </div>
                    <div class="modal-body">
                        <div class="row justify-content-center">
                            <div class="col-md-8">
                                <div class="card mb-4">
                                    <div class="card-body">
                                        <form>
                                            <!-- Form Group (current password)-->
                                            <div class="form-group">
                                                <label class="small mb-1" >Categorias</label>
                                                <input class="form-control" type="text" v-model="prod.categoria" readonly>
                                            </div>
                                            <!-- Form Group (new password)-->
                                            <div class="form-group">
                                                <label class="small mb-1">Produto</label>
                                                <input class="form-control" type="text" v-model="prod.nome_produto">
                                            </div>
                                            <!-- Form Group (confirm password)-->
                                            <div class="form-group">
                                                <label class="small mb-1" >Valor</label>
                                                <money v-model="prod.valor_produto" v-bind="money" class=" form-control form-control-solid"></money>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <!-- Save changes button-->
                        <button class="btn btn-primary" @click="upProduto(prod.id_produto, prod.nome_produto, prod.valor_produto)" type="button">Salvar</button>
                        <button class="btn btn-danger" type="button" data-dismiss="modal">Fechar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import { EditIcon, Trash2Icon, DollarSignIcon} from "vue-feather-icons";
export default {
    data: () => {
        return {
            produtos: [],
            categorias_id: [],
            produtos_id: [],
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
        this.loadData();
    },
    methods:{
        loadData: function () {
            axios.get('http://localhost:8000/api/produtos').then(res => {
                if (res.status == 200 || res.status == 201) {
                    this.produtos = res.data;
                }
            }).catch(err => {
                Swal.fire("Ops!", " " + err, "error");
            });
        },
        excluirProduto(id){
            Swal.fire({
                title: 'Você tem certeza?',
                text: "",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonText: "Não",
                cancelButtonColor: '#d33',
                confirmButtonText: 'Sim'
            }).then((result) => {
                if (result.value) {
                    axios.delete('http://localhost:8000/api/produtos/'+id)
                        .then( function (resp) {
                            Swal.fire(
                                'Deletado!',
                                'Seu arquivo foi deletado.',
                                'success'
                            ).then((r) =>{
                                window.location.href = 'http://localhost:8000/produto/listar';
                            })
                        })
                }
            })
        },
        editarProduto(int){
            axios.get('http://localhost:8000/api/produtos/'+int).then(res => {
                if(res.status == 200 || res.status == 201){
                    this.produtos_id = res.data;
                }
            }).catch(err => {
                Swal.fire("Ops!", " " + err, "error");
            });
        },
        upProduto(u_id_produto, u_nome_produto, u_valor_produto){
            axios.patch('http://localhost:8000/api/produtos/'+u_id_produto, {
                nome_produto : u_nome_produto,
                valor_produto: u_valor_produto
            }).then( res => {
                if(res.status == 200){
                    Swal.fire({
                        icon: 'success',
                        title: '',
                        text: 'Atualizado com sucesso!',
                        showConfirmButton: true
                    }).then((result) => {
                        if (result.isConfirmed) {
                            window.location.href = 'http://localhost:8000/produto/listar';
                        }
                    })
                }
            }).catch(err => {
                Swal.fire('Ops!', err, 'error')
            });
        }
    },
    components:{
        EditIcon, Trash2Icon, DollarSignIcon
    }
}
</script>
