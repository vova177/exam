
<script>
    $(document).ready(function() {
        var table = $('#table').DataTable( {
            "ajax": "/get_mess"
        } );
        $('form').submit(function(e) {
            var $form = $(this);
            $.ajax({
                type: "POST",
                dataType: "json",
                url: "/post_mess",
                data: $form.serialize()
                //
            }).done(function(data) {
                console.log(data);
                table.ajax.reload();
                alert('all done, sent');
                console.log('success');
            }).fail(function() {
                alert('fail');
                console.log('fail');
            });
            //отмена действия по умолчанию для кнопки submit
            e.preventDefault();
        });
    });
</script>


<table id="table" class="display" cellspacing="0" width="100%">
    <thead>
    <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Message</th>
    </tr>
    </thead>
</table>

<div class="container-fluid">
    <div class="row" id="content">
        <div class="coll-md-12">
            <form action="/quest" method="POST"  role="form">
            <table id="send_message">
                    <tr>
                        <td><label>Name:</label><input type="text" name="name" id="input"></td>
                    </tr>
                    <tr>
                        <td> <label>Email:</label><input type="email" name="email" id="input"></td>
                    </tr>
                    <tr>
                        <td><label>Message:</label><textarea name="message" id="input"></textarea></td>
                    </tr>
                    <tr>
                        <td><lebel>Send message admin</lebel><input type="checkbox" name="check" id="input"></td>
                    </tr>
                    <tr>
                       <td> <input type="submit" value="Push me" id="submit" class="btn btn-default"/></td>
                    </tr>
            </table>
            </form>
        </div>
    </div>
</div>




