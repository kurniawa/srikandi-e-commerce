<input type="text" id="currency" placeholder="Contoh: 1.234,56" class="currency border border-slate-300 rounded p-1">
<input type="hidden" id="currency-formatted">

<script>
const input = document.getElementById('currency');
const formatter = new Intl.NumberFormat('id-ID');

input.addEventListener('input', function(e) {
    let value = e.target.value;
    let cursorPos = e.target.selectionStart;

    // Hitung jumlah digit sebelum cursor
    let digitsBeforeCursor = value.slice(0, cursorPos).replace(/[^\d]/g, '').length;

    // Bersihkan karakter selain angka dan koma
    value = value.replace(/[^\d,]/g, '');

    // Pisahkan integer dan decimal
    let parts = value.split(',');
    if (parts.length > 2) {
        parts = [parts[0], parts.slice(1).join('')];
    }

    let integerPart = parts[0];
    let decimalPart = parts[1];

    // Format integer
    let formattedInteger = integerPart
        ? formatter.format(integerPart)
        : '';

    // Batasi decimal 2 digit
    if (decimalPart !== undefined) {
        decimalPart = decimalPart.slice(0, 2);
    }

    let newValue = decimalPart !== undefined
        ? formattedInteger + ',' + decimalPart
        : formattedInteger;

    e.target.value = newValue;

    // Cari posisi cursor baru
    let digitCount = 0;
    let newCursor = 0;

    for (let i = 0; i < newValue.length; i++) {
        if (/\d/.test(newValue[i])) {
            digitCount++;
        }
        if (digitCount >= digitsBeforeCursor) {
            newCursor = i + 1;
            break;
        }
    }

    e.target.setSelectionRange(newCursor, newCursor);

    parseRupiah(newValue);
});

function parseRupiah(value) {
    return parseFloat(
        value.replace(/\./g, '').replace(',', '.')
    );
}
</script>