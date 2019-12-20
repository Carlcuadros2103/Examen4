Votar
<form action="{{ url('/candidate')}}" method="post" enctype="multipart/form-data">
{{ csrf_field() }}

    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>lista</th>
            <th>candidato</th>
        </tr>
    </thead>
    @foreach($candidates as $candidate )
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{}}</td>
            <td>
            <a href="url('/cabin'.$cabin->id.'/vote')">$candidate->list</a>
            </td>
            <td>$candidate->name</td>
        </tr>
    @endforeach
</form>