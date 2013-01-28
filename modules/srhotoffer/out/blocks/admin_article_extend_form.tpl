[{$smarty.block.parent}]
<tr>
    <td class="edittext" width="140">
        [{ oxmultilang ident="ARTICLE_EXTEND_HOTOFFER" }]
    </td>
    <td class="edittext">
        <input type="hidden" name="editval[oxarticles__sroxhotoffer]" value='0'>
        <input class="edittext" type="checkbox" name="editval[oxarticles__sroxhotoffer]" value='1' [{if $edit->oxarticles__sroxhotoffer->value == 1}]checked[{/if}]>
        [{ oxinputhelp ident="HELP_ARTICLE_EXTEND_HOTOFFER" }]
    </td>
</tr>