<div class="table-responsive">
    <!--@if(session('statue'))
        <h6 class="alert alert-success">{{session("statue")}}</h6>
    @endif-->
    <form action="{{route('addfile')}}" method="POST" enctype="multipart/form-data">

        @csrf
        <table class="table table-striped table-hover table-bordered mb-0">
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
                <td><input type="date" name="date" id="date" required max="9999-12-31"></td>
            </tr>
            <tr>
                <th><label for="description">Description </label></th>
                <td>
                    <textarea id="description" name="description" rows="2" cols="33" placeholder="description about exam to facilitate for other the research" required></textarea>
                </td>
            </tr>
            <tr>
                <th><label for="file">input your file </label></th>
                <td><input type="file" name="file" id="file"  required></td>
            </tr>
            </table >
            <tr>
                <button class="btn btn-primary" type="submit">save your file</button>
            </tr>
            

    </form>

    
</div>
<!--<div>
    <form action="POST">
            <button class="btn btn-primary" type="submit">save your file</button>
    </form>
           
</div>-->

<!--table-responsive-->