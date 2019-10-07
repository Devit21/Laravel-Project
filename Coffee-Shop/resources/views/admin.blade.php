<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Arimo|Hanuman&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style/fontawesome-free-5.3.1-web/css/all.min.css">
    <link rel="stylesheet" href="style/admin.css">
    <script src="js/jquery-3.2.1.min.js"></script>
    <title>Document</title>
</head>
<body>
    <div class="top-bar">
        <div class="menu-bar">
            <div class="btn-menu">
                <i class="fas fa-bars"></i>
            </div>
        </div>
        <div class="header">
            <div class="title">
                <span>My Function</span>
            </div>
            <div class="pagination">
                <ul>
                    <li id="btnAdd">Add</li>
                    <li>
                        <select>
                            <option value="2">2</option>
                            <option value="5">5</option>
                            <option value="10">10</option>
                            <option value="20">20</option>
                        </select>
                    </li>
                    <li><i class="fas fa-angle-left"></i></li>
                    <li>1 / 1 of 10</li>
                    <li><i class="fas fa-angle-right"></i></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="menu">
        <ul>
            <li data-opt="0">Menu</li>
            <li data-opt="1">Orders</li>
            <li data-opt="2">Manage User</li>
        </ul>
    </div>
    <div class="content">
        <table>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Price</th>
                <th>Photo</th>
                <th>od</th>
                <th>status</th>    
                <th>Action</th>
            </tr> 
            <tr>
                <td>1</td>
                <td>ac</td>
                <td>2$</td>
                <td>1234</td>
                <td>
                    
                </td>
            </tr>
        </table>
    </div>
    
</body>
<script>
    $(document).ready(function(){
        var body=$('body');
        var popUp="<div class='popup'></div>";
        var form=['frm-menu','frm-order','frm-manage-user'];
        var frmOpt;
        //Add From
        $('#btnAdd').click(function(){
            body.append(popUp);
            $(".popup").load("form/"+form[frmOpt]+".php", function(responseTxt, statusTxt, xhr){
                if(statusTxt == "success")
                    $('.frm').find('.title span').text($('.header').find('.title span').text());
                if(statusTxt == "error")
                    alert("Error: " + xhr.status + ": " + xhr.statusText);
            });
        });
        $('.menu').on('click','li',function(){
            var eThis=$(this);
            frmOpt=eThis.data('opt');
            $('.pagination').show();
            $('.menu').find('li').css({'background-color':'gray'});
            eThis.css({'background-color':'#000'});
            $('.header').find('.title span').text(eThis.text());
        });
        //Close Form
        body.on('click','#btnClose',function(){
            $('.popup').remove();
        });
    });
</script>
</html>