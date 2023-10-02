document.addEventListener("DOMContentLoaded", function() {
    const selectAllCheckbox = document.getElementById("select-all");
    const checkboxItems = document.querySelectorAll(".checkbox-item");

    selectAllCheckbox.addEventListener("change", function() {
        checkboxItems.forEach(function(item) {
            item.checked = selectAllCheckbox.checked;
        });
    });
});