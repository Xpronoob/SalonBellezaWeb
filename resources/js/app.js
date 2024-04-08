import "./bootstrap";
import "./template";

import.meta.glob(["../images/**"]);
import.meta.glob(["../assets/images/**"]);
import.meta.glob(["/assets/images/**"]);
import.meta.glob(["./assets/images/**"]);

import Alpine from "alpinejs";

window.Alpine = Alpine;

Alpine.start();
