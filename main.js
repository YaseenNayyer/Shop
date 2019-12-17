




$(document).ready(function(){
    
    $("#MyForm").on("submit",function () {

         
        if ($("#customer_name").val()== "") {
            $("#customer_name").addClass("border-danger");
            $("#cat_error").html("<span class ='text-danger'>Please Enter catagory</span>");
        }
        else{
            $.ajax({
                url : DOMAIN+"index-2.php",
                method : "POST",
                data : $("#MyForm").serialize(),
                success : function(data){
                    if (data=="customer added") {}
                    $("#Catagory_name").removeClass("border-danger");
                    $("#cat_error").html("<span class ='text-success'>Catagory Added</span>");
                    $("#Catagory_name").val("");
                  //  fetch_catagory();
                    alert(data);
                }

            })

        }
    })



})