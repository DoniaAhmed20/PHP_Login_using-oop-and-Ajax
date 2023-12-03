$(document).on('submit','#loginForm',function(e){
    e.preventDefault();
   
    $.ajax({
    method:"POST",
    url: "login.php",
    data:$(this).serialize() ,
    success: function(data){
        console.log("AJAX success");
        console.log(data);
    if(data.trim() === 'success') {
        window.location.href="dashboard.php";
    } else {
        console.log("nnnnnn");
        $('#msg').html(data);
        $('#loginForm').find('input').val('');
    }
     
}});
});