<style>
    .row {
        margin-top: 50px;
    }

</style>
    <div class="row">
        <div class="col-md-4">
            <img  class="img-thumbnail" src="<?=$data[0]['path'] ?>" alt="<?=substr($data[0]['path'],0,strrpos($data[0]['path'],'.')) ?>">
        </div>
    <div class="col-md-8">
    <form action="/admin/page/edit/<?=$data[0]['id']?>" method="post" enctype="multipart/form-data">
        <table class="table table-bordered" style="width: 800px">
            <tr>
                <td><h5>Images post:</h5></td>
                <td><input type="file" name="img"  class="form-control"> </td>
            </tr>
            <tr>
                <td><h5>Title post:</h5></td>
                <td><input type="text" name="title"  class="form-control" value="<?=$data[0]['title']?>" placeholder="add title"> </td>
            </tr>
            <tr>
                <td><h5>Author post:</h5></td>
                <td><input type="text" name="author"  class="form-control" value="<?=$data[0]['author']?>" placeholder="add author"> </td>
            </tr>
            <tr>
                <td><h5>Desctiption post:</h5></td>
                <td><textarea rows="5"  name="desctiption"  class="form-control"  placeholder="add Desctiption"><?=$data[0]['desctiption']?></textarea></td>
            </tr>
            <tr>
                <td><h5>Content post:</h5></td>
                <td><textarea rows="7"  name="content"  class="form-control"   placeholder="add Content"><?=$data[0]['content']?></textarea> </td>
            </tr>
        </table>
        <input type="submit" class="btn btn-primary"  value="Send post">
    </form>
</div>
    </div>