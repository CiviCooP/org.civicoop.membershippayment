{capture name="membership_payment" assign="membership_payment"}
    <tr class="crm-membership_payment-form-block-membership_id">
        <td class="label">{$form.membership_id.label}</td>
        <td>{$form.membership_id.html}</td>
    </tr>
{/capture}

<script type="text/javascript">
    {literal}
    cj(function() {
        cj('tr.crm-contribution-form-block-contribution_status_id').after('{/literal}{$membership_payment|escape:'javascript'}{literal}');
    });
    {/literal}
</script>