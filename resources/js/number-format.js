/** 
 > tidak perlu hidden input
 > tetap vanilla JS
 > cursor stabil
 > Livewire menerima numeric value langsung
 > reusable
 > tidak rusak saat Livewire re-render
 * 
*/

function initFormatNumberLivewire(selector = '.number') {

    const formatter = new Intl.NumberFormat('id-ID');

    document.querySelectorAll(selector).forEach(input => {

        input.addEventListener('input', function () {

            let rawValue = input.value;
            let cursorPos = input.selectionStart;

            // deteksi jika user baru mengetik koma
            let justTypedComma = rawValue[cursorPos - 1] === ',';

            let digitsBeforeCursor = rawValue
                .slice(0, cursorPos)
                .replace(/[^\d]/g, '').length;

            let value = rawValue.replace(/[^\d,]/g, '');

            let parts = value.split(',');

            if (parts.length > 2) {
                parts = [parts[0], parts.slice(1).join('')];
            }

            let integerPart = parts[0];
            let decimalPart = parts[1];

            let formattedInteger = integerPart
                ? formatter.format(integerPart)
                : '';

            if (decimalPart !== undefined) {
                decimalPart = decimalPart.slice(0, 2);
            }

            let formattedValue = decimalPart !== undefined
                ? formattedInteger + ',' + decimalPart
                : formattedInteger;

            input.value = formattedValue;

            // jika user baru saja mengetik koma
            if (justTypedComma) {
                let commaPos = formattedValue.indexOf(',');
                input.setSelectionRange(commaPos + 1, commaPos + 1);
                return;
            }

            // numeric value
            let numericValue = integerPart;

            if (decimalPart !== undefined) {
                numericValue += '.' + decimalPart;
            }

            // kirim ke livewire
            let component = input.closest('[wire\\:id]');
            if (component) {

                let componentId = component.getAttribute('wire:id');
                let model = input.dataset.model;

                Livewire.find(componentId).set(model, numericValue || null);
            }

            // perbaiki posisi cursor
            let digitCount = 0;
            let newCursor = formattedValue.length;

            for (let i = 0; i < formattedValue.length; i++) {

                if (/\d/.test(formattedValue[i])) {
                    digitCount++;
                }

                if (digitCount >= digitsBeforeCursor) {
                    newCursor = i + 1;
                    break;
                }
            }

            input.setSelectionRange(newCursor, newCursor);

        });

    });

}

document.addEventListener('DOMContentLoaded', function () {
    initFormatNumberLivewire();
});