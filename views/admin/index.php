<html>
    <head>
        <meta charset="utf-8">
        <title>Admin page</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <style>
            
            body, html {
                margin: 0;
                padding: 0;
            }
            .admin {
                padding: 20px;
            }
            a {
                margin-left: 10px;
            }
            a:hover {
                text-decoration: underline;
                cursor: pointer;
            }
            .box {
                margin-bottom: 10px;
            }
            
        </style>
        
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="box">
                <h1>Admin page</h1>
                    <span>update id:</span>
                    <?php foreach ($list as $list1):?>
                    <a href="/admin/update/<?php echo $list1['id']?>"><?php echo $list1['id']?></a>
                    <?php endforeach;?>
                <br>
                <span>delete id:</span>
                    <?php foreach ($list as $list1):?>
                    <a href="/admin/delete/<?php echo $list1['id']?>"><?php echo $list1['id']?></a>
                    <?php endforeach;?>
                <br>
                <a href="/admin/insert">Insert</a>
                <br>
                
                
                </div>
                
            </div>
            <div class="row">
              <table class="table">
            <thead>
              <tr>
                <th>Id</th>
                <th>Header</th>
                <th>Description</th>
                <th>Img</th>
                <th>Price</th>
              </tr>
            </thead>
            <tbody>
                <?php foreach ($list as $list):?>
                
                     <tr>
                        <th scope="row"><?php echo $list['id']?></th>
                        <td><?php echo $list['header']?></td>
                        <td><?php echo $list['description']?></td>
                        <td><?php echo $list['img']?></td>
                        <td><?php echo $list['price']?></td>
                      </tr>    
                <?php endforeach;?>
            </tbody>
          </table>
          
            </div>
        </div>
        
    </body>
</html>