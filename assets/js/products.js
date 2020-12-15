$(document).ready(function(){
    $('#hidden_minimum_price').val(0)
    $('#page').val(1);
    $('#min').val(0);
    filter_data();

    function filter_data()
    {
        $('.filter_data').html('<div id="loading" style="" ></div>');
        var action = 'fetch_data';
        var page = $('#page').val();
        var productType =$('#product_type').val()
        var minimum_price = $('#hidden_minimum_price').val();
        var maximum_price = $('#hidden_maximum_price').val();
        var brand = get_filter('brand');
        var ram = get_filter('ram');
        var ram_type = get_filter('ram_type');
        var storage = get_filter('storage');
        var capacity = get_filter('capacity');
        var processor = get_filter('processor');
        var discount = get_filter('discount');
        var category = get_filter('category');
        var productType2 = get_filter('productType2');

        if(!discount.length)
        {
            $('#reset').hide();
        }else{
            $('#reset').show();
        }

        $.ajax({
            url:"backend/product_search_script.php",
            method:"POST",
            data:{action:action, minimum_price:minimum_price, maximum_price:maximum_price,
                 brand:brand, ram:ram, storage:storage, capacity:capacity, processor:processor, ram_type:ram_type,
                 discount:discount,page:page, productType: productType, productType2: productType2, category:category
                },
            beforeSend:function(){
                console.log('before_send')
                let loader = '<div id="loading"></div>'
                $('.filter_data').html(loader); 
            },
            success:function(data){
                setTimeout(() => {
                    $('.filter_data').html(data);
                }, 1000);
            }
        });
    }

    
    function get_filter(class_name)
    {
        var filter = [];
        $('.'+class_name+':checked').each(function(){
            filter.push($(this).val());
        });
        console.log(filter);
        return filter;
    }

    $('.common_selector').click(function(){
        $('#page').val(1);
        filter_data();
    });

    $('#reset').click(function(){
        $('.discount:checked').each(function(){
            $('.discount').attr('checked', false)
        })
        filter_data();
    })

    $('#price_range').slider({
        range:true,
        min:0,
        max:65000,
        values:[0, 65000],
        step:500,
        stop:function(event, ui)
        {
            $('#price_show').html(ui.values[0] + ' - ' + ui.values[1]);
            $('#hidden_minimum_price').val(ui.values[0]);
            $('#min').val(ui.values[0]);
            $('#hidden_maximum_price').val(ui.values[1]);
            $('#max').val(ui.values[1]);
            filter_data();
        }
    });

    $('#apply').click(function(){
        let max = $('#max').val();
        let min = $('#min').val();
        $('#hidden_maximum_price').val(max)
        $('#hidden_minimum_price').val(min)
        console.log(max,min)
        $('#price_range').slider({
            range:true,
            min:0,
            max:65000,
            values:[min, max],
        })
        filter_data();
    });

    $(document).on('click','.page_link', function(){
        console.log($(this))
        var page = $(this).attr("id");
        console.log(page)
        document.getElementById('page').value= page
        $('#page').val(page);
        filter_data();

    })

    $(document).on('click','.prev_link', function(){
        let lastPage = Number(document.getElementById('page').value)
        console.log(lastPage)
        if (lastPage > 1){
            let newPage = lastPage - 1
            console.log(newPage)
            document.getElementById('page').value = newPage;
            filter_data();
        }

    })

    $(document).on('click','.next_link', function(){
        let lastPage = Number(document.getElementById('page').value)
        console.log(lastPage)
            let newPage = lastPage + 1
            console.log(newPage)
            document.getElementById('page').value = newPage;
            filter_data();

    })

    

    function search_data(){
        console.log('am submitting');
        let fullSearch = 'search';
        let searchText = $('#searchText').val();
        let productType =$('#product_type').val()
        let page = $('#page').val();
        $.ajax({
            url:"backend/product_search_script.php",
            method:"POST",
            data: {
                fullSearch: fullSearch,
                searchText: searchText,
                change_page: page,
                productType: productType,
            },
            beforeSend: function(){
                let loader = '<div id="loading"></div>'
                $('.filter_data').html(loader); 
            },
            success: function(data){
                setTimeout(()=>{
                    // $('.filter_data').html(''); 
                    $('.filter_data').html(data); 
                },1000)
            }
        })
    }


    $(document).on('click','.page_link_search', function(){
        var page = $(this).attr("id");
        console.log(page)
        document.getElementById('page').value= page
        search_data();

    })

    $(document).on('click','.prev_link_search', function(){
        let lastPage = Number(document.getElementById('page').value)
        console.log(lastPage)
        if (lastPage > 1){
            let newPage = lastPage - 1
            console.log(newPage)
            document.getElementById('page').value = newPage;
            search_data();
        }

    })
    $(document).on('click','.next_link_search', function(){
        let lastPage = Number(document.getElementById('page').value)
        console.log(lastPage)
            let newPage = lastPage + 1
            console.log(newPage)
            document.getElementById('page').value = newPage;
            search_data();

    })
    $(document).on('click','.wishlist', function(){
        let productId = $(this).attr("data-id");
        let wish = "add-wish";
        $.ajax({
            type:"POST",
            url: "backend/wishlist_script.php",
            data:{
                wish: wish,
                productId: productId,
            },
            success:function(data){
                let icon = document.querySelector("#my-"+productId);
                if (data === "true"){
                    icon.classList.add("icon-cog");
                }else{
                    icon.classList.remove("icon-cog")
                }
            }
        })

    })

    $(document).on('click', '.cart', function(){
        let productId = $(this).attr("data-id");
        let addToCart = "add_to_cart";
        $.ajax({
            type:"POST",
            url: "backend/add_to_cart_script.php",
            data:{
                addToCart: addToCart,
                productId: productId,
            },
            success:function(data){
                if (data === "true"){
                    window.location.href='cart.php';
                }else if (data === "false"){
                    alert("Item already added to cart");
                }else{
                    window.location.href='login.php';
                }
            },
            error: function(error){
                alert(error);
            },

            async:false,
        })
    })
})