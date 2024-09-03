// casasom_wp_auth.js
document.addEventListener('DOMContentLoaded', function() {
    var tokenEndpoint = 'https://fatsus.com.br/wp-json/jwt-auth/v1/token'; // Endpoint para autenticação JWT

    function handleLoginFormSubmission() {
        var loginForm = document.querySelector('.elementor-login'); // Seletor para o formulário de login do Elementor
        if (loginForm) {
            loginForm.addEventListener('submit', function(event) {
                event.preventDefault(); // Impede o envio padrão do formulário

                var formData = new FormData(loginForm);
                var username = formData.get('log');
                var password = formData.get('pwd');
                var redirectUrl = formData.get('redirect_to') || '/'; // URL para redirecionar após o login

                // Faz a requisição para a API externa
                fetch(tokenEndpoint, {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/x-www-form-urlencoded',
                    },
                    body: new URLSearchParams({
                        'username': username,
                        'password': password
                    })
                })
                .then(response => response.json())
                .then(data => {
                    if (data.token) {
                        // Armazena os dados no localStorage
                        localStorage.setItem('auth', JSON.stringify(data));

                        // Após armazenar o token, realiza o login padrão do WordPress
                        // Cria um campo oculto para armazenar o token no formulário
                        var tokenInput = document.createElement('input');
                        tokenInput.type = 'hidden';
                        tokenInput.name = 'auth_token';
                        tokenInput.value = data.token;
                        loginForm.appendChild(tokenInput);

                        // Em seguida, submete o formulário padrão
                        loginForm.submit();
                    } else {
                        // Exibe mensagem de erro, se necessário
                        var errorElement = document.createElement('div');
                        errorElement.className = 'login-error';
                        errorElement.textContent = 'Login failed. Please try again.';
                        loginForm.insertAdjacentElement('beforebegin', errorElement);
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                    var errorElement = document.createElement('div');
                    errorElement.className = 'login-error';
                    errorElement.textContent = 'An error occurred. Please try again later.';
                    loginForm.insertAdjacentElement('beforebegin', errorElement);
                });
            });
        } else {
            console.log('Formulário de login não encontrado');
        }
    }

    // Adiciona o listener para o formulário de login assim que o DOM estiver carregado
    handleLoginFormSubmission();
});
