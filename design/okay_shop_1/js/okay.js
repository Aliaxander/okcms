/* Начальное кол-во для смены в карточке и корзине */
okay.amount = 1;

/* Аяксовая корзина */
$(document).on('submit', '.fn_variants', function(e) {
    e.preventDefault();
    var variant,
        amount;
    /* Вариант */
    if($(this).find('input[name=variant]:checked').size() > 0 ) {
        variant = $(this).find('input[name=variant]:checked').val();
    } else if($(this ).find('input[name=variant]').size() > 0 ) {
        variant = $(this).find('input[name=variant]').val();
    } else if($(this).find('select[name=variant]').size() > 0 ) {
        variant = $(this).find('select[name=variant]').val();
    }
    /* Кол-во */
    if($(this).find('input[name=amount]').size()>0) {
        amount = $(this).find('input[name=amount]').val();
    } else {
        amount = 1;
    }
    /* ajax запрос */
    $.ajax( {
        url: "ajax/cart.php",
        data: {
            variant: variant,
            amount: amount
        },
        dataType: 'json',
        success: function(data) {
            $( '#cart_informer' ).html( data );
        }
    } );
    /* Улеталка */
    //transfer( $('#cart_informer'), $(this) );
});

/* Аяксовый фильтр по цене slider-range*/
if( $( '#slider-range' ).size() ) {
    var slider_all = $( '#fn_slider_min, #fn_slider_max' ),
        slider_min = $( '#fn_slider_min' ),
        slider_max = $( '#fn_slider_max' ),
        current_min = slider_min.val(),
        current_max = slider_max.val(),
        range_min = slider_min.data( 'price' ),
        range_max = slider_max.data( 'price' ),
        link = window.location.href.replace( /\/page-(\d{1,5})/, '' ),
        ajax_slider = function() {
            $.ajax( {
                url: link,
                data: {
                    ajax: 1,
                    'p[min]': slider_min.val(),
                    'p[max]': slider_max.val()
                },
                dataType: 'json',
                success: function(data) {
                    $( '#fn_products_content' ).html( data.products_content );
                    $( '.fn_pagination' ).html( data.products_pagination );
                    $('.fn_products_sort').html(data.products_sort);

                    $('.fn_ajax_wait').remove();
                }
            } );
        };
    link = link.replace(/\/sort-([a-zA-Z_]+)/, '');

    $( '#slider-range' ).slider( {
        range: true,
        min: range_min,
        max: range_max,
        values: [current_min, current_max],
        slide: function(event, ui) {
            slider_min.val( ui.values[0] );
            slider_max.val( ui.values[1] );
        },
        stop: function(event, ui) {
            slider_min.val( ui.values[0] );
            slider_max.val( ui.values[1] );
            $('.fn_categories').append('<div class="fn_ajax_wait"></div>');
            ajax_slider();
        }
    } );

    slider_all.on( 'change', function() {
        $( "#slider-range" ).slider( 'option', 'values', [slider_min.val(), slider_max.val()] );
        ajax_slider();
    } );

    // Если после фильтрации у нас осталось товаров на несколько страниц, то постраничную навигацию мы тоже проведем с помощью ajax чтоб не сбить фильтр по цене
    $( document ).on( 'click', '.fn_is_ajax a', function(e) {
        e.preventDefault();
        $('.fn_categories').append('<div class="fn_ajax_wait"></div>');
        var link = $(this).attr( 'href' ),
            send_min = $("#fn_slider_min").val();
        send_max = $("#fn_slider_max").val();
        $.ajax( {
            url: link,
            data: { ajax: 1, 'p[min]': send_min, 'p[max]': send_max },
            dataType: 'json',
            success: function(data) {
                $( '#fn_products_content' ).html( data.products_content );
                $( '.fn_pagination' ).html( data.products_pagination );
                $('#fn_products_sort').html(data.products_sort);

                $('.fn_ajax_wait').remove();
            }
        } );
    } );
}

/* Смена варианта в превью товара и в карточке */
$(document).on('change', '.fn_variant', function() {
    var selected = $( this ).children( ':selected' ),
        parent = selected.closest( '.fn_product' ),
        price = parent.find( '.fn_price' ),
        cprice = parent.find( '.fn_old_price' ),
        sku = parent.find( '.fn_sku' ),
        stock = parseInt( selected.data( 'stock' ) ),
        amount = parent.find( 'input[name="amount"]' ),
        camoun = parseInt( amount.val() );
    price.html( selected.data( 'price' ) );
    amount.data('max', stock);
    /* Количество товаров */
    if ( stock < camoun ) {
        amount.val( stock );
    } else if ( okay.amount > camoun ) {
        amount.val( okay.amount );
    }
    else if(isNaN(camoun)){
        amount.val( okay.amount );
    }
    /* Цены */
    if( selected.data( 'cprice' ) ) {
        cprice.html( selected.data( 'cprice' ) );
        cprice.parent().removeClass( 'hidden' );
    } else {
        cprice.parent().addClass( 'hidden' );
    }
    /* Артикул */
    if( typeof(selected.data( 'sku' )) != 'undefined' ) {
        sku.text( selected.data( 'sku' ) );
        sku.parent().removeClass( 'hidden' );
    } else {
        sku.text( '' );
        sku.parent().addClass( 'hidden' );
    }
    /* Наличие на складе */
    if (stock == 0) {
        parent.find('.fn_not_stock').removeClass('hidden');
        parent.find('.fn_in_stock').addClass('hidden');
    } else {
        parent.find('.fn_in_stock').removeClass('hidden');
        parent.find('.fn_not_stock').addClass('hidden');
    }
    /* Предзаказ */
    if (stock == 0 && okay.is_preorder) {
        parent.find('.fn_is_preorder').removeClass('hidden');
        parent.find('.fn_is_stock, .fn_not_preorder').addClass('hidden');
    } else if (stock == 0 && !okay.is_preorder) {
        parent.find('.fn_not_preorder').removeClass('hidden');
        parent.find('.fn_is_stock, .fn_is_preorder').addClass('hidden');
    } else {
        parent.find('.fn_is_stock').removeClass('hidden');
        parent.find('.fn_is_preorder, .fn_not_preorder').addClass('hidden');
    }
});

/* Количество товара в карточке и корзине */
$( document ).on( 'click', '.fn_product_amount span', function() {
    var input = $( this ).parent().find( 'input' ),
        action;
    if ( $( this ).hasClass( 'plus' ) ) {
        action = 'plus';
    } else if ( $( this ).hasClass( 'minus' ) ) {
        action = 'minus';
    }
    amount_change( input, action );
} );

/* Функция добавления / удаления в папку сравнения */
$(document).on('click', '.fn_comparison', function(e){
    e.preventDefault();
    var button = $( this ),
        action = $( this ).hasClass( 'selected' ) ? 'delete' : 'add',
        product = parseInt( $( this ).data( 'id' ) );
    /* ajax запрос */
    $.ajax( {
        url: "ajax/comparison.php",
        data: { product: product, action: action },
        dataType: 'json',
        success: function(data) {
            $( '#comparison' ).html( data );
            /* Смена класса кнопки */
            if( action == 'add' ) {
                button.addClass( 'selected' );
            } else if( action == 'delete' ) {
                button.removeClass( 'selected' );
            }
            /* Смена тайтла */
            if( button.attr( 'title' ) ) {
                var text = button.data( 'result-text' ),
                    title = button.attr( 'title' );
                button.data( 'result-text', title );
                button.attr( 'title', text );
            }
            /* Если находимся на странице сравнения - перезагрузить */
            if( $( '.fn_comparison_products' ).size() ) {
                window.location = window.location;
            }
        }
    } );
    /* Улеталка */
    if( !button.hasClass( 'selected' ) ) {
        //transfer( $( '#comparison' ), $( this ) );
    }
});

/* Функция добавления / удаления в папку избранного */
$(document).on('click', '.fn_wishlist', function(e){
    e.preventDefault();
    var button = $( this ),
        action = $( this ).hasClass( 'selected' ) ? 'delete' : '';
    /* ajax запрос */
    $.ajax( {
        url: "ajax/wishlist.php",
        data: { id: $( this ).data( 'id' ), action: action },
        dataType: 'json',
        success: function(data) {
            $( '#wishlist' ).html( data.info );
            /* Смена класса кнопки */
            if (action == '') {
                button.addClass( 'selected' );
            } else {
                button.removeClass( 'selected' );
            }
            /* Смена тайтла */
            if( button.attr( 'title' ) ) {
                var text = button.data( 'result-text' ),
                    title = button.attr( 'title' );
                button.data( 'result-text', title );
                button.attr( 'title', text );
            }
            /* Если находимся на странице сравнения - перезагрузить */
            if( $( '.fn_wishlist_page' ).size() ) {
                window.location = window.location;
            }
        }
    } );
    /* Улеталка */
    if( !button.hasClass( 'selected' ) ) {
        //transfer( $( '#wishlist' ), $( this ) );
    }
});

/* Отправка купона по нажатию на enter */
$( document ).on( 'keypress', '.fn_coupon', function(e) {
    if( e.keyCode == 13 ) {
        e.preventDefault();
        ajax_coupon();
    }
} );

/* Отправка купона по нажатию на кнопку */
$( document ).on( 'click', '.fn_sub_coupon', function(e) {
    ajax_coupon();
} );

/* Document ready */
$(function(){

    $(function(){
        $(window).scroll(function() {
            var screen = $(document);
            if (screen.scrollTop() < 140) {
                $(".header_bottom").removeClass('fixed');
            } else {
                $(".header_bottom").addClass('fixed');
            }
        });
    });

    /* Обратный звонок */
    $('.fn_callback').fancybox();

    // Выпадающие блоки
    $('.fn_switch').click(function(e){
        e.preventDefault();

        $(this).next().slideToggle(300);

        if ($(this).hasClass('active')) {
            $(this).removeClass('active');
        }
        else {
            $(this).addClass('active');
        }
    });

     /* Главное меню для мобильных */
    $('.fn_menu_switch').on("click", function(){
        $('.menu').toggle("normal");
        $('body').toggleClass('openmenu');
    })

    //Фильтры мобильные, каталог мобильные
    $('.subswitch').click(function(){
        $(this).parent().next().slideToggle(500);

        if ($(this).hasClass('down')) {
            $(this).removeClass('down');
        }
        else {
            $(this).addClass('down');
        }
    });
    $('.catalog_menu .selected').parents('.parent').addClass('opened').find('> .switch').addClass('active');

    //Кнопка вверх
    $(window).scroll(function () {
    var scroll_height = $(window).height();

     if ($(this).scrollTop() >= scroll_height) {
            $('.to_top').fadeIn();
        } else {
            $('.to_top').fadeOut();
        }
    });

    $('.to_top').click(function(){
        $("html, body").animate({scrollTop: 0}, 500);
    });

    /* Инициализация баннера */
    $('.fn_banner_group1').slick({
        infinite: true,
        speed: 1000,
        slidesToShow: 1,
        slidesToScroll: 1,
        swipeToSlide : true,
        dots: true,
        arrows: false,
        adaptiveHeight: true,
        autoplaySpeed: 5000,
        autoplay: true,
        fade: true
    });


    /* Бренды слайдер*/
    $(".fn_all_brands").slick({
        infinite: true,
        speed: 500,
        slidesToShow: 4,
        slidesToScroll: 1,
        arrows: true,
        responsive: [
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 3
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 2
                }
            },
            {
                breakpoint: 420,
                settings: {
                    slidesToShow: 1
                }
            }
        ]
    });

    /* Инициализация доп. фото в карточке */
    $(".fn_images").slick({
        infinite: false,
        speed: 500,
        slidesToShow: 6,
        slidesToScroll: 1,
        swipeToSlide : true,
        arrows: true,
        responsive: [
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 5
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 4
                }
            },
            {
                breakpoint: 481,
                settings: {
                    slidesToShow: 3
                }
            }
        ]
    });


    $('.blog_item').matchHeight();
    $('.news_item').matchHeight();
    $('.brand_item').matchHeight();
    $('.products_item').matchHeight();
    $('.fn_col').matchHeight();

    


    /* Зум картинок в карточке */
    $('[data-fancybox]').fancybox({
        image : {
            protect: true
        }
    });

    /* Автозаполнитель поиска */
    $( ".fn_search" ).autocomplete( {
        serviceUrl: 'ajax/search_products.php',
        minChars: 1,
        noCache: false,
        onSelect: function(suggestion) {
            $( "#fn_search" ).submit();
        },
        formatResult: function(suggestion, currentValue) {
            var reEscape = new RegExp( '(\\' + ['/', '.', '*', '+', '?', '|', '(', ')', '[', ']', '{', '}', '\\'].join( '|\\' ) + ')', 'g' );
            var pattern = '(' + currentValue.replace( reEscape, '\\$1' ) + ')';
            return "<div>" + (suggestion.data.image ? "<img align=absmiddle src='" + suggestion.data.image + "'> " : '') + "</div>" + "<a href=" + suggestion.lang + "products/" + suggestion.data.url + '>' + suggestion.value.replace( new RegExp( pattern, 'gi' ), '<strong>$1<\/strong>' ) + '<\/a>' + "<span>" + suggestion.price + " " + suggestion.currency + "</span>";
        }
    } );

    /* Переключатель способа оплаты */
    $( document ).on( 'click', '[name="payment_method_id"]', function() {
        $( '[name="payment_method_id"]' ).parent().removeClass( 'active' );
        $( this ).parent().addClass( 'active' );
    } );
});


/* Обновление блоков: cart_informer, cart_purchases, cart_deliveries */
function ajax_set_result(data) {
    $( '#cart_informer' ).html( data.cart_informer );
    $( '#fn_purchases' ).html( data.cart_purchases );
    $( '#fn_ajax_deliveries' ).html( data.cart_deliveries );
}

/* Аяксовое изменение кол-ва товаров в корзине */
function ajax_change_amount(object, variant_id) {
    var amount = $( object ).val(),
        coupon_code = $( 'input[name="coupon_code"]' ).val(),
        delivery_id = $( 'input[name="delivery_id"]:checked' ).val(),
        payment_id = $( 'input[name="payment_method_id"]:checked' ).val();
    /* ajax запрос */
    $.ajax( {
        url: 'ajax/cart_ajax.php',
        data: {
            coupon_code: coupon_code,
            action: 'update_citem',
            variant_id: variant_id,
            amount: amount
        },
        dataType: 'json',
        success: function(data) {
            if( data.result == 1 ) {
                ajax_set_result( data );
                $( '#deliveries_' + delivery_id ).trigger( 'click' );
                $( '#payment_' + delivery_id + '_' + payment_id ).trigger( 'click' );
            } else {
                $( '#cart_informer' ).html( data.cart_informer );
                $(".fn_ajax_content").html( data.content );
            }
        }
    } );
}

/* Функция изменения количества товаров */
function amount_change(input, action) {
    var max_val,
        curr_val = parseFloat( input.val() ),
        step = 1,
        id = input.data('id');
        if(isNaN(curr_val)){
            curr_val = okay.amount;
        }

    /* Если включен предзаказ макс. кол-во товаров ставим 50 */
    if ( input.parent().hasClass('fn_is_preorder')) {
        max_val = 50;
    } else {
        max_val = parseFloat( input.data( 'max' ) );
    }
    /* Изменение кол-ва товара */
    if( action == 'plus' ) {
        input.val( Math.min( max_val, Math.max( 1, curr_val + step ) ) );
        input.trigger('change');
    } else if( action == 'minus' ) {
        input.val( Math.min( max_val, Math.max( 1, (curr_val - step) ) ) );
        input.trigger('change');
    } else if( action == 'keyup' ) {
        input.val( Math.min( max_val, Math.max( 1, curr_val ) ) );
        input.trigger('change');
    }
    okay.amount = parseInt( input.val() );
    /* в корзине */
    if( $('div').is('#fn_purchases') && ( (max_val != curr_val && action == 'plus' ) || ( curr_val != 1 && action == 'minus' ) ) ) {
        ajax_change_amount( input, id );
    }
}

/* Функция анимации добавления товара в корзину */
function transfer(informer, thisEl) {
    var o1 = thisEl.offset(),
        o2 = informer.offset(),
        dx = o1.left - o2.left,
        dy = o1.top - o2.top,
        distance = Math.sqrt(dx * dx + dy * dy);

    thisEl.closest( '.fn_transfer' ).find( '.fn_img' ).effect( "transfer", {
        to: informer,
        className: "transfer_class"
    }, distance );

    var container = $( '.transfer_class' );
    container.html( thisEl.closest( '.fn_transfer' ).find( '.fn_img' ).parent().html() );
    container.find( '*' ).css( 'display', 'none' );
    container.find( '.fn_img' ).css( {
        'display': 'block',
        'height': '100%',
        'z-index': '2',
        'position': 'relative'
    } );
}

/* Аяксовый купон */
function ajax_coupon() {
    var coupon_code = $('input[name="coupon_code"]').val(),
        delivery_id = $('input[name="delivery_id"]:checked').val(),
        payment_id = $('input[name="payment_method_id"]:checked').val();
    /* ajax запрос */
    $.ajax( {
        url: 'ajax/cart_ajax.php',
        data: {
            coupon_code: coupon_code,
            action: 'coupon_apply'
        },
        dataType: 'json',
        success: function(data) {
            if( data.result == 1 ) {
                ajax_set_result( data );
                $( '#deliveries_' + delivery_id ).trigger( 'click' );
                $( '#payment_' + delivery_id + '_' + payment_id ).trigger( 'click' );
            } else {
                $( '#cart_informer' ).html( data.cart_informer );
                $(".fn_ajax_content").html( data.content );
            }
        }
    } );
}

/* Изменение способа доставки */
function change_payment_method($id) {
    $( "#fn_delivery_payment_" + $id + " [name='payment_method_id']" ).first().trigger('click');
    $( ".fn_delivery_payment" ).hide();
    $( "#fn_delivery_payment_" + $id ).show();
    $( 'input[name="delivery_id"]' ).parent().removeClass( 'active' );
    $( '#deliveries_' + $id ).parent().addClass( 'active' );
}

/* Аяксовое удаление товаров в корзине */
function ajax_remove(variant_id) {
    var coupon_code = $('input[name="coupon_code"]').val(),
        delivery_id = $('input[name="delivery_id"]:checked').val(),
        payment_id = $('input[name="payment_method_id"]:checked').val();
    /* ajax запрос */
    $.ajax( {
        url: 'ajax/cart_ajax.php',
        data: {
            coupon_code: coupon_code,
            action: 'remove_citem',
            variant_id: variant_id
        },
        dataType: 'json',
        success: function(data) {
            if( data.result == 1 ) {
                ajax_set_result( data );
                $( '#deliveries_' + delivery_id ).trigger( 'click' );
                $( '#payment_' + delivery_id + '_' + payment_id ).trigger( 'click' );
            } else {
                $( '#cart_informer' ).html( data.cart_informer );
                $(".fn_ajax_content").html( data.content );
            }
        }
    } );
}

