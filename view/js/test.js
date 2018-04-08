


$(document).ready(function(){
    $("#submit1").click(function () {
        //alert("sd");
        verifForm();
    })
});


function verifForm() {


    var passwd = $("#passwd");
    var passwdC = $("#Cpasswd").val();

    if(passwd.val() !== passwdC){
        passwd.css("background-color","#ff3333");
        alert("error");
        $("form").submit(function(e){
            e.preventDefault();
        });
    }


}
