<link rel="stylesheet" type="text/css" href="<?=base_url()?>css/style.css"/>


<h2><?php echo $firstname; ?></h2>

<?php echo validation_errors(); ?>

<?php echo form_open('user/create'); ?>
<table>
    <tr>
        <td><label for="firstname">First Name</label></td>
        <td><input type="input" name="firstname" size="50" /></td>
    </tr>
    <tr>
        <td><label for="nickname">Nickname</label></td>
        <td><input type="input" name="nickname" size="50" /></td>
    </tr>
    <tr>
        <td><label for="email">Email Address</label></td>
        <td><input type="input" name="email" size="50" /></td>
    </tr>
    <tr>
        <td><label for="gender">Gender</label></td>
        <td><input type="input" name="gender" size="50" /></td>
    </tr>
    <tr>
        <td><label for="comment">Comment</label></td>
        <td><textarea name="comment" rows="10" cols="40"></textarea></td>
    </tr>
    <tr>
        <td></td>
        <td><input type="submit" name="submit" value="enter data" /></td>
    </tr>
</table>
</form>