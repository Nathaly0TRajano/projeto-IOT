<div class="container mt-5">
    <div class="body">
        <div class="card shadow px-2">
                <h2 class="card-title text-center">Ambientes</h2>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th>Descrição</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($ambientes as $ambiente)
                        <tr>
                            <td>{{$ambiente->nome}}</td>
                            <td>{{$ambiente->descricao}}</td>
                            <td>{{$ambiente->status}}</td>
                            <td>
                                <a href="{{route('ambiente.editar')}}">Editar</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

