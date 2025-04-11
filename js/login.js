document.addEventListener('DOMContentLoaded', () => {
    const form = document.getElementById('formLogin');
    const mensagem = document.getElementById('mensagem');

    form.addEventListener('submit', (event) => {
        event.preventDefault();

        const formData = new FormData(form);

        fetch('login.php', {
            method: 'POST',
            body: formData
        })
        .then(response => response.text())
        .then(texto => {
            mensagem.textContent = texto;
            mensagem.style.color = texto.includes('bem-sucedido') ? 'green' : 'red';
        })
        .catch(() => {
            mensagem.textContent = 'Erro na requisição.';
            mensagem.style.color = 'red';
        });
    });
});
