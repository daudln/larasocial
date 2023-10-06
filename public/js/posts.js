$(document).ready(function () {
    function openModal() {
        $("#modal").removeClass("hidden");
        $("#modal").addClass("fade-in");
    }

    function closeModal() {
        $("#modal").addClass("hidden");
    }

    $("#openModalButton").click(openModal);

    $("#modal").on("click", ".modal-cancel-button", closeModal);

    $(document).mouseup(function (e) {
        let modalContent = $("#modal");
        if (
            !modalContent.is(e.target) &&
            modalContent.has(e.target).length === 0
        ) {
            closeModal();
        }
    });
});
