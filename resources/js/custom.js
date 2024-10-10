function closeAlert(id) {
    const alert = document.getElementById(id);
    if (alert) {
        alert.style.display = "none";
    }
}

setTimeout(() => {
    const alerts = ["toast-success", "toast-warning", "toast-danger"];
    alerts.forEach((id) => {
        const alert = document.getElementById(id);
        if (alert && alert.style.display !== "none") {
            alert.style.display = "none";
        }
    });
}, 3000);

window.buscaCep = async function() {
    const cep = document.getElementById("cep").value;
    if (cep.length !== 8) {
        alert("CEP deve conter 8 caracteres!");
        return;
    }

    try {
        const response = await fetch(`https://viacep.com.br/ws/${cep}/json/`);
        const data = await response.json();

        if (data.erro) {
            alert("CEP não encontrado!");
            return;
        }

        document.getElementById("city").value = data.localidade;
    } catch (error) {
        console.error("Erro ao buscar o CEP:", error);
        alert("Erro ao buscar o CEP.");
    }
}
