<?php
    require "contact_controller.php";
?>
<?php
    $query = "select * from messages order by id desc";
    $result = query($query);
?>

<?php if($operation == "read"):?>

    <?php
        $query = "select * from messages where id = :id limit 1";
        $result = query_one($query,['id'=>$id]);
    ?>
    <h1 class="text-center text-dark">Read Page</h1>
    <form method="post" >
        <div class="form-floating">
            <input type="text" name="firstname" value="<?=$result['firstname']?>" class="form-control" id="floatingInput">
            <label for="floatingInput">Firstname</label>
        </div>
        <br><br>
        <div class="form-floating">
            <input type="text" name="lastname" value="<?=$result['lastname']?>" class="form-control" id="floatingInput">
            <label for="floatingInput">Lastname</label>
        </div>
        <br><br>
        <div class="form-floating">
            <input type="text" name="email" value="<?=$result['email']?>" class="form-control" id="floatingInput">
            <label for="floatingInput">Email</label>
        </div>
        <br><br>
        <div class="form-floating">
            <input type="text" name="subject" value="<?=$result['subject']?>" class="form-control" id="floatingInput">
            <label for="floatingInput">Subject</label>
        </div>
        <br><br>
        <div class="form-floating">
            <input type="text" name="message" value="<?=$result['message']?>" class="form-control" id="floatingInput">
            <label for="floatingInput">Message</label>
        </div>
        <br><br>
        <div>
            <a href="<?=ROOT?>admin/contact">
                <button class="btn btn-dark" type="button">Back</button>
            </a>
        </div>
    </form>

<?php elseif($operation == "delete"):?>
    <?php
        $query = "select * from messages where id = :id limit 1";
        $result = query_one($query,['id'=>$id]);
    ?>
    <h1 class="text-center text-danger">Are You Sure???</h1>
    <form method="post" >
        <div class="form-floating">
            <input type="text" name="firstname" value="<?=$result['firstname']?>" class="form-control" id="floatingInput">
            <label for="floatingInput">Firstname</label>
        </div>
        <br><br>
        <div class="form-floating">
            <input type="text" name="lastname" value="<?=$result['lastname']?>" class="form-control" id="floatingInput">
            <label for="floatingInput">Lastname</label>
        </div>
        <br><br>
        <div class="form-floating">
            <input type="text" name="email" value="<?=$result['email']?>" class="form-control" id="floatingInput">
            <label for="floatingInput">Email</label>
        </div>
        <br><br>
        <div class="form-floating">
            <input type="text" name="subject" value="<?=$result['subject']?>" class="form-control" id="floatingInput">
            <label for="floatingInput">Subject</label>
        </div>
        <br><br>
        <div class="form-floating">
            <input type="text" name="message" value="<?=$result['message']?>" class="form-control" id="floatingInput">
            <label for="floatingInput">Message</label>
        </div>
        <br><br>
        <div>
            <a href="<?=ROOT?>admin/contact">
                <button class="btn btn-dark" type="button">Back</button>
            </a>
            <button type="submit" class="btn btn-danger">Delete</button>
        </div>
    </form>
<?php else:?>

<table class="table table-striped table-sm">
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Firstname</th>
        <th scope="col">Lastname</th>
        <th scope="col">Email</th>
        <th scope="col">Subject</th>
        <th scope="col">Message</th>
        <th scope="col">Status</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
        <?php if(!empty($result)):?>
        <?php foreach($result as $row):?>
        <tr>
            <td><?=$row['id']?></td>
            <td><?=$row['firstname']?></td>
            <td><?=$row['lastname']?></td>
            <td><?=$row['email']?></td>
            <td><?=$row['subject']?></td>
            <td><?=$row['message']?></td>
            <?php if($row['status'] == false):?>
            <td><h5 class="text-success">New</h5></td>
            <?php else:?>
            <td><h5 class="text-dark">Opened</h5></td>
            <?php endif;?>
            <td>
                <a href="<?=ROOT?>admin/contact/read/<?=$row['id']?>">
                    <button class="btn btn-sm btn-dark" type="submit">View</button>
                </a>
                <a href="<?=ROOT?>admin/contact/delete/<?=$row['id']?>">
                    <button class="btn btn-sm btn-primary" type="submit">Delete</button>
                </a>
            </td>
        </tr>
        <?php endforeach;?>
        <?php endif;?>
    </tbody>        
</table>
<?php endif;?>
