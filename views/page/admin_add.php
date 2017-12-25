<style>
    form {
        margin-top: 50px;
    }
</style>

<div class="col-md-offset-2">
    <form action="/admin/page/add" method="post" enctype="multipart/form-data">
        <table class="table table-bordered" style="width: 600px">
            <tr>
                <td><h5>Images post:</h5></td>
                <td><input type="file" name="img"  class="form-control"> </td>
            </tr>
            <tr>
                <td><h5>Title post:</h5></td>
                <td><input type="text" name="title"  class="form-control" placeholder="add title"> </td>
            </tr>
            <tr>
                <td><h5>Author post:</h5></td>
                <td><input type="text" name="author"  class="form-control" placeholder="add author"> </td>
            </tr>
            <tr>
                <td><h5>Desctiption post:</h5></td>
                <td><input type="text" name="desctiption"  class="form-control" placeholder="add Desctiption"> </td>
            </tr>
            <tr>
                <td><h5>Content post:</h5></td>
                <td><textarea  name="content"  class="form-control" placeholder="add Content"></textarea> </td>
            </tr>
        </table>
        <input type="submit" class="btn btn-primary"  value="Send post">
    </form>
</div>