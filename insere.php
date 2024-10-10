<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário Simples</title>
    <style>
        body {
            font-family: 'Comic Sans MS', sans-serif;
            background: linear-gradient(135deg, #FFDEE9, #B5FFFC); /* Gradiente suave */
            height: 100vh;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .form-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 350px;
            width: 100%;
        }

        .form-container h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            font-size: 14px;
            margin-bottom: 5px;
            display: block;
            color: #555;
        }

        .form-group input {
            width: calc(100% - 20px);
            padding: 8px 10px;
            border: 2px solid #ddd;
            border-radius: 10px;
            font-size: 14px;
            box-sizing: border-box;
            background-color: #f9f9f9;
        }

        .form-group input:focus {
            outline: none;
            border-color: #80bdff;
            background-color: #e6f7ff;
        }

        .submit-btn {
            display: block;
            width: 100%;
            padding: 10px;
            background-color: #ff9800;
            color: white;
            font-size: 16px;
            border: none;
            border-radius: 10px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .submit-btn:hover {
            background-color: #e68a00;
        }

        /* Layout para telas pequenas */
        @media (max-width: 400px) {
            .form-container {
                padding: 15px;
            }

            .form-group input {
                font-size: 13px;
            }

            .submit-btn {
                font-size: 15px;
            }
        }
    </style>
</head>
<body>

    <div class="form-container">
        <h2>Preencha seus Dados</h2>
        <form>
            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" id="nome" name="nome" placeholder="Seu nome">
            </div>
            <div class="form-group">
                <label for="dataNascimento">Data de Nascimento:</label>
                <input type="date" id="dataNascimento" name="dataNascimento">
            </div>
            <div class="form-group">
                <label for="nrProcesso">Nº Processo:</label>
                <input type="number" id="nrProcesso" name="nrProcesso" placeholder="Número de processo">
            </div>
            <div class="form-group">
                <label for="telemovel">Telemóvel:</label>
                <input type="tel" id="telemovel" name="telemovel" placeholder="Seu telemóvel">
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" placeholder="Seu email">
            </div>
            <button type="submit" class="submit-btn">Enviar</button>
        </form>
    </div>

</body>
</html>
