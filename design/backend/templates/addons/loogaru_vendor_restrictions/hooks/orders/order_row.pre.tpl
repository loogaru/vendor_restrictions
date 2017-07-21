{if "MULTIVENDOR"|fn_allowed_for && $runtime.company_id}
  {$order_status_descr|fn_loogaru_vendor_restrictions_statuses}
  {$order_status_descr[$o.status]=$order_status_descr_original[$o.status]}
  {assign "order_status_descr" $order_status_descr scope="root"}
{/if}