<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nouveau message - AKINTEC</title>
    <style>
        body {
            font-family: 'Helvetica Neue', Arial, sans-serif;
            background-color: #f7f9fc;
            margin: 0;
            padding: 0;
            color: #333;
        }

        .container {
            max-width: 650px;
            margin: 40px auto;
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
            overflow: hidden;
        }

        .header {
            background: linear-gradient(90deg, #0056b3, #00aaff);
            color: #fff;
            text-align: center;
            padding: 25px 20px;
        }

        .header h1 {
            margin: 0;
            font-size: 22px;
            letter-spacing: 0.5px;
        }

        .content {
            padding: 30px 40px;
        }

        .content p {
            margin: 8px 0;
            line-height: 1.6;
        }

        .content strong {
            color: #0056b3;
        }

        .message {
            background-color: #f0f6ff;
            border-left: 4px solid #007bff;
            padding: 15px 20px;
            margin-top: 20px;
            border-radius: 6px;
            white-space: pre-wrap;
        }

        hr {
            border: none;
            height: 1px;
            background-color: #eee;
            margin: 25px 0;
        }

        .footer {
            background: #f4f6fa;
            color: #777;
            text-align: center;
            font-size: 13px;
            padding: 15px;
        }

        .footer a {
            color: #007bff;
            text-decoration: none;
        }

        @media (max-width: 600px) {
            .content {
                padding: 20px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>📩 Nouveau message depuis le site AKINTEC</h1>
        </div>

        <div class="content">
            <p><strong>Nom :</strong> {{ $nom }}</p>
            <p><strong>Email :</strong> {{ $email }}</p>
            <p><strong>Téléphone :</strong> {{ $phone ?? 'Non précisé' }}</p>
            <p><strong>Sujet :</strong> {{ $sujet }}</p>

            <hr>

            <p><strong>Message :</strong></p>
            <div class="message">
                {{ $msg }}
            </div>
        </div>

        <div class="footer">
            <p>Ce message a été envoyé automatiquement depuis le site <strong>AKINTEC</strong>.</p>
            <p><a href="https://akintec.fr">www.akintec.com</a></p>
        </div>
    </div>
</body>
</html>
