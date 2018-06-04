<html>
    <head>
        <meta charset="utf-8">
        <title>Admin page</title>
        <style>
        </style>
    </head>
    <body>
        <div class="container">
            <div class="row"> 
            <?php if($resultUpdate):?>  
                <p>Вы добавили изменили данные успешно</p> 
            <?php else:?>
                <form  method="POST" action="">
                <table class="table">
                    <thead>
                      <tr>
                        <th>Header</th>
                        <th>Description</th>
                        <th>Img</th>
                        <th>Price</th>
                      </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($list as $list1):?>
                        <?php if($id == $list1['id']):?>
                             <tr>
                                <td><input type="text" name="header" value="<?php echo $list1['header']?>"></td>
                                <td><input type="text" name="description" value="<?php echo $list1['description']?>"></td>
                                <td><input type="text" name="img" value="<?php echo $list1['img']?>"></td>
                                <td><input type="text" name="price" value="<?php echo $list1['price']?>"></td>
                              </tr>
                        <?php endif;?>
                        <?php endforeach;?>
                    </tbody>
                </table>
                    <input type="submit" value="Update" name="submit">
                </form>
                <?php endif;?>
            </div>
        </div>  
    </body>
</html>
