<template>
    <div class="container mt-n10">
        <div class="card mb-4">
            <div class="card-header">Extended DataTables</div>
            <div class="card-body">
                <div class="datatable">
                    <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Categoria</th>
                            <th>Data</th>
                            <th>Ações</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr v-for=" cat in categorias" :key="cat.id_categoria_planejamento">
                            <td>{{ cat.id_categoria_planejamento }}</td>
                            <td>{{ cat.nome_categoria}}</td>
                            <td>{{ cat.created_at | formatDate}}</td>
                            <td>
                                <button class="btn btn-yellow btn-icon" type="button" @click="editarCategoria(cat.id_categoria_planejamento)" data-toggle="modal" data-target="#exampleModalist">
                                    <EditIcon/>
                                </button>
                                <button class="btn btn-red btn-icon" type="button" @click="excluirCategoria(cat.id_categoria_planejamento)">
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
                <div class="modal-content" v-for=" c in categorias_id" :key="c.id_categoria_planejamento">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitleList">Categoria</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label class="small mb-1" >Nome</label>
                                    <input class="form-control form-control-solid" v-model="c.nome_categoria" type="text"  />
                                </div>
                            </div>

                        </form>
                    </div>
                    <div class="modal-footer">
                        <!-- Save changes button-->
                        <button class="btn btn-primary" @click="upCategoria(c.id_categoria_planejamento, c.nome_categoria)" type="button">Salvar</button>
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
            categorias: [],
            categorias_id: []
        }
    },
    mounted() {
        this.loadData()
    },
    methods: {
        loadData: function () {
            axios.get('http://localhost:8000/api/categorias').then(res => {
                if (res.status == 200 || res.status == 201) {
                    this.categorias = res.data;
                }
            }).catch(err => {
                Swal.fire("Ops!", " " + err, "error");
            });
        },
        excluirCategoria(id){
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
                    axios.delete('http://localhost:8000/api/categorias/'+id)
                        .then( function (resp) {
                            Swal.fire(
                                'Deletado!',
                                'Seu arquivo foi deletado.',
                                'success'
                            ).then((r) =>{
                                window.location.href = 'http://localhost:8000/categoria/listar';
                            })
                        })
                }
            })
        },
        editarCategoria(int){
                axios.get('http://localhost:8000/api/categorias/'+int).then(res => {
                    if(res.status == 200 || res.status == 201){
                        this.categorias_id = res.data;
                    }
                }).catch(err => {
                    Swal.fire("Ops!", " " + err, "error");
                });
        },
        upCategoria(up_id, up_nome){
            axios.patch('http://localhost:8000/api/categorias/'+up_id, {
                    nome_categoria : up_nome
            }).then( res => {
                if(res.status == 200){
                    Swal.fire({
                        icon: 'success',
                        title: '',
                        text: 'Atualizado com sucesso!',
                        showConfirmButton: true
                    }).then((result) => {
                        if (result.isConfirmed) {
                            window.location.href = 'http://localhost:8000/categoria/listar';
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
