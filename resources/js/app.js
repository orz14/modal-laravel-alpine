import "./bootstrap";
import Alpine from "alpinejs";

Alpine.store("modal", {
    testing: false,
});

Alpine.start();

window.Alpine = Alpine;
