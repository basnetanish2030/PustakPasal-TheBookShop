$(function(){

    $(".tab-link2").click(function(){
        $(".login-form").css("display" , "none");
        $(".register-form").css("display" , "block");
    });

    $(".tab-link1").click(function(){
        $(".register-form").css("display" , "none");
        $(".login-form").css("display" , "block");
    });

    $(".menu-bar").click(function(){
        $("#nav-column").slideToggle(300);
    });

    
    $("#register").submit(function(event){
        event.preventDefault();
        var username = $(".username").val();
        var fullname = $(".fullname").val();
        var email = $(".email").val();
        var contact = $(".contact").val();
        var addr = $(".addr").val();
        var addr2 = $(".addr2").val();
        var new_pass = $(".new-pass").val();
        var con_pass = $(".con-pass").val();
        var submit = $(".submit-btn").val();
        
        $(".errMsg").load("register.php",{
            username: username,
            fullname: fullname,
            email: email,
            contact: contact,
            addr: addr,
            addr2: addr2,
            new_pass: new_pass,
            con_pass: con_pass,
            submit: submit
        });

    });

    $("#edited").submit(function(event){
        event.preventDefault();
        var fullname = $(".fullname").val();
        var email = $(".email").val();
        var contact = $(".contact").val();
        var addr1 = $(".addr1").val();
        var addr2 = $(".addr2").val();
        var submit_btn = $(".submit-btn").val();
        
        $(".psMsg").load("register.php",{
            fullname: fullname,
            email: email,
            contact: contact,
            addr1: addr1,
            addr2: addr2,
            submit_btn: submit_btn
        });

    });


    
});
