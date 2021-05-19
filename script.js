
$(function() {
  $("form#formg").on("submit", function(event) {

event.preventDefault();

$.ajax({
  url:"ajax.php",
  type:"POST",
  cache:false,
  data:$("#formg").serialize(),
  success: function (data) {
        console.log(data);
  }
});
});
});
