function closeModal() {
    $("#modal").removeClass("fade-in");
    $("#modal").addClass("fade-out");
    setTimeout(function () {
        $("#modal").addClass("hidden");
        $("#modal").removeClass("fade-out");
    }, 300);
}
$(document).click(function (e) {
    // logic here
});
