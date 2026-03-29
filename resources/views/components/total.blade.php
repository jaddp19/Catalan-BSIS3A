<div 
    x-data 
    x-init="
        $watch('$wire.get(\'totalItems\')', value => {
            $refs.items.textContent = 'Total Items Selected: ' + (value ?? 0);
        });
        $watch('$wire.get(\'totalAmount\')', value => {
            $refs.amount.textContent = '₱' + (parseFloat(value) || 0).toFixed(2);
        });
    "
    class="md:col-span-2"
>
    <div class="pt-6 text-right text-black dark:text-white" x-ref="items">
        Total Items Selected: {{ $this->totalItems }}
    </div>

    <div class="flex justify-between items-center pt-6">
        <span class="text-lg font-semibold text-black dark:text-white">
            Total Amount:
        </span>
        <span class="text-lg font-bold text-green-600 dark:text-green-400" x-ref="amount">
            ₱{{ number_format($this->totalAmount, 2) }}
        </span>
    </div>
</div>
