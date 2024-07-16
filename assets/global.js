//---will do the function if the index.php is loaded
$(document).ready(function () {
  to_login();
});

function to_dashboard() {
  $.post("pages/dashboard/dashboard_main.php", {}, function (data) {
    $("#content").html(data);
    //alert(data);
  });
}

function to_navigation() {
  $.post("pages/navigations/navigation_main.php", {}, function (data) {
    $("#nav").html(data);
    //alert(data);
  });
}
function to_aboutMe() {
  $.post("pages/aboutMe/aboutMe_main.php", {}, function (data) {
    $("#content").html(data);
    //alert(data);
  });
}
function to_login() {
  $.post("pages/login/login_main.php", {}, function (data) {
    $("#login").html(data);
    //alert(data);
  });
}
