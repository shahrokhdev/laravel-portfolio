$(document).ready(function () {
    $(".social-icon").hover(
        function () {
            var tooltipText = $(this).data("text");
            $("#tooltipText").text(tooltipText);
        },
        function () {
            $("#tooltipText").text("");
        }
    );
    setTimeout(function () {
        $("#myAlert").alert("close");
    }, 3000);

    $("#closeButton").click(closeAlert);
});
function closeAlert() {
    $("#myAlert").alert("close");
}
