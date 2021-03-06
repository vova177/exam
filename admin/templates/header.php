
<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link type="text/css" href="/templates/css/bootstrap.min.css" rel="stylesheet">
    <link type="text/css" href="/templates/css/my_style.css" rel="stylesheet">
    <link type="text/css" href="https://cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css" rel="stylesheet">
    <link type="text/css" href="/admin/templates/css/jquery-ui.css">


    <script type="text/javascript" src="/templates/js/jquery-3.1.1.js"></script>
    <script type="text/javascript" src="/admin/templates/js/jquery-ui.js"></script>
    <script type="text/javascript" src="/templates/js/bootstrap.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function(){
            $('#user_name').keyup(function () {
                var query= $(this).val();
                if(query != ''){
                    $.ajax({
                        url: "/admin/auto-complete",
                        method: "POST",
                        data: {symbol:query},
                        success: function (data) {
                            $('#userList').fadeIn();
                            $('#userList').html(data);
                        }
                    });
                }
            });
            $(document).on('click', 'li', function(){
                $('#user_name').val($(this).text());
                $('#userList').fadeOut();
            });
        });
    </script>
</head>

<body>
<div class="navbar navbar-inverse navbar-static-top">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#responsive-menu">
                <span class="sr-only"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/main">Main page</a>
        </div>
        <div class="collapse navbar-collapse" id="responsive-menu">
            <ul class="nav navbar-nav">
                <li><a href="/admin/categories">Category</a></li>
                <li><a href="/admin/users">Users</a></li>
            </ul>
        </div>
    </div>

</body>
</html>