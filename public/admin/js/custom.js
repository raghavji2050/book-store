function showSuccessMessage(message) {
    toastr["success"](message, "Success", {
        positionClass: "toast-top-right",
        closeButton: true,
        progressBar: true,
        newestOnTop: true,
        timeOut: 5000
    });
}
function showErrorMessage(message) {
    toastr["error"](message, "Error", {
        positionClass: "toast-top-right",
        closeButton: true,
        progressBar: true,
        newestOnTop: true,
        timeOut: 5000
    });
}

$("#toastr-clear").on("click", function() {
    toastr.clear();
});
