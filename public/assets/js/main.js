const pantalla = document.querySelector(".pantalla");
const botones = document.querySelectorAll(".btn");

botones.forEach(boton => {
    boton.addEventListener("click", () => {
        const botonApretado = boton.textContent;

        // Verifica si se ha hecho clic en un botón de porcentaje
        if (boton.id.startsWith("btn-")) {
            const porcentaje = parseInt(botonApretado.replace("%", "").trim()) / 100;
            const numero = parseFloat(pantalla.textContent);
            const resultado = numero * porcentaje;
            pantalla.textContent = resultado.toFixed(2); // Ajusta el resultado a 2 decimales
            return;
        }

        if (boton.id === "c") {
            pantalla.textContent = "0";
            return;
        }

        if (boton.id === "borrar") {
            if (pantalla.textContent.length === 1 || pantalla.textContent === "Vuelve a intentarlo, error!") {
                pantalla.textContent = "0";
            } else {
                pantalla.textContent = pantalla.textContent.slice(0, -1);
            }
            return;
        }

        if (boton.id === "igual") {
            try {
                pantalla.textContent = eval(pantalla.textContent);
            } catch {
                pantalla.textContent = "Error!";
            }
            return;
        }

        if (pantalla.textContent === "0" || pantalla.textContent === "Vuelve a intentarlo, error!") {
            pantalla.textContent = botonApretado;
        } else {
            pantalla.textContent += botonApretado;
        }
    })
})
