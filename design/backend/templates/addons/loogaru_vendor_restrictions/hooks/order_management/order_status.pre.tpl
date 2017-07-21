{if "MULTIVENDOR"|fn_allowed_for && $runtime.company_id}
	{$order_statuses|fn_loogaru_vendor_restrictions_statuses}
{/if}