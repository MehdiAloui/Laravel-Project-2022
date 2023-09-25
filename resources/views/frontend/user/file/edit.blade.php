<div class="table-responsive">
<style>
table, th, td {
  border:1px solid black;
}
</style>
    <!--@if(session('statue'))
        <h6 class="alert alert-success">{{session("statue")}}</h6>
    @endif-->
    <form action="{{url('update-exam/'.$exam->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <table class="table table-striped table-hover table-bordered mb-0" style="width:50%">
            <tr>
                <th><label for="level">Choose level of etude:</label></th>
                <td>
                    <select name="niveau" id="level" required>
                        <option value="primary ">Primary </option>
                        <option value="secondaire ">Secondaire </option>
                        <option value="University">University </option>
                    </select>
                </td>
            </tr>
            <tr>
                <th><label for="date">Date </label></th>
                <td><input type="date" name="date" id="date" value="{{$exam->date}}" ></td>
            </tr>
            <tr>
                <th><label for="description" >Description </label></th>
                <td>
                    <textarea id="description" name="description" rows="2" cols="33" value="{{$exam->description}}" required></textarea>
                </td>
            </tr>
            <tr>
                <th><label for="file">input your file </label></th>
                <td><input type="file" name="file" id="file" value="{{$exam->file}}" >
                
                <!--<embed src="{{asset ('file/'.$exam->file)}}" width="30px" height="30px" target="blank" />-->

            </td>
            </tr>
            </table >
            <tr>
               <button class="btn btn-primary" type="submit" >update</button>
            </tr>
    </form>

    
</div>

<!--<div>
    <form action="POST">
            <button class="btn btn-primary" type="submit">save your file</button>
    </form>
           
</div>-->

<!--table-responsive-->