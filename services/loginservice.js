$("#loginform").submit(function (event) {
  event.preventDefault();
  $.post("services/loginservice.php?trylogin=true", $(this).serialize()).done(function (
    data
  ) {
    if (!data.result) {
      if (!$(".alert-box").html().trim()) {
        $(".alert-box").append(`
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Username atau Password Salah !</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        `);
      }
    } else {
      window.location.href = "bantuan.php";
    }
  });
});
