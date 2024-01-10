<div class="row">
    <div class="col">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($dbview as $key => $rows)
                <tr>
                    <td>{{ $rows->id }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
   </div>
