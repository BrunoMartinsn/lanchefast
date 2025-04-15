<div>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>


<body class="text-bg-secondary p-3">



    



    <div class="container d-flex justify-content-center" style="width: 39%">
        <div class="row">

            <div class="row">


                <div class="row align-items-center">

                    <div class="col">
                        <div class="card  bor" style="width: 30rem;" class="mb-10">
                            <div class="card-body">
                                <table class="table table-bordered table-hover">
                                    <tbody>
                                        <tr>
                                            <th class="fw-bold">Nome</th>
                                            <td>{{ $produto->nome }}</td>
                                        </tr>
                                        <tr>
                                            <th class="fw-bold">ingredientes</th>
                                            <td>{{ $produto->ingredientes }}</td>
                                        </tr>
                                        <tr>
                                            <th class="fw-bold">valor</th>
                                            <td>{{ $produto->valor }}</td>
                                        </tr>
                                        
                                       
                                    </tbody>
                                </table>


                                            </div>
                                            <div class="card-footer text-end">
                                                <a href="{{ route('produtos.index') }}" class="btn btn-success">Voltar</a>
                                            </div>
                                        </form>

                                    </div>
                                </div>


                            </div>
                        </div>

                    </div>

                </div>



            </div>

            


            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
            </script>
</body>

</div>
</div>
</div>

