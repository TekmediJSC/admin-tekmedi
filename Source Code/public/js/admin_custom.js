$(document).ready(function () {
    $('form[class*=delete]').submit(function (event) {
        console.log(event);
        event.preventDefault();
        Swal({
            title: 'Bạn có chắc chắn muốn xóa?',
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Xóa',
            cancelButtonText: 'Đóng'
        }).then((result) => {
            if (result.value) {
                this.submit();
            }
        })
    })
});