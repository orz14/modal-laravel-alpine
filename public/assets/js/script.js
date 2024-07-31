function modalAction(modalOpen, modalClose, modalDialog) {
    $(modalOpen).click(() => {
        $(modalDialog).removeClass("invisible");
        $(modalDialog).addClass("visible");
    });

    $(modalClose).click(() => {
        $(modalDialog).removeClass("visible");
        $(modalDialog).addClass("invisible");
    });
}
