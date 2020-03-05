function PWerror(vall) {

    if (vall == "free.png") {
        const swalWithBootstrapButtons = Swal.mixin({
            customClass: {
                confirmButton: 'btn btn-success',
                cancelButton: 'btn btn-danger'
            },
            buttonsStyling: false
        })

        swalWithBootstrapButtons.fire({
            title: 'Do you want to reserve?',
            text: "The first two hours are free of charge!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Yes',
            cancelButtonText: 'No',
            reverseButtons: true
        }).then((result) => {
            if (result.value) {
                swalWithBootstrapButtons.fire(
                    'Reserving. . .',
                    'Press OK to Enter your Time Duration.',
                    'info'

                )
                var delayInMilliseconds = 4000; //1 second

                setTimeout(function() {
                    window.location.href = 'reservation.php';
                }, delayInMilliseconds);
            } else if (
                /* Read more about handling dismissals below */
                result.dismiss === Swal.DismissReason.cancel
            ) {
                swalWithBootstrapButtons.fire(
                    ' Booking Cancelled!',
                    'ThankYou!!!',
                    'error'
                )
            }
        })
    }
}