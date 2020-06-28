/**
 *
 * You can write your JS code here, DO NOT touch the default style file
 * because it will make it harder for you to update.
 *
 */

$(".form-banned-user").on("submit", function (e) {
    e.preventDefault();
    Swal.fire({
        title: "Banned This User ?",
        text: "You Won't Be Able To Revert This!",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#d33",
        cancelButtonColor: "#3085d6",
        confirmButtonText: "Yes, Banned !",
    }).then((result) => {
        if (result.value) {
            return this.submit();
        }
    });
});

$(".form-banned-class").on("submit", function (e) {
    e.preventDefault();
    Swal.fire({
        title: "Banned This Class ?",
        text: "You Won't Be Able To Revert This!",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#d33",
        cancelButtonColor: "#3085d6",
        confirmButtonText: "Yes, Banned !",
    }).then((result) => {
        if (result.value) {
            return this.submit();
        }
    });
});

$(".form-change-class").on("submit", function (e) {
    e.preventDefault();
    Swal.fire({
        title: "Change This Class ?",
        text: "You Won't Be Able To Revert This!",
        icon: "info",
        showCancelButton: true,
        confirmButtonColor: "#47c363",
        cancelButtonColor: "#d33",
        confirmButtonText: "Yes, Change !",
    }).then((result) => {
        if (result.value) {
            return this.submit();
        }
    });
});

$(".form-banned-spp").on("submit", function (e) {
    e.preventDefault();
    Swal.fire({
        title: "Banned This Spp Payment ?",
        text: "You Won't Be Able To Revert This!",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#d33",
        cancelButtonColor: "#3085d6",
        confirmButtonText: "Yes, Banned !",
    }).then((result) => {
        if (result.value) {
            return this.submit();
        }
    });
});

$(".form-change-spp").on("submit", function (e) {
    e.preventDefault();
    Swal.fire({
        title: "Change This Spp Payment ?",
        text: "You Won't Be Able To Revert This!",
        icon: "info",
        showCancelButton: true,
        confirmButtonColor: "#47c363",
        cancelButtonColor: "#d33",
        confirmButtonText: "Yes, Change !",
    }).then((result) => {
        if (result.value) {
            return this.submit();
        }
    });
});

$(".form-banned-student").on("submit", function (e) {
    e.preventDefault();
    Swal.fire({
        title: "Banned This Student ?",
        text: "You Won't Be Able To Revert This!",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#d33",
        cancelButtonColor: "#3085d6",
        confirmButtonText: "Yes, Banned !",
    }).then((result) => {
        if (result.value) {
            return this.submit();
        }
    });
});

$(".form-change-student").on("submit", function (e) {
    e.preventDefault();
    Swal.fire({
        title: "Change This Student ?",
        text: "You Won't Be Able To Revert This!",
        icon: "info",
        showCancelButton: true,
        confirmButtonColor: "#47c363",
        cancelButtonColor: "#d33",
        confirmButtonText: "Yes, Change !",
    }).then((result) => {
        if (result.value) {
            return this.submit();
        }
    });
});

$(".form-payment-student").on("submit", function (e) {
    e.preventDefault();
    Swal.fire({
        title: "Are You Will Make A Payment ?",
        text: "You Won't Be Able To Revert This!",
        icon: "info",
        showCancelButton: true,
        confirmButtonColor: "#47c363",
        cancelButtonColor: "#3085d6",
        confirmButtonText: "Yes, Pay !",
    }).then((result) => {
        if (result.value) {
            return this.submit();
        }
    });
});

$(".form-clear-payment").on("submit", function (e) {
    e.preventDefault();
    Swal.fire({
        title: "Clear Payment, For This Student ?",
        text: "You Won't Be Able To Revert This!",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#ffa426",
        cancelButtonColor: "#3085d6",
        confirmButtonText: "Yes, Clear !",
    }).then((result) => {
        if (result.value) {
            return this.submit();
        }
    });
});

$(".form-delete-payment-detail").on("submit", function (e) {
    e.preventDefault();
    Swal.fire({
        title: "Delete This Spp Payment ?",
        text: "You Won't Be Able To Revert This!",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#d33",
        cancelButtonColor: "#3085d6",
        confirmButtonText: "Yes, Deleted !",
    }).then((result) => {
        if (result.value) {
            return this.submit();
        }
    });
});

// $("body").niceScroll({
//     cursorcolor: "#6777ef",
//     cursorwidth: "5px",
//     cursorborder: "none",
// });
