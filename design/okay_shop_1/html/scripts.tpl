<script>
    /* Глобальный обьект */
    /* все глобальные переменные добавляем в оъект и работаем с ним!!! */
    var okay = {literal}{}{/literal};

    {* Предзаказ *}
    okay.is_preorder = {$settings->is_preorder};
    {* Ошибка при отправке комментария в посте *}
    {if $smarty.get.module == 'BlogView' && $error}
        {* Переход по якорю к форме *}
        $( window ).load( function() {
            location.href = location.href + '#fn_blog_comment';
            $( '#fn_blog_comment' ).trigger( 'submit' );
        } );
    {/if}

    {* Обратный звонок, отправка формы *}
    {if $call_sent}
        $( function() {
            $.fancybox.open( {
                src: '#fn_callback_sent',
                type : 'inline',
            } );
        } );
    {/if}

    {* Карточка товара, ошибка в форме *}
    {if $smarty.get.module == 'ProductView' && $error}
        $( window ).load( function() {
            $( '.tab_navigation a' ).removeClass( 'selected' );
            $( '.tab' ).hide();
            $( 'a[href="#comments"]' ).addClass( 'selected' );
             $( '#comments').show();
            location.href = location.href + '#fn-product_comment';
        } );
    {* Карточка товара, отправка комментария *}
    {elseif $smarty.get.module == 'ProductView'}
        $( window ).load( function() {
            if( location.hash.search('comment') !=-1 ) {
                $( '.tab_navigation a' ).removeClass( 'selected' );
                $( '.tab' ).hide();
                $( 'a[href="#comments"]' ).addClass( 'selected' );
                 $( '#comments').show();
            }
        } );
    {/if}

    {if $subscribe_success}
        $( function() {
            $.fancybox.open( {
                src: '#fn_subscribe_sent',
                type : 'inline',
            } );
        } );
    {elseif $subscribe_error}
        $( window ).load( function() {
            location.href = location.href + '#subscribe_error';
            $.fancybox.open( {
                src: '#subscribe_error',
                type : 'inline',
            } );
        } );
    {/if}
    
    {if $smarty.get.module == "MainView" || $smarty.get.module == "ProductsView" || $smarty.get.module == "ProductView" || $smarty.get.module == "ComparisonView" || $smarty.get.module == "WishlistView" || $smarty.get.module == "BlogView"}
        $(document).ready(function(){
            $('select[name=variant]').each(function(){
                var first_in_stock = $(this).find('option[data-stock!="0"]').first();
                first_in_stock.attr('selected',true);
                first_in_stock.trigger('change');
            });
        });
    {/if}

</script>
