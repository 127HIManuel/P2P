<?php
    require "../app/core/pages/admin_pages/users_controller.php";
?>
<?php if($operation == "add"):?>
    <!doctype html>
    <html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
        <meta name="generator" content="Hugo 0.104.2">
        <title><?=TITLE?></title>

        <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/sign-in/">

    

    

    <link href="<?=ASSETS?>vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
              font-size: 3.5rem;
            }
        }

        .b-example-divider {
            height: 3rem;
            background-color: rgba(0, 0, 0, .1);
            border: solid rgba(0, 0, 0, .15);
            border-width: 1px 0;
            box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
        }

        .b-example-vr {
            flex-shrink: 0;
            width: 1.5rem;
            height: 100vh;
        }

        .bi {
            vertical-align: -.125em;
            fill: currentColor;
        }

        .nav-scroller {
            position: relative;
            z-index: 2;
            height: 2.75rem;
            overflow-y: hidden;
        }

        .nav-scroller .nav {
            display: flex;
            flex-wrap: nowrap;
            padding-bottom: 1rem;
            margin-top: -1px;
            overflow-x: auto;
            text-align: center;
            white-space: nowrap;
            -webkit-overflow-scrolling: touch;
        }
    </style>

    
    <!-- Custom styles for this template -->
    
    </head>
    <body class="text-center">
    <h1>Add new user</h1>
    <main class="form-signin w-100 m-auto">
    <form method="post">
        <?php if (!empty($errors['firstname'])):?>
            <div class="text-danger"><?=$errors['firstname']?></div>
        <?php endif;?>
        <div class="form-floating">
        <input type="text" name="firstname" value="<?=former_value('firstname')?>" class="form-control" id="floatingInput" placeholder="firstname">
        <label for="floatingInput">Firstname</label>
        </div>
        <br><br>
        <?php if (!empty($errors['lastname'])):?>
            <div class="text-danger"><?=$errors['lastname']?></div>
        <?php endif;?>
        <div class="form-floating">
        <input type="text" name="lastname" value="<?=former_value('lastname')?>" class="form-control" id="floatingInput" placeholder="lastname">
        <label for="floatingInput">Lastname</label>
        </div>
        <br><br>
        <?php if (!empty($errors['email'])):?>
            <div class="text-danger"><?=$errors['email']?></div>
        <?php endif;?>
        <div class="form-floating">
        <input name="email" value="<?=former_value('email')?>" class="form-control" id="floatingInput" placeholder="name@example.com" required>
        <label for="floatingInput">Email address</label>
        </div>
        <br><br>
        <?php if (!empty($errors['role'])):?>
            <div class="text-danger"><?=$errors['role']?></div>
        <?php endif;?>
        <div class="form-floating">
        <input type="text" name="role" value="<?=former_value('role')?>" class="form-control" id="floatingPassword" placeholder="Role">
        <label for="floatingPassword">Role</label>
        </div>
        <br><br>
        <?php if (!empty($errors['password'])):?>
            <div class="text-danger"><?=$errors['password']?></div>
        <?php endif;?>
        <div class="form-floating">
        <input type="password" name="password" value="<?=former_value('password')?>" class="form-control" id="floatingPassword" placeholder="Password">
        <label for="floatingPassword">Password</label>
        </div>
        <br><br>
        <div class="form-floating">
        <input type="password" name="confirm-password" value="<?=former_value('confirm-password')?>" class="form-control" id="floatingInput" placeholder="Confirm Password">
        <label for="floatingPassword">Confirm Password</label>
        </div>
        <br><br><br>
        <div>
            <a href="<?=ROOT?>admin/users">
                <button class="btn btn-dark" type="button">Back</button>
            </a>
            <button class="btn btn-danger" type="submit">Create User</button>
        </div>
        
    </form>
    </main>


    
    </body>
    </html>

<?php elseif($operation == "edit"):?>
    <?php
        $query = "select * from users where id = :id limit 1";
        $result = query_one($query,['id'=>$id]);
    ?>
    <h1 class="text-danger text-center">Edit Page</h1>
    <form method="post">
        <?php if (!empty($errors['firstname'])):?>
            <div class="text-danger"><?=$errors['firstname']?></div>
        <?php endif;?>
        <div class="form-floating">
            <input type="text" name="firstname" value="<?=$result['firstname']?>" class="form-control">
        </div>
        <br><br>
        <?php if (!empty($errors['lastname'])):?>
            <div class="text-danger"><?=$errors['lastname']?></div>
        <?php endif;?>
        <div class="form-floating">
            <input type="text" name="lastname" value="<?=$result['lastname']?>" class="form-control">
        </div>
        <br><br>
        <?php if (!empty($errors['email'])):?>
            <div class="text-danger"><?=$errors['email']?></div>
        <?php endif;?>
        <div class="form-floating">
            <input type="email" name="email" value="<?=$result['email']?>" class="form-control">
        </div>
        <br><br>
        <?php if (!empty($errors['role'])):?>
            <div class="text-danger"><?=$errors['role']?></div>
        <?php endif;?>
        <div class="form-floating">
            <input type="text" name="role" value="<?=$result['role']?>" class="form-control">
        </div>
        <br><br>
        <?php if (!empty($errors['password'])):?>
            <div class="text-danger"><?=$errors['password']?></div>
        <?php endif;?>
        <div class="form-floating">
            <input type="password" name="password" class="form-control" placeholder="Password">
            <label for="floatingPassword">Password</label>
        </div>
        <br><br>
        <div class="form-floating">
            <input type="password" name="confirm_password" class="form-control" placeholder="Confirm password">
            <label for="floatingPassword">Confirm Password</label>
        </div>
        <br><br>
        <div>
            <a href="<?=ROOT?>admin/users">
                <button type="button" class="btn btn-dark">Back</button>
            </a>
            <button type="submit" class="btn btn-danger">Edit</button>
        </div>
    </form>

<?php elseif($operation == "delete"):?>
    <?php
        $query = "select * from users where id = :id limit 1";
        $result = query_one($query,['id'=>$id]);
    ?>
    <h1 class="text-danger text-center">Are you sure ??</h1>
    <form method="post">
        <div class="form-floating">
            <input type="text" disabled value="<?=$result['firstname']?>" class="form-control">
            <label for="floatingPassword">Firstname</label>
        </div>
        <br><br>
        <div class="form-floating">
            <input type="text" disabled value="<?=$result['lastname']?>" class="form-control">
            <label for="floatingPassword">Lastname</label>
        </div>
        <br><br>
        <div class="form-floating">
            <input type="email" disabled value="<?=$result['email']?>" class="form-control">
            <label for="floatingPassword">Email</label>
        </div>
        <br><br>
        <div>
            <a href="<?=ROOT?>admin/users">
                <button type="button" class="btn btn-dark">Back</button>
            </a>
            <button type="submit" name="submit" class="btn btn-danger">Delete</button>
        </div>
    </form>
<?php else:?>    

<body>
    <a href="<?=ROOT?>admin/users/add">
        <button type="button" class="btn btn-md btn-dark">Add</button>
    </a>
    <br><br>
    <?php
        $query = "select * from users order by id desc";
        $result = query($query);
    ?>
    <h1>Users</h1>
    <hr>
    <table class="table table-striped table-sm">
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Firstname</th>
        <th scope="col">Lastname</th>
        <th scope="col">Email</th>
        <th scope="col">Role</th>
        <th scope="col">Actions</th>
      </tr>
    </thead>
    <tbody>
        <?php if(!empty($result)):?>
            <?php foreach ($result as $row):?>
        <tr>
            <td><?=$row['id']?></td>
            <td><?=$row['firstname']?></td>
            <td><?=$row['lastname']?></td>
            <td><?=$row['email']?></td>
            <td><?=$row['role']?></td>
            <td>
                <a href="<?=ROOT?>admin/users/edit/<?=$row['id']?>">
                    <button>Edit</button>
                </a>
                <a href="<?=ROOT?>admin/users/delete/<?=$row['id']?>">
                    <button>Delete</button>
                </a>
            </td>
        </tr>
        <?php endforeach;?>
        <?php else:?>
            <div>No Data</div>
        <?php endif;?>
    </tbody>        
</table>
</body>
<?php endif;?>