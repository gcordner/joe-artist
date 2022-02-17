/**
 * Range Controls with counter for the Customizer
 * @package Prologe
*/

(function ($) {
    $(document).ready(function ($) {
        $('input[data-input-type]').on('input change', function () {
            var val = $(this).val();
            $(this).prev('.prologe-range-value').html(val);
            $(this).val(val);
        });
    })
})(jQuery);