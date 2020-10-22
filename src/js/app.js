require('./bootstrap')
require('./sb-admin')

$('.btn-confirm').closest('form').on('submit', function(e) {
    if (!confirm('Apakah Anda yakin?')) {
        e.preventDefault()
    }
})