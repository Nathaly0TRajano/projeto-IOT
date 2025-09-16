<div class="container mt-2">
   <table>
    <thead>
        <h6>Tabela de registros</h6>
    </thead>
    <tbody>
        @foreach($registros as $r)
        <tr>
            <th>ID</th>
            <th>Sensor</th>
            <th>Valor</th>
            <th>Unidade</th>
            <th>Data e Hora</th>
            <th>Ações</th>
        </tr>
        <tr>
            <td>{{$r->id}}</td>
            <td>{{$r->sensor_id}}</td>
            <td>{{$r->valor}}</td>
            <td>{{$r->unidade}}</td>
            <td>{{$r->data_hora}}</td>
            <td><a wire:click="delete({{$r->id}})" class="btn bg-danger" onclick="return confirm('Tem certeza?')">Deletar</a></td>
        </tr>
        @endforeach
    </tbody>
   </table>
</div>

