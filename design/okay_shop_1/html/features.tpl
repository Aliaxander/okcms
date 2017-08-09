{* Filters *}
{if ($category->brands || $prices || $features)  && $products|count > 0}
    <a data-toggle="collapse" href="#filter" aria-expanded="false" aria-controls="filter"
       class="btn visible-xs">Фильтр</a>
    <div id="filter" class="collapse">
        {* Ajax Price filter *}
        {if $prices && $products|count > 0}
            <div class="filter-block">
                <a data-toggle="collapse" href="#filter-block-price" aria-expanded="true"
                   aria-controls="filter-block-price" data-language="features_price">{$lang->features_price}</a>
                <div class="collapse in" id="filter-block-price">
                    <div class="wrap-result clearfix">
                        <span>от<input type="text" id="fn_slider_min" name="p[min]"
                                       value="{($prices->current->min|default:$prices->range->min)|escape}"
                                       data-price="{$prices->range->min}" readonly/></span>
                        <span class="pull-right">до<input type="text" id="fn_slider_max" name="p[max]"
                                                          value="{($prices->current->max|default:$prices->range->max)|escape}"
                                                          data-price="{$prices->range->max}" readonly/>Руб.</span>
                    </div>
                    <div id="fn_slider_price"></div>
                </div>
            </div>
        {/if}

        {* Brand filter *}
        {if $category->brands}
            <div class="filter-block">
                <a data-toggle="collapse" href="#filter-block-brand" aria-expanded="true"
                   aria-controls="filter-block-brand"
                   data-language="features_manufacturer">{$lang->features_manufacturer}</a>
                <div class="collapse in" id="filter-block-brand">


                    {* Brand name *}
                    <div class="filter_group">
                        {* Display all brands *}
                        <div class="filter_item">
                            <a class="filter_link{if !$brand->id && !$smarty.get.b} checked{/if}"
                               href="{furl params=[brand=>null, page=>null]}">
                                <i class="filter_indicator"></i>
                                <span data-language="features_all">{$lang->features_all}</span>
                            </a>
                        </div>
                        {* Brand list *}
                        <ul class="check-list">
                            {foreach $category->brands as $b}
                                <li><a class="filter_link{if $brand->id == $b->id || $smarty.get.b && in_array($b->id,$smarty.get.b)} checked{/if}" href="{furl params=[brand=>$b->url, page=>null]}">
                                        <i class="filter_indicator"></i>
                                        <span>{$b->name|escape}</span>
                                    </a></li>
                                {*<div class="filter_item">*}
                                {*<a class="filter_link" href="{furl params=[brand=>$b->url, page=>null]}">*}
                                {*<i class="filter_indicator"></i>*}
                                {*<span>{$b->name|escape}</span>*}
                                {*</a>*}
                                {*</div>*}
                            {/foreach}
                        </ul>
                    </div>
                </div>
            </div>
        {/if}

        {* Features filter *}
        {if $features}
            {foreach $features as $key=>$f}
                <div class="filter-block">
                    {* Feature name *}
                    <a data-toggle="collapse" href="#filter-block-{$f->id}" aria-expanded="true" data-feature="{$f->id}"
                       aria-controls="filter-block-{$f->id}">{$f->name}</a>
                    <div class="collapse in" id="filter-block-{$f->id}">
                        <ul class="check-list">
                            <li><a class="filter_link{if !$smarty.get.$key} checked{/if}" href="{furl params=[$f->url=>null, page=>null]}">
                                    <i class="filter_indicator"></i>
                                    <span data-language="features_all">{$lang->features_all}</span>
                                </a></li>
                            {foreach $f->options as $o}
                                <li><a class="filter_link{if $smarty.get.{$f@key} && in_array($o->translit,$smarty.get.{$f@key})} checked{/if}" href="{furl params=[$f->url=>$o->translit, page=>null]}">
                                        <i class="filter_indicator"></i>
                                        <span>{$o->value|escape}</span>
                                    </a></li>
                            {/foreach}
                        </ul>
                    </div>

                    {*<div class="filter_group">*}
                    {* Display all features *}
                    {*<div class="filter_item">*}
                    {*<a class="filter_link{if !$smarty.get.$key} checked{/if}"*}
                    {*href="{furl params=[$f->url=>null, page=>null]}">*}
                    {*<i class="filter_indicator"></i>*}
                    {*<span data-language="features_all">{$lang->features_all}</span>*}
                    {*</a>*}
                    {*</div>*}
                    {* Feture value *}
                    {*{foreach $f->options as $o}*}
                    {*<div class="filter_item">*}
                    {*<a class="filter_link{if $smarty.get.{$f@key} && in_array($o->translit,$smarty.get.{$f@key})} checked{/if}"*}
                    {*href="{furl params=[$f->url=>$o->translit, page=>null]}">*}
                    {*<i class="filter_indicator"></i>*}
                    {*<span>{$o->value|escape}</span>*}
                    {*</a>*}
                    {*</div>*}
                    {*{/foreach}*}

                    {*</div>*}

                </div>
            {/foreach}
        {/if}
    </div>
{/if}