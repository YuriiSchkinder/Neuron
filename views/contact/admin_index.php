<div class="col-md-offset-2">
    <h3>Feedback</h3><br>
    <?php if($data) :?>
    <table class="table table-condensed" style="width: 700px">
        <thead>
        <tr>
            <th></th>
            <th>Name</th>
            <th>Email</th>
            <th>Subject</th>
            <th>Message</th>
            <th></th>
            <th></th>
        </tr>
        </thead>
        <?php foreach ($data as $posts):?>
            <tr>
                <td <?= ($posts['is_new']=='1') ? "class='alert-info'" : "class='alert-danger'"  ?>><?= ($posts['is_new']=='1') ? '<h4>New message</h4>' :'<h4>Read message</h4>'  ?></td>
                <td>
                    <?= $posts['name']?>
                </td>
                <td>
                    <?= $posts['email']?>
                </td>
                <td>
                    <?= $posts['subject']?>

                </td>
                <td>
                    <?= $posts['message']?>
                </td>
                <td>
                    <a href="/admin/contact/response/<?= $posts['id'] ?>"  class="btn btn-primary" role="button">Response</a>

                </td>
                <td>
                    <a href="/admin/contact/delete/<?= $posts['id'] ?>" onclick="return ConfirmDelete()" class="btn btn-danger" role="button">Delete</a>
                </td>
            </tr>
        <?php endforeach;?>
    </table>
    <?php else:?>
    <h3 class="col-md-offset-3">Not to message</h3>
    <?php endif; ?>
</div>