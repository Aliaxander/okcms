{* Filters *}
{if ($category->brands || $prices || $features)  && $products|count > 0}
    <a data-toggle="collapse" href="#filter" aria-expanded="false" aria-controls="filter"
       class="btn visible-xs" data-language="filters">{$lang->filters}</a>
    <div id="filter" class="collapse">
        {* Ajax Price filter *}
        {if $prices && $products|count > 0}
                <!-- filter-block -->
                <div class="filter-block">
                    <a data-toggle="collapse" href="#filter-block-2" aria-expanded="true" aria-controls="filter-block-2" data-language="features_price">{$lang->features_price}</a>
                    <div class="collapse in" id="filter-block-2">
                        <div class="wrap-result clearfix">
                            <span>от<input type="text" id="min" name="p[min]" value="{($prices->current->min|default:$prices->range->min)|escape}"  readonly /></span>
                            <span class="pull-right">до<input type="text" id="max" name="p[max]" value="{($prices->current->max|default:$prices->range->max)|escape}" readonly />Руб.</span>
                        </div>
                        <div id="slider-range"></div>
                    </div>
                </div>
                <!-- /filter-block -->
        {/if}

        {* Brand filter *}
        {if $category->brands}

            <!-- filter-block -->
            <div class="filter-block">
                <a data-toggle="collapse" href="#filter-block-3" aria-expanded="true" aria-controls="filter-block-3" data-language="features_manufacturer">{$lang->features_manufacturer}</a>
                <div class="collapse in" id="filter-block-3">
                    <ul class="check-list">
                        <li><label><input type="checkbox">ASUS <span class="text-grey">(70)</span></label></li>
                        <li><label><input type="checkbox">HP <span class="text-grey">(48)</span></label></li>
                        <li><label><input type="checkbox" checked>Acer <span class="text-grey">(35)</span></label></li>
                        <li><label><input type="checkbox">MSI <span class="text-grey">(18)</span></label></li>
                        <li><label><input type="checkbox">Lenovo <span class="text-grey">(18)</span></label></li>
                        <li><label><input type="checkbox">Apple <span class="text-grey">(13)</span></label></li>
                        <li><label><input type="checkbox">Dell <span class="text-grey">(11)</span></label></li>
                        <li><label><input type="checkbox">Irbis <span class="text-grey">(2)</span></label></li>
                        <li><label><input type="checkbox">Prestigio <span class="text-grey">(2)</span></label></li>
                        <li><label><input type="checkbox">4Good <span class="text-grey">(1)</span></label></li>
                    </ul>
                </div>
            </div>
            <!-- /filter-block -->

            {* Brand name *}
            <div class="h2 filter_name">
                <span data-language="features_manufacturer">{$lang->features_manufacturer}</span>
            </div>
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
                {foreach $category->brands as $b}
                    <div class="filter_item">
                        <a class="filter_link{if $brand->id == $b->id || $smarty.get.b && in_array($b->id,$smarty.get.b)} checked{/if}"
                           href="{furl params=[brand=>$b->url, page=>null]}">
                            <i class="filter_indicator"></i>
                            <span>{$b->name|escape}</span>
                        </a>
                    </div>
                {/foreach}
            </div>
        {/if}

        {* Features filter *}
        {if $features}
            {foreach $features as $key=>$f}
                {* Feature name *}
                <div class="h2 filter_name" data-feature="{$f->id}">{$f->name}</div>
                <div class="filter_group">
                    {* Display all features *}
                    <div class="filter_item">
                        <a class="filter_link{if !$smarty.get.$key} checked{/if}"
                           href="{furl params=[$f->url=>null, page=>null]}">
                            <i class="filter_indicator"></i>
                            <span data-language="features_all">{$lang->features_all}</span>
                        </a>
                    </div>
                    {* Feture value *}
                    {foreach $f->options as $o}
                        <div class="filter_item">
                            <a class="filter_link{if $smarty.get.{$f@key} && in_array($o->translit,$smarty.get.{$f@key})} checked{/if}"
                               href="{furl params=[$f->url=>$o->translit, page=>null]}">
                                <i class="filter_indicator"></i>
                                <span>{$o->value|escape}</span>
                            </a>
                        </div>
                    {/foreach}

                </div>
            {/foreach}
        {/if}
    </div>
{/if}
