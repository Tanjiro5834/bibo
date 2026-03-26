function showLaravelErrors(errors) {
    if (!errors) return;

    // Loop through the fields (e.g., 'password', 'avatar')
    Object.keys(errors).forEach(field => {
        // Loop through each error message for that field
        errors[field].forEach(message => {
            $.notify(message, {
                className: "error",
                globalPosition: "top right",
                autoHideDelay: 5000
            });
        });
    });
}