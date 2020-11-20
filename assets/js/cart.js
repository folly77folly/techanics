$(document).ready(function(){
    fetch_cart();

    function fetch_cart(){
        let action = "fetch_data";
        $.ajax({
            method:"GET",
            url: "backend/cart_script.php",
            data:{
                action:action,
            },
            success:function(data){
                // console.log(data)
                 $('.cart_data').html(data)
            }
        })
        cart_summary();
    }

    function cart_summary(){
        let cartSummary = "cart_summary";
        $.ajax({
            method:"GET",
            url: "backend/cart_script.php",
            data:{
                cartSummary:cartSummary,
            },
            success:function(data){
                console.log('cart',data)
                 $('.summary_data').html(data);
            }
        })
    }

    $(document).on('click','.increase',function(){
        let cartId = $(this).attr("id");
        $.ajax({
            method:"POST",
            url:"backend/cart_script.php",
            data:{
                addCart: cartId,
            },

            success:function(data){
                console.log(data);
            }
        })
        fetch_cart();
    })

    $(document).on('click','.decrease',function(){
        let cartId = $(this).attr("id");
        $.ajax({
            method:"POST",
            url:"backend/cart_script.php",
            data:{
                minusCart: cartId,
            },

            success:function(data){
                console.log(data);
            }
        })
        fetch_cart();
    })

    $(document).on('click','.remove',function(){
        let btnId = $(this).attr("data-id");
        let removeItem = "remove" 
        let $answer = confirm("Are You Show to Remove the Selected item?")
        if($answer){
            $.ajax({
                method:"POST",
                url:"backend/cart_script.php",
                data:{
                    removeItem:removeItem,
                    cartID: btnId
                },
                success:function(data){
                    alert(data);
                    $('.item-display-'+btnId).hide("slow");
                    fetch_cart();
                },
                error:function(error){
                    console.log(error);
                    alert(error.statusText);
                }
            })

        }
    })

})