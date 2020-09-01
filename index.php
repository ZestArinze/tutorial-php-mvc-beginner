<h1>Welcome</h1>

<form method="GET">
    <label>User (id) to load. <br>Leave blank to load all users</label><br>
    <input type="number" name="userId" /><br>
    <input type="submit" value="Load" />
</form>

<?php 
    require_once('Helper/Router.php');

    use Helper\Router;
    
    // get request data and call appropriate route based 
    // on the request data
    if(isset($_REQUEST['userId']) && $_REQUEST['userId'] !== '') {
        Router::to('user', (int) $_REQUEST['userId']);
    } else {
        Router::to('users');
    }
?>