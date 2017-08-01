<ul class="dropdown-menu" role="menu">
    {function name=categories_tree}
        {if $categories}
            {foreach $categories as $c}
                {if $c->visible}
                    <li class="category_item">
                        <a class="category_link{if $category->id == $c->id} selected{/if}"
                           href="{$lang_link}catalog/{$c->url}" data-category="{$c->id}">{$c->name|escape}</a>
                        {if $c->subcategories && $c->has_children_visible}
                            <div class="sub-list">
                                <div class="row">
                                    <p>{$c->name|escape}</p>
                                    <ul>
                                        {foreach $c->subcategories as $sub}
                                            <li><a class="category_link{if $category->id == $sub->id} selected{/if}"
                                                   href="/catalog/{$sub->url}"
                                                   data-category="{$sub->id}">{$sub->name|escape}</a></li>
                                        {/foreach}
                                    </ul>
                                </div>
                            </div>
                        {/if}
                    </li>
                {/if}
            {/foreach}
        {/if}
    {/function}
    {categories_tree categories=$categories level=1}
</ul>