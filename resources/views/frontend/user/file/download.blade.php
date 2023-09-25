<div class="form-group row">
       <table class="table table-striped table-hover table-bordered mb-0">
            <thead>
                <tr>
                    <th>Level</th>
                    <th>Date</th>
                    <th>Description</th>
                    <th>File</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach($exam as $item)
                   
                <tr>
                    <td>{{$item->niveau}}</td>
                    <td>{{$item->date}}</td>
                    <td>{{$item->description}}</td>
                    <td >
                        <a href="{{asset ('file/'.$item->file)}}" target="blank"><img src="\img\brand\pdf.png" alt="azerar" width="40px"></a>
                    </td>
                    @if($item->email==$logged_in_user->email)
                    <td>
                        <a href="{{url('edit_exam/'.$item->id)}}" class="btn btn-primary btn-sm">Edit</a>
                    </td>
                    <td>
                    <a href="{{url('delete_exam/'.$item->id)}}" class="btn btn-primary btn-sm">Delete</a>
                    </td>
                    @endif
                </tr>
               
                @endforeach
            </tbody>
        </table>
    </div><!--form-group-->