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
                
            <?php if($resultInsert):?>
                <p>Вы добавили данные успешно</p> 
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
                             <tr>
                                <td><input type="text" name="header" value=""></td>
                                <td><input type="text" name="description" value=""></td>
                                <td><input type="text" name="img" value=""></td>
                                <td><input type="text" name="price" value=""></td>
                              </tr>
                    </tbody>
                </table>
                    <input type="submit" value="Insert" name="submit">
                </form>
                <?php endif;?>
            </div>
        </div>  
    </body>