@extends('layout.admin-default')
@section('admin')
    <main>
        <header class="page-header page-header-dark bg-gradient-primary-to-secondary pb-10">
            <div class="container">
                <div class="page-header-content pt-4">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-auto mt-4">
                            <h1 class="page-header-title">
                                <div class="page-header-icon"><i data-feather="layout"></i></div>
                                Listar Produto
                            </h1>
                            <div class="page-header-subtitle"></div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <div id="app">
            <produto-list></produto-list>
        </div>

    </main>
@endsection
<script>
    import ProdutoListComponent from "../../js/components/ProdutoListComponent";
    export default {
        components: {ProdutoListComponent}
    }
</script>
