<div class="col-md-offset-2">
<h3>Posts</h3><br>
<table class="table table-condensed" style="width: 600px">
    <thead>
    <tr>
        <th>Title</th>
        <th>Author</th>
        <th></th>
        <th></th>
    </tr>
    </thead>
    <?php foreach ($data as $posts):?>
    <tr>
        <td>
            <?= $posts['title']?>
        </td>
        <td>
            <?= $posts['author']?>
        </td>
        <td>
            <a href="/admin/page/edit/<?= $posts['id'] ?>"  class="btn btn-primary" role="button">Edit</a>

        </td>
        <td>
            <a href="/admin/page/delete/<?= $posts['id'] ?>" onclick="return ConfirmDelete()" class="btn btn-danger" role="button">Delete</a>
        </td>
    </tr>
    <?php endforeach;?>

</table>
<a href="/admin/page/add" class="btn btn-success" role="button">Add post</a>
</div>