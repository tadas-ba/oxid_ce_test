<td valign="top" class="listfilter first" align="right">
    <div class="r1"><div class="b1">&nbsp;</div></div>
</td>
<td valign="top" class="listfilter" align="left">
    <div class="r1"><div class="b1">
        <input class="listedit" type="text" size="9" maxlength="128" name="where[oxarticles][oxartnum]" value="[{ $where.oxarticles.oxartnum}]">
    </div></div>
</td>
<td height="20" valign="middle" class="listfilter" nowrap>
    <div class="r1"><div class="b1">
        <select name="art_category" class="editinput" onChange="Javascript:document.search.lstrt.value=0;document.search.submit();">
            <option value="">[{ oxmultilang ident="ARTICLE_LIST_ALLPRODUCTS" }]</option>
            <optgroup label="[{ oxmultilang ident="GENERAL_CATEGORY" }]">
            [{foreach from=$cattree->aList item=pcat}]
            <option value="cat@@[{ $pcat->oxcategories__oxid->value }]" [{ if $pcat->selected}]SELECTED[{/if}]>[{ $pcat->oxcategories__oxtitle->getRawValue() }]</option>
            [{/foreach}]
            </optgroup>
            <optgroup label="[{ oxmultilang ident="GENERAL_MANUFACTURER" }]">
            [{foreach from=$mnftree item=pmnf}]
            <option value="mnf@@[{ $pmnf->oxmanufacturers__oxid->value }]" [{ if $pmnf->selected}]SELECTED[{/if}]>[{ $pmnf->oxmanufacturers__oxtitle->value }]</option>
            [{/foreach}]
            </optgroup>
            <optgroup label="[{ oxmultilang ident="GENERAL_VENDOR" }]">
            [{foreach from=$vndtree item=pvnd}]
            <option value="vnd@@[{ $pvnd->oxvendor__oxid->value }]" [{ if $pvnd->selected}]SELECTED[{/if}]>[{ $pvnd->oxvendor__oxtitle->value }]</option>
            [{/foreach}]
            </optgroup>
        </select>
        <select name="pwrsearchfld" class="editinput" onChange="Javascript:document.search.lstrt.value=0;top.oxid.admin.setSorting( document.search, 'oxarticles', this.value, 'asc');document.forms.search.submit();">
            [{foreach from=$pwrsearchfields key=field item=desc}]
            [{assign var="ident" value=GENERAL_ARTICLE_$desc}]
            [{assign var="ident" value=$ident|oxupper }]
            <option value="[{ $desc }]" [{ if $pwrsearchfld == $desc|oxupper }]SELECTED[{/if}]>[{ oxmultilang|oxtruncate:20:"..":true noerror=true alternative=$desc ident=$ident }]</option>
            [{/foreach}]
        </select>
        <input class="listedit" type="text" size="20" maxlength="128" name="where[oxarticles][[{$pwrsearchfld|oxlower}]]" value="[{ $pwrsearchinput}]" [{include file="help.tpl" helpid=searchfieldoxdynamic}]>
    </div></div>
</td>
<td height="20" valign="middle" class="listfilter" nowrap>
    <div class="r1"><div class="b1 n18">
        <input class="listedit" type="checkbox" name="where[oxarticles][sroxhotoffer]" value="1"
        [{if $where.oxarticles.sroxhotoffer == 1}]checked[{/if}]
        onChange="Javascript:document.search.lstrt.value=0;document.search.submit();">
    </div></div>
</td>
<td valign="top" class="listfilter" colspan="2" nowrap>
    <div class="r1"><div class="b1">
        <div class="find">
            <select name="changelang" class="editinput" onChange="Javascript:top.oxid.admin.changeLanguage();">
                [{foreach from=$languages item=lang}]
                <option value="[{ $lang->id }]" [{ if $lang->selected}]SELECTED[{/if}]>[{ $lang->name }]</option>
                [{/foreach}]
            </select>
            <input class="listedit" type="submit" name="submitit" value="[{ oxmultilang ident="GENERAL_SEARCH" }]" onClick="Javascript:document.search.lstrt.value=0;">
        </div>
        <input class="listedit" type="text" size="25" maxlength="128" name="where[oxarticles][oxshortdesc]" value="[{ $where.oxarticles.oxshortdesc}]" [{include file="help.tpl" helpid=searchfieldoxshortdesc}]>
    </div></div>
</td>