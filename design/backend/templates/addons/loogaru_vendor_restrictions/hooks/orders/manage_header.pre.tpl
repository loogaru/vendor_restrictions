{if "MULTIVENDOR"|fn_allowed_for && $runtime.company_id}
	{assign "order_status_descr_original" $order_status_descr scope="root"}
{/if}