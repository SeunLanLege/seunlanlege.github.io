<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content text-center">
      <div class="modal-body">
      <input type="text" id="your-name" placeholder="Your Name"><br>
      <input type="email" name="" id="your-email" placeholder="Your Email"><br>
      <textarea id="your-message" placeholder="Your Message Here"></textarea><br>
      <button onclick="sendmessage()">Submit</button>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript">
  function sendmessage() {
    var username = $('#your-name').val();
    var useremail  = $('#your-email').val();
    var usermessage = $('#your-message').val();
    if ($.trim(username) !== "" && $.trim(useremail) !== "" && $.trim(usermessage) !== "") {
      var reg=/^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
  if (reg.test(useremail)){
    $.ajax({
   url: 'http://localhost/ft/mail.php',
   type: 'post',
   data:{name:username,email:useremail,message:usermessage},
   success:function (response) {
    //$('.status').html('<div class="success bg-success"><h4>Sent!</h4></div>');
    $('.status').html(response);
   }
  });
  } else {
    alert('Invalid Email');
  }
    } else {
      alert('A required field is empty');
    }
  }
</script>