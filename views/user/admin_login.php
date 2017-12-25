<style>
    form {
        margin-top: 100px;
    }
</style>

<div class="col-md-offset-3">
    <form action="/admin/user/login" method="post" >
        <table class="table table-bordered" style="width: 600px">
            <tr>
                <td><h5>Login:</h5></td>
                <td><input type="text" name="login" placeholder="Login"  class="form-control"> </td>
            </tr>
            <tr>
                <td><h5>Password:</h5></td>
                <td><input type="password" name="password"  class="form-control" placeholder="Password"> </td>
            </tr>

        </table>
        <input type="submit" class="btn btn-primary"  value="Enter">
    </form>
</div>