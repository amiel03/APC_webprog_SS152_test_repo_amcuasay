<h2><?php echo $firstname; ?></h2>

<center>
    <table border='5' cellpadding='4'>
        <tr>
            <td><strong>First Name</strong></td>
            <td><strong>Nickname</strong></td>
            <td><strong>Email Address</strong></td>
            <td><strong>Gender</strong></td>
            <td><strong>Comment</strong></td>
            <td><strong>Action</strong></td>
        </tr>
        <?php foreach ($user as $user_item): ?>
            <tr>
                <td><?php echo $user_item['firstname']; ?></td>
                <td><?php echo $user_item['nickname']; ?></td>
                <td><?php echo $user_item['email']; ?></td>
                <td><?php echo $user_item['gender']; ?></td>
                <td><?php echo $user_item['comment']; ?></td>
                <td>
                    <a href="<?php echo site_url('user/'.$user_item['slug']); ?>">View</a> |
                    <a href="<?php echo site_url('user/edit/'.$user_item['id']); ?>">Edit</a> |
                    <a href="<?php echo site_url('user/delete/'.$user_item['id']); ?>" onClick="return confirm('Are you sure you want to delete?')">Delete</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>


    <!DOCTYPE html>
    <html>
    <head>
        <title></title>

        <style>
            body {margin:0;}
            ul {
                list-style-type: none;
                margin: 0;
                padding: 0;
                overflow: hidden;
                background-color: #333;
                position: fixed;
                top: 0;
                width: 100%;
            }
            li {
                float: left;
            }
            li a {
                display: block;
                color: white;
                text-align: center;
                padding: 14px 20px;
                text-decoration: none;
            }
            li a:hover:not(.active) {
                background-color: #111;
            }
            .active {
                background-color: #4CAF50;
            }
            .container {
                position: relative;
            }
            .center {
                position: absolute;
                left: 0;
                top: 10%;
                width: 100%;
                text-align: center;
                font-size: 18px;
            }
            img {
                width: 100%;
                opacity: 0.7;
            }
            h1 {
                text-align: center;
                text-transform: capitalize;
                color: #DC143C;

            }
            h3 {
                text-align: center;
                text-transform: capitalize;
                color: #000000;
                padding-bottom: 0%

            }
            h2 {
                text-align: center;
                text-transform: capitalize;
                color: #000000;
                padding: 100px 0px

            }
            .left {
                position: absolute;
                right: 300px;
                width: 400px;
                border: 3px solid #73AD21;
                padding: 100px;
            }
            p {
                text-indent:50px;
                text-align: center;
                letter-spacing: 2px
                direction:rt1;
            }
            .center {
                height: 200px;
                position: relative;
                border: 3px solid green;
            }
            .center p {
                margin: 0;
                position: absolute;
                top: 50%;
                left: 50%;
                -ms-transform: translate(-50%, -50%);
                transform: translate(-50%, -50%);
            }

            a
            {
                text-decoration: none;